<?php
/* Smarty version 4.1.0, created on 2022-05-30 13:53:16
  from 'C:\xampp2\htdocs\amelia\app\views\templates\WarGames.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties(
    $_smarty_tpl,
    array(
        'version' => '4.1.0',
        'unifunc' => 'content_6294b02cee1934_17622110',
        'has_nocache_code' => false,
        'file_dependency' =>
            array(
                'a77dcfdb3600882b4c0073e83a515befb7d43662' =>
                    array(
                        0 => 'C:\\xampp2\\htdocs\\amelia\\app\\views\\templates\\WarGames.tpl',
                        1 => 1653911596,
                        2 => 'file',
                    ),
            ),
        'includes' =>
            array(),
    ),
    false
)) {
function content_6294b02cee1934_17622110 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php
    echo $_smarty_tpl->tpl_vars['conf']->value->app_url; ?>
/css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
          media="screen">

    <link rel='stylesheet'
          href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <?php
    echo '<script'; ?>
    src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"><?php
    echo '</script'; ?>
    >
</head>

<style>


    .close {
        position: absolute;
        right: 32px;
        top: 32px;
        width: 32px;
        height: 32px;
        opacity: 0.3;
    }

    .close:hover {
        opacity: 1;
    }

    .close:before, .close:after {
        position: absolute;
        left: 15px;
        content: ' ';
        height: 33px;
        width: 2px;
        background-color: white;
    }

    .close:before {
        transform: rotate(45deg);
    }

    .close:after {
        transform: rotate(-45deg);
    }

    /* Button used to open the contact form - fixed at the bottom of the page */
    .open-button {
        background-color: #555;
        color: white;
        padding: 16px 20px;
        border: none;
        cursor: pointer;
        opacity: 0.8;
        position: fixed;
        bottom: 23px;
        right: 28px;
        width: 280px;
    }

    /* The popup form - hidden by default */
    .form-popup {
        display: none;
        position: fixed;
        bottom: 0;
        right: 15px;
        border: 3px solid #f1f1f1;
        z-index: 9;
    }

    /* Add styles to the form container */
    .form-container {
        max-width: 300px;
        padding: 10px;
        background-color: white;
    }

    /* Full-width input fields */
    .form-container input[type=number], .form-container input[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        border: none;
        background: #f1f1f1;
    }

    /* When the inputs get focus, do something */
    .form-container input[type=number]:focus, .form-container input[type=password]:focus {
        background-color: #ddd;
        outline: none;
    }

    /* Set a style for the submit/login button */
    .form-container .btn {
        background-color: #04AA6D;
        color: white;
        padding: 16px 20px;
        border: none;
        cursor: pointer;
        width: 100%;
        margin-bottom: 10px;
        opacity: 0.8;
    }

    /* Add a red background color to the cancel button */
    .form-container .cancel {
        background-color: red;
    }

    /* Add some hover effects to buttons */
    .form-container .btn:hover, .open-button:hover {
        opacity: 1;
    }

    :root {
        --mainfont: Segoe UI;
        --grey: #ccc;
        --shadow: 5px 5px 8px #333;
    }

    html {
        font-family: var(--mainfont);
    }

    body {
        text-align: center;
        background: #345;
    }

    header {
        margin: 10px 0 50px 0;
        color: white;
        font-size: 1.2rem;
    }

    .players {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
    }

    .playertitle {
        color: white;
        font-weight: bold;
        font-size: 1.5rem;
    }

    .score {
        color: white;
        font-weight: bold;
    }

    .score::before {
        content: "Score: ";
        font-weight: 400;
    }

    .winpointer {
        color: white;
    }

    .card {
        margin: auto;
        text-align: center;
        background: white;
        box-shadow: var(--shadow);
        border-radius: 10px;
        width: 200px;
        height: 320px;
    }

    .topcard {
        text-align: left;
        margin: 20px 0 0 25px;
        font-size: 1.1rem;
    }

    .middlecard {
        font-size: 6rem;
        margin-top: 40px;
    }

    #mainbtn {
        font-family: var(--mainfont);
        padding: 15px 20px;
        font-weight: bold;
        background: white;
        border: 0;
        border-radius: 4px;
        box-shadow: var(--shadow);
        font-size: 1rem;
        transition: 100ms;
    }

    #mainbtn:hover {
        background: #333;
        color: white;
        box-shadow: none;
    }

    #mainbtn:active {
        background: #345;
        border: none;
        color: white;
    }

    .resetbtn {
        position: absolute;
        top: 20px;
        left: 20px;
    }

    #resetbtn {
        color: white;
        font-size: 2rem;
        cursor: pointer;
        transition: 100ms ease-in-out;
    }

    #resetbtn:hover {
        color: #333;
    }

    #resetbtn::after {
        font-size: 1rem;
        content: " reset game";
    }

    footer {
        margin-top: 40px;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
        color: white;
        text-align: left;
    }

    #dealerturns::before {
        content: "Dealer Turns: "
    }

    #userturns::before {
        content: "User Turns: "
    }

    .copyright {
        margin-top: 30px;
        font-size: 0.9rem;
        color: var(--grey);
    }

</style>

<body>

<header>
    &hearts;
    &spades;
    War Playing Card Game
    &diams;
    &clubs;
</header>


<section class="players">
    <div></div>

    <div class="centercard">
        <div class="playertitle">Dealer</div>
        <div class="score" id="dealerscore"></div>

        <div class="card">
            <div class="topcard"><br>
                <label class="cardnum" id="dealercardnum"></label>
                <label class="char" id="dealerchar"></label>
            </div>
            <div class="middlecard">
                <label id="dealerbigchar" class="bigchar"></label>
            </div>
        </div>

    </div>

    <div class="winpointer">
        <label>win</label>
        <div class="pointer" id="pointer"></div>
    </div>

    <div class="centercard">
        <div class="playertitle">User</div>
        <div class="score" id="userscore"></div>

        <div class="card">
            <div class="topcard"><br>
                <label class="cardnum" id="usercardnum"></label>
                <label class="char" id="userchar"></label>
            </div>
            <div class="middlecard">
                <label id="userbigchar" class="bigchar"></label>
            </div>
        </div>

    </div>
    <div></div>
</section>

<br><br><br>


<input type="hidden" value="Next Turn" id="mainbtn" onclick="lotocards();">


<a href="<?php
echo $_smarty_tpl->tpl_vars['conf']->value->action_root; ?>
HomePageAfterLogin" class="close"></a>
<div class="resetbtn">

    <br>
    <br>
    <a id="resetbtn" onclick="location.reload();">↺</a><br><br><br>
    <div><h5>Twoje srodki: <?php
            echo $_smarty_tpl->tpl_vars['money']->value['dostepnakwota']; ?>
        </h5></div>
</div>
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

<footer>
    <div>
        <button class="open-button" onclick="openForm()">Open Form</button>

        <div class="form-popup" id="myForm">
            <form action="<?php
            echo $_smarty_tpl->tpl_vars['conf']->value->action_root; ?>
chooseTheWinner" class="form-container" method="get">
                <h1 style="color:black;">Login</h1>

                <label style="color:black;" for="email"><b>kwota zakladu</b></label>
                <input type="number" placeholder="Kwota" name="money" required>
                <input type="hidden" placeholder="Kwota" name="score" id="score">
                <select name="player" type="select" required>
                    <option value="dealer"
                    ">dealer</option>
                    <option value="user">user</option>
                </select>

                <div>
                    <button type="submit" class="btn" id="usercall" onclick="location.reload();">User</button>

                </div>
                <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
            </form>
        </div>
    </div>
    <div class="turns" id="dealerturns"></div>
    <div></div>
    <div class="turns" id="userturns"></div>
    <div></div>
</footer>

<div class="copyright">Kfir Goldfarb© 2019 - Code in Design</div>


<?php
echo '<script'; ?>
>

let aUsersturns = [];
let aDealerturns = [];

let userscore = 0;
let dealerscore = 0;
let winner

function lotocards() {

var usercard = Math.floor(Math.random() * 13 + 2);
aUsersturns.push(usercard);
console.log(aUsersturns);

var usercardoutput = "";
if (usercard === 11) {
usercardoutput = "J"
} else {
if (usercard === 12) {
usercardoutput = "Q";
} else {
if (usercard === 13) {
usercardoutput = "K";
} else {
if (usercard === 14) {
usercardoutput = "A";
} else {
usercardoutput = usercard;
}
}
}
}

document.getElementById("usercardnum").innerHTML = usercardoutput;

var dealercard = Math.floor(Math.random() * 13 + 2);
aDealerturns.push(dealercard);
console.log(aDealerturns);

var dealercardoutput = "";
if (dealercard === 11) {
dealercardoutput = "J"
} else {
if (dealercard === 12) {
dealercardoutput = "Q";
} else {
if (dealercard === 13) {
dealercardoutput = "K";
} else {
if (dealercard === 14) {
dealercardoutput = "A";
} else {
dealercardoutput = dealercard;
}
}
}
}

document.getElementById("dealercardnum").innerHTML = dealercardoutput;

// Dealer Chars:
var dealerchar = Math.floor(Math.random() * 4 + 1);
console.log("dealerchar " + dealerchar);

switch (dealerchar) {
case 1:
dealerchar = "&hearts;";
document.getElementById("dealerchar").style.color = "red";
document.getElementById("dealerbigchar").style.color = "red";
break;

case 2:
dealerchar = "&spades;";
document.getElementById("dealerchar").style.color = "black";
document.getElementById("dealerbigchar").style.color = "black";
break;

case 3:
dealerchar = "&diams;";
document.getElementById("dealerchar").style.color = "red";
document.getElementById("dealerbigchar").style.color = "red";
break;

case 4:
dealerchar = "&clubs;";
document.getElementById("dealerchar").style.color = "black";
document.getElementById("dealerbigchar").style.color = "black";
break;
}
document.getElementById("dealerchar").innerHTML = dealerchar;
document.getElementById("dealerbigchar").innerHTML = dealerchar;

// User Chars:
var userchar = Math.floor(Math.random() * 4 + 1);
console.log("userchar " + userchar);

switch (userchar) {
case 1:
userchar = "&hearts;";
document.getElementById("userchar").style.color = "red";
document.getElementById("userbigchar").style.color = "red";
break;

case 2:
userchar = "&spades;";
document.getElementById("userchar").style.color = "black";
document.getElementById("userbigchar").style.color = "black";
break;

case 3:
userchar = "&diams;";
document.getElementById("userchar").style.color = "red";
document.getElementById("userbigchar").style.color = "red";
break;

case 4:
userchar = "&clubs;";
document.getElementById("userchar").style.color = "black";
document.getElementById("userbigchar").style.color = "black";
break;
}
document.getElementById("userchar").innerHTML = userchar;
document.getElementById("userbigchar").innerHTML = userchar;


// Scores:
if (usercard === dealercard) {
ifqual();
document.getElementById("pointer").innerHTML = "=";
} else {
if (usercard > dealercard) {
userscore++;
dealerscore--;
document.getElementById("pointer").innerHTML = "►";
} else {
if (dealercard > usercard) {
dealerscore++;
userscore--;
document.getElementById("pointer").innerHTML = "◄";
}
}
}

if (userscore < 10) {
document.getElementById("userscore").style.color = "red";
} else {
document.getElementById("userscore").style.color = "black";
}

if (dealerscore < 10) {
document.getElementById("dealerscore").style.color = "red";
} else {
document.getElementById("dealerscore").style.color = "black";
}

// Display Scores:
document.getElementById("dealerscore").innerHTML = dealerscore;
document.getElementById("userscore").innerHTML = userscore;

console.log("user score: " + userscore);
console.log("dealer score: " + dealerscore);

// Display Turns:
var dealerturns = "";
var i;
for (i = 0; i < aDealerturns.length; i++) {
dealerturns = dealerturns + aDealerturns[i] + ", ";
document.getElementById("dealerturns").innerHTML = dealerturns
}

var userturns = "";
var j;
for (j = 0; j < aUsersturns.length; j++) {
userturns = userturns + aUsersturns[j] + ", ";
document.getElementById("userturns").innerHTML = userturns
}

chekingscores();
}

function ifqual() {
var usercard = Math.floor(Math.random() * 13 + 2);
aUsersturns.push(usercard);
console.log(aUsersturns);

var dealercard = Math.floor(Math.random() * 13 + 2);
aDealerturns.push(dealercard);
console.log(aDealerturns);

if (usercard === dealercard) {
ifqual();
document.getElementById("pointer").innerHTML = "=";
} else {
if (usercard > dealercard) {
userscore = userscore + 4;
dealerscore = dealerscore - 4;
document.getElementById("pointer").innerHTML = "►";
} else {
if (dealerscore > userscore) {
dealerscore = dealerscore + 4;
userscore = userscore - 4;
document.getElementById("pointer").innerHTML = "◄";
}
}
}
}

function chekingscores() {
if (userscore <= 0) {
userscore = 0;
winner = 1;

document.getElementById("mainbtn").disabled = true;
document.getElementById("score").value = 'user';
} else {
if (dealerscore <= 0) {
userscore = 0;
winner = 2;


document.getElementById("mainbtn").disabled = true;
document.getElementById("score").value = 'dealer';

}
}
}

function openForm() {
document.getElementById("myForm").style.display = "block";
}

function closeForm() {
document.getElementById("myForm").style.display = "none";
}

lotocards()


<?php
echo '</script'; ?>
>


</body>

</html><?php
}
}
