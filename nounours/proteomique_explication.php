<?php
$bodyclass = 'labo3';
require("headerNounours.php");
?>

<h1>Quelle est la structure de la protéine qui empêche les antibiotiques d'agir ?</h1>

<div class="row">
    <div class="col-11">
        <div class="explication">
            <h2>Les règles que l'on connaît :</h2>
            <div class="row">
                <div class="col">
                    <img src="../media/nounours/proteomique/coude.png" class="d-block w-100" />
                    <h5 class="legendeRegle">Le coude</h5>
                    <p>3 acides aminés bleus suivis de 3 verts forment un coude.</p>
                </div>

                <div class="col">
                    <img src="../media/nounours/proteomique/membrane.png" class="d-block w-100" />
                    <h5 class="legendeRegle">La membrane</h5>
                    <p>À proximité d’une paroi jaune, les acides aminés cyan entre en contact avec celle-ci.</p>
                </div>

                <div class="col">
                    <img src="../media/nounours/proteomique/nocontact.png" class="d-block w-100" />
                    <h5 class="legendeRegle">Le sans-contact</h5>
                    <p>Les acides aminés bleu et cyan ne sont jamais en contact.</p>
                </div>

                <div class="col">
                    <img src="../media/nounours/proteomique/contact.png" class="d-block w-100" />
                    <h5 class="legendeRegle">Le contact</h5>
                    <p>Les acides aminés bordeaux séparés par 2 à 6 autres acides aminés sont en contact.</p>
                </div>

                <div class="col">
                    <img src="../media/nounours/proteomique/demitour.png" class="d-block w-100" />
                    <h5 class="legendeRegle">Le demi-tour</h5>
                    <p>2 acides aminés bleus précédés et suivis par 2 verts forment un demi-tour.</p>
                </div>
            </div>
        </div>
        <div align="center"
            <p><a class="btn btn-outline-primary btn-lg" role="button" href="./proteomique_regle.php">Continuer</a></p>
        </div>
    </div>
</div>

<?php
require("footerNounours.php");
?>
