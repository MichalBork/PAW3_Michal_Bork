<?php
/* Smarty version 4.1.0, created on 2022-05-29 19:40:37
  from 'C:\xampp2\htdocs\amelia\app\views\templates\HomePage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties(
    $_smarty_tpl,
    array(
        'version' => '4.1.0',
        'unifunc' => 'content_6293b015ad8135_01342282',
        'has_nocache_code' => false,
        'file_dependency' =>
            array(
                'c83a7a6dcbf556084d6046777c65fc6dd876b23b' =>
                    array(
                        0 => 'C:\\xampp2\\htdocs\\amelia\\app\\views\\templates\\HomePage.tpl',
                        1 => 1653838598,
                        2 => 'file',
                    ),
            ),
        'includes' =>
            array(),
    ),
    false
)) {
    function content_6293b015ad8135_01342282(Smarty_Internal_Template $_smarty_tpl)
    {
        $_smarty_tpl->_loadInheritance();
        $_smarty_tpl->inheritance->init($_smarty_tpl, true);
        ?>


        <?php
        $_smarty_tpl->inheritance->instanceBlock(
            $_smarty_tpl,
            'Block_19538850516293b015ad7a02_98155923',
            'Homecontent'
        );
        $_smarty_tpl->inheritance->endChild($_smarty_tpl, "index.tpl");
    }

    /* {block 'Homecontent'} */

    class Block_19538850516293b015ad7a02_98155923 extends Smarty_Internal_Block
    {
        public $subBlocks = array(
            'Homecontent' =>
                array(
                    0 => 'Block_19538850516293b015ad7a02_98155923',
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
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                                    egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet,
                                    ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est.
                                    Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra.
                                    Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean
                                    fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus
                                    lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent
                                    dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna
                                    eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor,
                                    facilisis luctus, metus </p>
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


                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">

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
