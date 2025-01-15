<?php
require_once 'templates/header.php';
?>

<div class="text-center">
    <h2>Détail du trajet du 23/11/2023</h2>
    <a class="d-flex justify-content-start" href="/covoiturage.php">Retour aux résultats</a>
</div>
<div class="container detailTrajet">
    <div class="profilEcodriver">
        <img src="/Assets/images/homme.png" alt="photo EcoDriver">
        <p>EcoDriver Filipe</p>
        <p>Note des EcoRiders : 4 / 5 <i class="bi bi-star-fill"></i></p>
    </div>
    <div class="prefEcodriver">
        <p>Les préférences de Filipe</p>
        <ul>
            <li>Enfants bienvenus</li>
            <li><img src="/Assets/images/icons8-chien-32.png" alt="icone chien">Animaux acceptés</li>
            <li>Non fumeur</li>
            <li>Musique d'ambiance</li>
            <li>Friandises, boissons à disposition</li>
        </ul>
    </div>
</div>

<?php
require_once 'templates/footer.php';
?>