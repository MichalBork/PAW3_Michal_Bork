{extends file="Form.tpl"}
{block name=Form}
    <form id="stripe-login" action="{$conf->action_root}login" method="get">

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
            <p>{foreach $msgs->getMessages() as $msg}
            <div class="alert {if $msg->isInfo()}alert-success{/if}
                   {if $msg->isWarning()}alert-warning{/if}
                   {if $msg->isError()}alert-danger{/if}" role="alert">
                {$msg->text}
            </div>
            {/foreach}</p>

        </div>
        <div class="field field-checkbox padding-bottom--24 flex-flex align-center">

        </div>
        <div class="field padding-bottom--24">
            <input type="submit" name="submit" value="Continue">
        </div>
        <div class="field">


        </div>
    </form>
{/block}