<?php
    $tireqty = $_POST['tireqty'];
    $oilqty = $_POST['oilqty'];
    $sparkqty = $_POST['sparkqty'];
    $find = $_POST['find'];
    $totalqty = 0;
    $totalamount = 0.00;
    $discount = 0;

    //Fewer than 10 tires purchased - No discount
    //10-49 tires purchased - 5% discount
    //50-99 tires purchased - 10% discount
    //100 tires purchased - 15% discount
    if (($tireqty >= 10) && ($tireqty <= 49))
    {
        $discount = 5;
    }
    else if (($tireqty >= 50) && ($tireqty <= 99))
    {
        $discount = 10;
    }
    else if ($tireqty >= 100)
    {
        $discount = 15;
    }

    $totalqty = $tireqty + $oilqty + $sparkqty;

    define('TIREPRICE', 100);
    define('OILPRICE', 10);
    define('SPARKPRICE', 4);

    $tireprice = TIREPRICE - (TIREPRICE * $discount / 100);

    $totalamount = $tireqty * $tireprice
                 + $oilqty * OILPRICE
                 + $sparkqty * SPARKPRICE;

    $taxrate = 0.10;
    $total = $totalamount * (1 + $taxrate);

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
        echo '<p style="color:red">';
        echo "You didn't order anything from a previous page!</p>";
    }
    else{
        echo "<p>Your order contains:</p>";

    if ($tireqty > 0)
    {
        echo "<p>{$tireqty} tire(s)";

        if ($discount > 0)
        {
            echo '</br>You have received ' . $discount . '% discount!';
        }
        echo "</p>";
    }
    if ($oilqty > 0)
    {
        echo "<p>{$oilqty} bottle(s) of oil</p>";
    }
    if ($sparkqty > 0) {
        echo "<p>{$sparkqty} spark plug(s).</p>";
    }
        
    echo "<strong>Items ordered: {$totalqty}</strong><br />";
    echo "Subtotal: $". number_format($totalamount, 2) . "<br />";
    echo "<strong> Total including taxes: $" . number_format($total, 2) . "</strong><br />";
    }

    switch ($find)
    {
        case 'a':
            echo '<p>Regular customer.</p>';
            break;
        case 'b':
            echo '<p>Customer referred by TV advert.</p>';
            break;
        case 'c':
            echo '<p>Customer referred by phone directory.</p>';
            break;
        case 'd':
            echo '<p>Customer referred by word of mouth.</p>';
            break;
        default:
            echo '<p>We do not know how this customer found us.</p>';
            break;
    }


?>
</body>
</html>

