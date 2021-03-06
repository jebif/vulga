<?php
$bodyclass = 'landscape';
require("headerNounours.php");
?>

<h1>Les experts bioinfo</h1>

<div class="row justify-content-around">
    <div class="col-7">
        <!--<audio controls autoplay src='../media/sons/intro_experts_bioinfo.mp3' type="audio/mpeg"></audio>-->
        <div class="explication">
            <p>Voici <span class="bleuclair">Nounours</span>, c'est notre mascotte. Hier il a mangé au restaurant.</p>
            <p>Depuis ce matin, il a <span class="bleu">très mal au ventre</span>.</p>
            <p>Il a décidé d'aller voir son médecin des peluches, le nounoursologue.</p>
            <p>Le nounoursologue lui a dit :</p>
            <blockquote class="medecin">
                <p>&laquo;C'est <span class="rose">la blastouille</span>.</p>
                <p>C'est une maladie que seuls les ours en peluche peuvent attraper ! Quand tu as mangé hier, tu as aussi avalé <span class="vert">un microbe</span>.</p>
                <p>D'après tes symptômes, je sais que c'est une bactérie qui t'a rendu malade, <span class="orange">mais je ne sais pas laquelle précisément</span>.&raquo;</p>
            </blockquote>
            <p>Le nounoursologue lui a donné <span class="jaune">des médicaments</span>.</p>
            <blockquote><p>&laquo;Voilà tes médicaments Nounours, reviens me voir si tu ne vas pas mieux !&raquo;</p></blockquote>
            <p>Une semaine après les médicaments n’ont toujours pas marché ! Il retourne chez le nounoursologue…</p>
            <blockquote><p>&laquo;Il faut faire appel <span class="violet">aux experts bioinfo</span> !&raquo;</p></blockquote>
            <p>Aide-nous à mener l'enquête pour identifier la bactérie responsable de la maladie de Nounours et lui trouver un médicament.</p>
        </div>

        <div align="center">
            <p>
            <form method="post" action="./fiche_enquete.php">
                <input type="text" class="form-control form-control-lg" name="explorerName" id="explorerName" placeholder="Pour commencer, indique ton nom d'expert" required />
                <input type="submit" class="btn btn-outline-primary btn-lg bouton-enquete" role="button" value="Commencer l'enquête" />
            </form>
            </p>
        </div>
    </div>

    <div class="col-3 justify-content-center">
        <div class="photoNounours">
            <img src="../media/nounours/photo_nounours.png" width="100%"/>
            <p class="legende">Nounours</p>
        </div>
    </div>
</div>

<?php
require("footerNounours.php");
?>
