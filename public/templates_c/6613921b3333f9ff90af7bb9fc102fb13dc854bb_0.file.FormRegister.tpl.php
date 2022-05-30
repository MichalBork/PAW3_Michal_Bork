<?php
/* Smarty version 4.1.0, created on 2022-05-30 14:57:16
  from 'C:\xampp2\htdocs\amelia\app\views\templates\FormRegister.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties(
    $_smarty_tpl,
    array(
        'version' => '4.1.0',
        'unifunc' => 'content_6294bf2c84a3e8_40591539',
        'has_nocache_code' => false,
        'file_dependency' =>
            array(
                '6613921b3333f9ff90af7bb9fc102fb13dc854bb' =>
                    array(
                        0 => 'C:\\xampp2\\htdocs\\amelia\\app\\views\\templates\\FormRegister.tpl',
                        1 => 1653318878,
                        2 => 'file',
                    ),
            ),
        'includes' =>
            array(),
    ),
    false
)) {
    function content_6294bf2c84a3e8_40591539(Smarty_Internal_Template $_smarty_tpl)
    {
        $_smarty_tpl->_loadInheritance();
        $_smarty_tpl->inheritance->init($_smarty_tpl, true);
        ?>

        <?php
        $_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14728353296294bf2c83b341_43633407', 'Form');
        ?>

        <?php
        $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Form.tpl");
    }

    /* {block 'Form'} */

    class Block_14728353296294bf2c83b341_43633407 extends Smarty_Internal_Block
    {
        public $subBlocks = array(
            'Form' =>
                array(
                    0 => 'Block_14728353296294bf2c83b341_43633407',
                ),
        );

        public function callBlock(Smarty_Internal_Template $_smarty_tpl)
        {
            ?>

            <form id="stripe-login" action="<?php
            echo $_smarty_tpl->tpl_vars['conf']->value->action_root; ?>
register" method="post">
                <div class="field padding-bottom--24">
                    <label for="email">Imie</label>
                    <input type="text" class="form-control" name="imie">
                </div>
                <div class="field padding-bottom--24">
                    <label for="inputEmail4" class="form-label">Nazwisko</label>
                    <input type="text" class="form-control" name="nazwisko">
                </div>
                <div class="field padding-bottom--24">
                    <label for="inputEmail4" class="form-label">Pesel</label>
                    <input type="text" class="form-control" name="pesel">
                </div>
                <div class="field padding-bottom--24">
                    <label for="inputPassword4" class="form-label">Login</label>
                    <input type="text" class="form-control" name="login">
                </div>
                <div class="field padding-bottom--24">
                    <label for="inputPassword4" class="form-label">Password</label>
                    <input type="password" class="form-control" name="haslo">
                </div>
                <div class="field padding-bottom--24">
                    <label for="inputPassword4" class="form-label">Password</label>
                    <input type="password" class="form-control" name="haslorepeat">
                </div>
                <div class="field padding-bottom--24">

                    <label for="inputAddress" class="form-label">Miasto</label>
                    <input type="text" class="form-control" name="miejscowosc">
                </div>

                <div class="field padding-bottom--24">
                    <label for="inputAddress2" class="form-label">Ulica</label>
                    <input type="text" class="form-control" name="ulica">
                </div>


                <div class="field padding-bottom--24">

                    <label for="inputCity" class="form-label">Nr Domu</label>
                    <input type="text" class="form-control" name="nrdomu">
                </div>


                <div class="field padding-bottom--24">

                    <label for="inputState" class="form-label">Nr Miszkania</label>
                    <input type="text" class="form-control" name="nrmieszkania">
                </div>


                <div class="field padding-bottom--24">

                    <label for="inputZip" class="form-label">Kod Pocztowy</label>
                    <input type="text" class="form-control" name="kodpocztowy">
                </div>


                <div class="field field-checkbox padding-bottom--24 flex-flex align-center">

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
