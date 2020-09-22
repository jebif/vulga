<?php
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

    //print_r($seq_identified);

    if(! array_key_exists('read', $_POST)){
        echo "Il faut choisir un read !";
    }else{
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

if(isset($matches_seq) && isset($matches_pos)){
    $result = test_alignement($matches_seq, $matches_pos);
    if($result == 1){
        array_push($seq_identified, $matches_seq);
        array_push($pos_identified, $matches_pos, $matches_pos+1, $matches_pos+2, $matches_pos+3, $matches_pos+4, $matches_pos+5, $matches_pos+6, $matches_pos+7);
        echo 'Bravo !';
    }else{
        echo 'Et non !';
    }
}
?>

<div class="ContentText">

<h1>Quelle espèce de Versinia rend Nounours malade ?</h1>

<h2>Retrouve à quelle espèce appartient ce morceau d'ADN</h2>
<p>Dès que tu as trouvé où elle allait, clique sur la première lettre qui correspond.</p>

<form method="post" action="" class="aligner_at2">
    <input type='hidden' name='validate' value='validate'>
    <input type='hidden' name='seqid' value='<?php echo implode('',$seq_identified); ?>'>
    <input type='hidden' name='posid' value='<?php echo implode('',$pos_identified); ?>'>

    <div class="row">
        <div class='col-8'>
            <p class='z'>>Versinia grognus</p>
            <p><?php echo display_seq_jeu($grognus, 100, $pos_identified); ?></p>
            <p class='z'>>Versinia trifors</p>
            <p><?php echo display_seq_jeu($trifors, 200, $pos_identified); ?></p>
            <p class='z'>>Versinia pustulus</p>
            <p><?php echo display_seq_jeu($pustulus, 300, $pos_identified); ?></p>
            <p class='z'>>Versinia beatis</p>
            <p><?php echo display_seq_jeu($beatis, 400, $pos_identified); ?></p>
        </div>

        <div class='col-4'>
            <div class="aligner_radio_toolbar">
                <?php display_seq_reads($seq_identified); ?>
            </div>
        </div>
    </div>
</form>
</div>

<?php
require("footerNounours.php");
?>
