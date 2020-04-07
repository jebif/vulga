<?php
require("./headerLoup.php");
$q = $_GET['q'];
$chien = "1";
$marmotte = "2";
$lynx = "3";
$loup = "4";
$elephant = "5";
$renard = "6";
?>

<table>
  <tbody>
  <tr> <td class = "images"><img src="./EcoleADN/Crotte.JPG" alt = "Crotte à analyser"></td> <td><h2>Alors, qui a fait cette crotte ?</h2></td>
	</tr></tbody></table>

<h3>Pour que l'alignement soit réalisé entre la séquence de votre échantillon et celle des animaux ci-dessous, cliquez sur chaque animal.</h3>

<table>
  <tbody>
  <tr>
<?php	if (strrchr($q, $chien) == "") { echo "<td class=\"Ct\">Un chien ?</td>"; }
		if (strrchr($q, $marmotte) == "") { echo "<td class=\"Ct\">Une marmotte ?</td>"; }
		if (strrchr($q, $renard) == "") { echo "<td class=\"Ct\">Un renard ?</td>"; }
		?>
	</tr>
	<tr>
<?php 	if (strrchr($q, $chien) == "") { echo "<td class = \"images\"><a href= \"./Align6.php?q=$q$chien\"><img src=\"./EcoleADN/Chien.jpg\" alt=\"chien\"></a></td>"; }
	if (strrchr($q, $marmotte) == "") { echo "<td class = \"images\"><a href= \"./Align6.php?q=$q$marmotte\"><img src=\"./EcoleADN/Castor.png\" alt=\"marmotte\"></a></td>"; }
	if (strrchr($q, $renard) == "") { echo "<td class = \"images\"><a href= \"./Align6.php?q=$q$renard\"><img src=\"./EcoleADN/Renard.jpg\" alt=\"renard\"></a></td>"; }
	?> </tr>
  </tbody>
</table>

<table>
  <tbody>
	<tr>
	<?php
	if (strrchr($q, $lynx) == "") { echo "<td class=\"Ct\">Un lynx ?</td>"; }
	if (strrchr($q, $loup) == "") { echo "<td class=\"Ct\">Un loup ?</td>";}
	if (strrchr($q, $elephant) == "") { echo "<td class=\"Ct\">Un éléphant ?</td>";}
	?>
	</tr><tr>
	<?php
	if (strrchr($q, $lynx) == "") { echo "<td class = \"images\"><a href= \"./Align6.php?q=$q$lynx\"><img src=\"./EcoleADN/Lynx.png\" alt=\"lynx\"></a></td>";}
	if (strrchr($q, $loup) == "") { echo "<td class = \"images\"><a href= \"./Align6.php?q=$q$loup\"><img src=\"./EcoleADN/Loup.jpg\" alt=\"loup\"></a></td>";}
	if (strrchr($q, $elephant) == "") { echo "<td class = \"images\"><a href= \"./Align6.php?q=$q$elephant\"><img src=\"./EcoleADN/Elephant.jpg\" alt=\"éléphant\"></a></td>";}
	?>
	</tr>
  </tbody>
</table>

<?php
require("./footerLoup.php");
?>
