<?php
$bodyclass = 'labo';
require("headerNounours.php");
?>

<h1>Quelle est la famille de bactéries responsable de la blastouille de Nounours ?</h1>

<div class="row justify-content-center">
    <div class="col-8">
        <div class="explication">
            <p>Merci  <?php echo $_SESSION['explorerName']; ?>&nbsp;! Grâce à toi on sait que la bactérie qui rend Nounours malade est une Versinia !</p>
            <p>Voilà ta fiche d’enquête remplie avec ces nouvelles informations&nbsp;!</p>
            <a class="btn btn-outline-primary btn-lg" role="button" href= "./genomique.php">Continuer</a>

            <div class="fiche_enquete">
                <p><?php include('../media/nounours/cluedo-2.svg'); ?></p>
            </div>
        </div>
    </div>
</div>


<?php
require("footerNounours.php");
?>
