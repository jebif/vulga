<?php
$bodyclass = 'congres';
require("headerNounours.php");
?>

<h1>Congrès International de Blastouillogie</h1>

<div class="row justify-content-left">
    <div class="col-6">
        <div class="explication">
            <p>Bienvenue au congrès de blastouillogie, <?php echo $_SESSION['explorerName']; ?></p>
            <blockquote><p>&laquo;&nbsp;Grâce à nos experts nous avons pu identifier la bactérie responsable de la blastouille. Docteur, pouvez-vous nous en dire plus&nbsp;?&nbsp;&raquo;</p></blockquote>
            <blockquote><p>&laquo;&nbsp;Oui c’est bien ça&nbsp;! Grâce à mon équipe, nous savons maintenant que Versinia pustulus donne la blastouille. Nous avons également découvert la forme de la versine et nous pouvons désormais soigner tous les ours en peluche malade&nbsp;!&nbsp;&raquo;</p></blockquote>
            <blockquote><p>&laquo;&nbsp;C’est une super nouvelle&nbsp;! Merci&nbsp;! Et vous nounours, que pensez-vous de cette découverte &nbsp;?&nbsp;&raquo;</p></blockquote>
            <blockquote><p>&laquo;&nbsp;Je suis très content d’être enfin soigné et que la médecine avance.&nbsp;&raquo;</p></blockquote>
            <blockquote><p>&laquo;&nbsp;Que pensez-vous faire après tout ça &nbsp;?&nbsp;&raquo;</p></blockquote>
            <blockquote><p>&laquo;&nbsp;Je pense partir en vacances pour me remettre de mes émotions&nbsp;!&nbsp;&raquo;</p></blockquote>
            <p><a class="btn btn-outline-primary btn-lg" href="remerciements.php">Remerciements</a></p>
        </div>
    </div>
</div>

<?php
require("footerNounours.php");
?>
