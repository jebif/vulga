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
        $i++;
    }
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
        for ($j=1; $j<=$loca; $j=$j+1){
            $spaces[count($spaces)+1]=" ";
            $p[count($p)+1]=".";
        }
        $T2 = array_merge($p,$T2init);
	    $p = array();
	    $lim = count($T2)-count($T1);
	    for ($j=1; $j<=$lim; $j=$j+1){
            $p[count($p)+1]=".";
        }
        $T1 = array_merge($T1,$p);
        $j=0;
        while ($T2[$j] && $T1[$j]){
            if($T2[$j] == $T1[$j]){
                $s[count($s)+1]="|";
                $c++;
            }else{
                $s[count($s)+1]="&nbsp;";
            }
            $j=$j+1;
	    }

        $i=0;
        echo "<p class='Z'>Séquence 1</p><p class='alignement'>";
        foreach($T1 as $e){
            if ($e == "A"){
                echo "<a href=\"./Align2.php?c=$cpt&amp;s=$i&amp;q=1\" class=\"a\">A</a>";
            }elseif ($e == "C"){
                echo "<a href=\"./Align2.php?c=$cpt&amp;s=$i&amp;q=1\" class=\"c\">C</a>";
            }elseif ($e == "G"){
                echo "<a href=\"./Align2.php?c=$cpt&amp;s=$i&amp;q=1\" class=\"g\">G</a>";
            }elseif ($e == "T"){
                echo "<a href=\"./Align2.php?c=$cpt&amp;s=$i&amp;q=1\" class=\"t\">T</a>";
            }else{
                echo "<span class=\"Z\">$e</span>";
            }
            $i++;
        }
        echo "</p>";

        if ($cpt>1){
            echo "<p class='Z'>";
            foreach($s as $e){
                echo $e;
            }
            echo "</p>";
        }

        $i=0;

        foreach($T2 as $e){
            $iOK = $i-$loca;
            if ($e == "A"){
                echo "<a href=\"./Align2.php?c=$cpt&amp;s=$iOK&amp;q=2\" class=\"a\">A</a>";
            }elseif ($e == "C"){
                echo "<a href=\"./Align2.php?c=$cpt&amp;s=$iOK&amp;q=2\" class=\"c\">C</a>";
            }elseif ($e == "G"){
                echo "<a href=\"./Align2.php?c=$cpt&amp;s=$iOK&amp;q=2\" class=\"g\">G</a>";
            }elseif ($e == "T"){
                echo "<a href=\"./Align2.php?c=$cpt&amp;s=$iOK&amp;q=2\" class=\"t\">T</a>";
            }else{
                echo "<span class =\"z\">$e</span>";
            }
            $i++;
        }

        echo"<p class='Z'>Séquence 2</p>";
    }

    if($qui == 2){
        $T1init = decouper($S1);
        $T2 = decouper($S2);
        for ($j=1; $j<=$loca; $j=$j+1){
            $spaces[count($spaces)+1]=" ";
            $p[count($p)+1]=".";
        }
        $T1 = array_merge($p,$T1init);
	    $p = array();
	    $lim = count($T1)-count($T2);
	    for ($j=1; $j<=$lim; $j=$j+1){
            $p[count($p)+1]=".";
        }
        $T2 = array_merge($T2,$p);

        if (count($T1) != count($T2) && $cpt != "0"){
    	    $p =array();
    	    $lim = count($T2)-count($T1);
        	for ($j=1; $j<=$lim; $j=$j+1){
                $p[count($p)+1]=".";
            }
            $T1 = array_merge($T1,$p);
        }

	    $j=0;
        while ($T2[$j] && $T1[$j]){
    	    if($T1[$j] == $T2[$j]){
                $s[count($s)+1]="|";
                $c++;
            }else{
                $s[count($s)+1]="&nbsp;";
            }
	        $j=$j+1;
        }

        $i=0;

        echo "<p class='Z'>Séquence 1</p><p class='alignement'>";
        foreach($T1 as $e){
            $iOK = $i-$loca;
            if ($e == "A"){
                echo "<a href=\"./Align2.php?c=$cpt&amp;s=$iOK&amp;q=1\" class=\"a\">A</a>";
            }elseif ($e == "C"){
                echo "<a href=\"./Align2.php?c=$cpt&amp;s=$iOK&amp;q=1\" class=\"c\">C</a>";
            }elseif ($e == "G"){
                echo "<a href=\"./Align2.php?c=$cpt&amp;s=$iOK&amp;q=1\" class=\"g\">G</a>";
            }elseif ($e == "T"){
                echo "<a href=\"./Align2.php?c=$cpt&amp;s=$iOK&amp;q=1\" class=\"t\">T</a>";
            }else{
                echo "<span class='z'>$e</span>";
            }
            $i++;
        }
        echo '</p>';

        if ($cpt>1){
            echo "<p class='z'>";
            foreach($s as $e){
                echo $e;
            }
            echo"</p>";
        }



        $i=0;
        foreach($T2 as $e){
            if ($e == "A"){
                echo "<a href=\"./Align2.php?c=$cpt&amp;s=$i&amp;q=2\" class=\"a\">A</a>";
            }elseif ($e == "C"){
                echo "<a href=\"./Align2.php?c=$cpt&amp;s=$i&amp;q=2\" class=\"c\">C</a>";
            }elseif ($e == "G"){
                echo "<a href=\"./Align2.php?c=$cpt&amp;s=$i&amp;q=2\" class=\"g\">G</a>";
            }elseif ($e == "T"){
                echo "<a href=\"./Align2.php?c=$cpt&amp;s=$i&amp;q=2\" class=\"t\">T</a>";
            }else{
                echo "<span class='z'>$e</span>";
            }
            $i++;
        }
        echo"<p class='z'>Séquence 2</p>";
	}

    if ($cpt>1) {
        echo "<p>Score = $c</p>";
    }

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

        for ($j=1; $j<=$loca; $j=$j+1){
            $spaces[count($spaces)+1]=" ";
            $p[count($p)+1]=".";
        }

        $T2 = array_merge($p,$T2init);
        $p = array();
        $lim = count($T2)-count($T1);

        for ($j=1; $j<=$lim; $j=$j+1){
            $p[count($p)+1]=".";
        }

        $T1 = array_merge($T1,$p);
        $j=0;

        while ($T2[$j] && $T1[$j]){
            if($T2[$j] == $T1[$j]){
                $s[count($s)+1]="|";  $c++;
            }else{
                $s[count($s)+1]="&nbsp;";
            }
            $j=$j+1;
        }

        $i=0;
        echo "<p class='Z'>Séquence 1</p><p class='alignement'>";
        foreach($T1 as $e){
            if ($e == "A"){
                echo "<span class=\"a\">A</span>";
            }elseif ($e == "C"){
                echo "<span class=\"c\">C</span>";
            }elseif ($e == "G"){
                echo "<span class=\"g\">G</span>";
            }elseif ($e == "T"){
                echo "<span class=\"t\">T</span>";
            }else{
                echo "<span class='z'>$e</span>";
            }
            $i++;
        }
        echo "</p>";

        if ($cpt>1){
            echo "<p class='z'>";
            foreach($s as $e){
                echo $e;
            }
            echo"</p>";
        }

        $i=0;

        foreach($T2 as $e){
            $iOK = $i-$loca;
            if ($e == "A"){
                echo "<span class=\"a\">A</span>";
            }elseif ($e == "C"){
                echo "<span class=\"c\">C</span>";
            }elseif ($e == "G"){
                echo "<span class=\"g\">G</span>";
            }elseif ($e == "T"){
                echo "<span class=\"t\">T</span>";
            }else{
                echo "<span class='z'>$e</span>";
            }
            $i++;
        }

        echo "<p class='z'>Séquence 2</p>";
    }

    if($qui == 2){
        $T1init = decouper($S1);
        $T2 = decouper($S2);

        for ($j=1; $j<=$loca; $j=$j+1){
            $spaces[count($spaces)+1]=" ";
            $p[count($p)+1]=".";
        }

        $T1 = array_merge($p,$T1init);
    	$p =array();
        $lim = count($T1)-count($T2);

        for ($j=1; $j<=$lim; $j=$j+1){
            $p[count($p)+1]=".";
        }

        $T2 = array_merge($T2,$p);
        if (count($T1) != count($T2)  && $cpt != "0"){
            $p =array();
            $lim = count($T2)-count($T1);
            for ($j=1; $j<=$lim; $j=$j+1){
                $p[count($p)+1]=".";
            }
            $T1 = array_merge($T1,$p);
        }

        $j=0;
        while ($T2[$j] && $T1[$j]){
            if($T1[$j] == $T2[$j]){
                $s[count($s)+1]="|";
                $c++;
            }else {
                $s[count($s)+1]="&nbsp;";
            }
            $j=$j+1;
        }

        $i=0;
        echo "<p class='z'>Séquence 1</p><p class='alignement'>";

        foreach($T1 as $e){
            $iOK = $i-$loca;
            if ($e == "A"){
                echo "<span class=\"a\">A</span>";
            }elseif ($e == "C"){
                echo "<span class=\"c\">C</span>";
            }elseif ($e == "G"){
                echo "<span class=\"g\">G</span>";
            }elseif ($e == "T"){
                echo "<span class=\"t\">T</span>";
            }else{
                echo "<span class='z'>$e</span>";
            }
            $i++;
        }
        echo "</p>";

        if ($cpt>1){
            echo "<p class='z'>";
            foreach($s as $e){
                echo $e;
            }
            echo"</p>";
        }

        $i=0;

        foreach($T2 as $e){
            if ($e == "A"){
                echo "<span class=\"a\">A</span>";
            }elseif ($e == "C"){
                echo "<span class=\"c\">C</span>";
            }elseif ($e == "G"){
                echo "<span class=\"g\">G</span>";
            }elseif ($e == "T"){
                echo "<span class=\"t\">T</span>";
            }else{
                echo "<span class='z'>$e</span>";
            }
            $i++;
        }

        echo "<p class='z'>Séquence 2</p>";
    }

    if ($cpt>1) {
        echo "<p>Score = $c</p>"; }
    return($c);
}

if ($cpt>5){
    $cRecup = Align2 ($q,$s,$cpt);
	if ($cRecup !== $cR){ ?>
        <p>Tu as testé 5 possibilités sans trouver la meilleure solution :(</p>
        <p>Le bioinformaticien du laboratoire peut t'aider ! Pour cela clique sur le bouton ci-dessous.</p>
        <p><a class="btn btn-outline-primary btn-lg" role="button" href= "./Submit.php">Demander de l'aide au bioinformaticien</a></p>
    <?php
    }else{
    ?>
    	<p>Vous avez l'oeil ! Bravo !</p>
        <p>... mais ...</p>
        <p>Il existe une solution avec encore un meilleur score ! Le bioinformaticien du laboratoire peut t'aider à l'obtenir. Pour cela clique sur le bouton ci-dessous.</p>
        <p><a class="btn btn-outline-primary btn-lg" role="button" href= "./Submit.php">Demander de l'aide au bioinformaticien</a></p>
    <?php
    }
}else{
?>

<p>Voici 2 séquences… un peu plus compliquées à aligner. À toi de jouer !</p>
<p>Clique sur la base de la séquence 2 que tu veux faire coïncider avec la première base de la séquence 1 (ou inversement).</p>

<?php
    $cRecup = Align ($q,$s,$cpt);
    if ($cRecup !== $cR){
        echo "<p>Nous te proposons de tester jusqu'à 5 alignements. Le meilleur score que tu peux obtenir ici est 40.</p>";
    }

    if ($cRecup !== $cR){
        if ($cpt>1){
            echo "<p>Tentez un autre alignement...</p>";
        }
    }else{
        echo "<p>Vous avez l'oeil ! Bravo ! … mais… </p>";
        if ($cpt<=2) {
        ?>
            <p>Il existe une solution avec encore un meilleur score ! Le bioinformaticien du laboratoire peut t'aider à l'obtenir. Pour cela clique sur le bouton ci-dessous.</p>
            <p><a class="btn btn-outline-primary btn-lg" role="button" href= "./Submit.php">Demander de l'aide au bioinformaticien</a></p>
        <?php
        }
    }

    if ($cpt>2){
        echo "<p><a class='btn btn-outline-primary btn-lg' role='button' href= './Submit.php'>Demander de l'aide au bioinformaticien</a></p>";
        if ($cRecup === $cR){
            echo "<p>Un score encore meilleur existe ! Vous voulez le voir ?</p>";
        }else {
            echo "<p>Vous ne trouvez pas ?</p>";
        }
    }
}
require("./footerLoup.php");
?>
