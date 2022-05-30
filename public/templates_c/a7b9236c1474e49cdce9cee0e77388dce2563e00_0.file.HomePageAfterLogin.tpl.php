<?php
/* Smarty version 4.1.0, created on 2022-05-29 23:33:13
  from 'C:\xampp2\htdocs\amelia\app\views\templates\HomePageAfterLogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties(
    $_smarty_tpl,
    array(
        'version' => '4.1.0',
        'unifunc' => 'content_6293e699610563_58166915',
        'has_nocache_code' => false,
        'file_dependency' =>
            array(
                'a7b9236c1474e49cdce9cee0e77388dce2563e00' =>
                    array(
                        0 => 'C:\\xampp2\\htdocs\\amelia\\app\\views\\templates\\HomePageAfterLogin.tpl',
                        1 => 1653859992,
                        2 => 'file',
                    ),
            ),
        'includes' =>
            array(),
    ),
    false
)) {
    function content_6293e699610563_58166915(Smarty_Internal_Template $_smarty_tpl)
    {
        $_smarty_tpl->_loadInheritance();
        $_smarty_tpl->inheritance->init($_smarty_tpl, true);
        ?>

        <?php
        $_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_668495176293e69960acb5_77530757', 'games');
        ?>

        <?php
        $_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18702630956293e69960b662_32598565', 'profile');
        ?>

        <?php
        $_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20037085206293e69960ec98_66137907', 'logout');
        ?>


        <?php
        $_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7392428966293e69960f9a9_94905398', 'Homecontent');
        $_smarty_tpl->inheritance->endChild($_smarty_tpl, "index.tpl");
    }

    /* {block 'games'} */

    class Block_668495176293e69960acb5_77530757 extends Smarty_Internal_Block
    {
        public $subBlocks = array(
            'games' =>
                array(
                    0 => 'Block_668495176293e69960acb5_77530757',
                ),
        );

        public function callBlock(Smarty_Internal_Template $_smarty_tpl)
        {
            ?>
            <li><a href="#games">Games</a></li><?php
        }
    }

    /* {/block 'games'} */

    /* {block 'profile'} */

    class Block_18702630956293e69960b662_32598565 extends Smarty_Internal_Block
    {
        public $subBlocks = array(
            'profile' =>
                array(
                    0 => 'Block_18702630956293e69960b662_32598565',
                ),
        );

        public function callBlock(Smarty_Internal_Template $_smarty_tpl)
        {
            ?>
        <a href="<?php
        echo $_smarty_tpl->tpl_vars['conf']->value->action_root; ?>
showdescriptionforuser">Profil</a><?php
        }
    }

    /* {/block 'profile'} */

    /* {block 'logout'} */

    class Block_20037085206293e69960ec98_66137907 extends Smarty_Internal_Block
    {
        public $subBlocks = array(
            'logout' =>
                array(
                    0 => 'Block_20037085206293e69960ec98_66137907',
                ),
        );

        public function callBlock(Smarty_Internal_Template $_smarty_tpl)
        {
            ?>
        <a href="<?php
        echo $_smarty_tpl->tpl_vars['conf']->value->action_root; ?>
logout">Wyloguj</a><?php
        }
    }

    /* {/block 'logout'} */

    /* {block 'Homecontent'} */

    class Block_7392428966293e69960f9a9_94905398 extends Smarty_Internal_Block
    {
        public $subBlocks = array(
            'Homecontent' =>
                array(
                    0 => 'Block_7392428966293e69960f9a9_94905398',
                ),
        );

        public function callBlock(Smarty_Internal_Template $_smarty_tpl)
        {
            ?>

            <div id="about" class="about">
            <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>About <strong class="white black"> Us</strong></h2>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                            Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu
                            libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend
                            leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum
                            sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt
                            condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in
                            turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor
                            neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi,
                            tincidunt quis, accumsan porttitor, facilisis luctus, metus </p>
                    </div>
                </div>
            </div>
            <div>

                <hr>

            </div>

            <div id="about" class="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="titlepage">
                            <h2>Games <strong class="white black"> </strong></h2>

                        </div>
                    </div>
                    <div class="row">

                        <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                            <div class="about-box" id="games">
                                <figure><img src="images/about2.jpg" alt="#"/></figure>
                                <h3> Wojna</h3>
                                <p>Gra w wojnę na Betgames bazuje na klasycznej grze karcianej. Na czym polega
                                    tradycyjna rozgrywka? Klasyczna wojna to gra dla dwóch osób. Do gry używana jest
                                    standardowa talia kart (52), która jest dzielona na równe części i rozdawana
                                    graczom. Każdy z graczy w odpowiednim momencie wykłada jedną kartę na stół.
                                    Porównuje się karty do siebie i ocenia, która z nich posiada wyższą wartość (asy są
                                    uznawane za najsilniejsze karty, zaś dwójki za najsłabsze). Wyższa z zagranych kart
                                    wygrywa. Jeśli obie zagrane karty mają taką samą wartość, dochodzi do wojny</p>
                            </div>
                            <a class="read_more" href="<?php
                            echo $_smarty_tpl->tpl_vars['conf']->value->action_root; ?>
beforeStartStatus">Graj</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end abouts -->
            <!-- Features -->
            <?php
        }
    }
    /* {/block 'Homecontent'} */
}
