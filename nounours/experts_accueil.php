<?php
require("headerNounours.php");
?>

<h1>Les experts bioinfo</h1>

<div class="row">
    <div class="col-8">
        <audio controls autoplay src='../media/sons/intro_experts_bioinfo.mp3' type="audio/mpeg"></audio>
        <p>Voici Nounours, notre mascotte. Il a très mal au ventre. Le médecin des peluches, le nounoursologue, est formel: il a attrapé une maladie que seule les ours en peluche peuvent attraper : <b>la blastouille</b> ! C’est une maladie bactérienne, mais de bactérie inconnue. Les médicaments que le nounoursologue lui a donné n’ont pas marché I </p>

        <p>Aide nous à mener l'enquête pour identifier la bactérie responsable de la maladie de Nounours et lui trouver un médicament.</p>

        <p class="text-center"><a class="btn btn-outline-primary btn-lg bouton-enquete" role="button" href= "./fiche_enquete.php">Commencer l'enquête</a></p>
    </div>

    <div class="col-4">
        <p><img src="../media/nounours/photo_nounours.png" width="100%" class="round" /></p>
    </div>
</div>

<div class="row">
    <div class="card col-4">
        <img src="../media/nounours/nounours_masque.JPG" class="img-fluid"/>
    </div>

    <div class="card col-4">
        <h5 class="card-title text-center"><i class="fas fa-disease"></i> La blastouille</h5>
        <p class="card-text"><b>Symptômes :</b> Très mal au ventre</p>
        <p class="card-text"><b>Cause :</b> Bactérie</p>
        <p class="card-text"><b>Traitement :</b> Inconnu</p>
    </div>

    <div class="card col-4">
        <h5 class="card-title text-center"><i class="fas fa-book-open"></i>Définition</h5>
        <p class="card-text"><b>Bactérie :</b> Être vivant avec une seule cellule. Parfois ils sont responsables de maladie (angine, coqueluche..)</p>
        <p class="card-text"><b>Cellule :</b> élément de base de tous les êtres vivants</p>
        <p class="card-text"></p>
    </div>
</div>

<?php
require("footerNounours.php");
?>
