<?php
require_once 'templates/header.php';
?>


<div class=" container text-center my-4">
    <h2>Détail du trajet du 23/11/2023</h2>
    <a class="d-flex justify-content-start" href="/covoiturage.php">Retour aux résultats</a>
</div>
<div class="container my-4 detailTrajet">
    <div class="col1">
        <div class="profilEcodriver">
            <img src="/Assets/images/homme.png" alt="photo EcoDriver">
            <p>EcoDriver Filipe</p>
            <p>Note des EcoRiders : 4 / 5 </p>
        </div>
        <div class="prefEcodriver">
            <p>Les préférences de Filipe :</p>
            <li><img src="/Assets/images/iconizer-icoEnfant.svg" alt="ico enfant" width="20px" color="#D8EBB5"> Enfants bienvenus</li>
            <li><img src="/Assets/images/iconizer-dog.svg" class="icone" alt="ico animaux" width="20px"> Animaux acceptés</li>
            <li><img src="/Assets/images/iconizer-nonfumeur.svg" class="icone" alt="ico nonfumeur" width="20px"> Non fumeur</li>
            <li><img src="/Assets/images/iconizer-icoMusique.svg" class="icone" alt="ico musique" width="20px"> Musique d'ambiance</li>
            <li><img src="/Assets/images/iconizer-icoBonbons.svg" class="icone" alt="ico bonbon" width="20px"> Friandises, boissons à disposition</li>
        </div>
    </div>
    <div class="col2">
        <div class="autoEcodriver">
            <div class="auto justify-content-end">
                <img src="/Assets/images/peugeot-4803538_640.jpg" alt="photo auto" width="200px">
            </div>
        </div>
    </div>
</div>

<div class="container my-5 detailTrajet">
    <div class="card-custom">
        <div class="row">
            <!-- Section Ecodriver -->
            <div class="col-12 col-md-4 profile-section text-center mb-4 mb-md-0">
                <img src="/Assets/images/homme.png" alt="Profile">
                <h5 class="">Vous voyagerez avec<br><b>l'EcoDriver Filipe</b></h5>
                <p>Note des EcoRiders : 4,6/5 <i class="bi bi-star-fill"></i></p>
                <p><b>Ses préférences en voiture</b> <i class="bi bi-suit-heart-fill"></i></p>
                <ul class="list-unstyled text-center preferences">
                    <li><img src="/Assets/images/iconizer-icoEnfant.svg" alt="ico enfant" width="20px" color="#D8EBB5"> Enfants bienvenus</li>
                    <li><img src="/Assets/images/iconizer-dog.svg" class="icone" alt="ico animaux" width="20px"> Animaux acceptés</li>
                    <li><img src="/Assets/images/iconizer-nonfumeur.svg" class="icone" alt="ico nonfumeur" width="20px"> Non fumeur</li>
                    <li><img src="/Assets/images/iconizer-icoMusique.svg" class="icone" alt="ico musique" width="20px"> Musique d'ambiance</li>
                    <li><img src="/Assets/images/iconizer-icoBonbons.svg" class="icone" alt="ico bonbon" width="20px"> Friandises, boissons à disposition</li>
                </ul>
            </div>

            <!-- Section trajet -->
            <div class="col-12 col-md-5 text-center">
                <h6>Détail de votre trajet :</h6>
                <p><i class="bi bi-clock icon"></i> <b>Départ :</b> 5h35</p>
                <p><i class="bi bi-geo-alt icon"></i> <b>Adresse :</b> 2 rue de la Banque, 75002 PARIS</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5249.153564721245!2d2.3376314751229277!3d48.866280200153035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e235316863b%3A0x202e3b2fc780cc11!2s2%20Rue%20de%20la%20Banque%2C%2075002%20Paris!5e0!3m2!1sfr!2sfr!4v1738097737052!5m2!1sfr!2sfr" width="200" height="100" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <p><i class="bi bi-clock icon"></i> <b>Arrivée :</b> 8h30*</p>
                <p><i class="bi bi-geo-alt icon"></i> <b>Adresse :</b> Place de la libération, 21000 DIJON</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2704.6580114063727!2d5.038904775003896!3d47.321019207656626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f29de8f89614af%3A0xd9461c487fbb2318!2sPl.%20de%20la%20Lib%C3%A9ration%2C%2021000%20Dijon!5e0!3m2!1sfr!2sfr!4v1738097830440!5m2!1sfr!2sfr" width="200" height="100" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <p class="text-muted">*L'heure d'arrivée est approximative, elle dépend de la circulation.</p>
            </div>

            <!-- Section véhicule -->
            <div class="col-12 col-md-3 text-center">
                <h6>Le véhicule pour ce trajet :</h6>
                <img src="/Assets/images/peugeot-4803538_640.jpg" alt="Car" class="img-fluid mb-2">
                <p>Marque : Peugeot</p>
                <p>Modèle : E-2008</p>
                <p>Année : 2019</p>
                <p>Places : 4</p>
                <p>Places dispo : 2</p>
                <p></p>
                <div class="credits mb-3">22 crédits (dont 2 versés à EcoRide)</div>
                <a href="/signin.php"><button>Je participe</button></a>
            </div>
        </div>
    </div>
</div>

<?php
require_once 'templates/footer.php';
?>