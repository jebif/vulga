<?php
$bodyclass = 'landscape';
require("headerNounours.php");
?>

<h1>Congrès International de Blastouillogie</h1>

<div class="row justify-content-around">
    <div class="col-7">
        <!--<audio controls autoplay src='../media/sons/intro_experts_bioinfo.mp3' type="audio/mpeg"></audio>-->
        <div class="explication">
            <p>Bienvenue au congrès de blastouillogie <?php echo $_SESSION['explorerName']; ?></p>
            <blockquote><p>&laquo;Grâce à nos experts nous avons pu identifier la bactérie responsable de la blastouille. Docteur, pouvez vous nous en dire plus ?&raquo;</p></blockquote>
            <blockquote><p>&laquo;Oui c’est bien ça ! Grâce à mon equipe, nous savons maintenant que Versinia pustulus donne la blastouille. Nous avons également decouvert la forme de la versine et nous pouvons desormais soigner tous les ours en peluche malade !&raquo;</p></blockquote>
            <blockquote><p>&laquo;C’est une super nouvelle ! Merci ! Et vous nounours, que pensez vous de cette découverte ?&raquo;</p></blockquote>
            <blockquote><p>&laquo;Je suis très content d’être enfin soigné et que la médecine avance. &raquo;</p></blockquote>
            <blockquote><p>&laquo;Que pensez vous faire après tout ça ?&raquo;</p></blockquote>
            <blockquote><p>&laquo;Je pense partir en vacances pour me remettre de mes émotions !&raquo;</p></blockquote>
        </div>
    </div>

    <div class="col-3 justify-content-center">
        <div class="photoNounours">
            <img src="../media/nounours/photo_nounours.png" width="100%"/>
            <p class="legende">Nounours</p>
        </div>
    </div>
</div>

<!--
<div class="row">
    <div class="card col-4">
        <img src="../media/nounours/nounours_masque.JPG" class="img-fluid"/>
    </div>

    <div class="card col-4">
        <h5 class="card-title text-center"><i class="fas fa-disease"></i> La blastouille</h5>
        <p class="card-text"><b>Symptômes :</b> Très mal au ventre</p>
        <p class="card-text"><b>Cause :</b> Bactérie</p>
        <p class="card-text"><b>Traitement :</b> Inconnu</p>
    </div>

    <div class="card col-4">
        <h5 class="card-title text-center"><i class="fas fa-book-open"></i>Définition</h5>
        <p class="card-text"><b>Bactérie :</b> Être vivant avec une seule cellule. Parfois ils sont responsables de maladie (angine, coqueluche..)</p>
        <p class="card-text"><b>Cellule :</b> élément de base de tous les êtres vivants</p>
        <p class="card-text"></p>
    </div>
</div>
-->

<?php
require("footerNounours.php");
?>
