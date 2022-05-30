<?php
/* Smarty version 4.1.0, created on 2022-05-30 19:47:15
  from 'C:\xampp2\htdocs\amelia\app\views\templates\AdminDash_finanse.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties(
    $_smarty_tpl,
    array(
        'version' => '4.1.0',
        'unifunc' => 'content_62950323610551_35759730',
        'has_nocache_code' => false,
        'file_dependency' =>
            array(
                'f0dd7a578f8f725aba37fde3e87bb3622143b355' =>
                    array(
                        0 => 'C:\\xampp2\\htdocs\\amelia\\app\\views\\templates\\AdminDash_finanse.tpl',
                        1 => 1653932831,
                        2 => 'file',
                    ),
            ),
        'includes' =>
            array(),
    ),
    false
)) {
    function content_62950323610551_35759730(Smarty_Internal_Template $_smarty_tpl)
    {
        $_smarty_tpl->_loadInheritance();
        $_smarty_tpl->inheritance->init($_smarty_tpl, true);
        ?>


        <?php
        $_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1861255069629503235fc255_73749576', 'tableBlock');
        $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'AdminDash.tpl');
    }

    /* {block 'tableBlock'} */

    class Block_1861255069629503235fc255_73749576 extends Smarty_Internal_Block
    {
        public $subBlocks = array(
            'tableBlock' =>
                array(
                    0 => 'Block_1861255069629503235fc255_73749576',
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
                                    <th scope="col">idtransakcji</th>
                                    <th scope="col">kwota</th>
                                    <th scope="col">operacja</th>
                                    <th scope="col">dataoperacji</th>
                                    <th scope="col">login</th>


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
                                                echo $_smarty_tpl->tpl_vars['p']->value["idtransakcji"]; ?>
                                            </td>
                                            <td><?php
                                                echo $_smarty_tpl->tpl_vars['p']->value["kwota"]; ?>
                                            </td>
                                            <td><?php
                                                echo $_smarty_tpl->tpl_vars['p']->value["operacja"]; ?>
                                            </td>
                                            <td><?php
                                                echo $_smarty_tpl->tpl_vars['p']->value["dataoperacji"]; ?>
                                            </td>
                                            <td><?php
                                                echo $_smarty_tpl->tpl_vars['p']->value["login"]; ?>
                                            </td>
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
