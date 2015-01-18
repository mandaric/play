<?php
    $tireqty = $_POST['tireqty'];
    $oilqty = $_POST['oilqty'];
    $sparkqty = $_POST['sparkqty'];
    $totalqty = 0;
    $totalamount = 0.00;

    $totalqty = $tireqty + $oilqty + $sparkqty;

    define('TIREPRICE', 100);
    define('OILPRICE', 10);
    define('SPARKPRICE', 4);

    $totalamount = $tireqty * TIREPRICE
                 + $oilqty * OILPRICE
                 + $sparkqty * SPARKPRICE;

    $taxrate = 0.10;
    $totalamount = $totalamount * (1 + $taxrate);


////divide two numbers and return a value with out a remainder
//function divider()
//{
//    $a = 10135;
//    $b = 112;
//    return ($a/$b) - ($a%$b)/$b;
//    }
?>
<html>
<head>
    <title>Bob's Auto Parts</title>
</head>
<body>
<h1>Bob's Auto Parts</h1>
<h2>Order results</h2>
<?php
    echo "<p>Order processed at:</p> <br />";
    echo date('H:i, jS F Y');

    if ($totalqty == 0)
    {
        echo "<p>You didn't order anything from a previous page!</p>";
    }
    else{
    echo "<p>Your order contains:</p>";

    if ($tireqty > 0)
    {
        echo "<p>{$tireqty} tire(s)</p>";
    }
    if ($oilqty > 0)
    {
        echo "<p>{$oilqty} bottle(s) of oil</p>";
    }
    if ($sparkqty > 0) {
        echo "<p>{$sparkqty} spark plug(s).</p>";
    }
        
    echo "<strong>Items ordered: </strong>{$totalqty} <br />";
    echo "Subtotal: $". number_format($totalamount, 2) . "<br />";echo "<strong> Total including taxes: $</strong>" . number_format($totalamount, 2) . "<br />";
    }



?>
</body>
</html>

