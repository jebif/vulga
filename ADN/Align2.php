<?php
ob_start();
require("./headerLoup.php");

$s = $_GET['s']; // quelle position de la sequence
$q = $_GET['q']; // quelle sequence
$cR = 40;
$cpt = $_GET['c']; // nb visites
$cpt = $cpt+1;

function decouper ($ch){
$l= strlen($ch);
$i=0;
while($i<$l) {
 $etape = $l-$i;
 $tab[$i] = substr($ch, -$etape,1);
 $i++;}
 return ($tab);
}

function Align ($qui,$loca,$cpt){
  $S1 = "CTACGTGATGCATGAACGCGACGTGCACGTGAACTACGTGATGCATGAACGCGACGTGCACGTGAA";
  $S2 = "ATGACGCGATAAATAACGTGATGCATGACGCGACGTGCACGTGAACTACGTGATGCATGAACGTGTGAAATCACGTGAATGAATA";
  $T1=array();
  $T2=array();
  $spaces =array(); // espaces sur la ligne de correspondance
  $p =array(); // pts devant la séquence qui bouge
  $s=array(); // la ligne du milieu
  $c=0;
  if($qui == 1){
    $T1 = decouper($S1);
    $T2init = decouper($S2);
    for ($j=1; $j<=$loca; $j=$j+1){$spaces[count($spaces)+1]=" ";$p[count($p)+1]=".";}
    $T2 = array_merge($p,$T2init);
	$p =array();
	$lim = count($T2)-count($T1);
	for ($j=1; $j<=$lim; $j=$j+1){$p[count($p)+1]=".";}
    $T1 = array_merge($T1,$p);
    $j=0;
    while ($T2[$j] && $T1[$j]){if($T2[$j] == $T1[$j]){$s[count($s)+1]="|";  $c++;}else{ $s[count($s)+1]="&nbsp;";}$j=$j+1;
	}
  $i=0;
  echo "<span style=\"font-size: 16px;font-family:courier new;color:grey\">séquence1:</span>";
  foreach($T1 as $e){
  if ($e == "A"){echo "<a href=\"./Align2.php?c=$cpt&amp;s=$i&amp;q=1\" class=\"a\">A</a>";}elseif ($e == "C"){echo "<a href=\"./Align2.php?c=$cpt&amp;s=$i&amp;q=1\" class=\"c\">C</a>";}elseif ($e == "G"){echo "<a href=\"./Align2.php?c=$cpt&amp;s=$i&amp;q=1\" class=\"g\">G</a>";}elseif ($e == "T"){echo "<a href=\"./Align2.php?c=$cpt&amp;s=$i&amp;q=1\" class=\"t\">T</a>";}else{echo "<span style=\"font-size: 16px;font-family:courier new;color:grey\">$e</span>";}$i++;}
  if ($cpt>1){
    echo "<br><span style=\"font-size: 16px;font-family:courier new;color:grey\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    foreach($s as $e){echo $e;}
    echo"</span>";
  }
  echo"<br><span style=\"font-size: 16px;font-family:courier new;color:grey\">séquence2:</span>";
  $i=0;

  foreach($T2 as $e){
  $iOK = $i-$loca;
  if ($e == "A"){echo "<a href=\"./Align2.php?c=$cpt&amp;s=$iOK&amp;q=2\" class=\"a\">A</a>";}elseif ($e == "C"){echo "<a href=\"./Align2.php?c=$cpt&amp;s=$iOK&amp;q=2\" class=\"c\">C</a>";}elseif ($e == "G"){echo "<a href=\"./Align2.php?c=$cpt&amp;s=$iOK&amp;q=2\" class=\"g\">G</a>";}elseif ($e == "T"){echo "<a href=\"./Align2.php?c=$cpt&amp;s=$iOK&amp;q=2\" class=\"t\">T</a>";}else{echo "<span style=\"font-size: 16px;font-family:courier new;color:grey\">$e</span>";}$i++;
  }
  }if($qui == 2){
    $T1init = decouper($S1);
    $T2 = decouper($S2);
    for ($j=1; $j<=$loca; $j=$j+1){$spaces[count($spaces)+1]=" ";$p[count($p)+1]=".";}
    $T1 = array_merge($p,$T1init);
	$p =array();
	$lim = count($T1)-count($T2);
	for ($j=1; $j<=$lim; $j=$j+1){$p[count($p)+1]=".";}
    $T2 = array_merge($T2,$p);
if (count($T1) != count($T2) && $cpt != "0"){
	$p =array();
	$lim = count($T2)-count($T1);
	for ($j=1; $j<=$lim; $j=$j+1){$p[count($p)+1]=".";}
    $T1 = array_merge($T1,$p);
}
	$j=0;
    while ($T2[$j] && $T1[$j]){
	if($T1[$j] == $T2[$j]){$s[count($s)+1]="|";  $c++;}else { $s[count($s)+1]="&nbsp;";}
	$j=$j+1;}
  $i=0;
  echo "<span style=\"font-size: 16px;font-family:courier new;color:grey\">séquence1:</span>";
  foreach($T1 as $e){
    $iOK = $i-$loca;
    if ($e == "A"){echo "<a href=\"./Align2.php?c=$cpt&amp;s=$iOK&amp;q=1\" class=\"a\">A</a>";}elseif ($e == "C"){echo "<a href=\"./Align2.php?c=$cpt&amp;s=$iOK&amp;q=1\" class=\"c\">C</a>";}elseif ($e == "G"){echo "<a href=\"./Align2.php?c=$cpt&amp;s=$iOK&amp;q=1\" class=\"g\">G</a>";}elseif ($e == "T"){echo "<a href=\"./Align2.php?c=$cpt&amp;s=$iOK&amp;q=1\" class=\"t\">T</a>";}else{echo "<span style=\"font-size: 16px;font-family:courier new;color:grey\">$e</span>";}$i++;
  }
  if ($cpt>1){
    echo "<br><span style=\"font-size: 16px;font-family:courier new;color:grey\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    foreach($s as $e){echo $e;}
    echo"</span>";
  }
  echo"<br><span style=\"font-size: 16px;font-family:courier new;color:grey\">séquence2:</span>";
  $i=0;
  foreach($T2 as $e){if ($e == "A"){echo "<a href=\"./Align2.php?c=$cpt&amp;s=$i&amp;q=2\" class=\"a\">A</a>";}elseif ($e == "C"){echo "<a href=\"./Align2.php?c=$cpt&amp;s=$i&amp;q=2\" class=\"c\">C</a>";}elseif ($e == "G"){echo "<a href=\"./Align2.php?c=$cpt&amp;s=$i&amp;q=2\" class=\"g\">G</a>";}elseif ($e == "T"){echo "<a href=\"./Align2.php?c=$cpt&amp;s=$i&amp;q=2\" class=\"t\">T</a>";}else{echo "<span style=\"font-size: 16px;font-family:courier new;color:grey\">$e</span>";}$i++;}

	}
  if ($cpt>1) {echo "<br><h2>Score = $c</h2><br>"; }
  return($c);
}

function Align2 ($qui,$loca,$cpt){
  $S1 = "CTACGTGATGCATGAACGCGACGTGCACGTGAACTACGTGATGCATGAACGCGACGTGCACGTGAA";
  $S2 = "ATGACGCGATAAATAACGTGATGCATGACGCGACGTGCACGTGAACTACGTGATGCATGAACGTGTGAAATCACGTGAATGAATA";
  $T1=array();
  $T2=array();
  $spaces =array(); // espaces sur la ligne de correspondance
  $p =array(); // pts devant la séquence qui bouge
  $s=array(); // la ligne du milieu
  $c=0;
  if($qui == 1){
    $T1 = decouper($S1);
    $T2init = decouper($S2);
    for ($j=1; $j<=$loca; $j=$j+1){$spaces[count($spaces)+1]=" ";$p[count($p)+1]=".";}
    $T2 = array_merge($p,$T2init);
	$p =array();
	$lim = count($T2)-count($T1);
	for ($j=1; $j<=$lim; $j=$j+1){$p[count($p)+1]=".";}
    $T1 = array_merge($T1,$p);
    $j=0;
    while ($T2[$j] && $T1[$j]){if($T2[$j] == $T1[$j]){$s[count($s)+1]="|";  $c++;}else{ $s[count($s)+1]="&nbsp;";}$j=$j+1;
	}
  $i=0;
  echo "<span style=\"font-size: 16px;font-family:courier new;color:grey\">séquence1:</span>";
  foreach($T1 as $e){
  if ($e == "A"){echo "<span class=\"a\">A</span>";}elseif ($e == "C"){echo "<span class=\"c\">C</span>";}elseif ($e == "G"){ echo "<span class=\"g\">G</span>";}elseif ($e == "T"){echo "<span class=\"t\">T</span>";}else{
  echo "<span style=\"font-size: 16px;font-family:courier new;color:grey\">$e</span>";}$i++;}
  if ($cpt>1){
    echo "<br><span style=\"font-size: 16px;font-family:courier new;color:grey\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp";
    foreach($s as $e){echo $e;}
    echo"</span>";
  }
  echo"<br>";
  $i=0;

  echo "<span style=\"font-size: 16px;font-family:courier new;color:grey\">séquence2:</span>";
  foreach($T2 as $e){
  $iOK = $i-$loca;
  if ($e == "A"){echo "<span class=\"a\">A</span>";}elseif ($e == "C"){echo "<span class=\"c\">C</span>";}elseif ($e == "G"){
  echo "<span class=\"g\">G</span>";}elseif ($e == "T"){echo "<span class=\"t\">T</span>";}else{echo "<span style=\"font-size: 16px;font-family:courier new;color:grey\">$e</span>";}$i++;
  }
  }if($qui == 2){
    $T1init = decouper($S1);
    $T2 = decouper($S2);
    for ($j=1; $j<=$loca; $j=$j+1){$spaces[count($spaces)+1]=" ";$p[count($p)+1]=".";}
    $T1 = array_merge($p,$T1init);
		$p =array();
	$lim = count($T1)-count($T2);
	for ($j=1; $j<=$lim; $j=$j+1){$p[count($p)+1]=".";}
    $T2 = array_merge($T2,$p);
if (count($T1) != count($T2)  && $cpt != "0"){
	$p =array();
	$lim = count($T2)-count($T1);
	for ($j=1; $j<=$lim; $j=$j+1){$p[count($p)+1]=".";}
    $T1 = array_merge($T1,$p);
}

	$j=0;
    while ($T2[$j] && $T1[$j]){
	if($T1[$j] == $T2[$j]){$s[count($s)+1]="|";  $c++;}else { $s[count($s)+1]="&nbsp;";}
	$j=$j+1;}
  $i=0;
 echo "<span style=\"font-size: 16px;font-family:courier new;color:grey\">séquence1:</span>";
  foreach($T1 as $e){
    $iOK = $i-$loca;
    if ($e == "A"){echo "<span class=\"a\">A</span>";}elseif ($e == "C"){echo "<span class=\"c\">C</span>";}elseif ($e == "G"){
	echo "<span class=\"g\">G</span>";}elseif ($e == "T"){echo "<span class=\"t\">T</span>";}else{echo "<span style=\"font-size: 16px;font-family:courier new;color:grey\">$e</span>";}$i++;
  }
  if ($cpt>1){
    echo "<br><span style=\"font-size: 16px;font-family:courier new;color:grey\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp";
    foreach($s as $e){echo $e;}
    echo"</span>";
  }
  echo"<br>";
  $i=0;
 echo "<span style=\"font-size: 16px;font-family:courier new;color:grey\">séquence2:</span>";
  foreach($T2 as $e){if ($e == "A"){echo "<span class=\"a\">A</span>";}elseif ($e == "C"){echo "<span class=\"c\">C</span>";}elseif ($e == "G"){
  echo "<span class=\"g\">G</span>";}elseif ($e == "T"){echo "<span class=\"t\">T</span>";}else{echo "<span style=\"font-size: 16px;font-family:courier new;color:grey\">$e</span>";}$i++;}

	}
  if ($cpt>1) {echo "<br><h2>Score = $c</h2><br>"; }
  return($c);
}


?>

  <?php if ($cpt>5){ ?>
    <?php $cRecup = Align2 ($q,$s,$cpt);
	if ($cRecup !== $cR){ ?>
    <h1>Vous avez testé 5 possibilités sans trouver la meilleure solution</h1>
<table><tbody>
  <tr><td><img src="./EcoleADN/Enqueteur.jpg" alt = ""></td>
  <td>
  <h1><a href= "./Submit.php">Le bioinformaticien pour vous aider!</a></h1>
  </tr><tr><td><h2>Auriez vous besoin d'aide?</h2></td><td class="images">
<img src="./EcoleADN/Souris.jpg" alt = ""></td>
  </tr>
	</tbody>
</table>
    <?php }else{ ?>
	<h2>Vous avez l'oeil ! Bravo !</h2>
<h2>... mais ...</h2>
<table><tbody>
  <tr><td><img src="./EcoleADN/Enqueteur.jpg" alt = ""></td>
  <td>
  <h1><a href= "./Submit.php">Le bioinformaticien pour vous aider!</a></h1>
  </tr><tr><td><h2>un score encore meilleur existe !</h2></td><td class="images">
<img src="./EcoleADN/Souris.jpg" alt = ""></td>
  </tr>
	</tbody>
</table>
    <?php }
}	else {?>

<h1>Voici 2 séquences... un peu plus compliquées à aligner. À vous de jouer !</h1>
<br>
<h3>Cliquez sur la base de la séquence 2 que vous voulez faire coïncider avec la première base de la séquence 1 (ou inversement).</h3>

<?php $cRecup = Align ($q,$s,$cpt); ?>

 <?php if ($cRecup !== $cR){ ?>
<h1>Nous vous proposons de tester jusqu'à 5 alignements. Le meilleur score que vous puissiez obtenir ici est 40.</h1>
 <?php }?>


 <?php if ($cRecup !== $cR){
  if ($cpt>1){ ?>
<h3>Tentez un autre alignement...</h3>
 <?php } } else{ ?>
<h2>Vous avez l'oeil ! Bravo !</h2>
<h2>... mais...</h2>


 <?php if ($cpt<=2) { ?>
<table><tbody>
  <tr><td><img src="./EcoleADN/Enqueteur.jpg" alt = ""></td>
  <td>
  <h1><a href= "./Submit.php">Le bioinformaticien pour vous aider !</a></h1>
  </tr><tr><td><h2>un score encore meilleur existe !</h2></td><td class="images">
<img src="./EcoleADN/Souris.jpg" alt = ""></td>
  </tr>
	</tbody>
</table>

 <?php }} ?>


  <?php if ($cpt>2){ ?>
<table><tbody>
  <tr><td><img src="./EcoleADN/Enqueteur.jpg" alt = ""></td>
  <td>
  <h1><a href= "./Submit.php">Le bioinformaticien peut vous aider !</a></h1>
 <?php  if ($cRecup === $cR){ ?>
  </tr><tr><td><h2>un score encore meilleur existe ! Vous voulez le voir ?</h2></td><td class="images">
 <?php }else { ?>
  </tr><tr><td><h2>Vous ne trouvez pas ?</h2></td><td class="images">
 <?php } ?>
<img src="./EcoleADN/Souris.jpg" alt = ""></td>
  </tr>
	</tbody>
</table>

<?php }
}
require("./footerLoup.php");
?>
