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
            <h2>Alors, quelle famille rend Nounours malade ?</h2>

            <p>Il y a 4 familles de bactéries dans cet échantillon :</p>
            <a href=""<div class="cercle cerclevert"></div>
            <p>Versinia</p>
            <div class="cercle cerclebleu"></div>
            <p>Bleufidus</p>
            <div class="cercle cerclerouge"></div>
            <p>Rougeocoque</p>
            <div class="cercle cerclejaune"></div>
            <p>Pseudojaunasse</p>

        <?php
        if(isset($_GET['a']) && $_GET['a'] == "unknown"){
            ?>
                <div class="alert alert-success" role="alert">Et oui, on ne peut pas répondre pour le moment.</div>
                <a class="btn btn-outline-primary btn-lg" role="button" href= "./metagenomique_snippy.php">Continuer</a></p>
            <?php
        }else{
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
            <p><a class="btn btn-outline-primary btn-lg" role="button" href= "./metagenomique_trie.php?a=versinia">Versinia</a></p>
            <p><a class="btn btn-outline-primary btn-lg" role="button" href= "./metagenomique_trie.php?a=bleufidus">Bleufidus</a></p>
            <p><a class="btn btn-outline-primary btn-lg" role="button" href= "./metagenomique_trie.php?a=pseudojaunasse">Pseudojaunasse</a></p>
            <p><a class="btn btn-outline-primary btn-lg" role="button" href= "./metagenomique_trie.php?a=rougeocoque">Rougeocoque</a></p>
            <p><a class="btn btn-outline-primary btn-lg" role="button" href= "./metagenomique_trie.php?a=unknown">Je ne sais pas</a></p>
            <?php
        }
        ?>
        </div>
    </div>
</div>

<?php
require("footerNounours.php");
?>
