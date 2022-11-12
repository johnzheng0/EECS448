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
            <a id="btnSearch" href=""><img width="20" src="data:image/png;base64,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"></a>
            <a id="cart" href=""><img width="20" src="data:image/png;base64,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"></a>
        </div>
        <img id="topbarImage" src="https://upload.wikimedia.org/wikipedia/commons/f/f7/Oresund_bridge_gloomy_banner.jpg">
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