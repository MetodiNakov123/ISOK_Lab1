<?php

echo "========== Vezba 2.1 ========================<br/><br/>";
$ime = "Metodi";
$prezime = "Nakov";
$fullName = $ime . " " . $prezime;
print $fullName;

echo "<br/><br/>========== Vezba 2.2 ========================<br/><br/>";

$string = "ova e test recenica";

$str1 = strtoupper($string);
$str2 = strtolower($string);
$str3 = ucfirst($string);
$str4 = ucwords($string);

print "$str1 <br/>";
print "$str2 <br/>";
print "$str3 <br/>";
print $str4;

echo "<br/><br/>========== Vezba 2.3 ========================<br/><br/>";

$arr = array('programski','praktikum','laboratoriski','vezbi');

$string2 = implode(" | ",$arr);
print $string2;