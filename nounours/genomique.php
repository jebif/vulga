<?php
$bodyclass = 'labo';
require("headerNounours.php");
require("genomique_seqs.php");
?>


<h1>Quelle espèce de Versinia rend Nounours malade ?</h1>

<div class="row justify-content-left">
    <div class="col-9">
        <div class="explication">
            <blockquote><p>&laquo;ouah super ! on peut maintenant me soigner alors! il suffit de m’enlever toutes les Versinia !&raquo;</p></blockquote>
            <blockquote><p>&laquo;Non Nounours ! Ce n’est pas si simple. Regarde chez Snippy aussi, il y a des Versinia et je suis sure qu’elles l’aident à manger !&raquo;</p></blockquote>
            <blockquote><p>&laquo;Dans la famille Versinia nous connaissons 4 bactéries : grognus, beatis, pustulus, et trifors.</p>
                <p>Nous devons découvrir laquelle te rend malade pour pouvoir te soigner !&raquo;</p></blockquote>

            <div class="row">
                <div class="col">
                    <img src="../media/nounours/beatis.svg" class="versinia cerclevert" />
                    <p>Versinia beatis</p>
                </div>
                <div class="col">
                    <img src="../media/nounours/grognus.svg" class="versinia cerclevert" />
                    <p>Versinia grognus</p>
                </div>
                <div class="col">
                    <img src="../media/nounours/pustulus.svg" class="versinia cerclevert" />
                    <p>Versinia pustulus</p>
                </div>
                <div class="col">
                    <img src="../media/nounours/trifors.svg" class="versinia cerclevert" />
                    <p>Versinia trifors</p>
                </div>
            </div>
            <p><a class="btn btn-outline-primary btn-lg" role="button" href= "./genomique_suite.php">Continuer</a></p>
        </div>
    </div>
</div>

<?php
require("footerNounours.php");
?>
