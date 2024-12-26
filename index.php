<?php
require_once 'templates/header.php';
?>

<div>
    <div class="card">
        <img src="/Assets/images/imageEcranAcceuil.jpg" class="img-fluid" alt="image acceuil">
        <div class="card-img-overlay">
            <h1 class="card-title">Bienvenue sur l'application EcoRide !</h1>
            <p class="card-text">Partagez la route avec d'autres EcoRiders</p>
        </div>
    </div>
</div>
<div class="formAcceuil my-4 container">
    <form method="get">
        <h3 class="text-center my-4">Rechercher une course</h3>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Ville de départ</label>
            <input type="text" class="form-control" id="villeDepart" placeholder="Paris">
        </div>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Ville d'arrivée</label>
            <input type="text" class="form-control" id="villeArrivee" placeholder="Lille">
        </div>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Date</label>
            <input type="date" class="form-control" id="villeArrivee" placeholder="Lille">
        </div>
        <button type="button" class="btn btn-warning">C'est parti !</button>
    </form>
</div>
<section class="cards">
    <div class="d-flex justify-content-around">
        <div class="card my-4 bg-dark text-white" style="width: 500px">
            <img src="/Assets/images/imageRoue.jpg" class="card-img-top d-block w-100 opacity-50" alt="...">
            <div class="card-img-overlay">
                <h5 class="card-title text-center">Derniers covoiturages</h5>
                <p>Paris - Lille / le 14/12/23 / EcoRider Filipe</p>
                <p>Lille - Perpignan / le 15/12/23 / EcoRider 2</p>
            </div>
        </div>
        <div class="card my-4 bg-dark text-white" style="width: 500px">
            <img src="/Assets/images/road-6774756_640.jpg" class="card-img-top d-block w-100 opacity-50" alt="...">
            <div class="card-img-overlay">
                <h5 class="card-title">Article du jour : L'éco conduite c'est quoi ?</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
        </div>
    </div>
</section>
<section class="mobile">
    <div class="links my-4">
        <a href="/covoiturage.php">Les derniers co-voiturages</a>
    </div>
    <div class="my-4">
        <a href="/covoiturage.php">L'éco conduite c'est quoi'</a>
    </div>
</section>

<?php
require_once 'templates/footer.php';
?>