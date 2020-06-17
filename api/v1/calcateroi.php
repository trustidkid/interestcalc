<?php
    //include('../connet.php');

    //$capital = 2500;//$_GET['capital'] ?? "";
    //$product = $_GET['product'] ?? "";

    $capital = $_POST['amount'] ?? "";
    $product = $_POST['product'] ?? "";

   
    $interest = "";
    //echo $capital . "  " . $product . " ". $interest; die();

    switch($product){
        case 'Piggyvest':
        $product = "Piggyvest";
        $interest = 0.15;
        break;

        case 'Flex Naira':
        $product = "Flex Naira";
        $interest = 0.10;
        break;

        case 'Safelock':
        $product = "Safelock";
        $interest = 0.75;
        break;

        case 'Target':
        $product = "Target";
        $interest = 0.5;
        break;

        default:
        echo "Please choose product from the list";

    }

    $roi = $capital + ($capital * $interest);

    echo "You should have a total of ". $roi . " at the end of the year";

?>