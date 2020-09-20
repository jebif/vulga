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

<?php
    if(! isset($_GET['r']) || isset($_GET['r']) && $_GET['r'] == "coude") {
?>
<h2>Première règle à vérifier :</h2>
<div class="row">
    <div class="col-8">
        <li>
            <ol>3 acides aminés bordeaux suivis de 3 vert forment un coude.</ol>
        </li>
    </div>
    <div class="col-4">
        <img src="../media/nounours/proteomique/coude.png" width="40%" />
    </div>
</div>

<h2>Sélectionnes les protéines vérifiant la règle</h2>

<div class="alert alert-danger" role="alert" id="warningDiv" style="display:none;">Es-tu sur d'avoir sélectioné toutes les protéines ?</div>

<div class="list-group">
    <button class="list-group-item" onclick="clickOnProt(this, 'coude')" value="1">
        <img src="../media/nounours/proteomique/prot-2.png" width="20%" />
    </button>
    <button class="list-group-item" onclick="clickOnProt(this, 'coude')" value="2">
        <img src="../media/nounours/proteomique/prot-3.png" width="20%" />
    </button>
    <button class="list-group-item" onclick="clickOnProt(this, 'coude')" value="3">
        <img src="../media/nounours/proteomique/prot-4.png" width="40%" />
    </button>
    <button class="list-group-item" onclick="clickOnProt(this, 'coude')" value="4">
        <img src="../media/nounours/proteomique/prot-5.png" width="20%" />
    </button>
    <button class="list-group-item" onclick="clickOnProt(this, 'coude')" value="5">
        <img src="../media/nounours/proteomique/prot-6.png" width="20%" />
    </button>
    <button class="list-group-item" onclick="clickOnProt(this, 'coude')" value="6">
        <img src="../media/nounours/proteomique/prot-7.png" width="20%" />
    </button>
</div>

<button class="btn btn-outline-primary btn-lg" onclick="activeButton('coude', 'membrane')">Règle suivante</button>

<?php
    }
?>

<?php
    if(isset($_GET['r']) && $_GET['r'] == "membrane") {
?>
<h2>Deuxième règle à vérifier :</h2>
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

<h2>Sélectionnes les protéines vérifiant la règle</h2>

<div class="alert alert-danger" role="alert" id="warningDiv" style="display:none;">Es-tu sur d'avoir sélectioné toutes les protéines ?</div>

<div class="list-group">
    <button class="list-group-item" onclick="clickOnProt(this, 'membrane')" value="1">
        <img src="../media/nounours/proteomique/prot-2.png" width="20%" />
    </button>
    <button class="list-group-item" onclick="clickOnProt(this, 'membrane')" value="2" style="display:none;">
        <img src="../media/nounours/proteomique/prot-3.png" width="20%" />
    </button>
    <button class="list-group-item" onclick="clickOnProt(this, 'membrane')" value="3">
        <img src="../media/nounours/proteomique/prot-4.png" width="40%" />
    </button>
    <button class="list-group-item" onclick="clickOnProt(this, 'membrane')" value="4">
        <img src="../media/nounours/proteomique/prot-5.png" width="20%" />
    </button>
    <button class="list-group-item" onclick="clickOnProt(this, 'membrane')" value="5">
        <img src="../media/nounours/proteomique/prot-6.png" width="20%" />
    </button>
    <button class="list-group-item" onclick="clickOnProt(this, 'membrane')" value="6" style="display:none;">
        <img src="../media/nounours/proteomique/prot-7.png" width="20%" />
    </button>
</div>

<button class="btn btn-outline-primary btn-lg" onclick="activeButton('membrane', 'nocontact')">Règle suivante</button>

<?php
    }
?>

<?php
    if(isset($_GET['r']) && $_GET['r'] == "nocontact") {
?>
<h2>Deuxième règle à vérifier :</h2>
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

<h2>Sélectionnes les protéines vérifiant la règle</h2>

<div class="alert alert-danger" role="alert" id="warningDiv" style="display:none;">Es-tu sur d'avoir sélectioné toutes les protéines ?</div>

<div class="list-group">
    <button class="list-group-item" onclick="clickOnProt(this, 'nocontact')" value="1">
        <img src="../media/nounours/proteomique/prot-2.png" width="20%" />
    </button>
    <button class="list-group-item" onclick="clickOnProt(this, 'nocontact')" value="2" style="display:none;">
        <img src="../media/nounours/proteomique/prot-3.png" width="20%" />
    </button>
    <button class="list-group-item" onclick="clickOnProt(this, 'nocontact')" value="3">
        <img src="../media/nounours/proteomique/prot-4.png" width="40%" />
    </button>
    <button class="list-group-item" onclick="clickOnProt(this, 'nocontact')" value="4" style="display:none;">
        <img src="../media/nounours/proteomique/prot-5.png" width="20%" />
    </button>
    <button class="list-group-item" onclick="clickOnProt(this, 'nocontact')" value="5">
        <img src="../media/nounours/proteomique/prot-6.png" width="20%" />
    </button>
    <button class="list-group-item" onclick="clickOnProt(this, 'nocontact')" value="6" style="display:none;">
        <img src="../media/nounours/proteomique/prot-7.png" width="20%" />
    </button>
</div>

<button class="btn btn-outline-primary btn-lg" onclick="activeButton('nocontact', 'contact')">Règle suivante</button>

<?php
    }
?>

<?php
    if(isset($_GET['r']) && $_GET['r'] == "contact") {
?>
<h2>Deuxième règle à vérifier :</h2>
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

<h2>Sélectionnes les protéines vérifiant la règle</h2>

<div class="alert alert-danger" role="alert" id="warningDiv" style="display:none;">Es-tu sur d'avoir sélectioné toutes les protéines ?</div>

<div class="list-group">
    <button class="list-group-item" onclick="clickOnProt(this, 'contact')" value="1">
        <img src="../media/nounours/proteomique/prot-2.png" width="20%" />
    </button>
    <button class="list-group-item" onclick="clickOnProt(this, 'contact')" value="2" style="display:none;">
        <img src="../media/nounours/proteomique/prot-3.png" width="20%" />
    </button>
    <button class="list-group-item" onclick="clickOnProt(this, 'contact')" value="3">
        <img src="../media/nounours/proteomique/prot-4.png" width="40%" />
    </button>
    <button class="list-group-item" onclick="clickOnProt(this, 'contact')" value="4" style="display:none;">
        <img src="../media/nounours/proteomique/prot-5.png" width="20%" />
    </button>
    <button class="list-group-item" onclick="clickOnProt(this, 'contact')" value="5">
        <img src="../media/nounours/proteomique/prot-6.png" width="20%" />
    </button>
    <button class="list-group-item" onclick="clickOnProt(this, 'contact')" value="6" style="display:none;">
        <img src="../media/nounours/proteomique/prot-7.png" width="20%" />
    </button>
</div>

<button class="btn btn-outline-primary btn-lg" onclick="activeButton('contact', 'demitour')">Règle suivante</button>

<?php
    }
?>

<?php
    if(isset($_GET['r']) && $_GET['r'] == "demitour") {
?>
<h2>Deuxième règle à vérifier :</h2>
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

<h2>Sélectionnes les protéines vérifiant la règle</h2>

<div class="alert alert-danger" role="alert" id="warningDiv" style="display:none;">Es-tu sur d'avoir sélectioné toutes les protéines ?</div>

<div class="list-group">
    <button class="list-group-item" onclick="clickOnProt(this, 'demitour')" value="1">
        <img src="../media/nounours/proteomique/prot-2.png" width="20%" />
    </button>
    <button class="list-group-item" onclick="clickOnProt(this, 'demitour')" value="2" style="display:none;">
        <img src="../media/nounours/proteomique/prot-3.png" width="20%" />
    </button>
    <button class="list-group-item" onclick="clickOnProt(this, 'demitour')" value="3">
        <img src="../media/nounours/proteomique/prot-4.png" width="40%" />
    </button>
    <button class="list-group-item" onclick="clickOnProt(this, 'demitour')" value="4" style="display:none;">
        <img src="../media/nounours/proteomique/prot-5.png" width="20%" />
    </button>
    <button class="list-group-item" onclick="clickOnProt(this, 'demitour')" value="5" style="display:none;">
        <img src="../media/nounours/proteomique/prot-6.png" width="20%" />
    </button>
    <button class="list-group-item" onclick="clickOnProt(this, 'demitour')" value="6" style="display:none;">
        <img src="../media/nounours/proteomique/prot-7.png" width="20%" />
    </button>
</div>

<button class="btn btn-outline-primary btn-lg" onclick="activeButton('demitour', 'success')">Règle suivante</button>

<?php
    }
?>

<?php
    if(isset($_GET['r']) && $_GET['r'] == "success") {
?>

<h2>Sélectionnes les protéines vérifiant la règle</h2>

<div class="alert alert-success" role="alert">C'est ça, tu as trouvé que la protéine 1 qui rend Nonours malade. Bravo !</div>

<div class="list-group">
    <button class="list-group-item" value="1">
        <img src="../media/nounours/proteomique/prot-2.png" width="20%" />
    </button>
</div>

<a class="btn btn-outline-primary btn-lg" href="#">Suite atelier</a>

<?php
    }
?>

<script src="proteomique.js"></script>

<?php
require("footerNounours.php");
?>
