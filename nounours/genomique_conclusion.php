<?php
$bodyclass = 'labo2';
require("headerNounours.php");
?>

<h1>Quelle est la famille de bactéries responsable de la blastouille de Nounours ?</h1>

<div class="row justify-content-center">
    <div class="col-8">
        <div class="explication">
            <p>Grâce à toi, <?php echo $_SESSION['explorerName']; ?>, nous savons maintenant que c'est Versinia pustulus qui rend Nounours malade&nbsp;!</p>
            <p>Voilà ta fiche d’enquête remplie avec ces nouvelles informations&nbsp;!</p>
            <a class="btn btn-outline-primary btn-lg" role="button" href= "./proteomique.php">Continuer</a>

            <div class="fiche_enquete">
                <p><?php include('../media/nounours/cluedo-3.svg'); ?></p>
            <div class="fiche_enquete">
        </div>
    </div>
</div>


<?php
require("footerNounours.php");
?>
