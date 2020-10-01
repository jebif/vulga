<?php
$bodyclass = 'labo';
require("headerNounours.php");
?>

<h1>Quelle est la structure de la protéine qui empêche les antibiotiques d'agir ?</h1>

<div class="row">
    <div class="col-4">
        <div class="explication">
            <h2>Les règles que tu connais :</h2>

            <div id="carouselRegles" class="carousel slide" data-ride="carousel" data-interval="false">
                <div class="carousel-inner">
                    <div class="carousel-item active" id="coude">
                        <img src="../media/nounours/proteomique/coude.png" class="d-block w-100" data-interval="2000" />
                        <div class="carousel-caption">
                            <h5>Le coude</h5>
                            <p>3 acides aminés bordeaux suivis de 3 vert forment un coude.</p>
                        </div>
                    </div>
                    <div class="carousel-item" id="membrane">
                        <img src="../media/nounours/proteomique/membrane.png" class="d-block w-100" data-interval="2000" />
                        <div class="carousel-caption">
                            <h5>La membrane</h5>
                            <p>À proximité d’une paroi marron, les acides aminés cyan entre en contact avec celle-ci.</p>
                        </div>
                    </div>
                    <div class="carousel-item" id="no-contact">
                        <img src="../media/nounours/proteomique/nocontact.png" class="d-block w-100" data-interval="2000" />
                        <div class="carousel-caption">
                            <h5>Le sans-contact</h5>
                            <p>Les acides aminés bordeaux et cyan ne sont jamais en contact.</p>
                        </div>
                    </div>
                    <div class="carousel-item" id="contact">
                        <img src="../media/nounours/proteomique/contact.png" class="d-block w-100" data-interval="2000" />
                        <div class="carousel-caption">
                            <h5>Le contact</h5>
                            <p>Les acides aminés orange séparés par 2 à 6 autres acides aminés sont en contact.</p>
                        </div>
                    </div>
                    <div class="carousel-item" id="demitour">
                        <img src="../media/nounours/proteomique/demitour.png" class="d-block w-100" data-interval="2000" />
                        <div class="carousel-caption">
                            <h5>Le demi-tour</h5>
                            <p>2 acides aminés bordeaux précédés et suivis par 2 vert forment un demi-tour.</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselRegles" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselRegles" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

    <div class="col-4">
        <div class="explication">
            <div id="carouselProt" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active container">
                        <img src="../media/nounours/proteomique/prot-2.png" class="d-block w-100 img-fluid" data-interval="2000" />
                    </div>
                    <div class="carousel-item container">
                        <img src="../media/nounours/proteomique/prot-3.png" class="d-block w-100 img-fluid" data-interval="2000"/>
                    </div>
                    <div class="carousel-item container">
                        <img src="../media/nounours/proteomique/prot-4.png" class="d-block w-100 img-fluid" ata-interval="2000"/>
                    </div>
                    <div class="carousel-item container">
                        <img src="../media/nounours/proteomique/prot-5.png" class="d-block w-100 img-fluid" data-interval="2000"/>
                    </div>
                    <div class="carousel-item container">
                        <img src="../media/nounours/proteomique/prot-6.png" class="d-block w-100 img-fluid" data-interval="2000"/>
                    </div>
                    <div class="carousel-item container">
                        <img src="../media/nounours/proteomique/prot-7.png" class="d-block w-100 img-fluid" data-interval="2000"/>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselProt" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselProt" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <div class="col-4">
        <p><a class="btn btn-outline-primary btn-lg" role="button" href="./proteomique_regle.php">Continuer</a></p>
    </div>
</div>

<?php
require("footerNounours.php");
?>
