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
            <a id="home" href="..">HOME</a>
            <input type="Text" class="textInput" id="search">
            <a id="btnSearch" href=""><img width="20" src="assets/iconSearch.png"></a>
            <a id="cart" href=""><img width="20" src="assets/iconCart.png"></a>
        </div>
        <img id="topbarImage" src="assets/banner.jpg">
    </div>

    <div id="formPage">
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



<!--
            <table cellspacing="0">
                <tr>
                    <td></td>
                    <td>Quantity</td>
                    <td>Per Item</td>
                    <td>Sub Total</td>
                </tr>
                <tr id="tableItem1">
                    <td>Item 1</td>
                    <td><?php echo $quantity1 ?>
                    <td>$<?php echo $cost1?></td>
                    <td>$<?php echo $subtotal1 ?></td>
                </tr>
                <tr id="tableItem1">
                    <td>Item 2</td>
                    <td><?php echo $quantity2 ?>
                    <td>$<?php echo $cost2?></td>
                    <td>$<?php echo $subtotal2 ?></td>
                </tr>
                <tr id="tableItem1">
                    <td>Item 3</td>
                    <td><?php echo $quantity3 ?>
                    <td>$<?php echo $cost3?></td>
                    <td>$<?php echo $subtotal3 ?></td>
                </tr>
                <tr>
                    <td>shipping</td>
                    <td colspan="2">
                        <?php
                            switch ($shipping) {
                                case "Free":
                                    echo "FREE</td><td>$0.00</td>";
                                    $total += 0;
                                    break;
                                case "Fast":
                                    echo "FAST</td><td>$5.00</td>";
                                    $total += 5;
                                    break;
                                case "Express":
                                    echo "EXPRESS</td><td>$50.00</td>";
                                    $total += 50;
                                    break;
                            }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" id="totalCost">Total Cost</td>
                    <td>$<?php echo $total ?></td>
                </tr>
            </table>
        </div><br> 
    </div> -->
</body>


</html>