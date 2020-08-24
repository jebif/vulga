<?php
require("headerNounours.php");
?>
    <h1 class="titreApp">Les aventures de Nounours</h1>
    <img src="./EcoleADN/Crotte.JPG" alt = "Crotte à analyser" class="rounded float-right pl-3">
    <p>Nounours, la mascotte de notre association </p>
    <p>Ils ont donc apporté cette croite au laboratoire d'écologie alpine (LECA). Les chercheurs du laboratoire ont décidé de mener l'enquête.</p>
    <p>Afin d'identifier l'animal, ils ont extrait l'ADN de cette crotte. L'ADN est présent dans toutes les cellules d'un organisme. Il constitue une véritable carte d'identité. Une fois l'ADN obtenu, ils l'ont donc lu, ce qu'on appelle le séquençage de l'ADN. Ils ont obtenu la séquence suivante :</p>
    <p><span class="z">
ACACCCCTAC ATTCATATAT TGAATCACCC<br />
CTACTGTGCT ATGTCAGTAT CTCCAGGTAA<br />
ACCCTTCTCC CCTCCCCCTA TGTACGTCGT<br />
GCATTAATGG TTTGCCCCAT GCATATAAGC<br />
ATGTACATAA TATTATATCC TTACATAGGA<br />
CATACTAACT CAATCTCACA ATTCACTGAC
    </span></p>

    <p>En tant que bioinformaticien en herbe, les chercheurs du LECA te demande ton aide pour identifier l'animal à partir de cette séquence d'ADN. Clique sur le bouton ci-dessous pour commencer.</p>

    <p><a class="btn btn-outline-primary btn-lg" role="button" href= "./Bioinfo.php">Démarrer</a></p>

    <p>Pendant toute l'aventure, tu pourras revenir à cette page en cliquant sur le bouton "recommencer".</p>

<?php
require("./footerNounours.php");
?>
