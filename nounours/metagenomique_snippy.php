<?php
$bodyclass = 'labo';
require("headerNounours.php");
?>

<h1>Quelle est la famille de bactéries responsable de la blastouille de Nounours ?</h1>

<h2>Comment connaître la famille responsable si on ne sait pas ce qu’il se passe chez un nounours en bonne santé ?
</h2>

<p>Heureusement Snippy, le grand frère de Nounours n’est pas malade ! On va prend donc également un bout du microbiote de Snippy et le comparer à celui de Nounours.</p>

<h2>Les deux échantillons</h2>

<div class="row">
    <div class="col-5">
        <p><img src="../media/nounours/microbiote_2.JPG" width="100%" /></p>
    </div>

    <div class="col-7">
        <h2>Alors, quelle famille rend Nounours malade ?</h2>
        <?php
        if(isset($_GET['a']) && $_GET['a'] == "versinia"){
            ?>
                <div class="alert alert-success" role="alert">Bravo ! C'est bien une bactérie de la famille des Versinia qui rend Nounours malade. En effet, on peut voir que l'échantillon de Nounours en contient beaucoup plus que celui de Snippy.</div>
            <?php
        }else{
            if(isset($_GET['a']) && $_GET['a'] == "unknown"){
                ?><div class="alert alert-danger" role="alert">As-tu besoin d'aide ? Regarde les différences de nombre de bactéries de chaque couleur.</div><?php
            }
            if(isset($_GET['a']) && $_GET['a'] == "bleufidus"){
                ?><div class="alert alert-danger" role="alert">Bleufidus, es-tu sûr ?</div><?php
            }
            if(isset($_GET['a']) && $_GET['a'] == "pseudojaunasse"){
                ?><div class="alert alert-danger" role="alert">Pseudojaunasse, es-tu sûr ?</div><?php
            }
            if(isset($_GET['a']) && $_GET['a'] == "rougeocoque"){
                ?><div class="alert alert-danger" role="alert">Rougeocoque, es-tu sûr ?</div><?php
            }
            ?>
            <p><a class="btn btn-outline-primary btn-lg" role="button" href= "./metagenomique_snippy.php?a=versinia">Versinia</a></p>
            <p><a class="btn btn-outline-primary btn-lg" role="button" href= "./metagenomique_snippy.php?a=bleufidus">Bleufidus</a></p>
            <p><a class="btn btn-outline-primary btn-lg" role="button" href= "./metagenomique_snippy.php?a=pseudojaunasse">Pseudojaunasse</a></p>
            <p><a class="btn btn-outline-primary btn-lg" role="button" href= "./metagenomique_snippy.php?a=rougeocoque">Rougeocoque</a></p>
            <p><a class="btn btn-outline-primary btn-lg" role="button" href= "./metagenomique_snippy.php?a=unknown">Je ne sais pas</a></p>
            <?php
        }
        ?>
    </div>


<?php
require("footerNounours.php");
?>
