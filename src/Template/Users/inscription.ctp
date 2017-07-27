<?= $this->Html->script(['inscription_form.js', 'inscription_datepicker.js'], array('inline' => false)); ?>

<div class="account">
    <?= $this->Form->create() ?>

    <label for="login">Login </label>
    <input class="validate" placeholder="Login" type="text" id="login" name="login" autofocus/>

    <label for="lieu">Où êtes-vous ? </label>
    <input class="validate" placeholder="Lieu" type="text" id="lieu" name="lieu"/>

    <label for="dateNaissance">Date de naissance </label>
    <input class="datepicker" placeholder="Date de naissance" type="text" id="dateNaissance" name="dateNaissance"/>

    <label for="mail">Mail </label>
    <input class="validate" placeholder="Adresse Mail" type="text" id="mail" name="mail" />

    <label for="password">Mot de passe</label>
    <input placeholder="Mot de passe" id="password" name="password" type="password" class="validate">

    <label id="lblPasswordConfirm" for="passwordConfirm" data-error="Password not match" data-success="Password Match">Mot de passe (confirmation)</label>
    <input name="password_confirm" placeholder="Mot de passe (confirmation)" id="passwordConfirm" type="password">

    <?= $this->Form->button('S\'inscrire', array('class' => 'btn btn-default light-blue accent-3')) ?>
    <?= $this->Form->end() ?>
</div>
