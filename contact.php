<?php
require_once 'templates/header.php';
?>

<h2 class="text-center my-2">Contact</h2>
<h3 class="text-center">Pour toute question, n'hésitez pas à nous contacter via le formulaire ci dessous</h3>

<div class="container">
    <form method="get">
        <label for="name">Votre nom</label>
        <input type="text" name="name" id="name" class="form-control my-2" placeholder="Nom">
        <label for="text">Votre message</label>
        <textarea name="" id="" class="form-control my-2">Votre message ici</textarea>
    </form>
    <div class="text-center my-4">
        <button type="submit">Envoyer le message</button>
    </div>
    <p>Votre message sera traité dans les plus brefs délais</p>
</div>

<div class=" container my-4">
    <a href="/index.php">Retour à l'acceuil</a>
</div>


<?php
require_once 'templates/footer.php';
?>