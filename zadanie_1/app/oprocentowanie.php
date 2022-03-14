<?php
require_once dirname(__FILE__).'/../config.php';

function get_form(&$form){

    $form['cost'] = isset($_REQUEST ['cost']) ? $_REQUEST ['cost']: null;
    $form['interest'] = isset($_REQUEST ['interest']) ? $_REQUEST ['interest'] :null;
    $form['years'] = isset($_REQUEST ['years']) ? $_REQUEST ['years']:null;
}


function isFormEmpty(&$form)
{
    foreach ($form as  $value)
    {
        if ($value !== null)
        {

            return false;
        }
    }
    return true;


}

function check_notices(&$form,&$messages)
{
    if (! (isset($form['cost']) && isset($form['interest']) && isset($form['years']))) {

        $messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
    }




    if ($form['cost'] == "") {
        $messages [] = 'Nie podano kwoty';
    }
    if ($form['years'] == "") {
        $messages [] = 'Nie podano czasu kredytu';
    }
    if ($form['interest'] == "") {
        $messages [] = 'Nie podano oprocentowania';
    }
}

function oblicz(&$form,&$messages)
{

    if ( count($messages) == 0) { // gdy brak błędów

        $procent = $form['cost'] * ($form['interest'] / 100);
        $results = ($form['cost'] / ($form['years'] * 12)) + $procent;
        return $results;
    }

}
$form = array();
$messages = array();



get_form($form);
if(! isFormEmpty($form)) {
check_notices($form,$messages);

$oblicz = oblicz($form,$messages);
}
include 'oprocentowanie_view.php';