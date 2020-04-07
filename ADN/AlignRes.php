<?php
require("./headerLoup.php");
$score=0;
$space = "....";
$pipe="&nbsp;&nbsp;";
$ccl = "<h1>Vous pouvez mieux faire, essayez encore !<br>4 bases peuvent être alignées parfaitement.</h1>";
if ($_GET['s'] == "0"){$score=2;$space = "";$pipe="&nbsp;|&nbsp;&nbsp;|";}
else{if ($_GET['s'] == "1"){$score = 2;$space = ".";$pipe="&nbsp;&nbsp;&nbsp;&nbsp;||";}
else{if ($_GET['s'] == "2"){$score = 4;$ccl = "<h1>Vous avez obtenu le meilleur score !</h1>";$space = "..";$pipe="&nbsp;&nbsp;||||";}
else{if ($_GET['s'] == "3"){$score = 1;$space = "...";$pipe="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|";}
}
}
}
?>
<h1>Voici 2 séquences à aligner :</h1>
<h3>Cliquez sur l'une des bases de la séquence 1 pour l'aligner avec la première base de la séquence 2.</h3>

<table>
  <tbody>
  <tr><td>Séquence 1 :</td><td>Séquence 2 :</td>
  </tr>
  <tr>
	<td>
	<a href="./AlignRes.php?s=0" class="c">C</a><a href= "./AlignRes.php?s=1"  class="g">G</a><a href= "./AlignRes.php?s=2" class="t">T</a><a href= "./AlignRes.php?s=3"  class="g">G</a><a href= "./AlignRes.php?s=4" class="a">A</a><span class="a">A</span>
	</td>
	<td><span class="t">T</span><span  class="g">G</span><span class="a">A</span><span class="a">A</span><span class="a">A</span><span class="t">T</span>
	</td>
	</tr>
	</tbody>
</table>

<h2>Votre alignement est il le meilleur ?</h2>

<table>
  <tbody>
  <tr>
	<td colspan="1" rowspan="3">
		<span class="c">C</span><span  class="g">G</span><span class="t">T</span><span  class="g">G</span><span class="a">A</span><span class="a">A</span><span class="z"><?php echo $space?></span>
		<br><span class="z"><?php echo $pipe?></span><br>
		<span class="z"><?php echo $space?></span><span class="t">T</span><span  class="g">G</span><span class="a">A</span><span class="a">A</span><span class="a">A</span><span class="t">T</span>
	</td>
    <td><h1>Votre score = <?php echo $score?>.</h1></td>
	</tr>
	<tr><td><?php echo $ccl?></td></tr>
	</tbody>
</table>
<br><br><br>
<?php if ($_GET['s'] == "2"){?>
<h2>Bravo !! Mais c'était facile.</h2>
<h1><a href= "./Align2.php?c=0&amp;q=2&amp;s=0">Un exemple plus compliqué ?</a></h1>
<?php } ?>
<?php
require("./footerLoup.php");
?>
