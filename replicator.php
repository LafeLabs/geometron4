<?php


$dnaurl = "https://raw.githubusercontent.com/LafeLabs/geometron4/master/javascript/dna.js";
$baseurl = explode("javascript/",$dnaurl)[0];
$dnaraw = explode("dna = ",file_get_contents($dnaurl))[1];
$dna = json_decode($dnaraw);

mkdir("javascript");
mkdir("icons");
mkdir("php");
mkdir("symbolfeed");
mkdir("uploadimages");


foreach($dna->html as $value){
    copy($baseurl.$value,$value);
}

foreach($dna->javascript as $value){
    copy($baseurl."javascript/".$value,$value);
}

foreach($dna->icons as $value){
    copy($baseurl."icons/".$value,$value);
}

foreach($dna->php as $value){
    copy($baseurl."php/".$value,$value);
}

?>