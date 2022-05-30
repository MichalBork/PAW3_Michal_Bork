<?php


namespace app\controllers;


use core\App;
use core\Messages;
use core\RoleUtils;
use core\Utils;

require_once('../vendor/autoload.php');

class MainPageCtrl
{

    public function action_LandingPageLoad()
    {
        App::getSmarty()->display("HomePage.tpl");
    }

    public function action_adminDash()
    {
        App::getSmarty()->display("AdminDash.tpl");
    }


    public function action_HomePageAfterLogin()
    {
        App::getSmarty()->display("HomePageAfterLogin.tpl");
    }

    public function action_LoadWarGames()
    {
        App::getSmarty()->display("WarGames.tpl");
    }


    public function action_GoToLoginPage()
    {
        session_destroy();

        App::getSmarty()->display("FormLogin.tpl");
    }


}