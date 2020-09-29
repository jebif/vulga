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

<div id="regles" class="carousel slide" data-ride="carousel" data-interval="false">
    <ol class="carousel-indicators">
        <li data-target="#regles" data-slide-to="0" class="active"></li>
        <li data-target="#regles" data-slide-to="1"></li>
        <li data-target="#regles" data-slide-to="2"></li>
        <li data-target="#regles" data-slide-to="3"></li>
        <li data-target="#regles" data-slide-to="4"></li>
    </ol>

    <div class="carousel-inner" style="width: 70%; margin: auto;">
        <div class="carousel-item active" id=coude>
            <img src="../media/nounours/proteomique/coude.png" width="20%" />
            <div class="carousel-caption">
                <h5>Le coude</h5>
                <p>3 acides aminés bordeaux suivis de 3 vert forment un coude.</p>
            </div>
        </div>
        <div class="carousel-item" id="membrane">
            <img src="../media/nounours/proteomique/membrane.png" width="20%" />
            <div class="carousel-caption">
                <h5>La membrane</h5>
                <p>À proximité d’une paroi marron, les acides aminés cyan entre en contact avec celle-ci.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="../media/nounours/proteomique/nocontact.png" width="20%" />
            <div class="carousel-caption">
                <h5>Le sans-contact</h5>
                <p>Les acides aminés bordeaux et cyan ne sont jamais en contact.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="../media/nounours/proteomique/contact.png" width="20%" />
            <div class="carousel-caption">
                <h5>Le contact</h5>
                <p>Les acides aminés orange séparés par 2 à 6 autres acides aminés sont en contact.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="../media/nounours/proteomique/demitour.png" width="20%" />
            <div class="carousel-caption">
                <h5>Le demi-tour</h5>
                <p>2 acides aminés bordeaux précédés et suivis par 2 vert forment un demi-tour.</p>
            </div>
        </div>
    </div>
    
    <a class="carousel-control-prev" href="#regles" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#regles" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
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
