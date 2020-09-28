<?php
$bodyclass = 'labo';
require("headerNounours.php");
?>

<h1>Quelle est la famille de bactéries responsable de la blastouille de Nounours ?</h1>

<div class="row justify-content-left">
    <div class="col-9">
        <div class="explication">
            <p>Les experts ont obtenu les différentes bactéries de nounours.</p>
            <blockquote><p>&laquo;Voilà les différentes bactéries de ton microbiote nounours !&raquo;</p></blockquote>
            <blockquote><p>&laquo;Ouaaah il y en a de quatres couleurs différentes !!&raquo;</p></blockquote>
            <blockquote><p>&laquo;Oui ! exactement, il y a 4 familles de bactérie, mais c’est un peu compliqué de s’y retrouver dans tout ce bazar!&raquo;</p></blockquote>
            <p><?php echo $_SESSION['explorerName']; ?> clique sur le bouton “trier” à droite pour nous aider à y  voir plus clair !</p>

            <img src="../media/nounours/bacto_non_trie.svg" width="50%"/>
        </div>
    </div>

    <div class="col-3">
        <p><a class="btn btn-outline-primary btn-lg" role="button" href="./metagenomique_trie.php">Trier l'échantillon</a></p>
    </div>
</div>

<?php
require("footerNounours.php");
?>
