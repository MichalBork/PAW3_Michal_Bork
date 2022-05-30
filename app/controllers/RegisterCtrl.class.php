<?php


namespace app\controllers;

use app\forms\LoginForm;
use app\forms\RegisterForm;
use core\App;
use core\ParamUtils;
use core\RoleUtils;
use core\Utils;
use PDOException;

require_once('../vendor/autoload.php');

class RegisterCtrl
{

    private $form;

    public function __construct()
    {
        //stworzenie potrzebnych obiektów
        $this->form = new RegisterForm();
    }

    public function validate()
    {
        $this->form->imie = ParamUtils::getFromRequest('imie');
        $this->form->nazwisko = ParamUtils::getFromRequest('nazwisko');
        $this->form->pesel = ParamUtils::getFromRequest('pesel');
        $this->form->login = ParamUtils::getFromRequest('login');
        $this->form->haslo = ParamUtils::getFromRequest('haslo');
        $this->form->haslorepeat = ParamUtils::getFromRequest('haslorepeat');
        $this->form->miejscowosc = ParamUtils::getFromRequest('miejscowosc');
        $this->form->ulica = ParamUtils::getFromRequest('ulica');
        $this->form->nrdomu = ParamUtils::getFromRequest('nrdomu');
        $this->form->nrmieszkania = ParamUtils::getFromRequest('nrmieszkania');
        $this->form->kodpocztowy = ParamUtils::getFromRequest('kodpocztowy');


        //nie ma sensu walidować dalej, gdy brak parametrów
        if (!isset($this->form->login)) {
            return false;
        }

        // sprawdzenie, czy potrzebne wartości zostały przekazane
        if (empty($this->form->imie)) {
            Utils::addErrorMessage('Nie podano imienia');
        }
        if (empty($this->form->nazwisko)) {
            Utils::addErrorMessage('Nie podano nazwiska');
        }
        if (empty($this->form->pesel)) {
            Utils::addErrorMessage('Nie podano peselu');
        }
        if (empty($this->form->login)) {
            Utils::addErrorMessage('Nie podano loginu');
        }
        if (empty($this->form->haslo)) {
            Utils::addErrorMessage('Nie podano hasła');
        }
        if (empty($this->form->haslorepeat)) {
            Utils::addErrorMessage('Nie powtorzono hasla');
        }
        if (empty($this->form->miejscowosc)) {
            Utils::addErrorMessage('Nie podano adresu');
        }
        if (empty($this->form->ulica)) {
            Utils::addErrorMessage('Nie podano adresu');
        }
        if (empty($this->form->nrdomu)) {
            Utils::addErrorMessage('Nie podano adresu');
        }
        if (empty($this->form->kodpocztowy)) {
            Utils::addErrorMessage('Nie podano adresu');
        }
        //Dodatkowe sprawdzanie
        if (strlen($this->form->pesel) > 11) {
            Utils::addErrorMessage('Nie poprawny pesel');
        }

        if (!is_numeric($this->form->pesel)) {
            Utils::addErrorMessage('Nie poprawny pesel');
        }


        if (strlen($this->form->haslo) > 20) {
            Utils::addErrorMessage('Osiagnieto limit znakow hasla');
        }
        if (strlen($this->form->login) > 20) {
            Utils::addErrorMessage('Osiagnieto limit znakow loginu');
        }

        if (strcmp($this->form->haslo, $this->form->haslorepeat)) {
            Utils::addErrorMessage('Hasla roznia sie od siebie');
        }


        //nie ma sensu walidować dalej, gdy brak wartości
        if (App::getMessages()->isError()) {
            return false;
        }


        try {
            App::getDB()->insert(
                'osoby',
                [
                    'imie' => $this->form->imie,
                    'nazwisko' => $this->form->nazwisko,
                    'pesel' => $this->form->pesel,
                    'login' => $this->form->login,
                    'haslo' => $this->form->haslo,
                    'miejscowosc' => $this->form->miejscowosc,
                    'ulica' => $this->form->ulica,
                    'nrdomu' => $this->form->nrdomu,
                    'nrmieszkania' => $this->form->nrmieszkania,
                    'kodpocztowy' => $this->form->kodpocztowy
                ]
            );
        } catch (PDOException $e) {
            if ($e->errorInfo[1] == 1062) {
                Utils::addErrorMessage('Podany login juz istnieje');
            }
        }
        return !App::getMessages()->isError();
    }

    public function action_register()
    {
        if ($this->validate()) {
            //zalogowany => przekieruj na główną akcję (z przekazaniem messages przez sesję)

            App::getRouter()->redirectTo("loginAfterRegister");//DO ZMIANY

        } else {
            //niezalogowany => pozostań na stronie logowania
            $this->generateView();
        }
    }


    public function generateView()
    {
        App::getSmarty()->display('FormRegister.tpl');
    }

}