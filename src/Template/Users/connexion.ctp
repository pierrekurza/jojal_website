<div class="account">
    <?= $this->Form->create() ?>
    <label for="login">Login </label>
    <input class="validate" placeholder="Login" type="text" id="login" name="login" autofocus/>
    <label for="password">Mot de passe</label>
    <input class="validate" placeholder="Mot de passe" type="password" id="password" name="password"/>
    <br>
    <?= $this->Form->button('Se connecter', array('class' => 'btn btn-default light-blue accent-3')) ?>
    <br>
    <br>
    <?= $this->Html->link('Mot de passe oublié ?', ['action' => 'reinitialiser-mot-de-passe']) ?>
    <?= $this->Form->end() ?>
</div>
