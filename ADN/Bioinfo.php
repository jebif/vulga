<?php
require("./headerLoup.php");
?>

<h2>Comment un bioinformaticien étudie-t'il cette séquence ?</h2>
<img src="./EcoleADN/Chercheur.jpg" alt = "" class="rounded float-right pl-3">
<p>Un bioinformaticien va comparer la séquence qu'il étudie à des séquences de référence. Ces séquences de références sont stockées dans des grosses bases de données. Les bases de données sont des sortes de dictionnaires géants de séquences. Elles contiennent des milliards de séquences d'ADN dont l'origine est connue.</p>

<p>Le bioinformaticien va donc rechercher la séquence connue (la séquence de référence) qui ressemble le plus à celle de son échantillon.</p>

<p>Nous allons donc juxtaposer les séquences (la notre et celle de séquences de référence) de façon à obtenir le maximum de similitudes. C'est ce qu'on appelle un alignement de séquences.</p>

<p>Un exemple pour mieux comprendre ? <a href= "./Align.php">Clique ici !</a></p>

<?php
require("./footerLoup.php");
?>
