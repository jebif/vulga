<?php
$bodyclass = 'labo';
require("headerNounours.php");
?>

<h1>Quelle est la famille de bactéries responsable de la blastouille de Nounours ?</h1>

<div class="row justify-content-left">
    <div class="col-4">
        <div class="explication">
            <p>Et oui <?php echo $_SESSION['explorerName']; ?> ! Si on a que cette information, on ne peut pas deviner de quelle famille est la bactérie qui te rend malade Nounours</p>
            <blockquote>
            <p>&laquo;Mais alors, comment on peut savoir quelle famille me rend malade ?&raquo;</p></blockquote>
            <blockquote><p>&laquo;On va regarder ce qu’il se passe chez un ours en peluche en bonne santé ! ça sera notre témoin !&raquo;</p></blockquote>
            <blockquote><p>&laquo;Oh ! mon grand-frère Snippy aussi est un ours en peluche ! et lui il a pas mangé la même chose que moi ! il pourrait être notre témoin !&raquo;</p></blockquote>
            <blockquote><p>&laquo;Très bonne idée Nounours, regardons le microbiote de Snippy !&raquo;</p></blockquote>

            <p><img src="../media/nounours/sample_nounours_snippy.svg" width="100%" /></p>
        </div>
    </div>

    <div class="col-8">
        <h2>Alors, quelle famille rend Nounours malade ?</h2>
        <div class="explication">
            <h2>Alors <?php echo $_SESSION['explorerName']; ?> quelle famille de bactéries rend Nounours malade ?</h2>

            <?php
            if(isset($_GET['a'])){
                if($_GET['a'] != "versinia"){
                    ?><div class="alert alert-danger" role="alert">As-tu besoin d'aide ? Regarde bien les différences de nombre de bactéries de chaque couleur.</div><?php
                }else{
                    ?><div class="alert alert-success" role="alert">Bravo <?php echo $_SESSION['explorerName']; ?>. Il s'agit bien des Versinia. En effet, leur nombre est bien plus important chez Nounours que chez Snippy. Les autres bactéries sont présentes en quantité similaire chez Nounours et Snippy.</div>
                    <a class="btn btn-outline-primary btn-lg" role="button" href= "./metagenomique_conclusion.php">Continuer</a>
                    <?php
                }
            }
            ?>
            <div class="row">
                <div class="col">
                    <a href="./metagenomique_snippy.php?a=versinia"><div class="cercle cerclevert"></div></a>
                    <p><a href="./metagenomique_snippy.php?a=versinia">Versinia</a></p>
                </div>
                <div class="col">
                    <a href="./metagenomique_snippy.php?a=bleufidus"><div class="cercle cerclebleu"></div></a>
                    <p><a href="./metagenomique_snippy.php?a=bleufidus">Bleufidus</a></p>
                </div>
                <div class="col">
                    <a href="./metagenomique_snippy.php?a=rougeocoque"><div class="cercle cerclerouge"></div></a>
                    <p><a href="./metagenomique_snippy.php?a=rougeocoque">Rougeocoque</a></p>
                </div>
                <div class="col">
                    <a href="./metagenomique_snippy.php?a=pseudojaunasse"><div class="cercle cerclejaune"></div></a>
                    <p><a href="./metagenomique_snippy.php?a=pseudojaunasse">Pseudojaunasse</a></p>
                </div>
                <div class="col">
                    <a href="./metagenomique_snippy.php?a=unknown"><div class="cercle cercleblanc">?</div></a>
                    <p><a href="./metagenomique_snippy.php?a=unknown">Je ne sais pas</a></p>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
require("footerNounours.php");
?>
