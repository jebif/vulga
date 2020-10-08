<?php
$bodyclass = 'labo';
require("headerNounours.php");
?>

<h1>Quelle est la famille de bactéries responsable de la blastouille de Nounours ?</h1>

<div class="row justify-content-left">
    <div class="col-md-6 col-lg-4">
        <div class="explication">
            <p>Et oui <?php echo $_SESSION['explorerName']; ?>&nbsp;! Si on n'a que cette information, <span class="vert">on ne peut pas deviner</span> de quelle famille est la bactérie qui rend malade Nounours.</p>
            <blockquote>
            <p>&laquo;&nbsp;Mais alors, <span class="orange">comment on peut savoir</span> quelle famille me rend malade&nbsp;?&nbsp;&raquo;</p></blockquote>
            <blockquote><p>&laquo;&nbsp;On va regarder ce qu’il se passe chez un ours en peluche <span class="bleuclair">en bonne santé</span>&nbsp;! ça sera notre <span class="violet">témoin</span>&nbsp;!&nbsp;&raquo;</p></blockquote>
            <blockquote><p>&laquo;&nbsp;Oh ! mon grand-frère Snippy aussi est un ours en peluche ! et lui <span class="vert">il a pas mangé la même chose que moi</span> ! il pourrait être notre témoin &nbsp;!&nbsp;&raquo;</p></blockquote>
            <blockquote><p>&laquo;&nbsp;Très bonne idée Nounours, <span class="jaune">regardons le microbiote de Snippy</span>&nbsp;!&nbsp;&raquo;</p></blockquote>
        </div>
    </div>

    <div class="col-lg-7 col-md-6">
        <div class="explication">
            <p><img src="../media/nounours/sample_nounours_snippy.svg" width="100%" /></p>

            <h2>Alors <?php echo $_SESSION['explorerName']; ?> quelle famille de bactéries rend Nounours malade ?</h2>

            <?php
            if(isset($_GET['a'])){
                if($_GET['a'] != "versinia"){
                    ?><div class="alert alert-danger" role="alert">As-tu besoin d'aide ? Regarde bien les différences de nombre de bactéries de chaque couleur.</div><?php
                }else{
                    ?><div class="alert alert-success" role="alert">Bravo <?php echo $_SESSION['explorerName']; ?>&nbsp;! Il s'agit bien des Versinia. En effet, leur nombre est bien plus important chez Nounours que chez Snippy. Les autres bactéries sont présentes en quantités similaires chez Nounours et Snippy.</div>
                    <div align="center"><a class="btn btn-outline-primary btn-lg" role="button" href= "./metagenomique_conclusion.php">Continuer</a></div>
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
