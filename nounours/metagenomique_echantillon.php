<?php
$bodyclass = 'labo';
require("headerNounours.php");
?>

<h1>Quelle est la famille de bactéries responsable de la blastouille de Nounours ?</h1>

<div class="row justify-content-left">
    <div class="col-9">
        <div class="explication">
            <p>Les experts ont obtenu les différentes bactéries de nounours.</p>
            <blockquote><p>&laquo;&nbsp;Voilà <span class="vert">les différentes bactéries de ton microbiote</span> Nounours&nbsp;!&nbsp;&raquo;</p></blockquote>
            <blockquote><p>&laquo;&nbsp;Ouaaah il y en a de <span class="bleuclair">quatre couleurs différentes</span>&nbsp;!!&nbsp;&raquo;</p></blockquote>
            <blockquote><p>&laquo;Oui&nbsp;! Exactement, il y a <span class="jaune">quatre familles de bactéries</span>, mais c’est un peu <span class="violet">compliqué de s’y retrouver</span> dans tout ce bazar&nbsp;!&nbsp;&raquo;</p></blockquote>
            <p><?php echo $_SESSION['explorerName']; ?> clique sur le bouton “trier l'échantillon” pour nous aider à y voir plus clair&nbsp;!</p>

            <p class="text-center"><img src="../media/nounours/bacto_non_trie.svg" width="50%" /></p>
        </div>

        <div align="center">
            <p><a class="btn btn-outline-primary btn-lg" role="button" href="./metagenomique_trie.php">Trier l'échantillon</a></p>
        </div>
    </div>


</div>

<?php
require("footerNounours.php");
?>
