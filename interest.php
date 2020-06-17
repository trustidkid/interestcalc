<?php 
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
?>