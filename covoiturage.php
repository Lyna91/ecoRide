<?php
require_once 'templates/header.php';
?>

<h2 class="text-center">Les covoiturages</h2>
<section class="rechercheCovoiturage">
    <div>
        <form class="formCovoiturage" method="get">
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
<section class="resultatRecherche">
    <div>
        <h2 class="text-center">Voici les résultats de votre recherche</h2><br>
        <div class="resultats">
            <div class="ecoRider1">
                <img src="/Assets/images/homme.png" alt="photo ecoRider">
                <p>EcoRider Filipe</p>
                <i class="bi bi-lightning-charge"></i>
                <i class="bi bi-calendar"></i>
                <p>date : 13/12/2023</p>
            </div>
            <div class="trajet">
                <div class="trajetAller">
                    <i class="bi bi-flag"></i>
                    <p>2 rue de la banque</p>
                    <p>75002 PARIS</p>
                    <i class="bi bi-geo-alt"></i>
                </div>
                <i class="bi bi-arrow-right"></i>
                <div class="trajetRetour">
                    <i class="bi bi-flag"></i>
                    <p>Place de la mairie</p>
                    <p>21000 DIJON</p>
                    <i class="bi bi-geo-alt"></i>
                </div>
                <div class="nombrePlace">
                    <p>Places : 2</p>
                </div>
                <div class="creditTrajet">
                    <i class="bi bi-cash"></i>
                    <p>Crédit : 22</p>
                </div>
                <button type="submit">Détails</button>
            </div>
        </div>

    </div>
</section>


<?php
require_once 'templates/footer.php';
?>