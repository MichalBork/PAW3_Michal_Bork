<?php
/* Smarty version 4.1.0, created on 2022-05-30 19:47:11
  from 'C:\xampp2\htdocs\amelia\app\views\templates\AdminDash_osoby.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties(
    $_smarty_tpl,
    array(
        'version' => '4.1.0',
        'unifunc' => 'content_6295031fa8b677_43815620',
        'has_nocache_code' => false,
        'file_dependency' =>
            array(
                '9928ea5e44557e771265b71e033294b53c696265' =>
                    array(
                        0 => 'C:\\xampp2\\htdocs\\amelia\\app\\views\\templates\\AdminDash_osoby.tpl',
                        1 => 1653932831,
                        2 => 'file',
                    ),
            ),
        'includes' =>
            array(),
    ),
    false
)) {
    function content_6295031fa8b677_43815620(Smarty_Internal_Template $_smarty_tpl)
    {
        $_smarty_tpl->_loadInheritance();
        $_smarty_tpl->inheritance->init($_smarty_tpl, true);
        ?>


        <?php
        $_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6729333486295031fa72fc6_48795288', 'tableBlock');
        $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'AdminDash.tpl');
    }

    /* {block 'tableBlock'} */

    class Block_6729333486295031fa72fc6_48795288 extends Smarty_Internal_Block
    {
        public $subBlocks = array(
            'tableBlock' =>
                array(
                    0 => 'Block_6729333486295031fa72fc6_48795288',
                ),
        );

        public function callBlock(Smarty_Internal_Template $_smarty_tpl)
        {
            ?>



            <div class="main-content">
            <div class="container mt-7">
            <!-- Table -->
            <h2 class="mb-5"></h2>
            <div class="row">

                <div class="col">
                    <div class="card shadow">
                        <div class="card-header border-0">
                            <h3 class="mb-0"></h3>
                        </div>
                        <div class="table-responsive">
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                <tr>
                                    <th scope="col">idosoby</th>
                                    <th scope="col">imie</th>
                                    <th scope="col">nazwisko</th>
                                    <th scope="col">pesel</th>
                                    <th scope="col">login</th>
                                    <th scope="col">haslo</th>
                                    <th scope="col">miejscowosc</th>
                                    <th scope="col">ulica</th>
                                    <th scope="col">nrdomu</th>
                                    <th scope="col">nrmieszkania</th>
                                    <th scope="col">kodpocztowy</th>
                                    <th scope="col">dostepnakwota</th>
                                    <th scope="col">Opcje</th>

                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $_from = $_smarty_tpl->smarty->ext->_foreach->init(
                                    $_smarty_tpl,
                                    $_smarty_tpl->tpl_vars['people']->value,
                                    'p'
                                );
                                $_smarty_tpl->tpl_vars['p']->do_else = true;
                                if ($_from !== null) {
                                    foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
                                        $_smarty_tpl->tpl_vars['p']->do_else = false;
                                        ?>
                                        <tr>
                                            <td><?php
                                                echo $_smarty_tpl->tpl_vars['p']->value["idosoby"]; ?>
                                            </td>
                                            <td><?php
                                                echo $_smarty_tpl->tpl_vars['p']->value["imie"]; ?>
                                            </td>
                                            <td><?php
                                                echo $_smarty_tpl->tpl_vars['p']->value["nazwisko"]; ?>
                                            </td>
                                            <td><?php
                                                echo $_smarty_tpl->tpl_vars['p']->value["pesel"]; ?>
                                            </td>
                                            <td><?php
                                                echo $_smarty_tpl->tpl_vars['p']->value["login"]; ?>
                                            </td>
                                            <td><?php
                                                echo $_smarty_tpl->tpl_vars['p']->value["haslo"]; ?>
                                            </td>
                                            <td><?php
                                                echo $_smarty_tpl->tpl_vars['p']->value["miejscowosc"]; ?>
                                            </td>
                                            <td><?php
                                                echo $_smarty_tpl->tpl_vars['p']->value["ulica"]; ?>
                                            </td>
                                            <td><?php
                                                echo $_smarty_tpl->tpl_vars['p']->value["nrdomu"]; ?>
                                            </td>
                                            <td><?php
                                                echo $_smarty_tpl->tpl_vars['p']->value["nrmieszkania"]; ?>
                                            </td>
                                            <td><?php
                                                echo $_smarty_tpl->tpl_vars['p']->value["kodpocztowy"]; ?>
                                            </td>
                                            <td><?php
                                                echo $_smarty_tpl->tpl_vars['p']->value["dostepnakwota"]; ?>
                                            </td>
                                            <td>&nbsp;<a class="button-small pure-button button-warning" href="<?php
                                                echo $_smarty_tpl->tpl_vars['conf']->value->action_root; ?>
personListRemoveRecord?idosoby=<?php
                                                echo $_smarty_tpl->tpl_vars['p']->value['idosoby']; ?>
">Usuń</a></td>
                                        </tr>
                                        <?php
                                    }
                                }
                                $_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1); ?>
                                </tbody>
                            </table>
                        </div>

                        <div class="card-footer py-4">
                            <nav aria-label="...">
                                <ul class="pagination justify-content-end mb-0">
                                    <li class="page-item disabled">
                                    <li><a href="?pageno=1">First</a></li>

                                    <li class=" <?php
                                    if ($_smarty_tpl->tpl_vars['pageno']->value <= 1) { ?> disabled<?php
                                    } ?> ">
                                        <a href="<?php
                                        if ($_smarty_tpl->tpl_vars['pageno']->value <= 1) { ?># <?php
                                        } else { ?> ?pageno=<?php
                                            echo $_smarty_tpl->tpl_vars['pageno']->value - 1;
                                        } ?>">Prev</a>
                                    </li>

                                    <li class="<?php
                                    if ($_smarty_tpl->tpl_vars['pageno']->value >= $_smarty_tpl->tpl_vars['total_pages']->value) { ?>disabled<?php
                                    } ?>">
                                        <a href="<?php
                                        if ($_smarty_tpl->tpl_vars['pageno']->value >= $_smarty_tpl->tpl_vars['total_pages']->value) { ?> #<?php
                                        } else { ?>?pageno=<?php
                                            echo $_smarty_tpl->tpl_vars['pageno']->value + 1;
                                        } ?>">Next</a>
                                    </li>
                                    <li><a href="?pageno=<?php
                                        echo $_smarty_tpl->tpl_vars['total_pages']->value; ?>
">Last</a></li>
                                </ul>
                            </nav>
                            <p><?php
                                $_from = $_smarty_tpl->smarty->ext->_foreach->init(
                                    $_smarty_tpl,
                                    $_smarty_tpl->tpl_vars['msgs']->value->getMessages(),
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
                    </div>
                </div>
            </div>



            <?php
        }
    }
    /* {/block 'tableBlock'} */
}
