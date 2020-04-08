<?php
require("./headerLoup.php");
$score=0;
$space = "....";
$pipe="&nbsp;&nbsp;";
$ccl = "Tu peux mieux faire, essaies encore ! 4 bases peuvent être alignées parfaitement.";
if ($_GET['s'] == "0"){$score=2;$space = "";$pipe="&nbsp;|&nbsp;&nbsp;|";}
else{if ($_GET['s'] == "1"){$score = 2;$space = ".";$pipe="&nbsp;&nbsp;&nbsp;&nbsp;||";}
else{if ($_GET['s'] == "2"){$score = 4;$ccl = "Tu as obtenu le meilleur score !";$space = "..";$pipe="&nbsp;&nbsp;||||";}
else{if ($_GET['s'] == "3"){$score = 1;$space = "...";$pipe="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|";}
}
}
}
?>
<h1>Voici 2 séquences à aligner :</h1>
<p>Clique sur l'une des bases de la séquence 1 pour l'aligner avec la première base de la séquence 2.</p>

<table>
    <tbody>
        <tr><td>Séquence 1 :</td><td>Séquence 2 :</td></tr>
        <tr>
            <td><a href="./AlignRes.php?s=0" class="c">C</a><a href= "./AlignRes.php?s=1"  class="g">G</a><a href= "./AlignRes.php?s=2" class="t">T</a><a href= "./AlignRes.php?s=3"  class="g">G</a><a href= "./AlignRes.php?s=4" class="a">A</a><span class="a">A</span></td>
            <td><span class="t">T</span><span  class="g">G</span><span class="a">A</span><span class="a">A</span><span class="a">A</span><span class="t">T</span></td>
        </tr>
    </tbody>
</table>

<h2>Ton alignement est-il le meilleur ?</h2>

<p class="alignement"><span class="c">C</span><span  class="g">G</span><span class="t">T</span><span  class="g">G</span><span class="a">A</span><span class="a">A</span><span class="z"><?php echo $space ?></span></p>
<p class="alignement"><span class="z"><?php echo $pipe ?></span></p>
<p class="alignement"><span class="z"><?php echo $space?></span><span class="t">T</span><span  class="g">G</span><span class="a">A</span><span class="a">A</span><span class="a">A</span><span class="t">T</span></p>


<p>Ton score est de <b><?php echo $score?></b>. <?php echo $ccl?></p>

<?php
    if ($_GET['s'] == "2"){
?>
    <p>Bravo !! Mais c'était un exemple facile. Clique sur le bouton ci-dessous pour un exemple plus compliqué.</p>
    <p><a class="btn btn-outline-primary btn-lg" role="button" href= "./Align2.php?c=0&amp;q=2&amp;s=0">Je veux faire un exemple plus compliqué</a></p>
<?php
    }
    require("./footerLoup.php");
?>
