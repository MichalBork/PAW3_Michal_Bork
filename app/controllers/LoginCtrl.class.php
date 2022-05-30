<?php


namespace app\controllers;

use app\forms\LoginForm;
use core\SessionUtils;
use core\App;
use core\ParamUtils;
use core\RoleUtils;
use core\Utils;

require_once('../vendor/autoload.php');

class LoginCtrl
{

    private $form;

    public function __construct()
    {
        //stworzenie potrzebnych obiektów
        $this->form = new LoginForm();
    }


    public function validate()
    {
        $this->form->login = ParamUtils::getFromRequest('login');
        $this->form->password = ParamUtils::getFromRequest('password');

        //nie ma sensu walidować dalej, gdy brak parametrów
        if (!isset($this->form->login)) {
            return false;
        }

        // sprawdzenie, czy potrzebne wartości zostały przekazane
        if (empty($this->form->login)) {
            Utils::addErrorMessage('Nie podano loginu');
        }
        if (empty($this->form->password)) {
            Utils::addErrorMessage('Nie podano hasła');
        }

        //nie ma sensu walidować dalej, gdy brak wartości
        if (App::getMessages()->isError()) {
            return false;
        }

        // sprawdzenie, czy dane logowania poprawne
        $this->form->passwordfromdatabase = App::getDB()->select("osoby", ["haslo"], ["login" => $this->form->login]);


        if ($this->form->passwordfromdatabase[array_key_first(
                $this->form->passwordfromdatabase
            )]['haslo'] == $this->form->password) {
            RoleUtils::addRoleFromDatabase($this->form->login);
        } else {
            Utils::addErrorMessage('Niepoprawny login lub hasło');
        }

        SessionUtils::store('currentUser', $this->form->login);
        return !App::getMessages()->isError();
    }


    public function action_loginAfterRegister()
    {
        Utils::addInfoMessage('Zaloguj sie w celu zakonczenia rejestowania');

        //niezalogowany => pozostań na stronie logowania
        $this->generateView();
    }


    public function action_login()
    {
        if ($this->validate()) {
            //zalogowany => przekieruj na główną akcję (z przekazaniem messages przez sesję)

            App::getRouter()->redirectTo("HomePageAfterLogin");//DO ZMIANY
        } else {
            //niezalogowany => pozostań na stronie logowania
            $this->generateView();
        }
    }

    public function action_logout()
    {
        // 1. zakończenie sesji
        SessionUtils::remove('currentUser');
        session_destroy();

        // 2. idź na stronę główną - system automatycznie przekieruje do strony logowania
        App::getRouter()->redirectTo('LandingPageLoad');
    }

    public function generateView()
    {
        App::getSmarty()->display('FormLogin.tpl');
    }

}

