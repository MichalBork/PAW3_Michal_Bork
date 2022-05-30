<?php


namespace app\controllers;


use app\forms\BetForm;
use app\transfer\MessageForUserProfile;
use core\App;
use core\ParamUtils;
use core\SessionUtils;
use core\Utils;


class BetPrizeCtrl
{

    public function __construct()
    {
        //stworzenie potrzebnych obiektów
        $this->money = new ProfileCtrl();
        $this->betform = new BetForm();
    }

    public function action_beforeStartStatus()
    {
        $this->payment = ParamUtils::getFromRequest("id");
//dd($this->payment);
        $this->generateView();
    }


    public function validateForm()
    {
        $this->aviblyMoneyInfo = SessionUtils::load("aviblyMoneyInfo", true);
        $this->betform->player = ParamUtils::getFromRequest('player');
        $this->betform->money = ParamUtils::getFromRequest('money');
        $this->betform->score = ParamUtils::getFromRequest('score');


        if (!isset($this->betform->player)) {
            Utils::addErrorMessage('blad');
            return false;
        }


        if ($this->betform->money > $this->aviblyMoneyInfo[array_key_first($this->aviblyMoneyInfo)]['dostepnakwota']) {
            Utils::addErrorMessage('Bledna kwota');
            return false;
        }

        if ($this->betform->player != 'user' && $this->betform->player != 'dealer') {
            Utils::addErrorMessage('Bledny gracz');
            return false;
        }

        if ($this->betform->score != 'user' && $this->betform->score != 'dealer') {
            Utils::addErrorMessage('Bledny gracz');
            return false;
        }


        return !App::getMessages()->isError();
    }


    public function action_chooseTheWinner()
    {
        $this->countsteps = 2;
        SessionUtils::store('steps', $this->countsteps);
        $this->aviblyMoneyInfo = SessionUtils::load("aviblyMoneyInfo", true);
        $this->formlogin = SessionUtils::load("currentUser", true);

        if ($this->validateForm()) {
            if (($this->betform->score == 'gracz' && $this->betform->player == 'gracz') || ($this->betform->score == 'dealer' && $this->betform->player == 'dealer')) {
                $this->aviblyMoneyInfo = floatval(
                    $this->aviblyMoneyInfo[array_key_first($this->aviblyMoneyInfo)]['dostepnakwota']
                );
                $this->betform->money = floatval($this->betform->money);
                $this->aviblyMoneyInfo = $this->betform->money + $this->aviblyMoneyInfo;
                App::getDB()->update(
                    'osoby',
                    ['dostepnakwota' => $this->aviblyMoneyInfo],
                    ['login' => $this->formlogin]
                );
            } else {
                $this->aviblyMoneyInfo = floatval(
                    $this->aviblyMoneyInfo[array_key_first($this->aviblyMoneyInfo)]['dostepnakwota']
                );
                $this->betform->money = floatval($this->betform->money);
                $this->aviblyMoneyInfo = $this->aviblyMoneyInfo - $this->betform->money;
                App::getDB()->update(
                    'osoby',
                    ['dostepnakwota' => $this->aviblyMoneyInfo],
                    ['login' => $this->formlogin]
                );
            }

            App::getRouter()->forwardTo("beforeStartStatus");//DO ZMIANY
        } else {
            App::getRouter()->forwardTo("beforeStartStatus");//DO ZMIANY
        }
    }


    public function generateView()
    {
        $this->money->moneyInfo();
        $this->aviblyMoneyInfo = SessionUtils::load("aviblyMoneyInfo", true);

        App::getSmarty()->assign(
            "money",
            $this->aviblyMoneyInfo[array_key_first(
                $this->aviblyMoneyInfo
            )]
        );


        App::getSmarty()->display("WarGames.tpl");
    }
}