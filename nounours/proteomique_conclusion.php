<?php
$bodyclass = 'labo';
require("headerNounours.php");
?>

<h1>Quelle est la famille de bactéries responsable de la blastouille de Nounours ?</h1>

<div class="row justify-content-center">
    <div class="col-8">
        <div class="explication">
            <p>Maintenant que tu as deviné la forme de la versine on peut fabriquer le bon medicament pour empecher la versine de rendre Nounours malade !</p>
            <p>Voilà ta fiche d’enquête remplie avec ces nouvelles informations !</p>
            <a class="btn btn-outline-primary btn-lg" role="button" href= "./congres.php">Continuer</a>

            <p><?php include('../media/nounours/cluedo2.svg'); ?></p>
        </div>
    </div>
</div>


<?php
require("footerNounours.php");
?>
