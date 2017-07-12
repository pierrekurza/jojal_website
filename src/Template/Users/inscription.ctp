<div class="account">
    <?= $this->Form->create() ?>
    <label for="login">Login </label>
    <input class="validate" placeholder="Login" type="text" id="login" name="login" autofocus/>

    <label for="mail">Mail </label>
    <input class="validate" placeholder="Adresse Mail" type="text" id="mail" name="mail" autofocus/>

    <label for="password">Mot de passe</label>
    <input class="validate" placeholder="Mot de passe" type="password" id="password" name="password"/>

    <label for="password_confirm">Confirmation</label>
    <input class="validate" placeholder="Comfirmation du mot de passe" type="password" id="password_confirm" name="password_confirm"/>

    <?= $this->Form->button('S\'inscrire', array('class' => 'btn btn-default light-blue accent-3')) ?>
    <?= $this->Form->end() ?>
</div>
