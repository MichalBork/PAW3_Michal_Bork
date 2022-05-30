<?php


namespace app\controllers;

use app\transfer\MessageForUserProfile;
use app\forms\LoginForm;
use app\forms\ProfileForm;
use core\App;
use core\Message;
use core\SessionUtils;
use core\ParamUtils;
use core\RoleUtils;
use core\Utils;
use PDOException;
use Smarty;

require_once("../vendor/autoload.php");


class ProfileCtrl
{


    private $form; //dane formularza

    public function __construct()
    {
        //stworzenie potrzebnych obiektów
        $this->form = new ProfileForm();
        $this->infoanderror = new MessageForUserProfile();
    }

    public function action_showdescriptionforuser()
    {
        if (isset($_SESSION['currentUser'])) {
            $this->formlogin = SessionUtils::load("currentUser", true);
            $this->form->description = App::getDB()->select(
                "osoby",
                [
                    "imie",
                    "nazwisko",
                    "pesel",
                    "haslo",
                    "miejscowosc",
                    "ulica",
                    "nrdomu",
                    "nrmieszkania",
                    "kodpocztowy"
                ]
                ,
                ["login" => $this->formlogin]
            );
            $this->moneyInfo();

            SessionUtils::store('personal', $this->form->description);
            $this->generateView();
        }
    }


    // Walidacja danych przed zapisem (nowe dane lub edycja).
    public function validateSave()
    {
        //0. Pobranie parametrów z walidacją


        $this->form->imie = ParamUtils::getFromRequest("imie");
        $this->form->nazwisko = ParamUtils::getFromRequest("nazwisko");
        $this->form->pesel = ParamUtils::getFromRequest("pesel");
        $this->form->miejscowosc = ParamUtils::getFromRequest("miejscowosc");
        $this->form->ulica = ParamUtils::getFromRequest("ulica");

        $this->form->nrdomu = ParamUtils::getFromRequest("nrdomu");
        $this->form->nrmieszkania = ParamUtils::getFromRequest("nrmieszkania");
        $this->form->kodpocztowy = ParamUtils::getFromRequest("kodpocztowy");


        //nie ma sensu walidować dalej, gdy brak parametrów


        // sprawdzenie, czy potrzebne wartości zostały przekazane
        if (empty($this->form->imie)) {
            Utils::addErrorMessage("Nie podano imienia");
        }
        if (empty($this->form->nazwisko)) {
            Utils::addErrorMessage("Nie podano nazwiska");
        }
        if (empty($this->form->pesel)) {
            Utils::addErrorMessage("Nie podano peselu");
        }
        if (empty($this->form->ulica)) {
            Utils::addErrorMessage("Nie podano adresu");
        }

        if (empty($this->form->nrdomu)) {
            Utils::addErrorMessage("Nie podano adresu");
        }
        if (empty($this->form->miejscowosc)) {
            Utils::addErrorMessage("Nie podano adresu");
        }
        if (empty($this->form->kodpocztowy)) {
            Utils::addErrorMessage("Nie podano adresu");
        }
        //Dodatkowe sprawdzanie
        if (strlen($this->form->pesel) > 11) {
            Utils::addErrorMessage("Nie poprawny pesel");
        }


        //nie ma sensu walidować dalej, gdy brak wartości
        if (App::getMessages()->isError()) {
            return false;
        }

        return !App::getMessages()->isError();
    }


    //validacja danych przed wyswietleniem do edycji
    public function validateEdit()
    {
        //pobierz parametry na potrzeby wyswietlenia danych do edycji
        //z widoku listy osób (parametr jest wymagany)
        $this->form->id = ParamUtils::getFromCleanURL(1, true, "Błędne wywołanie aplikacji");
        return !App::getMessages()->isError();
    }


    //wysiweltenie rekordu do edycji wskazanego parametrem "id"
    public function action_personEdit()
    {
        $this->formlogin = SessionUtils::load("currentUser", true);


        if ($this->validateSave()) {
            // 1. walidacja id osoby do edycji

            App::getDB()->update(
                "osoby",
                [
                    "imie" => $this->form->imie,
                    "nazwisko" => $this->form->nazwisko,
                    "pesel" => $this->form->pesel,
                    "miejscowosc" => $this->form->miejscowosc,
                    "ulica" => $this->form->ulica,
                    "nrdomu" => $this->form->nrdomu,
                    "nrmieszkania" => $this->form->nrmieszkania,
                    "kodpocztowy" => $this->form->kodpocztowy
                ],
                ["login" => $this->formlogin]
            );

            Utils::addInfoMessage('Pomyślnie zapisano rekord');
            $this->generateView();//DO ZMIANY
        } else {
            Utils::addErrorMessage("Wystapil blad");

            $this->generateView();
        }
        // 3. Wygenerowanie widoku

    }

    public function moneyInfo()
    {
        $this->formlogin = SessionUtils::load("currentUser", true);
        $this->moneyInfo = App::getDB()->select(
            "osoby",
            [
                "dostepnakwota"
            ]
            ,
            ["login" => $this->formlogin]
        );

        SessionUtils::store('aviblyMoneyInfo', $this->moneyInfo);
    }

    public function validateInsertMoney()
    {
        $this->form->payment = ParamUtils::getFromRequest("wplata");

        if (!isset($this->form->payment)) {
            return false;
        }

        if (!is_numeric($this->form->payment)) {
            Utils::addErrorMessage('Nie poprawna kwota');
            return false;
        }
        if ($this->form->payment <= 0) {
            Utils::addErrorMessage('Nie poprawna kwota');
            return false;
        }

        return !App::getMessages()->isError();
    }


    public function validateWithdraw()
    {
        $this->form->payment = ParamUtils::getFromRequest("wyplata");
        $this->aviblyMoneyInfo = SessionUtils::load('aviblyMoneyInfo', true);

        if (!isset($this->form->payment)) {
            return false;
        }

        if (!is_numeric($this->form->payment)) {
            Utils::addErrorMessage('Nie poprawna kwota');
            return false;
        }
        if ($this->form->payment <= 0) {
            Utils::addErrorMessage('Nie poprawna kwota');
            return false;
        }

        if ($this->form->payment > $this->aviblyMoneyInfo[array_key_first($this->aviblyMoneyInfo)]['dostepnakwota']) {
            Utils::addErrorMessage('Nie poprawna kwota');
            return false;
        }

        return !App::getMessages()->isError();
    }


    public function action_moneyWithdraw()
    {
        $this->aviblyMoneyInfo = SessionUtils::load('aviblyMoneyInfo', true);
        $this->formlogin = SessionUtils::load("currentUser", true);

        if ($this->validateWithdraw()) {
            $this->aviblyMoneyInfo = floatval(
                $this->aviblyMoneyInfo[array_key_first($this->aviblyMoneyInfo)]['dostepnakwota']
            );
            $this->aviblyMoneyInfo = $this->aviblyMoneyInfo - $this->form->payment;

            $d = strtotime("now");
            App::getDB()->insert(
                'finanse',
                [
                    "kwota" => $this->form->payment,
                    "login" => $this->formlogin,
                    "operacja" => 'wyplata',
                    "dataoperacji" => date("Y-m-d H:i:s", $d),

                ]
            );

            App::getDB()->update('osoby', ['dostepnakwota' => $this->aviblyMoneyInfo], ['login' => $this->formlogin]);
            App::getRouter()->redirectTo("showdescriptionforuser");//DO ZMIANY
        } else {
            Utils::addErrorMessage('blad');
            $this->generateView();
        }
    }


    public function action_insertMoney()
    {
        $this->formlogin = SessionUtils::load("currentUser", true);

        $this->aviblyMoneyInfo = SessionUtils::load("aviblyMoneyInfo", true);

        if ($this->validateInsertMoney()) {
            $d = strtotime("now");
            App::getDB()->insert(
                'finanse',
                [
                    "kwota" => $this->form->payment,
                    "login" => $this->formlogin,
                    "operacja" => 'wplata',
                    "dataoperacji" => date("Y-m-d H:i:s", $d),

                ]
            );
            $this->aviblyMoneyInfo = floatval(
                $this->aviblyMoneyInfo[array_key_first($this->aviblyMoneyInfo)]['dostepnakwota']
            );
            $this->form->payment = floatval($this->form->payment);
            $this->newinsert = $this->form->payment + $this->aviblyMoneyInfo;

            App::getDB()->update('osoby', ['dostepnakwota' => $this->newinsert], ['login' => $this->formlogin]);

            Utils::addInfoMessage('Sukces');
            App::getRouter()->redirectTo("showdescriptionforuser");//DO ZMIANY
        } else {
            Utils::addErrorMessage('blad');
            $this->generateView();
        }
    }

    public function generateView()
    {
        $this->formlogin = SessionUtils::load("currentUser", true);
        $this->form->description = SessionUtils::load("personal", true);
        $this->aviblyMoneyInfo = SessionUtils::load("aviblyMoneyInfo", true);


        App::getSmarty()->assign(
            "imie",
            $this->form->description[array_key_first(
                $this->form->description
            )]
        );

        App::getSmarty()->assign(
            "money",
            $this->aviblyMoneyInfo[array_key_first(
                $this->aviblyMoneyInfo
            )]
        );

        App::getSmarty()->assign(
            "login",
            $this->formlogin

        );

        App::getSmarty()->display("ProfileSite.tpl");
    }


}