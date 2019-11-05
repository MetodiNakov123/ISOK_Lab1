<?php

// echo "========== Vezba 3.1 ========================<br/><br/>";

$arr1 = array(2, 5, 6, 10, 41, 24, 32, 9, 16, 19);
$arr2 = array("Metodi" => "Metodi", "Nakov => Nakov", "Kocani" => "Kocani");
$arr3 = array(array(1,2,3,4),array(5,6,7,8,9) );


echo "========== Vezba 3.2 ========================<br/><br/>";

for($i=0; $i < count($arr1); $i++){
    print "$arr1[$i]  ";
}

echo "<br/><br/>";

foreach ($arr1 as $key => $val){
    print "$val  ";
}



echo "<br/><br/>========== Vezba 3.3 ========================<br/><br/>";

$newArray = array();
foreach ($arr1 as $val){
    if($val > 20){
        array_push($newArray, $val);
    }
}

foreach ($newArray as $key => $val){
    print "$val  ";
}

echo "<br/><br/>========== Vezba 3.4 ========================<br/><br/>";

$min = min($arr1);
$max = max($arr1);

print "Najgolem element na poleto e: <b>$max</b>. <br/>";
print "Najmal element na poleto e: <b>$min</b>. <br/>";



echo "<br/><br/>========== Vezba 3.5 ========================<br/><br/>";

$recenica = "PHP is a widely-used general-purpose scripting language that is especially suited for Web development";

$niza = explode(" ", $recenica);
//$niza = array_unique($niza);
$aPole = array();

foreach ($niza as $val){
    $aPole[$val] = strlen($val);
}

print_r($aPole);
echo "<br/><br/>";

foreach ($aPole as $key => $value){
    print "$key => $value <br/>";
}


