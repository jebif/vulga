<?php
$bodyclass = 'labo';
require("headerNounours.php");
?>

<?php
if(isset($_POST['explorerName'])){
    $_SESSION['explorerName'] = htmlspecialchars($_POST['explorerName']);
}
?>
<h1>Bonjour <?php echo $_SESSION['explorerName']; ?></h1>
<div class="row justify-content-center">
    <div class="explication col-8 text-center">
        <p>Merci <?php echo $_SESSION['explorerName']; ?> d'aider Nounours a aller mieux !</p>
        <p>Pour pouvoir l'aider, nous allons mener l'enquête à partir de 3 méthodes. Une fiche d'enquête que tu peux voir ci-dessous se remplira au fur et à mesure de cette enquête.</p>
        <p>Nounours compte sur toi !</p>
        <a class="btn btn-outline-primary btn-lg" role="button" href="./metagenomique.php">Commencer l'enquête</a>

        <p class="fiche_enquete">
            <?php include('../media/nounours/cluedo2.svg'); ?>
        </p>
    </div>
</div>

<?php
require("footerNounours.php");
?>
