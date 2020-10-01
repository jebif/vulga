<?php
$bodyclass = 'labo';
require("headerNounours.php");
?>

<h1>Quelle est la structure de la protéine qui empêche les antibiotiques d'agir ?</h1>

<div class="row">
    <div class="col-8">
        <div class="explication">
            <h2>Sélectionnes les protéines vérifiant les règles</h2>
            <p>Tu peux naviguer entre les règles et entre les protéines grâce aux flèches à gauche et à droite.</p>
            <div class="row">
                <div class="col-6">
                    <div id="carouselRegles" class="carousel slide" data-interval="false">
                        <div class="carousel-inner">
                            <div class="carousel-item active" id="coude">
                                <img src="../media/nounours/proteomique/coude.png" class="d-block w-100" />
                                <div class="carousel-caption">
                                    <h5>Le coude</h5>
                                    <p>3 acides aminés bordeaux suivis de 3 vert forment un coude.</p>
                                </div>
                            </div>
                            <div class="carousel-item" id="membrane">
                                <img src="../media/nounours/proteomique/membrane.png" class="d-block w-100" />
                                <div class="carousel-caption">
                                    <h5>La membrane</h5>
                                    <p>À proximité d’une paroi marron, les acides aminés cyan entre en contact avec celle-ci.</p>
                                </div>
                            </div>
                            <div class="carousel-item" id="no-contact">
                                <img src="../media/nounours/proteomique/nocontact.png" class="d-block w-100" />
                                <div class="carousel-caption">
                                    <h5>Le sans-contact</h5>
                                    <p>Les acides aminés bordeaux et cyan ne sont jamais en contact.</p>
                                </div>
                            </div>
                            <div class="carousel-item" id="contact">
                                <img src="../media/nounours/proteomique/contact.png" class="d-block w-100" />
                                <div class="carousel-caption">
                                    <h5>Le contact</h5>
                                    <p>Les acides aminés orange séparés par 2 à 6 autres acides aminés sont en contact.</p>
                                </div>
                            </div>
                            <div class="carousel-item" id="demitour">
                                <img src="../media/nounours/proteomique/demitour.png" class="d-block w-100" />
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
                <div class="col-6" id="rules">
                    <div role="alert" id="alertDiv" style="display:none;"></div>
                    <div id="carouselProt" class="carousel slide" data-interval="false">
                        <div class="carousel-inner">
                            <div class="carousel-item active container">
                                <button class="list-group-item" onclick="clickOnProt(this, getActiveCarouselItem())" value="1">
                                    <img src="../media/nounours/proteomique/prot-2.png"  class="d-block w-100 img-fluid" />
                                </button>
                            </div>
                            <div class="carousel-item container">
                                <button class="list-group-item" onclick="clickOnProt(this, getActiveCarouselItem())" value="2">
                                    <img src="../media/nounours/proteomique/prot-3.png"  class="d-block w-100 img-fluid" />
                                </button>
                            </div>
                            <div class="carousel-item container">
                                <button class="list-group-item" onclick="clickOnProt(this, getActiveCarouselItem())" value="3">
                                    <img src="../media/nounours/proteomique/prot-4.png"  class="d-block w-100 img-fluid"/>
                                </button>
                            </div>
                            <div class="carousel-item container">
                                <button class="list-group-item" onclick="clickOnProt(this, getActiveCarouselItem())" value="4">
                                    <img src="../media/nounours/proteomique/prot-5.png"  class="d-block w-100 img-fluid" />
                                </button>
                            </div>
                            <div class="carousel-item container">
                                <button class="list-group-item" onclick="clickOnProt(this, getActiveCarouselItem())" value="5">
                                    <img src="../media/nounours/proteomique/prot-6.png" class="d-block w-100 img-fluid" />
                                </button>
                            </div>
                            <div class="carousel-item container">
                                <button class="list-group-item" onclick="clickOnProt(this, getActiveCarouselItem())" value="6">
                                    <img src="../media/nounours/proteomique/prot-7.png" class="d-block w-100 img-fluid" />
                                </button>
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
        </div>
    </div>
    <div class="col-4">
    <?php
        if(! isset($_GET['r']) || isset($_GET['r']) && $_GET['r'] == "coude") {
    ?>

        <button class="btn btn-outline-primary btn-lg" onclick="isItTheGoodAnswer()">Vérifier la protéine</button>

    <?php
        } else if(isset($_GET['r']) && $_GET['r'] == "success") {

    ?>
        <div class="explication">
            <div class="alert alert-success" role="alert">C'est ça, tu as trouvé que la protéine 1 qui rend Nonours malade. Bravo !</div>
            <img src="../media/nounours/proteomique/prot-2.png" width="100%" />
            <a class="btn btn-outline-primary btn-lg" href="proteomique_conclusion.php">Suite atelier</a>
        </div>
        <?php
            }
        ?>
    </div>
</div>


<script src="proteomique.js"></script>

<?php
require("footerNounours.php");
?>
