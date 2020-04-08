<?php
require("./headerLoup.php");
?>
<p>Voici 2 séquences à aligner :</p>
<table>
    <tbody>
        <tr><td>Séquence 1</td><td>Séquence 2</td></tr>
        <tr>
            <td><span class="c">C</span><span class="g">G</span><span class="t">T</span><span class="g">G</span><span class="a">A</span><span class="a">A</span></td>
            <td><span class="t">T</span><span class="g">G</span><span class="a">A</span><span class="a">A</span><span class="a">A</span><span class="t">T</span></td>
        </tr>
    </tbody>
</table>

<p>Pour aligner au mieux des séquences, ton objectif est de faire coïncider le plus possible de bases de l'ADN (une base est représentée par une lettre). Un <b>score</b> te sera attribué.</p>

<h2>À toi de jouer !</h2>
<p>Clique sur l'une des bases de la séquence 1 pour l'aligner avec la première base de la séquence 2.</p>

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

<p>Par exemple, en alignant sur la 6e base, tu obtiendras cet alignement :</p>
<span class="c">C</span><span class="g">G</span><span class="t">T</span><span class="g">G</span><span class="a">A</span><span class="a">A</span><span class="z">.....</span>
<br>
<span class="z">.....</span><span class="t">T</span><span class="g">G</span><span class="a">A</span><span class="a">A</span><span class="a">A</span><span class="t">T</span>

<p>Aucune base n'est alignée parfaitement entre les 2 séquences… le score est de 0 !</p>
<p>Tu auras certainement une meilleure solution...</p>

<?php
require("./footerLoup.php");
?>
