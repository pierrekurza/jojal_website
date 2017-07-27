<?= $this->Html->script(['inscription_form.js', 'inscription_datepicker.js', 'jquery.validate.js'], array('inline' => false)); ?>

<div class="account">
    <form method="post" class="inscriptionValidation" action="/users/creer">

        <input class="validate" placeholder="Login" type="text" id="login" name="login" autofocus/>

        <br>
        <input class="validate error" placeholder="Lieu" type="text" id="lieu" name="lieu"/>

        <br>
        <input class="datepickerInscription error" placeholder="Date de naissance" type="date" id="dateNaissance" name="dateNaissance"/>

        <br>
        <input class="validate error" placeholder="Adresse Mail" type="email" id="mail" name="mail" />

        <br>
        <input placeholder="Mot de passe" id="password" name="password" type="password" class="error">

        <br>
        <input name="password_confirm" placeholder="Mot de passe (confirmation)" id="passwordConfirm" type="password" class="error">
        <br>
        <br>
        <button class="btn waves-effect waves-light red" type="submit">S'inscrire</button>
    </form>
</div>
