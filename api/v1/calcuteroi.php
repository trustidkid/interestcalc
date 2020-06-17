<?php
session_start();
    //include('../connet.php');

    //$capital = 2500;//$_GET['capital'] ?? "";
    //$product = $_GET['product'] ?? "";
/*
    $capital = $_POST['amount']; //?? "";
    $product = $_POST['product']; //?? "";
    $month = 6; //number of month
    $duration = $month / 12;



    $message = $_SESSION['message'] =

   
    $interest = "";
    //echo $capital . "  " . $product . " ". $interest; die();

    switch($product){
        case 'Piggybank':
        $product = "Piggybank";
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

        $messgae = "Please choose product from the list";

    }

    $interest = $capital  * $interest * $duration;
    $roi = $capital + $interest;

     $messgae = $roi;

    //echo "You should have a total of ". $roi . " at the end of the year";
*/
    if(isset($_POST['calculate'])){
        $capital = $_POST['amount'];
        $package = $_POST['product'];
        $month = 6;
        $time = $month / 12;

    switch ($package) {
        case 'piggybank':
            $rate = 0.1;
            $interest = $capital * $rate * $time;
            $rio = $capital + $interest;
            echo $rio;
            break;
        case 'Flex Naira':
            $rate = 0.1;
            $interest = $capital * $rate * $time;
            $rio = $capital + $interest;
            echo $rio;
            break;
        case 'Safelock':
            $rate = 0.15;
            $interest = $capital * $rate * $time;
            $rio = $capital + $interest;
            echo $rio;
            break;
        case 'Targets':
            $rate = 0.1;
            $interest = $capital * $rate * $time;
            $rio = $capital + $interest;
            echo $rio;
            break;
        case 'Flex Dollar':
            $rate = 0.06;
            $interest = $capital * $rate * $time;
            $rio = $capital + $interest;
            echo $rio;
            break;
        
        default:
        echo "enter a valid package";
            
        break;
    }
}

?>