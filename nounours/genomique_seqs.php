<?php

$pustulus = "CCTGCCTGTAAGTTGGGGATAACT";
$grognus = "AATGTGCAGGATAACTTGCATGCA";
$beatis = "GGATAACTATGCATGCATGCATGC";
$trifors = "ATGCATGCATGCATAAGTTGGGGC";

function exploded_seq($seq){
    return str_split($seq, 1);
}


function display_seq($seq){
    $seqexploded = exploded_seq($seq);
    foreach($seqexploded as $nucl){
        echo "<span class='$nucl'>$nucl</span>";
    }
}

function display_seq_jeu($seq, $value, $pos_identified){
    $seqexploded = exploded_seq($seq);
    for($i = 0; $i < count($seqexploded); $i++){
        $nucl = $seqexploded[$i];
        $nuclvalue = $value+$i;
        if(in_array($nuclvalue,$pos_identified)){
            echo "<span class='$nucl'>$nucl</span>";
        }else{
            echo "<input type='submit' name='pos_".$nuclvalue."' value='".$nucl."' class='".$nucl."'>";
        }
    }
}

function display_seq_reads($seq_identified){
    $seqs = ["TAAGTTGG", "GGATAACT", "TAAGTTGG", "GGATAACT",  "CCTGCCTG", "TAACTAGT"];
    for($i = 0; $i < count($seqs); $i++){
        $seq = $seqs[$i];
        $protId = 'seq'.$i;
        $disabled = '';
        if(in_array($i,$seq_identified)){
            $disabled = ' disabled class=\'disabled\'';
        }

        echo "<input type='radio' id='".$protId."' value='".$protId."' name='read'".$disabled.">";
        echo "<label for='".$protId."'>";
        display_seq($seq);
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
