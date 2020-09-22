<?php
require("headerNounours.php");
require("genomique_seqs.php");
?>

<div class="ContentText">

<h1>Quelle espèce de Versinia rend Nounours malade ?</h1>

<p>Maintenant que nous savons que c'est une bactérie de la famille des Versinia qui rend Nounours malade, nous voulons savoir quelle espèce en particulier. Dans une même famille, certaines espèces peuvent être pathogènes et d'autres non.</p>

<p>Pour cela nous allons étudier l'ADN de la bactérie identifiée et la comparer avec celui des bactéries de cette famille.</p>

<p>L'ADN est blablbla, A,T, G et C blablabla</p>

<div class="row d-flex justify-content-center">
    <div class="card col">
        <img src="../media/nounours/Beatis.png" class="versinia cerclevert card-img-top" />
        <div class="card-body">
            <h5 class="card-title text-center">Versinia beatis</h5>
        </div>
    </div>
    <div class="card col">
        <img src="../media/nounours/Grognus.png" class="versinia cerclevert card-img-top" />
        <div class="card-body">
            <h5 class="card-title text-center">Versinia grognus</h5>
        </div>
    </div>
    <div class="card col">
        <img src="../media/nounours/Pustulus.png" class="versinia cerclevert card-img-top" />
        <div class="card-body">
            <h5 class="card-title text-center">Versinia pustulus</h5>
        </div>
    </div>
    <div class="card  col">
        <img src="../media/nounours/Trifors.png" class="versinia cerclevert card-img-top" />
        <div class="card-body">
            <h5 class="card-title text-center">Versinia trifors</h5>
        </div>
    </div>
</div>

<p>Voici les séquences de nos 4 espèces : grognus, pustulus, beatis et trifors.</p>

<p class='z'>>Versinia pustulus</p>
<p><?php echo display_seq($pustulus); ?></p>
<p class='z'>>Versinia grognus</p>
<p><?php echo display_seq($grognus); ?>
<p class='z'>>Versinia trifors</p>
<p><?php echo display_seq($trifors); ?>
<p class='z'>>Versinia beatis</p>
<p><?php echo display_seq($beatis); ?>

<p><a class="btn btn-outline-primary btn-lg" role="button" href= "./genomique_jeu.php">C'est parti</a></p>
</div>

<?php
require("footerNounours.php");
?>
