{extends file="index.tpl"}
{block name=games}
    <li><a href="#games">Games</a></li>
{/block}
{block name=profile}<a href="{$conf->action_root}showdescriptionforuser">Profil</a>{/block}
{block name=logout}<a href="{$conf->action_root}logout">Wyloguj</a>{/block}

{block name=Homecontent}
    <div id="about" class="about">
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="titlepage">
                <h2>About <strong class="white black"> Us</strong></h2>
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                    Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit
                    amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit
                    amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae,
                    ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci,
                    sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent
                    dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat.
                    Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus </p>
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
                        <p>Gra w wojnę na Betgames bazuje na klasycznej grze karcianej. Na czym polega tradycyjna
                            rozgrywka? Klasyczna wojna to gra dla dwóch osób. Do gry używana jest standardowa talia kart
                            (52), która jest dzielona na równe części i rozdawana graczom. Każdy z graczy w odpowiednim
                            momencie wykłada jedną kartę na stół. Porównuje się karty do siebie i ocenia, która z nich
                            posiada wyższą wartość (asy są uznawane za najsilniejsze karty, zaś dwójki za najsłabsze).
                            Wyższa z zagranych kart wygrywa. Jeśli obie zagrane karty mają taką samą wartość, dochodzi
                            do wojny</p>
                    </div>
                    <a class="read_more" href="{$conf->action_root}beforeStartStatus">Graj</a>
                </div>
            </div>
        </div>
    </div>
    <!-- end abouts -->
    <!-- Features -->
{/block}