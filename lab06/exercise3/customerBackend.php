<!DOCTYPE html>
<html>
<head>
    <title>Exercise 3</title>
    <link href="style.css" 
        rel="stylesheet" 
        type="text/css"/> 
</head>
<?php
    $username = $_POST["inputUsername"]; 
    $password = $_POST["inputPassword"];
    $shipping = $_POST["inputShipping"];
    $quantity1 = $_POST["inputQuantity1"];
    $quantity2 = $_POST["inputQuantity2"];
    $quantity3 = $_POST["inputQuantity3"];

    $cost1 = 1999.99;
    $cost2 = 17.99;
    $cost3 = 0.99;

    $subtotal1 = $quantity1 * $cost1;
    $subtotal2 = $quantity2 * $cost2;
    $subtotal3 = $quantity3 * $cost3;
    $total = $subtotal1 + $subtotal2 + $subtotal3;
?>

<body>
    <div id="topbar">
        <div id="topbarMenu">
            <a id="home" href="customerFrontend.html">HOME</a>
            <input type="Text" class="textInput" id="search">
            <a id="btnSearch" href="customerFrontend.html"><img width="20" src="assets/iconSearch.png"></a>
            <a id="cart" href="customerFrontend.html"><img width="20" src="assets/iconCart.png"></a>
        </div>
        <img id="topbarImage" src="assets/banner.jpg">
    </div>

    <div id="formPage">
        <h1>THANK YOU FOR YOUR PURCHASE</h1>

        <div id="loginDetails">
            <?php
                echo "Username: ", $username, "<br>";
                echo "Password: ", $password, "<br>";
            ?>
        </div><br>
        
        <div id="receipt">
            <div class="column receiptItems">
                items<br>
                <?php
                    if ($quantity1 != 0) {echo "Best Brick<br>";}
                    if ($quantity2 != 0) {echo "Mediocre Brick<br>";}
                    if ($quantity3 != 0) {echo "Shameful Brick<br>";}

                    echo "<br>Subtotal<br>";

                    switch ($shipping) {
                        case "Free":
                            echo "Free Shipping";
                            break;
                        case "Fast":
                            echo "Fast Shipping";
                            break;
                        case "Express":
                            echo "Express Shipping";
                            break;
                    }
                ?><br><br>
                Total<br>
            </div>
            <div class="column receiptQuantities">
                qty<br>
                <?php
                    if ($quantity1 != 0) {echo $quantity1, "<br>";}
                    if ($quantity2 != 0) {echo $quantity2, "<br>";}
                    if ($quantity3 != 0) {echo $quantity3, "<br>";}
                ?><br>
            </div>
            <div class="column receiptTotals">
                <br>
                <?php
                    if ($quantity1 != 0) {echo "$", $quantity1 * $cost1, "<br>";}
                    if ($quantity2 != 0) {echo "$", $quantity2 * $cost2, "<br>";}
                    if ($quantity3 != 0) {echo "$", $quantity3 * $cost3, "<br>";}

                    echo "<br>$", $total, "<br>";

                    switch ($shipping) {
                        case "Free":
                            echo "$0.00";
                            $total += 0;
                            break;
                        case "Fast":
                            echo "$5.00";
                            $total += 5;
                            break;
                        case "Express":
                            echo "$50.00";
                            $total += 50;
                            break;
                    }
                ?><br><br>
                <?php echo "$", $total, "<br>"; ?>
            </div>
        </div>
    </div>
</body>


</html>