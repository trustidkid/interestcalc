<?php session_start(); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


</head>

<body>
    <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <form class="form-group" action="api/v1/calcuteroi.php" method="POST">
        
        <div>
            <?php $_SESSION['message'] ?>
        </div>


        <div class='form-control'>
            <label for='Duration'>Duration</label>
            <input type='number' id='capital' placeholder="Enter Number of month" required min=1>
            <p class='error' id='duration-error'></p>
        </div>

        <div class='form-control'>
            <label for='product'>Product</label>
            <select class="form-control form-control-lg" required id='product' name="product">
                <option name='Piggybank' value='Select Product'>Select Product</option>
                <option name='Piggybank' value='piggybank'>Piggybank</option>
                <option name='Flex Naira' value='Flex Naira'>Flex Naira</option>
                <option name='Safelock' value='Safelock'>SafeLock</option>
                <option name='Targets' value='Targets'>Targets</option>
                <option name='Flex Dollar' value='Flex Dollar'>Flex Dollar</option>
            </select>
        </div>

        <div class='form-control'>
            <label for='capital'>Capital</label>
            <input type='number' name="amount" id='capital' placeholder="$1200.00" required min=100>
            <p class='error' id='capital-error'></p>

            <button type='submit' name="calculate" id='calculate-btn'>Calcuate</button>
        </div>

    </form>
    <script src="" async defer></script>
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>