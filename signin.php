<?php
require_once 'templates/header.php';
?>

<h2 class="text-center">Connexion</h2>

<div class="container my-4">
    <form method="post">
        <label for="mail">Votre mail</label>
        <input type="mail" class="form-control my-2" id="mail" placeholder="votre mail">
        <label for="password">Votre mot de passe</label>
        <input type="password" class="form-control my-2" id="password" placeholder="votre mot de passe">
        <div class="text-center my-4">
            <button type="submit">Connexion</button>
        </div>
    </form>
</div>

<div>
    <p>Pas encore inscrit ?</p>
</div>

<?php
require_once 'templates/footer.php';
?>