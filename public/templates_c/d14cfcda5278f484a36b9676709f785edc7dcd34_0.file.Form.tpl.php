<?php
/* Smarty version 4.1.0, created on 2022-05-29 19:40:40
  from 'C:\xampp2\htdocs\amelia\app\views\templates\Form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties(
    $_smarty_tpl,
    array(
        'version' => '4.1.0',
        'unifunc' => 'content_6293b018eba581_48500044',
        'has_nocache_code' => false,
        'file_dependency' =>
            array(
                'd14cfcda5278f484a36b9676709f785edc7dcd34' =>
                    array(
                        0 => 'C:\\xampp2\\htdocs\\amelia\\app\\views\\templates\\Form.tpl',
                        1 => 1653316898,
                        2 => 'file',
                    ),
            ),
        'includes' =>
            array(),
    ),
    false
)) {
    function content_6293b018eba581_48500044(Smarty_Internal_Template $_smarty_tpl)
    {
        $_smarty_tpl->_loadInheritance();
        $_smarty_tpl->inheritance->init($_smarty_tpl, false);
        ?>
        <html>
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

    <body>
    <div class="login-root">
        <div class="box-root flex-flex flex-direction--column" style="min-height: 100vh;flex-grow: 1;">
            <div class="loginbackground box-background--white padding-top--64">
                <div class="loginbackground-gridContainer">
                    <div class="box-root flex-flex" style="grid-area: top / start / 8 / end;">
                        <div class="box-root"
                             style="background-image: linear-gradient(white 0%, rgb(247, 250, 252) 33%); flex-grow: 1;">
                        </div>
                    </div>
                    <div class="box-root flex-flex" style="grid-area: 4 / 2 / auto / 5;">
                        <div class="box-root box-divider--light-all-2 animationLeftRight tans3s"
                             style="flex-grow: 1;"></div>
                    </div>
                    <div class="box-root flex-flex" style="grid-area: 6 / start / auto / 2;">
                        <div class="box-root box-background--blue800" style="flex-grow: 1;"></div>
                    </div>
                    <div class="box-root flex-flex" style="grid-area: 7 / start / auto / 4;">
                        <div class="box-root box-background--blue animationLeftRight" style="flex-grow: 1;"></div>
                    </div>
                    <div class="box-root flex-flex" style="grid-area: 8 / 4 / auto / 6;">
                        <div class="box-root box-background--gray100 animationLeftRight tans3s"
                             style="flex-grow: 1;"></div>
                    </div>
                    <div class="box-root flex-flex" style="grid-area: 2 / 15 / auto / end;">
                        <div class="box-root box-background--cyan200 animationRightLeft tans4s"
                             style="flex-grow: 1;"></div>
                    </div>
                    <div class="box-root flex-flex" style="grid-area: 3 / 14 / auto / end;">
                        <div class="box-root box-background--blue animationRightLeft" style="flex-grow: 1;"></div>
                    </div>
                    <div class="box-root flex-flex" style="grid-area: 4 / 17 / auto / 20;">
                        <div class="box-root box-background--gray100 animationRightLeft tans4s"
                             style="flex-grow: 1;"></div>
                    </div>
                    <div class="box-root flex-flex" style="grid-area: 5 / 14 / auto / 17;">
                        <div class="box-root box-divider--light-all-2 animationRightLeft tans3s"
                             style="flex-grow: 1;"></div>
                    </div>
                </div>
            </div>
            <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
                <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
                    <h1><a href="http://blog.stackfindover.com/" rel="dofollow"></a></h1>
                </div>
                <div class="formbg-outer">
                    <div class="formbg">
                        <div class="formbg-inner padding-horizontal--48">
                            <span class="padding-bottom--15">Sign in to your account</span>
                            <?php
                            $_smarty_tpl->inheritance->instanceBlock(
                                $_smarty_tpl,
                                'Block_11364967086293b018eb9818_04735838',
                                'Form'
                            );
                            ?>

                        </div>
                    </div>
                    <div class="footer-link padding-top--24">
            <span>Don't have an account? <a href="<?php
                echo $_smarty_tpl->tpl_vars['conf']->value->action_root; ?>
register">Sign up</a></span>
                        <div class="listing padding-top--24 padding-bottom--24 flex-flex center-center">
                            <span><a href="#">?? Stackfindover</a></span>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>

        </html><?php
    }

    /* {block 'Form'} */

    class Block_11364967086293b018eb9818_04735838 extends Smarty_Internal_Block
    {
        public $subBlocks = array(
            'Form' =>
                array(
                    0 => 'Block_11364967086293b018eb9818_04735838',
                ),
        );

        public function callBlock(Smarty_Internal_Template $_smarty_tpl)
        {
            ?>


            <?php
        }
    }
    /* {/block 'Form'} */
}
