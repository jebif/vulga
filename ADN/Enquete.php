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

<h2>Alors, qui a fait cette crotte ?</h2>
<img src="./EcoleADN/Crotte.JPG" alt = "Crotte à analyser" class="rounded float-right">


<p>Pour que l'alignement soit réalisé entre la séquence de ton échantillon et celle des animaux ci-dessous, clique sur chaque animal.</p>

<section class="row">
<div class="card-group">
<?php
    if (strrchr($q, $chien) == "") {
        ?>
        <div class="card">
            <img src="EcoleADN/Chien.jpg" class="card-img-top" alt="chien" width="100px">
            <div class="card-body">
                <h5 class="card-title">Un chien ?</h5>
                <a class="btn btn-outline-primary" role="button" href="Align6.php?q=<?php echo $q.$chien; ?>">Ajouter le chien</a>

            </div>
        </div>
        <?php
    }

	if (strrchr($q, $marmotte) == ""){
        ?>
        <div class="card">
            <img src="EcoleADN/Castor.png" class="card-img-top" alt="marmotte" width="100px">
            <div class="card-body">
                <h5 class="card-title">Une marmotte ?</h5>
                <a class="btn btn-outline-primary" role="button" href="Align6.php?q=<?php echo $q.$marmotte; ?>">Ajouter la marmotte</a>
            </div>
        </div>
        <?php
    }

    if (strrchr($q, $renard) == "") {
        ?>
        <div class="card">
            <img src="EcoleADN/Renard.jpg" class="card-img-top" alt="Renard" width="100px">
            <div class="card-body">
                <h5 class="card-title">Un renard ?</h5>
                <a class="btn btn-outline-primary" role="button" href="Align6.php?q=<?php echo $q.$renard; ?>">Ajouter le renard</a>
            </div>
        </div>
        <?php
    }

    if (strrchr($q, $lynx) == "") {
        ?>
        <div class="card">
            <img src="EcoleADN/Lynx.png" class="card-img-top" alt="lynx" width="100px">
            <div class="card-body">
                <h5 class="card-title">Un lynx ?</h5>
                <a class="btn btn-outline-primary" role="button" href="Align6.php?q=<?php echo $q.$lynx; ?>">Ajouter le lynx</a>
            </div>
        </div>
        <?php
    }

	if (strrchr($q, $loup) == ""){
        ?>
        <div class="card">
            <img src="EcoleADN/Loup.jpg" class="card-img-top" alt="loup" width="100px">
            <div class="card-body">
                <h5 class="card-title">Un loup ?</h5>
                <a class="btn btn-outline-primary" role="button" href="Align6.php?q=<?php echo $q.$loup; ?>">Ajouter le loup</a>
            </div>
        </div>
        <?php
    }

    if (strrchr($q, $elephant) == "") {
        ?>
        <div class="card">
            <img src="EcoleADN/Elephant.jpg" class="card-img-top" alt="elephant" width="100px">
            <div class="card-body">
                <h5 class="card-title">Un éléphant ?</h5>
                <a class="btn btn-outline-primary" role="button" href="Align6.php?q=<?php echo $q.$renard; ?>">Ajouter l'éléphant</a>
            </div>
        </div>
        <?php
    }
		?>
</div>
</section>

<?php
require("./footerLoup.php");
?>
