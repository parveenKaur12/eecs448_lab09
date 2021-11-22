

<?php


    echo "<link rel='stylesheet' type='text/css' href='style.css'>";
    $userPassword = $_POST['password'];
    $daisyAmount = $_POST['Daisies'];
    $pinkAmount = $_POST['Pink'];
    $tulipsAmount = $_POST['Tulips'];

    $shippingType = $_POST['shipping'];

    $pinkPrice = $pinkAmount*4;
    $daisyPrice = $daisyAmount*5;
    $tulipsPrice = $tulipsAmount*10;

    echo"<h1>WELCOME to Royal Flowers!</h1>";
    echo"Your password is: $userPassword <br>";
   if($shippingType == "Free")
    {
        $priceShipping = 0;
    }
    else if($shippingType == "Overnight")
    {
        $priceShipping = 50;
    }
    else if($shippingType == "threeDay")
    {
        $priceShipping = 5;
    }
    $total = $priceShipping + $tulipsPrice + $daisyPrice + $pinkPrice;
    echo"Here is your receipt!";
    echo"<table border='1'>";
    echo "<tr><th>Item</th><th>Quantity</th><th>Cost per Item</th><th>Sub Total</th></tr>";
    echo "<tr><th>Pink Dahlias</th><th>$pinkAmount</th><th>$4.00</th><th>$$pinkPrice</th></tr>";
    echo "<tr><th>Daisies</th><th>$daisyAmount</th><th>$5.00</th><th>$$daisyPrice</th></tr>";
    echo "<tr><th>Tulips</th><th>$tulipsAmount</th><th>$10.00</th><th>$$tulipsPrice</th></tr>";
    echo "<tr><th>Shipping</th><th>$shippingType</th><th>$$priceShipping</th></tr>";
    echo "<tr><th>Total Cost:</th><th>$$total</th></tr>";


?>
