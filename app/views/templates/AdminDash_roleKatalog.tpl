{extends file='AdminDash.tpl'}

{block name=tableBlock}


    <div class="main-content">
    <div class="container mt-7">
    <!-- Table -->
    <h2 class="mb-5"></h2>
    <div class="row">

        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">

                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col">idosoby</th>
                            <th scope="col">idroli</th>
                            <th scope="col">nazwaroli</th>
                            <th scope="col">login</th>


                        </tr>
                        </thead>
                        <tbody>
                        {foreach $people as $p}
                            {strip}
                                <tr>
                                    <td>{$p["idosoby"]}</td>
                                    <td>{$p["idroli"]}</td>
                                    <td>{$p["nazwaroli"]}</td>
                                    <td>{$p["login"]}</td>

                                    <td>

                                        &nbsp;
                                        <a class="button-small pure-button button-warning"
                                           href="{$conf->action_root}roleListRemoveRecord?idosoby={$p['idosoby']}&idroli={$p['idroli']}">Usuń</a>
                                    </td>
                                </tr>
                            {/strip}
                        {/foreach}
                        </tbody>
                    </table>
                </div>

                <div class="card-footer py-4">
                    <nav aria-label="...">
                        <ul class="pagination justify-content-end mb-0">
                            <li class="page-item disabled">
                            <li><a href="?pageno=1">First</a></li>

                            <li class=" {if $pageno <= 1} disabled{/if} ">
                                <a href="{if $pageno <= 1}# {else} ?pageno={$pageno - 1}{/if}">Prev</a>
                            </li>

                            <li class="{if $pageno >= $total_pages}disabled{/if}">
                                <a href="{if $pageno >= $total_pages} #{else}?pageno={$pageno + 1}{/if}">Next</a>
                            </li>
                            <li><a href="?pageno={$total_pages}">Last</a></li>
                        </ul>
                    </nav>
                    <p>{foreach $msgs->getMessages() as $msg}
                    <div class="alert {if $msg->isInfo()}alert-success{/if}
                   {if $msg->isWarning()}alert-warning{/if}
                   {if $msg->isError()}alert-danger{/if}" role="alert">
                        {$msg->text}
                    </div>
                    {/foreach}</p>

                </div>
            </div>
        </div>
    </div>


{/block}