
<?php
require_once "../_Partials/header.view.php"
?>

<div id="contains">

    <!------- Login form ----------->
    <form action="../../assets/php/connection.php" method="POST">
        <h2>Connexion</h2>
            <input type="text" name="pseudo" id="pseudo" placeholder="Pseudo" minlength="3" maxlength="50" required>
            <input type="password" name="password" id="password" placeholder="Mot de passe" minlength="6" maxlength="60" required>
        <button name="buttonValidateC" id="buttonValidateC">Se connecter</button>
    </form>

    <p>Pourquoi vous inscrire ? Ceci est un site qui sera toujours en evolutions !
        En vous inscrivant sur se site vous accéderez aux Campagnes et a d'autres nouveautés qui arriveront trés vite</p>

    <!------- Registration Form ------------->
    <form action="../../assets/php/registration.php" method="POST">
        <h2>Inscription</h2>
            <input type="text" name="pseudoInscript" id="pseudoInscript" placeholder="Votre pseudo" minlength="2" maxlength="50" required>
            <input type="text" name="emailInscript" id="emailInscript" placeholder="Votre email" required>
            <input type="password" name="passwordInscript" id="passwordInscript" placeholder="Créer un mot de passe" minlength="6" maxlength="60" required>
            <input type="password" name="passwordConfirmInscript" id="passwordConfirmInscript" placeholder="Confirmer le mot de passe" minlength="6" maxlength="60" required>
        <div>
            <input type="checkbox" name="acceptCheckBox" id="acceptCheckBox">
            <Label for="accept">Merci d'accepter de respecter les autres utilisateurs !</Label>
        </div>
        <button name="buttonValidateI" id="buttonValidateI">S'inscrire</button>
    </form>
</div>

<script src="../../assets/js/connection.js"></script>
