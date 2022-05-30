<?php
/* Smarty version 4.1.0, created on 2022-05-30 19:46:50
  from 'C:\xampp2\htdocs\amelia\app\views\templates\AdminDash.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties(
    $_smarty_tpl,
    array(
        'version' => '4.1.0',
        'unifunc' => 'content_6295030a588b85_02716095',
        'has_nocache_code' => false,
        'file_dependency' =>
            array(
                'b8fdbd5bed69875bb965b3e1fae95870678c6f15' =>
                    array(
                        0 => 'C:\\xampp2\\htdocs\\amelia\\app\\views\\templates\\AdminDash.tpl',
                        1 => 1653932810,
                        2 => 'file',
                    ),
            ),
        'includes' =>
            array(),
    ),
    false
)) {
    function content_6295030a588b85_02716095(Smarty_Internal_Template $_smarty_tpl)
    {
        $_smarty_tpl->_loadInheritance();
        $_smarty_tpl->inheritance->init($_smarty_tpl, false);
        ?>
        <!DOCTYPE html>
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
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <link rel="stylesheet" href="<?php
            echo $_smarty_tpl->tpl_vars['conf']->value->app_url; ?>
/css/style.css">
            <link rel="stylesheet" href="<?php
            echo $_smarty_tpl->tpl_vars['conf']->value->app_url; ?>
/css/admindash.scss">
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
            <style>
                *, :before, :after {
                    box-sizing: border-box;
                }

                .unstyled {
                    list-style: none;
                    padding: 0;
                    margin: 0;
                }

                .unstyled a {
                    text-decoration: none;
                }

                .list-inline {
                    overflow: hidden;
                }

                .list-inline li {
                    float: left;
                }

                .header {
                    position: fixed;
                    left: 0;
                    top: 0;
                    bottom: 0;
                    width: 17.5em;
                    background: #35302D;
                }

                .logo {
                    text-transform: lowercase;
                    font: 300 2em "Source Sans Pro", Helvetica, Arial, sans-serif;
                    text-align: center;
                    padding: 0;
                    margin: 0;
                }

                .logo a {
                    display: block;
                    padding: 1em 0;
                    color: #DFDBD9;
                    text-decoration: none;
                    transition: .15s linear color;
                }

                .logo a:hover {
                    color: #fff;
                }

                .logo a:hover span {
                    color: #DF4500;
                }

                .logo span {
                    font-weight: 700;
                    transition: .15s linear color;
                }

                .main-nav ul {
                    border-top: solid 1px #3C3735;
                }

                .main-nav li {
                    border-bottom: solid 1px #3C3735;
                }

                .main-nav a {
                    padding: 1.1em 0;
                    color: #DFDBD9;
                    font: 400 1.125em "Source Sans Pro", Helvetica, Arial, sans-serif;
                    text-align: center;
                    text-transform: lowercase;
                }

                .main-nav a:hover {
                    color: #fff;
                }

                .social-links {
                    border-bottom: solid 1px #3C3735;
                }

                .social-links li {
                    width: 25%;
                    border-left: solid 1px #3C3735;
                }

                .social-links li:first-child {
                    border: none;
                }

                .social-links a {
                    display: block;
                    height: 5.5em;
                    text-align: center;
                    color: #3C3735;
                    font: 0.75em/5.5em "Source Sans Pro", Helvetica, Arial, sans-serif;
                }

                .social-links a:hover {
                    color: #DFDBD9;
                }

                .list-hover-slide li {
                    position: relative;
                    overflow: hidden;
                }

                .list-hover-slide a {
                    display: block;
                    position: relative;
                    z-index: 1;
                    transition: .35s ease color;
                }

                .list-hover-slide a:before {
                    content: '';
                    display: block;
                    z-index: -1;
                    position: absolute;
                    left: -100%;
                    top: 0;
                    width: 100%;
                    height: 100%;
                    border-right: solid 5px #DF4500;
                    background: #3C3735;
                    transition: .35s ease left;
                }

                .list-hover-slide a.is-current:before, .list-hover-slide a:hover:before {
                    left: 0;
                }
            </style>
        </head>

        <body>
        <header class="header" role="banner">
            <h1 class="logo">

            </h1>
            <div class="nav-wrap">
                <nav class="main-nav" role="navigation">
                    <ul class="unstyled list-hover-slide">

                        <li><a href="<?php
                            echo $_smarty_tpl->tpl_vars['conf']->value->action_root; ?>
personList">Uzytkownicy</a></li>
                        <li><a href="<?php
                            echo $_smarty_tpl->tpl_vars['conf']->value->action_root; ?>
roleList">Uprawnienia</a></li>
                        <li><a href="<?php
                            echo $_smarty_tpl->tpl_vars['conf']->value->action_root; ?>
financialList">Role</a></li>

                    </ul>
                </nav>

            </div>
        </header>
        <?php
        $_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12340649796295030a587fc2_48864105', 'tableBlock');
        ?>


        </body>
    <?php
    }

    /* {block 'tableBlock'} */

    class Block_12340649796295030a587fc2_48864105 extends Smarty_Internal_Block
    {
        public $subBlocks = array(
            'tableBlock' =>
                array(
                    0 => 'Block_12340649796295030a587fc2_48864105',
                ),
        );

        public function callBlock(Smarty_Internal_Template $_smarty_tpl)
        {
            ?>
            <?php
        }
    }
    /* {/block 'tableBlock'} */
}
