<?php
$bodyclass = 'labo2';
require("headerNounours.php");
require("genomique_seqs.php");
?>


<h1>Quelle espèce de Versinia rend Nounours malade ?</h1>

<div class="row justify-content-left">
    <div class="col-9">
        <div class="explication">
            <blockquote><p>&laquo;&nbsp;Ouah super&nbsp;!</p>
            <p>On peut maintenant <span class="vert">me soigner</span> alors&nbsp;!</p>
            <p>Il suffit de <span class="violet">m’enlever toutes les Versinia</span>&nbsp;!&nbsp;&raquo;</p></blockquote>
            <blockquote><p>&laquo;&nbsp;Non Nounours&nbsp;!</p>
            <p>Ce n’est pas si simple. Regarde chez Snippy aussi, <span class="rose">il y a des Versinia</span> et je suis sure qu’elles l’<span class="jaune">aident à manger</span>&nbsp;!&nbsp;&raquo;</p></blockquote>
            <blockquote><p>&laquo;&nbsp;Dans la famille Versinia nous connaissons quatre bactéries&nbsp;: beatis, grognus, pustulus, et trifors.</p>
            <p>Nous devons découvrir <span class="orange">laquelle te rend malade</span> pour pouvoir te soigner&nbsp;!&nbsp;&raquo;</p></blockquote>

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
    </div>
        <div align="center">
        <p><a class="btn btn-outline-primary btn-lg" role="button" href= "./genomique_suite.php">Continuer</a></p></div>
</div>
</div>

<?php
require("footerNounours.php");
?>
