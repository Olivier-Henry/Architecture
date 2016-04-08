<?php

$pages = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_STRING);

if(empty($pages)){
    $page = 'default';
}

$fileName = "../controller/$pages.php";

if(file_exists($fileName)){
    require $fileName;
}else{
    echo "404";
}

