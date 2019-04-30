<?php

// list directories in a directory


if(isset($_post["filename"])){
    $filename = $_POST["filename"];//
    $files = scandir(getcwd()."/".$filename);
}
else{
    $files = scandir(getcwd());
}

$dirs = [];


foreach($files as $value){
    if($value{0} != "." && is_dir($value) && $value != "php" && $value != "javascript" && $value != "html" && $value != "css" && $value != "icons" && $value != "symbolfeed" && $value != "uploadimages"){
        array_push($dirs,$value);
    }

}

echo json_encode($dirs);

?>
