<?php
require_once 'templates/header.php';
?>

<h2 class="text-center my-4">Les covoiturages</h2>
<!-- section recherche covoiturage -->
<section class="rechercheCovoiturage">
    <div>
        <form class="container formCovoiturage" method="get">
            <legend class="legendRecherche">Votre recherche</legend>
            <input type="text" class="form-control my-4" id="villeArrivee" placeholder="Ville de départ">
            <input type="text" class="form-control my-4" id="villeArrivee" placeholder="Ville d'arrivée">
            <label for="place">nombre de place</label><br>
            <select name="place" id="place">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
            <label for="date">Date</label>
            <input type="date-time">
            <button class="my-4" type="submit">C'est parti !</button>
        </form>
    </div>
</section>
<!-- section resultat recherches -->
<section class="container my-4 resultatRecherche">
    <div>
        <h2 class="text-center">Voici les résultats de votre recherche</h2><br>
        <div class="resultats my-4">
            <div class="ecoRider2 p-3 my-4">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-6 d-flex align-items-center mb-3">
                        <img src="/Assets/images/homme.png" alt="photo EcoDriver" class="me-3">
                        <div>
                            <p class="mb-1">EcoDriver Filipe <i class="bi bi-lightning-charge"></i></p>
                            <small><i class="bi bi-calendar3 me-1"></i>13/11/23 à 5h35</small>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 mb-3 mb-lg-0">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="text-start">
                                <p class="mb-0"><i class="bi bi-geo-alt-fill text-warning"></i> 2 rue de la Banque<br>75002 PARIS</p>
                            </div>
                            <div class="text-center">
                                <i class="bi bi-circle-fill text-light"></i>
                                <i class="bi bi-arrow-right-short mx-2 text-light"></i>
                                <i class="bi bi-flag text-warning"></i>
                            </div>
                            <div class="text-end">
                                <p class="mb-0"><i class="bi bi-geo-alt-fill text-warning"></i> Place de la Mairie<br>21000 DIJON</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 d-flex align-items-center justify-content-between">
                        <div class="text-center">
                            <p class="mb-0">Places : <strong>2</strong></p>
                        </div>
                        <div class="text-center">
                            <p class="mb-0"><i class="bi bi-cash me-1"></i><strong>22 €</strong></p>
                        </div>
                        <a href="/trajet.php"><button>Détails</button></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container resultats">
            <div class="ecoRider1 p-3 my-4">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-6 d-flex align-items-center mb-3">
                        <img src="/Assets/images/homme.png" alt="photo EcoDriver" class="me-3">
                        <div>
                            <p class="mb-1">EcoDriver Filipe <i class="bi bi-lightning-charge"></i></p>
                            <small><i class="bi bi-calendar3 me-1"></i>13/11/23 à 5h35</small>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 mb-3 mb-lg-0">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="text-start">
                                <p class="mb-0"><i class="bi bi-geo-alt-fill text-warning"></i> 2 rue de la Banque<br>75002 PARIS</p>
                            </div>
                            <div class="text-center">
                                <i class="bi bi-circle-fill text-light"></i>
                                <i class="bi bi-arrow-right-short mx-2 text-light"></i>
                                <i class="bi bi-flag text-warning"></i>
                            </div>
                            <div class="text-end">
                                <p class="mb-0"><i class="bi bi-geo-alt-fill text-warning"></i> Place de la Mairie<br>21000 DIJON</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 d-flex align-items-center justify-content-between">
                        <div class="text-center">
                            <p class="mb-0">Places : <strong>2</strong></p>
                        </div>
                        <div class="text-center">
                            <p class="mb-0"><i class="bi bi-cash me-1"></i><strong>22 €</strong></p>
                        </div>
                        <a href="/trajet.php"><button>Détails</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
require_once 'templates/footer.php';
?>