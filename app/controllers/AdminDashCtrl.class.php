<?php


namespace app\controllers;


use core\App;
use core\ParamUtils;
use core\Utils;

require_once('../vendor/autoload.php');

class AdminDashCtrl
{

    public function action_personList()
    {
        $this->pagination('osoby');
        try {
            $this->records = App::getDB()->select(
                "osoby",
                [
                    "idosoby",
                    "imie",
                    "nazwisko",
                    "pesel",
                    "login",
                    "haslo",
                    "miejscowosc",
                    "ulica",
                    "nrdomu",
                    "nrmieszkania",
                    "kodpocztowy",
                    "dostepnakwota"
                ],
                ["LIMIT" => [$this->offset, $this->no_of_records_per_page]]
            );
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug) {
                Utils::addErrorMessage($e->getMessage());
            }
        }
        App::getSmarty()->assign('total_pages', $this->total_pages);
        App::getSmarty()->assign('pageno', $this->pageno);
        App::getSmarty()->assign('people', $this->records);  // lista rekordów z bazy danych
        App::getSmarty()->display('AdminDash_osoby.tpl');
    }


    public function action_personListRemoveRecord()
    {
        $this->idosoby = ParamUtils::getFromRequest('idosoby');
        try {
            App::getDB()->delete('role_osoby_katalog', ["idosoby" => $this->idosoby]);
            App::getDB()->delete('osoby', ["idosoby" => $this->idosoby]);
        } catch (\PDOException $e) {
            if ($e->errorInfo[1] == 1451) {
                Utils::addErrorMessage('Uzytkownik posiada dane finansowe, dostep do systemu zostal wylaczony');
            }
        }


        App::getRouter()->forwardTo("personList");//DO ZMIANY

    }


    public function action_roleListRemoveRecord()
    {
        $this->idosoby = ParamUtils::getFromRequest('idosoby');
        $this->idroli = ParamUtils::getFromRequest('idroli');
        try {
            App::getDB()->delete('role_osoby_katalog', ["idosoby" => $this->idosoby, "idroli" => $this->idroli]);
        } catch (\PDOException $e) {
            if ($e->errorInfo[1] == 1451) {
                Utils::addErrorMessage('Uzytkownik posiada dane finansowe, dostep do systemu zostal wylaczony');
            }
        }


        App::getRouter()->forwardTo("roleList");//DO ZMIANY

    }


    public function pagination($table)
    {
        if (isset($_REQUEST['pageno'])) {
            $this->pageno = ParamUtils::getFromRequest('pageno');
        } else {
            $this->pageno = 1;
        }

        $this->pageno = intval($this->pageno);
        $this->no_of_records_per_page = 10;
        $this->offset = ($this->pageno - 1) * $this->no_of_records_per_page;


        $total_rows = App::getDb()->count($table);

        return $this->total_pages = ceil($total_rows / $this->no_of_records_per_page);
    }


    public function action_financialList()
    {
        $this->pagination('finanse');

        try {
            $this->records = App::getDB()->select(
                "finanse",
                [
                    "idtransakcji",
                    "kwota",
                    "operacja",
                    "dataoperacji",
                    "login"
                ],
                ["LIMIT" => [$this->offset, $this->no_of_records_per_page]]
            );
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug) {
                Utils::addErrorMessage($e->getMessage());
            }
        }


        App::getSmarty()->assign('total_pages', $this->total_pages);
        App::getSmarty()->assign('pageno', $this->pageno);
        App::getSmarty()->assign('people', $this->records);  // lista rekordów z bazy danych
        App::getSmarty()->display('AdminDash_finanse.tpl');
    }


    public function action_roleList()
    {
        $this->pagination('role_osoby_katalog');
        try {
            $this->records = App::getDB()->select(
                "role_osoby_katalog",
                [
                    "[<]osoby" => ["idosoby" => "idosoby"],
                    "[>]role" => ["idroli" => "idroli"]
                ],
                [
                    "role_osoby_katalog.idosoby",
                    "role_osoby_katalog.idroli",
                    "login",
                    "nazwaroli",

                ],
                ["LIMIT" => [$this->offset, $this->no_of_records_per_page]]
            );
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug) {
                Utils::addErrorMessage($e->getMessage());
            }
        }
        App::getSmarty()->assign('total_pages', $this->total_pages);
        App::getSmarty()->assign('pageno', $this->pageno);

        App::getSmarty()->assign('people', $this->records);  // lista rekordów z bazy danych
        App::getSmarty()->display('AdminDash_roleKatalog.tpl');
    }


}