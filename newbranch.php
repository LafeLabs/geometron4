<?php

$branchname = $_GET["filename"];//get url
mkdir($branchname);
mkdir($branchname."/javascript");
mkdir($branchname."/icons");
mkdir($branchname."/php");
mkdir($branchname."/symbolfeed");
mkdir($branchname."/uploadimages");

$files = scandir(getcwd());
$jsfiles = scandir(getcwd()."/javascript");
$iconfiles = scandir(getcwd()."/icons");
$phpfiles = scandir(getcwd()."/php");

$htmlfiles = [];
foreach($files as $value){
    if(substr($value,-5) == ".html"){
        array_push($htmlfiles,$value);
    }
}

$dna = json_decode("{}");
$dna->html = $htmlfiles;
$dna->javascript = $jsfiles;
$dna->icons = $iconfiles;
$dna->php = $phpfiles;
    
foreach($htmlfiles as $value){
    copy($value,$branchname."/".$value);
}

?>