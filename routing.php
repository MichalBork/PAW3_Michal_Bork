<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\SessionUtils;
use core\RoleUtils;


App::getRouter()->setDefaultRoute('LandingPageLoad'); #default action


App::getRouter()->setLoginRoute('login'); #action to forward if no permissions

Utils::addRoute('LandingPageLoad', 'MainPageCtrl');
Utils::addRoute('GoToLoginPage', 'MainPageCtrl');
Utils::addRoute('adminDash', 'MainPageCtrl', ['ADMIN']);

Utils::addRoute('login', 'LoginCtrl');
Utils::addRoute('logout', 'LoginCtrl');
Utils::addRoute('personList', 'AdminDashCtrl', ['ADMIN']);
Utils::addRoute('financialList', 'AdminDashCtrl', ['ADMIN']);
Utils::addRoute('roleListRemoveRecord', 'AdminDashCtrl', ['ADMIN']);
Utils::addRoute('personListRemoveRecord', 'AdminDashCtrl', ['ADMIN']);
Utils::addRoute('roleList', 'AdminDashCtrl', ['ADMIN']);
Utils::addRoute('HomePageAfterLogin', 'MainPageCtrl', ['GRACZ', 'ADMIN']);
Utils::addRoute('register', 'RegisterCtrl');
Utils::addRoute('loginAfterRegister', 'LoginCtrl');
Utils::addRoute('showdescriptionforuser', 'ProfileCtrl', ['GRACZ']);
Utils::addRoute('personEdit', 'ProfileCtrl', ['GRACZ']);
Utils::addRoute('insertMoney', 'ProfileCtrl', ['GRACZ']);
Utils::addRoute('moneyWithdraw', 'ProfileCtrl', ['GRACZ']);
Utils::addRoute('beforeStartStatus', 'BetPrizeCtrl', ['GRACZ']);
Utils::addRoute('chooseTheWinner', 'BetPrizeCtrl', ['GRACZ']);
//Utils::addRoute('action_name', 'controller_class_name');
