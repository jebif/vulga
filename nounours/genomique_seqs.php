<?php

$pustulus = "CCTGCCTGTAAGTTGGGGATAACT";
$grognus = "AATGTGCAGGATAACTTGCATGCA";
$beatis = "GGATAACTATGCATGCATGCATGC";
$trifors = "ATGCATGCATGCATAAGTTGGGGC";

function exploded_seq($seq){
    return str_split($seq, 1);
}


function display_seq($seq, $disabled=0){
    $seqexploded = exploded_seq($seq);
    foreach($seqexploded as $nucl){
        if($disabled){
            echo "<span class='".$nucl." disabled'>$nucl</span>";
        }else{
            echo "<span class='$nucl'>$nucl</span>";
        }
    }
}

function display_seq_jeu($seq, $value, $pos_identified, $pos_select){
    $seqexploded = exploded_seq($seq);
    for($i = 0; $i < count($seqexploded); $i++){
        $nucl = $seqexploded[$i];
        $nuclvalue = $value+$i;
        if(in_array($nuclvalue,$pos_identified) || ($nuclvalue == $pos_select)){
            echo "<span class='$nucl'>$nucl</span>";
        }else{
            echo "<input type='submit' name='pos_".$nuclvalue."' value='".$nucl."' class='".$nucl."'>";
        }
    }
}

function display_seq_jeu_id($seq, $value, $pos_identified, $pos_select){
    $seqexploded = exploded_seq($seq);
    for($i = 0; $i < count($seqexploded); $i++){
        $nucl = $seqexploded[$i];
        $nuclvalue = $value+$i;
        if(in_array($nuclvalue,$pos_identified)){
            echo "<span class='$nucl'>$nucl</span>";
        }else{
            echo "<span class='Z'>&nbsp;</span>";
        }
    }
}

function display_seq_reads($seq_identified, $seq_select){
    $seqs = ["TAAGTTGG", "GGATAACT", "TAAGTTGG", "GGATAACT",  "CCTGCCTG", "TAACTAGT"];
    for($i = 0; $i < count($seqs); $i++){
        $seq = $seqs[$i];
        $protId = 'seq'.$i;
        $disabled = '';
        $checked = '';
        $disabledflag = 0;
        if(in_array($i,$seq_identified)){
            $disabled = ' class=\'disabled\' disabled';
            $disabledflag = 1;
        }

        if($seq_select == $protId){
            $checked = ' checked';
        }

        echo "<input type='radio' id='".$protId."' value='".$protId."' name='read'".$disabled.$checked.">";
        echo "<label for='".$protId."'".$disabled.">";
        display_seq($seq, $disabledflag);
        echo '</label></input>';
    }
}
/*
"CCTGCCTG" 300
"TAAGTTGG" 308 213
"GGATAACT" 316 108
"TAACTAGT" 403
*/

function test_alignement($seq, $pos){
    if(($seq == 0 || $seq == 2) && ($pos == 308 || $pos == 213)){
        return 1;
    }else if(($seq == 1 || $seq == 3) && ($pos == 108 || $pos == 316)){
        return 1;
    }else if($seq == 4 && $pos == 300){
        return 1;
    }else if($seq == 5 && $pos == 403){
        return 1;
    }

    return 0;
}
?>
