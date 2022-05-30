<?php
/* Smarty version 4.1.0, created on 2022-05-29 19:40:37
  from 'C:\xampp2\htdocs\amelia\app\views\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties(
    $_smarty_tpl,
    array(
        'version' => '4.1.0',
        'unifunc' => 'content_6293b015aeeeb6_87401659',
        'has_nocache_code' => false,
        'file_dependency' =>
            array(
                'b3577c63e6588095ed2c85d6e5d530c0e66fc471' =>
                    array(
                        0 => 'C:\\xampp2\\htdocs\\amelia\\app\\views\\templates\\index.tpl',
                        1 => 1653838598,
                        2 => 'file',
                    ),
            ),
        'includes' =>
            array(),
    ),
    false
)) {
    function content_6293b015aeeeb6_87401659(Smarty_Internal_Template $_smarty_tpl)
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
    <body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#"/></div>
    </div>

    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header-top">
            <div class="header">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                            <div class="full">
                                <div class="center-desk">
                                    <div class="logo">
                                        <a href="index.tpl"><img src="images/logo.png" alt="#"/></a>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-xl-5 col-lg-3 col-md-3 col-sm-3">
                            <div class="menu-area">
                                <div class="limit-box">
                                    <nav class="main-menu">
                                        <ul class="menu-area-main">

                                            <li class="active"><a href="index.tpl">Home</a></li>
                                            <li><a href="#about">About</a></li>

                                            <li> <?php
                                                $_smarty_tpl->inheritance->instanceBlock(
                                                    $_smarty_tpl,
                                                    'Block_17760566716293b015aebf32_95171736',
                                                    'games'
                                                );
                                                ?>
                                            </li>
                                            <li> <?php
                                                $_smarty_tpl->inheritance->instanceBlock(
                                                    $_smarty_tpl,
                                                    'Block_6854508116293b015aec708_19299907',
                                                    'profile'
                                                );
                                                ?>
                                            </li>
                                            <li> <?php
                                                $_smarty_tpl->inheritance->instanceBlock(
                                                    $_smarty_tpl,
                                                    'Block_20979843556293b015aecd75_12227446',
                                                    'logout'
                                                );
                                                ?>
                                            </li>

                                        </ul>

                                    </nav>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end header inner -->
            <!-- end header -->
            <section class="slider_section">
                <div id="myCarousel" class="carousel slide banner_main" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">

                            <div class="container">
                                <div class="carousel-caption">
                                    <div class="row d_flex">
                                        <div class="col-md-4">
                                            <div class="text-bg">
                                                <h1>Online casino </h1>
                                                <a href="<?php
                                                echo $_smarty_tpl->tpl_vars['conf']->value->action_root; ?>
GoToLoginPage">Play now</a>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="text-img">
                                                <figure><img src="images/img.png"/></figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">

                            <div class="container">
                                <div class="carousel-caption">
                                    <div class="row d_flex">
                                        <div class="col-md-4">
                                            <div class="text-bg">
                                                <h1>Online casino </h1>
                                                <a href="<?php
                                                echo $_smarty_tpl->tpl_vars['conf']->value->action_root; ?>
GoToLoginPage">Play now</a>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="text-img">
                                                <figure><img src="images/img.png"/></figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">

                            <div class="container">
                                <div class="carousel-caption">
                                    <div class="row d_flex">
                                        <div class="col-md-4">
                                            <div class="text-bg">
                                                <h1>Online casino </h1>
                                                <a href="<?php
                                                echo $_smarty_tpl->tpl_vars['conf']->value->action_root; ?>
GoToLoginPage">Play now</a>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="text-img">
                                                <figure><img src="images/img.png"/></figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </section>
        </div>
    </header>
    <!-- about  -->
    <?php
    $_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13947047206293b015aee6f2_05107926', 'Homecontent');
    ?>

    <!-- end abouts -->
    <!-- Features -->

    <!-- end map -->
    <!--  footer -->
    <footer>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                            <p>© 2019 All Rights Reserved. <a href="https://html.design/">Free html Templates</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </footer>
    <!-- end footer -->
    <!-- Javascript files-->
    <?php
    echo '<script'; ?>
    src="js/jquery.min.js"><?php
    echo '</script'; ?>
    >
    <?php
    echo '<script'; ?>
    src="js/popper.min.js"><?php
    echo '</script'; ?>
    >
    <?php
    echo '<script'; ?>
    src="js/bootstrap.bundle.min.js"><?php
    echo '</script'; ?>
    >
    <?php
    echo '<script'; ?>
    src="js/jquery-3.0.0.min.js"><?php
    echo '</script'; ?>
    >
    <?php
    echo '<script'; ?>
    src="js/plugin.js"><?php
    echo '</script'; ?>
    >
    <!-- sidebar -->
    <?php
    echo '<script'; ?>
    src="js/jquery.mCustomScrollbar.concat.min.js"><?php
    echo '</script'; ?>
    >
    <?php
    echo '<script'; ?>
    src="js/custom.js"><?php
    echo '</script'; ?>
    >
    <?php
    echo '<script'; ?>
    src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"><?php
    echo '</script'; ?>
    >

    </body>
        </html><?php
    }

    /* {block 'games'} */

    class Block_17760566716293b015aebf32_95171736 extends Smarty_Internal_Block
    {
        public $subBlocks = array(
            'games' =>
                array(
                    0 => 'Block_17760566716293b015aebf32_95171736',
                ),
        );

        public function callBlock(Smarty_Internal_Template $_smarty_tpl)
        {
        }
    }

    /* {/block 'games'} */

    /* {block 'profile'} */

    class Block_6854508116293b015aec708_19299907 extends Smarty_Internal_Block
    {
        public $subBlocks = array(
            'profile' =>
                array(
                    0 => 'Block_6854508116293b015aec708_19299907',
                ),
        );

        public function callBlock(Smarty_Internal_Template $_smarty_tpl)
        {
        }
    }

    /* {/block 'profile'} */

    /* {block 'logout'} */

    class Block_20979843556293b015aecd75_12227446 extends Smarty_Internal_Block
    {
        public $subBlocks = array(
            'logout' =>
                array(
                    0 => 'Block_20979843556293b015aecd75_12227446',
                ),
        );

        public function callBlock(Smarty_Internal_Template $_smarty_tpl)
        {
        }
    }

    /* {/block 'logout'} */

    /* {block 'Homecontent'} */

    class Block_13947047206293b015aee6f2_05107926 extends Smarty_Internal_Block
    {
        public $subBlocks = array(
            'Homecontent' =>
                array(
                    0 => 'Block_13947047206293b015aee6f2_05107926',
                ),
        );

        public function callBlock(Smarty_Internal_Template $_smarty_tpl)
        {
            ?>
            <?php
        }
    }
    /* {/block 'Homecontent'} */
}
