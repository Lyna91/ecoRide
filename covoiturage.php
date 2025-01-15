<?php
require_once 'templates/header.php';
?>

<h2 class="text-center">Les covoiturages</h2>
<section class="rechercheCovoiturage">
    <div>
        <form class="container formCovoiturage" method="get">
            <legend class="legendRecherche">Recherche</legend>
            <label for="disabledTextInput" class="form-label">Ville de départ</label>
            <input type="text" class="form-control" id="villeArrivee" placeholder="Paris">
            <label for="disabledTextInput" class="form-label">Ville d'arrivée</label>
            <input type="text" class="form-control" id="villeArrivee" placeholder="Lille">
            <label for="place">nombre de place</label><br>
            <select name="place" id="place">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
            <label for="date">Date</label>
            <input type="date-time">
            <button type="submit">C'est parti !</button>
        </form>
    </div>
</section>
<section class="container resultatRecherche">
    <div>
        <h2 class="text-center">Voici les résultats de votre recherche</h2><br>
        <div class="resultats">
            <div class="ecoRider1">
                <img src="/Assets/images/homme.png" alt="photo ecoRider">
                <p>EcoRider Filipe <i class="bi bi-lightning-charge"></i></p>
                <p><i class="bi bi-calendar"></i> 13/12/2023</p>
            </div>
            <div class="trajet d-flex justify-content-around align-items-center">
                <div class="trajetAller my-4">
                    <p><i class="bi bi-flag"></i> 2 rue de la banque</p>
                    <p>75002 PARIS <i class="bi bi-geo-alt"></i></p>
                </div>
                <i class="bi bi-arrow-right"></i>
                <div class="trajetRetour my-4">
                    <p><i class="bi bi-flag"></i> Place de la mairie</p>
                    <p>21000 DIJON <i class="bi bi-geo-alt"></i></p>
                </div>
                <div class="nombrePlace my-4">
                    <p>Places : 2</p>
                </div>
                <div class="creditTrajet my-4">
                    <p><i class="bi bi-cash"></i> 22</p>
                </div>
            </div>
            <div class="text-end">
                <button type="submit" href="/templates/trajet.php">Détails</button>
            </div>
        </div>

    </div>
</section>


<?php
require_once 'templates/footer.php';
?>