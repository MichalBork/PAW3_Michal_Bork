<?php
/* Smarty version 4.1.0, created on 2022-05-29 19:40:40
  from 'C:\xampp2\htdocs\amelia\app\views\templates\FormLogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties(
    $_smarty_tpl,
    array(
        'version' => '4.1.0',
        'unifunc' => 'content_6293b018ea97f4_74029645',
        'has_nocache_code' => false,
        'file_dependency' =>
            array(
                'bdf3d8233b49e4eaefbea72dbd9ee805a1218339' =>
                    array(
                        0 => 'C:\\xampp2\\htdocs\\amelia\\app\\views\\templates\\FormLogin.tpl',
                        1 => 1653316358,
                        2 => 'file',
                    ),
            ),
        'includes' =>
            array(),
    ),
    false
)) {
    function content_6293b018ea97f4_74029645(Smarty_Internal_Template $_smarty_tpl)
    {
        $_smarty_tpl->_loadInheritance();
        $_smarty_tpl->inheritance->init($_smarty_tpl, true);
        ?>

        <?php
        $_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3599091166293b018e95982_20788406', 'Form');
        $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Form.tpl");
    }

    /* {block 'Form'} */

    class Block_3599091166293b018e95982_20788406 extends Smarty_Internal_Block
    {
        public $subBlocks = array(
            'Form' =>
                array(
                    0 => 'Block_3599091166293b018e95982_20788406',
                ),
        );

        public function callBlock(Smarty_Internal_Template $_smarty_tpl)
        {
            ?>

            <form id="stripe-login" action="<?php
            echo $_smarty_tpl->tpl_vars['conf']->value->action_root; ?>
login" method="get">

                <div class="field padding-bottom--24">
                    <label for="email">Login</label>
                    <input type="text" name="login">
                </div>

                <div class="field padding-bottom--24">
                    <div class="grid--50-50">
                        <label for="password">Password</label>
                    </div>
                    <input type="password" name="password">
                </div>
                <div class="reset-pass">
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

                </div>
                <div class="field field-checkbox padding-bottom--24 flex-flex align-center">

                </div>
                <div class="field padding-bottom--24">
                    <input type="submit" name="submit" value="Continue">
                </div>
                <div class="field">


                </div>
            </form>
            <?php
        }
    }
    /* {/block 'Form'} */
}
