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
    <link rel="stylesheet" href="{$conf->app_url}/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="{$conf->app_url}/css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="{$conf->app_url}/css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif"/>
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{$conf->app_url}/css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
          media="screen">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->


<div class="container rounded bg-white mt-5 mb-5">
    <a href="{$conf->action_root}HomePageAfterLogin" class="close"></a>

    <div class="row">
        <div class="col-md-3 border-right">

            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5"
                                                                                         width="150px"
                                                                                         src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span
                        class="font-weight-bold">{$login}
                        <span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <form method="get" action="{$conf->action_root}personEdit">
                    <div class="row mt-2">

                        <div class="col-md-6"><label class="labels">Imie</label><input type="text" class="form-control"
                                                                                       value="{$imie['imie']}"
                                                                                       name="imie">
                        </div>
                        <div class="col-md-6"><label class="labels">Nazwisko</label><input type="text"
                                                                                           class="form-control"
                                                                                           value="{$imie['nazwisko']}"
                                                                                           name="nazwisko">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Pesel</label><input type="text"
                                                                                         class="form-control"

                                                                                         value="{$imie['pesel']}"
                                                                                         name="pesel">
                        </div>
                        <div class="col-md-12"><label class="labels">Miejscowosc</label><input type="text"
                                                                                               class="form-control"

                                                                                               value="{$imie['miejscowosc']}"
                                                                                               name="miejscowosc">
                        </div>
                        <div class="col-md-12"><label class="labels">Ulica</label><input type="text"
                                                                                         class="form-control"
                                                                                         name="ulica"
                                                                                         value="{$imie['ulica']}"></div>
                        <div class="col-md-12"><label class="labels">Nr Domu</label><input type="text"
                                                                                           class="form-control"
                                                                                           name="nrdomu"
                                                                                           value="{$imie['nrdomu']}">
                        </div>
                        <div class="col-md-12"><label class="labels">Nr mieszkania</label><input type="text"
                                                                                                 class="form-control"
                                                                                                 name="nrmieszkania"
                                                                                                 value="{$imie['nrmieszkania']}">
                        </div>
                        <div class="col-md-12"><label class="labels">Kod pocztowy</label><input type="text"
                                                                                                class="form-control"
                                                                                                name="kodpocztowy"
                                                                                                value="{$imie['kodpocztowy']}">
                        </div>

                    </div>

                    <div class="mt-5 text-center">
                        <button class="btn btn-primary profile-button" type="submit">Zapisz</button>
                    </div>
                    <br>
                    <p>{foreach $msgs->getMessages() as $msg}
                    <div class="alert {if $msg->isInfo()}alert-success{/if}
                   {if $msg->isWarning()}alert-warning{/if}
                   {if $msg->isError()}alert-danger{/if}" role="alert">
                        {$msg->text}
                    </div>
                    {/foreach}</p>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience">

                </div>
                <br>
                <div class="col-md-12"><h2>Dostepne Srodki</h2>
                    <p>{$money['dostepnakwota']}</p>
                    <br>
                    <form action="{$conf->action_root}insertMoney" method="post">
                        <div class="col-md-12"><label class="labels">Wplata</label><input type="number"
                                                                                          class="form-control"

                                                                                          name="wplata">
                            <div class="mt-5 text-center">
                                <button class="btn btn-primary profile-button" type="submit">Zapisz</button>

                            </div>
                        </div>
                    </form>
                    <br> <br> <br>
                    <form action="{$conf->action_root}moneyWithdraw" method="post">
                        <div class="col-md-12"><label class="labels">Wyplata</label><input type="number"
                                                                                           class="form-control"

                                                                                           name="wyplata"
                                                                                           value=""></div>
                        <div class="mt-5 text-center">
                            <button class="btn btn-primary profile-button" type="submit">Zapisz</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


</body>
</html>