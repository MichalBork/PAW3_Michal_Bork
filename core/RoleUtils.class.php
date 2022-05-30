<?php

namespace core;

/**
 * Wrapper class for role utility functions
 *
 * @author Przemysław Kudłacik
 */
require_once('../vendor/autoload.php');

class RoleUtils
{


    public static function addRoleFromDatabase($forWho)
    {
        $rolesformdatabase = App::getDB()->select(
            "role_osoby_katalog",
            [
                // Here is the table relativity argument that tells the relativity between the table you want to join.
                "[>]role" => ["idroli" => "idroli"],
                "[>]osoby" => ["idosoby" => "idosoby"]
            ],
            [
                "role.nazwaroli"

            ],
            [
                "osoby.login" => $forWho
            ]
        );


        foreach ($rolesformdatabase as $value) {
            if ($value['nazwaroli'] == "GRACZ") {
                RoleUtils::addRole('GRACZ');
            }
            if ($value['nazwaroli'] == "ADMIN") {
                RoleUtils::addRole('ADMIN');
            }
        }
// Test if string contains the word

    }


    public static function addRole($role)
    {
        App::getConf()->roles [$role] = true;
        $_SESSION['_amelia_roles'] = serialize(App::getConf()->roles);
    }

    public static function removeRole($role)
    {
        if (isset(App::getConf()->roles [$role])) {
            unset(App::getConf()->roles [$role]);
            $_SESSION['_amelia_roles'] = serialize(App::getConf()->roles);
        }
    }

    public static function inRole($role)
    {
        return isset(App::getConf()->roles[$role]);
    }

    public static function requireRole($role, $fail_action = null)
    {
        if (!self::inRole($role)) {
            if (isset($fail_action)) {
                App::getRouter()->forwardTo($fail_action);
            } else {
                App::getRouter()->forwardTo(App::getRouter()->getLoginRoute());
            }
        }
    }

}
