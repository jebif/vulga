<?php
require("./headerLoup.php");
?>
<h1>Voici 2 s�quences � aligner :</h1>
<table>
  <tbody>
  <tr><td>S�quence 1</td><td>S�quence 2</td>
  </tr>
  <tr> 
	<td><span class="c">C</span><span class="g">G</span><span class="t">T</span><span class="g">G</span><span class="a">A</span><span class="a">A</span>
	</td>
	<td><span class="t">T</span><span class="g">G</span><span class="a">A</span><span class="a">A</span><span class="a">A</span><span class="t">T</span>
	</td>
	</tr>
	</tbody>
</table>


<h1>Pour aligner au mieux des s�quences, votre objectif est de faire co�ncider le plus possible de bases de l'ADN (une base est repr�sent�e 
par une lettre). Un <b>score</b> vous sera attribu�.</h1>

<br>


<h3>A vous de jouer ! Cliquez sur l'une des bases de la s�quence 1 pour l'aligner avec la premi�re base de la s�quence 2.</h3>

<table>
  <tbody>
  <tr><td>S�quence 1 :</td><td>S�quence 2 :</td>
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


<br>
<h1>Par exemple, en alignant sur la 6e base, vous obtiendriez cet alignement :</h1>
<span class="c">C</span><span class="g">G</span><span class="t">T</span><span class="g">G</span><span class="a">A</span><span class="a">A</span><span class="z">.....</span>
<br>
<span style="font-size: 16px;font-family:courier new;color:grey">.....</span><span class="t">T</span><span class="g">G</span><span class="a">A</span><span class="a">A</span><span class="a">A</span><span class="t">T</span>

<h1>Aucune base n'est align�e parfaitement entre les 2 s�quences... le score est de 0 !<br>Vous aurez certainement une meilleure solution...</h1><?php 
require("./footerLoup.php");
?>