<?php
$bodyclass = 'congres';
require("headerNounours.php");
?>

<h1>Congrès International de Blastouillogie</h1>

<div class="row justify-content-left">
    <div class="col-6">
        <!--<audio controls autoplay src='../media/sons/intro_experts_bioinfo.mp3' type="audio/mpeg"></audio>-->
        <div class="explication">
            <p>Bienvenue au congrès de blastouillogie <?php echo $_SESSION['explorerName']; ?></p>
            <blockquote><p>&laquo;Grâce à nos experts nous avons pu identifier la bactérie responsable de la blastouille. Docteur, pouvez vous nous en dire plus ?&raquo;</p></blockquote>
            <blockquote><p>&laquo;Oui c’est bien ça ! Grâce à mon equipe, nous savons maintenant que Versinia pustulus donne la blastouille. Nous avons également decouvert la forme de la versine et nous pouvons desormais soigner tous les ours en peluche malade !&raquo;</p></blockquote>
            <blockquote><p>&laquo;C’est une super nouvelle ! Merci ! Et vous nounours, que pensez vous de cette découverte ?&raquo;</p></blockquote>
            <blockquote><p>&laquo;Je suis très content d’être enfin soigné et que la médecine avance. &raquo;</p></blockquote>
            <blockquote><p>&laquo;Que pensez vous faire après tout ça ?&raquo;</p></blockquote>
            <blockquote><p>&laquo;Je pense partir en vacances pour me remettre de mes émotions !&raquo;</p></blockquote>
            <p><a class="btn btn-outline-primary btn-lg" href="remerciements.php">Remerciements</a></p>
        </div>
    </div>
</div>

<?php
require("footerNounours.php");
?>
