<?php
$bodyclass = 'labo2';
require("headerNounours.php");
require("genomique_seqs.php");
?>


<h1>Quelle espèce de Versinia rend Nounours malade ?</h1>

<div class="row justify-content-left">
    <div class="col-md-9">
        <div class="explication">
            <blockquote>
                <p>&laquo;&nbsp;Pendant qu’on parlait, nos collègues biologistes ont réussi à <span class="vert">isoler la bactérie</span> qui te rend malade et à <span class="jaune">extraire son ADN</span>. Il faut maintenant retrouver qui c’est&nbsp;!&nbsp;&raquo;</p>
            </blockquote>
            <blockquote><p>&laquo;&nbsp;C’est quoi l’ADN&nbsp;?&nbsp;&raquo;</p></blockquote>
            <blockquote><p>&laquo;Hum, <span class="rose">difficile comme question</span>.</p>
            <p>L’ADN est <span class="bleu">une grande molécule</span>.</p>
            <p>Elle <span class="jaune">code</span> toutes nos <span class="jaune">différentes caractéristiques</span> en utilisant <span class="vert">quatre lettres</span>.</p>
            <p>Par exemple dans ton ADN, Nounours il y a un endroit où c’est écrit qu’il y a des poils blancs et des yeux noirs. Dans nos livres à nous, on utilise 26 lettres pour fabriquer nos mots.</p>
            <p>Dans l’ADN il n’y en a que quatre différentes&nbsp;: <span class="vert">A, T, C et G</span>. L’ensemble des lettres qui forment l’ADN s’appelle <span class="rose">une séquence.&nbsp;&raquo;</p></blockquote>
            <blockquote><p>&laquo;&nbsp;Et ça suffit pour tout raconter &nbsp;?!&nbsp;&raquo;</p></blockquote>
            <blockquote><p>&laquo;&nbsp;Oui, c’est fascinant&nbsp;!</p>
            <p>Pour nos Versinia heureusement on connait <span class="vert">la séquence complète</span>, le livre si tu préfères, pour chacune.&nbsp;&raquo;</p></blockquote>
            <blockquote><p>&laquo;&nbsp;Donc il faut juste regarder <span class="jaune">à quelle séquence appartient l’ADN</span> trouvé par les biologistes&nbsp;?&nbsp;&raquo;</p></blockquote>
            <blockquote><p>&laquo;&nbsp;Oui, mais ce n'est pas si simple.</p>
            <p>Les machines utilisées ont coupé la séquence en <span class="bleu">plusieurs morceaux</span>.</p>
            <p>On a donc plusieurs <span class="orange">petits bouts à replacer sur les différentes séquences</span> de Versinia.</p>
            <p>Et puis pour être sur de pas avoir raté un morceau, <span class="violet">la machine recommence plusieurs fois</span>.</p>
            <p>Il y a donc des morceaux en <span class="jaune">plusieurs exemplaires</span>.&nbsp;&raquo;</p></blockquote>
            <blockquote><p>&laquo;&nbsp;Ça va, c’est facile&nbsp;! <span class="rose">C’est un puzzle…</span>&nbsp;&raquo;</p></blockquote>
            <blockquote><p>&laquo;&nbsp;Oui, mais il faut faire attention, un <span class="bleuclair">même morceau d’ADN peut appartenir à plusieurs bactéries</span>.</p>
            <p>Elles sont de la <span class="violet">même famille</span>&nbsp;!</p>
            <p>C’est normal d’avoir des <span class="bleu">caractéristiques communes</span>.</p>
            <p>Par exemple Snippy a aussi les poils blancs, il a donc le même bout d’ADN que toi pour la couleur des poils.&nbsp;&raquo;</p></blockquote>
        </div>
        <div align="center">
            <p><a class="btn btn-outline-primary btn-lg" role="button" href= "./genomique_jeu.php">Continuer</a></p>
        </div>
    </div>
</div>

<?php
require("footerNounours.php");
?>
