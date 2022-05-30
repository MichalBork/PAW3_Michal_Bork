{extends file="Form.tpl"}
{block name=Form}
    <form id="stripe-login" action="{$conf->action_root}register" method="post">
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
            <p>{foreach $msgs->getMessages() as $msg}
            <div class="alert {if $msg->isInfo()}alert-success{/if}
                   {if $msg->isWarning()}alert-warning{/if}
                   {if $msg->isError()}alert-danger{/if}" role="alert">
                {$msg->text}
            </div>
            {/foreach}</p>

        </div>
        <div class="field padding-bottom--24">
            <input type="submit" name="submit" value="Continue">
        </div>
        <div class="field">


        </div>
    </form>
{/block}
