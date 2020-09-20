<?php
require("headerNounours.php");
?>

<h1>Quelle est la structure de la protéine qui empêche les antibiotiques d'agir ?</h1>

<p>Les médecins ont essayé plusieurs traitements qui n'ont pas fonctionné pour Nounours. Cela veut dire que la souche de bactérie qui rend Nounours malade est résistante à ces antibiotiques.</p>
<p>La bactérie produit une protéine que les antibiotiques courants n’arrivent pas à combattre. Pour guérir Nounours tu dois trouver comment la protéine est repliée.</p>
<p>Un ordinateur a proposé plusieurs repliements pour la protéine, on parle de conformation. Cependant il ne connaissait pas toutes les règles biologiques. Heureusement toi tu les connais !! Tu vas pouvoir nous dire quelle est la bonne conformation.</p>

<ul>
    <li>Lis les différentes règles ci-dessous, on appelle ça des propriétés physico-chimiques. Chaque carte représente une propriété différente.</li>
    <li>Compare les différentes conformations et sélectionne celles qui respectent ta ou tes cartes</li>
    <li>Une seule conformation répond à toutes les règles. Sauras-tu la retrouver ?</li>
</ul>

<h2>Les règles que tu connais :</h2>
<div class="row">
    <div class="col-6">
        <li>
            <ol>3 acides aminés bordeaux suivis de 3 vert forment un coude.</ol>
        </li>
    </div>
    <div class="col-4">
        <img src="../media/nounours/proteomique/coude.png" width="20%" />
    </div>
</div>
<div class="row">
    <div class="col-6">
        <li>
            <ol>À proximité d’une paroi marron, les acides aminés cyan entre en contact avec celle-ci.</ol>
        </li>
    </div>
    <div class="col-4">
        <img src="../media/nounours/proteomique/membrane.png" width="20%" />
    </div>
</div>
<div class="row">
    <div class="col-6">
        <li>
            <ol>Les acides aminés bordeaux et cyan ne sont jamais en contact.</ol>
        </li>
    </div>
    <div class="col-4">
        <img src="../media/nounours/proteomique/nocontact.png" width="20%" />
    </div>
</div>
<div class="row">
    <div class="col-6">
        <li>
            <ol>Les acides aminés orange séparés par 2 à 6 autres acides aminés sont en contact.</ol>
        </li>
    </div>
    <div class="col-4">
        <img src="../media/nounours/proteomique/contact.png" width="20%" />
    </div>
</div>
<div class="row">
    <div class="col-6">
        <li>
            <ol>2 acides aminés bordeaux précédés et suivis par 2 vert forment un demi-tour.</ol>
        </li>
    </div>
    <div class="col-4">
        <img src="../media/nounours/proteomique/demitour.png" width="20%" />
    </div>
</div>

<h2>Les protéines identifiées</h2>

<div class="row">
    <div class="col-4">
        <p><img src="../media/nounours/proteomique/prot-2.png" width="100%" /></p>
    </div>
    <div class="col-4">
        <p><img src="../media/nounours/proteomique/prot-3.png" width="100%" /></p>
    </div>
    <div class="col-4">
        <p><img src="../media/nounours/proteomique/prot-4.png" width="100%" /></p>
    </div>
    <div class="col-4">
        <p><img src="../media/nounours/proteomique/prot-5.png" width="100%" /></p>
    </div>
    <div class="col-4">
        <p><img src="../media/nounours/proteomique/prot-6.png" width="100%" /></p>
    </div>
    <div class="col-4">
        <p><img src="../media/nounours/proteomique/prot-7.png" width="100%" /></p>
    </div>
</div>

<p><a class="btn btn-outline-primary btn-lg" role="button" href="./proteomique_regle.php">Identifier la protéine</a></p>


<?php
require("footerNounours.php");
?>
