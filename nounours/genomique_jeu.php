<?php
$bodyclass = 'labo2';
require("headerNounours.php");
require("genomique_seqs.php");

$pos_identified = array();
$seq_identified = array();

if(array_key_exists('validate', $_POST)){
    if(array_key_exists('posid', $_POST) && $_POST['posid'] != ''){
        $pos_identified=str_split($_POST['posid'],3);
    }



    if(array_key_exists('seqid', $_POST)  && $_POST['seqid'] != ''){
        $seq_identified=str_split($_POST['seqid'],1);
    }

    if(array_key_exists('bacto_beatis', $_POST)){
        $bacto_selected = "beatis" ;
    }else if(array_key_exists('bacto_grognus', $_POST)){
        $bacto_selected = "grognus" ;
    }else if(array_key_exists('bacto_pustulus', $_POST)){
        $bacto_selected = "pustulus" ;
    }else if(array_key_exists('bacto_trifors', $_POST)){
        $bacto_selected = "trifors" ;
    }

    if(! array_key_exists('read', $_POST) && ! isset($bacto_selected)){
        echo "Il faut choisir un read !";
    }else if(array_key_exists('read', $_POST)){
        $read = $_POST['read'];
        preg_match('/seq([0-9]+)/', $read, $matches);
        $matches_seq = $matches[1];

        foreach ($_POST as $key => $value){
            preg_match('/pos_([0-9]{3})/', $key, $matches);
            if(count($matches) > 0){
                $matches_pos = $matches[1];
                break;
            }else{

            }
        }
    }
}
?>

<h1>Quelle espèce de Versinia rend Nounours malade ?</h1>

<div class="row">
    <div class="col-8">
        <div class="explication">
            <p>Pour reconstruire le puzzle, sélectionne une des pièces, que l'on appelle une lecture, à droite. Il faut que cette pièce s'aligne parfaitement avec les génomes à gauche. Dès que tu as trouvé où elle allait, clique sur la première lettre de la séquence de gauche qui correspond.</p>

            <?php
            $seq_select = NULL;
            $pos_select = NULL;
            if(isset($matches_seq) && isset($matches_pos)){
                $result = test_alignement($matches_seq, $matches_pos);
                if($result == 1){
                    array_push($seq_identified, $matches_seq);
                    array_push($pos_identified, $matches_pos, $matches_pos+1, $matches_pos+2, $matches_pos+3, $matches_pos+4, $matches_pos+5, $matches_pos+6, $matches_pos+7);
                    ?><div class="alert alert-success" role="alert">Bravo ! Cette lecture s'aligne effectivement à cet endroit !</div>
                    <?php
                }else{
                    ?>
                    <div class="alert alert-danger" role="alert">Es-tu sûr ?</div>
                    <?php
                    $seq_select = "seq".$matches_seq;
                    $pos_select = $matches_pos;
                }
            }
            ?>

            <form method="post" action="" class="aligner_at2">
                <input type='hidden' name='validate' value='validate'>
                <input type='hidden' name='seqid' value='<?php echo implode('',$seq_identified); ?>'>
                <input type='hidden' name='posid' value='<?php echo implode('',$pos_identified); ?>'>

                <div class="row">
                    <div class='col-8'>
                        <p class='z'>>Versinia grognus</p>
                        <p class="alignement"><?php echo display_seq_jeu($grognus, 100, $pos_identified, $pos_select); ?></p>
                        <p class="alignement"><?php echo display_seq_jeu_id($grognus, 100, $pos_identified, $pos_select); ?></p>
                        <p class='z'>>Versinia trifors</p>
                        <p class="alignement"><?php echo display_seq_jeu($trifors, 200, $pos_identified, $pos_select); ?></p>
                        <p class="alignement"><?php echo display_seq_jeu_id($trifors, 200, $pos_identified, $pos_select); ?></p>
                        <p class='z'>>Versinia pustulus</p>
                        <p class="alignement"><?php echo display_seq_jeu($pustulus, 300, $pos_identified, $pos_select); ?></p>
                        <p class="alignement"><?php echo display_seq_jeu_id($pustulus, 300, $pos_identified, $pos_select); ?></p>
                        <p class='z'>>Versinia beatis</p>
                        <p class="alignement"><?php echo display_seq_jeu($beatis, 400, $pos_identified, $pos_select); ?></p>
                        <p class="alignement"><?php echo display_seq_jeu_id($beatis, 400, $pos_identified, $pos_select); ?></p>
                    </div>

                    <div class='col-4'>
                        <div class="aligner_radio_toolbar">
                            <?php display_seq_reads($seq_identified, $seq_select); ?>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <?php
    if(count($seq_identified) == 6){
    ?>
    <div class="col-4">
        <div class="explication">
            <form method="post">
                <input type='hidden' name='validate' value='validate'>
                <input type='hidden' name='seqid' value='<?php echo implode('',$seq_identified); ?>'>
                <input type='hidden' name='posid' value='<?php echo implode('',$pos_identified); ?>'>

                <p>Alors <?php echo $_SESSION['explorerName']; ?>, as-tu une idée de quelle bactérie rend Nounours malade&nbsp;?</p>

                <?php
                    $flagbacto = 0;
                    if(isset($bacto_selected)){
                        if($bacto_selected != "pustulus"){
                        ?>
                            <div class="alert alert-danger" role="alert">As-tu besoin d'aide&nbsp;? Regarde bien l'alignement&nbsp;!</div>
                        <?php
                        }else{
                        ?>
                            <div class="alert alert-success" role="alert">Eh oui&nbsp;! Contrairement aux autres bactéries, nous avons pu reconstituer l'intégralité du génome de Versinia pustulus à partir de l'ADN prélevé dans le microbiote de Nounours. Il s'agit donc bien de la bactérie responsable de la maladie de Nounours.</div>
                            <p><a class="btn btn-outline-primary btn-lg" role="button" href="./genomique_conclusion.php">Continuer</a></p>
                        <?php
                            $flagbacto = 1;
                        }
                    }
                ?>

                <p>
                    <?php if($flagbacto){
                        ?>
                        <img src="../media/nounours/beatis.svg" class="versinia cerclevert" />Versinia beatis
                        <?php
                    }else{
                    ?>
                    <input type='image' name='bacto_beatis' value='Versinia beatis' class='versinia cerclevert' src="../media/nounours/beatis.svg" />
                    <input type='submit' name='bacto_beatis' value='Versinia beatis' class='nobutton' />
                    <?php }
                    ?>
                </p>

                <p>
                    <?php if($flagbacto){
                        ?>
                        <img src="../media/nounours/grognus.svg" class="versinia cerclevert" />Versinia grognus
                        <?php
                    }else{
                    ?>
                    <input type='image' name='bacto_grognus' value='Versinia grognus' class='versinia cerclevert' src="../media/nounours/grognus.svg" />
                    <input type='submit' name='bacto_grognus' value='Versinia grognus' class='nobutton' />
                    <?php }
                    ?>
                </p>

                <p>
                    <?php if($flagbacto){
                        ?>
                        <img src="../media/nounours/beatis.svg" class="versinia cerclevert" />Versinia pustulus
                        <?php
                    }else{
                    ?>
                    <input type='image' name='bacto_pustulus' value='Versinia pustulus' class='versinia cerclevert' src="../media/nounours/pustulus.svg"/>
                    <input type='submit' name='bacto_pustulus' value='Versinia pustulus' class='nobutton' />
                    <?php }?>
                </p>

                <p>
                    <?php if($flagbacto){
                        ?>
                        <img src="../media/nounours/trifors.svg" class="versinia cerclevert" />Versinia beatis
                        <?php
                    }else{
                    ?>
                    <input type='image' name='bacto_trifors' value='Versinia trifors' class='versinia cerclevert' src="../media/nounours/trifors.svg"/>
                    <input type='submit' name='bacto_trifors' value='Versinia trifors' class='nobutton' />
                    <?php }?>
                </p>
            </form>
        </div>
    </div>
    <?php
    }
    ?>
</div>


<?php
require("footerNounours.php");
?>
