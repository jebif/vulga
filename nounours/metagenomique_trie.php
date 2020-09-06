<?php
require("headerNounours.php");
?>

<h1>Quelle est la famille de bactéries responsable de la blastouille de Nounours ?</h1>

<p>Il faut donc que l'on identifie la famille de bactérie qui rend Nounours malade.</p>

<p>Pour cela on va regarder dans son microbiote intestinal. Le microbiote est essentiel pour vivre. On va donc en prendre qu'un tout petit morceau. On parle d'échantillon.</p>

<p>Une fois notre échantillon prelevé on peut voir toutes les bactéries qui sont dedans !</p>

<h2>L'échantillon récolté chez Nounours</h2>

<div class="row">
    <div class="col-4">
        <p><img src="../media/nounours/microbiote_trie_nounours.JPG" width="100%" /></p>
    </div>

    <div class="col-4">
        <p>Il y a 4 familles de bactéries dans cet échantillon :</p>
        <div class="cercle cerclevert"></div>Versinia
        <div class="cercle cerclebleu"></div>Bleufidus
        <div class="cercle cerclerouge"></div>Rougeocoque
        <div class="cercle cerclejaune"></div>Pseudojaunasse
    </div>

    <div class="col-4">
        <h2>Alors, quelle famille rend Nounours malade ?</h2>
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

<?php
require("footerNounours.php");
?>
