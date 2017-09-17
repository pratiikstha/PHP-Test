<?php

function pattern($n){
    $n=5;
    for($i=1; $i<=$n; $i++) {
        for($j=1; $j<=$i; $j++) {
            echo '*';
        }
        echo '</br>';
    }
    for($i=$n; $i>=1; $i--) {
        for($j=1; $j<=$i; $j++) {
            echo '*';
        }
        echo '</br>';
    }
}

function sort() {
    $array = array('108','101','102','98','110');

    for($i = 0; $i < count($array); $i++) {
        for($j = 0; $j < count($array)-1; $j++) {
            if($array[$j] > $array[$j+1]) {
                $temp = $array[$j+1];
                $array[$j+1]=$array[$j];
                $array[$j]=$temp;
            }       
        }
    }
}

function compareString($first_string, $second_string) {
    $string1 = $first_string;
    $string2 = $second_string;
    $pos = strspn($string1 ^ $string2, "\0");

    printf ('Expected Result: First difference between two strings at position %d: "%s" vs "%s"', $pos, $string1[$pos], $string2[$pos]);
}

//provide the value of n.
//example $n = XXX;
function arabicToRoman($n) {
    $n = str_repeat('I', $n);

    foreach (array('/I{5}/ V /V{2}/ X', '/I{4}/ IV /VIV/ IX') as $p) {
        foreach (array('IVX', 'XLC', 'CDM') as $r) {
            $a = explode(' ', strtr($p, 'IVX', $r));
            $n = preg_replace(array($a[0], $a[2]), array($a[1], $a[3]), $n);
        }
    }
    
    return $n;
}
?>