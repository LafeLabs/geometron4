<?php

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
    
    $finalstring = "dna = ".json_encode($dna).";";

    echo json_encode($dna);
    $file = fopen("javascript/dna.js","w");// create new file with this name
    fwrite($file,$finalstring); //write data to file
    fclose($file);  //close file

?>
