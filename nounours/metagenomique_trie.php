<?php
$bodyclass = 'labo';
require("headerNounours.php");
?>

<h1>Quelle est la famille de bactéries responsable de la blastouille de Nounours ?</h1>

<div class="row justify-content-left">
    <div class="col-4">
        <div class="explication">
            <p>Merci <?php echo $_SESSION['explorerName']; ?> ! Grâce à toi on voit bien les familles !</p>

            <p><img src="../media/nounours/sample_nounours_ordered.svg" width="100%" /></p>
        </div>
    </div>


    <div class="col-8">
        <div class="explication">
            <h2>Alors <?php echo $_SESSION['explorerName']; ?> quelle famille de bactéries rend Nounours malade ?</h2>

            <?php
            if(isset($_GET['a']) && $_GET['a'] == "versinia"){
                ?><div class="alert alert-danger" role="alert">Versinia, es-tu sûr ?</div><?php
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
            <div class="row">
                <div class="col">
                    <a href="./metagenomique_trie.php?a=versinia"><div class="cercle cerclevert"></div></a>
                    <p><a href="./metagenomique_trie.php?a=versinia">Versinia</a></p>
                </div>
                <div class="col">
                    <a href="./metagenomique_trie.php?a=bleufidus"><div class="cercle cerclebleu"></div></a>
                    <p><a href="./metagenomique_trie.php?a=bleufidus">Bleufidus</a></p>
                </div>
                <div class="col">
                    <a href="./metagenomique_trie.php?a=rougeocoque"><div class="cercle cerclerouge"></div></a>
                    <p><a href="./metagenomique_trie.php?a=rougeocoque">Rougeocoque</a></p>
                </div>
                <div class="col">
                    <a href="./metagenomique_trie.php?a=pseudojaunasse"><div class="cercle cerclejaune"></div></a>
                    <p><a href="./metagenomique_trie.php?a=pseudojaunasse">Pseudojaunasse</a></p>
                </div>
                <div class="col">
                    <a href="./metagenomique_trie.php?a=pseudojaunasse"><div class="cercle cercleblanc">?</div></a>
                    <p><a href="./metagenomique_snippy.php">Je ne sais pas</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require("footerNounours.php");
?>
