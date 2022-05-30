<?php
/* Smarty version 4.1.0, created on 2022-05-30 13:47:24
  from 'C:\xampp2\htdocs\amelia\app\views\templates\ProfileSite.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties(
    $_smarty_tpl,
    array(
        'version' => '4.1.0',
        'unifunc' => 'content_6294aecc1e7e86_55984694',
        'has_nocache_code' => false,
        'file_dependency' =>
            array(
                'ff145d585cf8c94f8763d72468ffb46fc6b3b629' =>
                    array(
                        0 => 'C:\\xampp2\\htdocs\\amelia\\app\\views\\templates\\ProfileSite.tpl',
                        1 => 1653911243,
                        2 => 'file',
                    ),
            ),
        'includes' =>
            array(),
    ),
    false
)) {
function content_6294aecc1e7e86_55984694 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>nolo</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="<?php
    echo $_smarty_tpl->tpl_vars['conf']->value->app_url; ?>
/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="<?php
    echo $_smarty_tpl->tpl_vars['conf']->value->app_url; ?>
/css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="<?php
    echo $_smarty_tpl->tpl_vars['conf']->value->app_url; ?>
/css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif"/>
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="<?php
    echo $_smarty_tpl->tpl_vars['conf']->value->app_url; ?>
/css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
          media="screen">
    <!--[if lt IE 9]>
    <?php
    echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"><?php
    echo '</script'; ?>
>
    <?php
    echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php
    echo '</script'; ?>
><![endif]-->
</head>
<!-- body -->


<div class="container rounded bg-white mt-5 mb-5">
    <a href="<?php
    echo $_smarty_tpl->tpl_vars['conf']->value->action_root; ?>
HomePageAfterLogin" class="close"></a>

    <div class="row">
        <div class="col-md-3 border-right">

            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5"
                                                                                         width="150px"
                                                                                         src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span
                        class="font-weight-bold"><?php
                    echo $_smarty_tpl->tpl_vars['login']->value; ?>

                        <span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <form method="get" action="<?php
                echo $_smarty_tpl->tpl_vars['conf']->value->action_root; ?>
personEdit">
                    <div class="row mt-2">

                        <div class="col-md-6"><label class="labels">Imie</label><input type="text" class="form-control"
                                                                                       value="<?php
                                                                                       echo $_smarty_tpl->tpl_vars['imie']->value['imie']; ?>
" name="imie">
                        </div>
                        <div class="col-md-6"><label class="labels">Nazwisko</label><input type="text"
                                                                                           class="form-control"
                                                                                           value="<?php
                                                                                           echo $_smarty_tpl->tpl_vars['imie']->value['nazwisko']; ?>
"
                                                                                           name="nazwisko">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Pesel</label><input type="text"
                                                                                         class="form-control"

                                                                                         value="<?php
                                                                                         echo $_smarty_tpl->tpl_vars['imie']->value['pesel']; ?>
" name="pesel">
                        </div>
                        <div class="col-md-12"><label class="labels">Miejscowosc</label><input type="text"
                                                                                               class="form-control"

                                                                                               value="<?php
                                                                                               echo $_smarty_tpl->tpl_vars['imie']->value['miejscowosc']; ?>
"
                                                                                               name="miejscowosc">
                        </div>
                        <div class="col-md-12"><label class="labels">Ulica</label><input type="text"
                                                                                         class="form-control"
                                                                                         name="ulica"
                                                                                         value="<?php
                                                                                         echo $_smarty_tpl->tpl_vars['imie']->value['ulica']; ?>
"></div>
                        <div class="col-md-12"><label class="labels">Nr Domu</label><input type="text"
                                                                                           class="form-control"
                                                                                           name="nrdomu"
                                                                                           value="<?php
                                                                                           echo $_smarty_tpl->tpl_vars['imie']->value['nrdomu']; ?>
"></div>
                        <div class="col-md-12"><label class="labels">Nr mieszkania</label><input type="text"
                                                                                                 class="form-control"
                                                                                                 name="nrmieszkania"
                                                                                                 value="<?php
                                                                                                 echo $_smarty_tpl->tpl_vars['imie']->value['nrmieszkania']; ?>
">
                        </div>
                        <div class="col-md-12"><label class="labels">Kod pocztowy</label><input type="text"
                                                                                                class="form-control"
                                                                                                name="kodpocztowy"
                                                                                                value="<?php
                                                                                                echo $_smarty_tpl->tpl_vars['imie']->value['kodpocztowy']; ?>
">
                        </div>

                    </div>

                    <div class="mt-5 text-center">
                        <button class="btn btn-primary profile-button" type="submit">Zapisz</button>
                    </div>
                    <br>
                    <p><?php
                        $_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl,
                                                                           $_smarty_tpl->tpl_vars['msgs']->value->getMessages(
                                                                           ),
                                                                           'msg'
                        );
                        $_smarty_tpl->tpl_vars['msg']->do_else = true;
                        if ($_from !== null) {
                        foreach ($_from

                        as $_smarty_tpl->tpl_vars['msg']->value) {
                        $_smarty_tpl->tpl_vars['msg']->do_else = false;
                        ?>
                    <div class="alert <?php
                    if ($_smarty_tpl->tpl_vars['msg']->value->isInfo()) { ?>alert-success<?php
                    } ?>
                   <?php
                    if ($_smarty_tpl->tpl_vars['msg']->value->isWarning()) { ?>alert-warning<?php
                    } ?>
                   <?php
                    if ($_smarty_tpl->tpl_vars['msg']->value->isError()) { ?>alert-danger<?php
                    } ?>" role="alert">
                        <?php
                        echo $_smarty_tpl->tpl_vars['msg']->value->text; ?>

                    </div>
                    <?php
                    }
                    }
                    $_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1); ?></p>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience">

                </div>
                <br>
                <div class="col-md-12"><h2>Dostepne Srodki</h2>
                    <p><?php
                        echo $_smarty_tpl->tpl_vars['money']->value['dostepnakwota']; ?>
                    </p>
                    <br>
                    <form action="<?php
                    echo $_smarty_tpl->tpl_vars['conf']->value->action_root; ?>
insertMoney" method="post">
                        <div class="col-md-12"><label class="labels">Wplata</label><input type="number"
                                                                                          class="form-control"

                                                                                          name="wplata">
                            <div class="mt-5 text-center">
                                <button class="btn btn-primary profile-button" type="submit">Zapisz</button>

                            </div>
                        </div>
                    </form>
                    <br> <br> <br>
                    <form action="<?php
                    echo $_smarty_tpl->tpl_vars['conf']->value->action_root; ?>
moneyWithdraw" method="post">
                        <div class="col-md-12"><label class="labels">Wyplata</label><input type="number"
                                                                                           class="form-control"

                                                                                           name="wyplata"
                                                                                           value=""></div>
                        <div class="mt-5 text-center">
                            <button class="btn btn-primary profile-button" type="submit">Zapisz</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


</body>
</html><?php
}
}
