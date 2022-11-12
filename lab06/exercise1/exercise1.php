<!DOCTYPE html>
<html>

<?php
    //used for the sake of ease
    $size = 100;
    $color = "yellow";

    //top row
    echo "<tr style='background-color: ", $color,";'><td></td>";
    for ($i = 1; $i <= $size; $i++) {
        echo "<td>$i</td>";
    }
    echo "</tr>";

    //first column and multiplcation field
    for ($i = 1; $i <= $size; $i++) {
        echo "<tr>";
        echo "<td style='background-color: ", $color,";'>$i</td>";
        for ($j = 1; $j <= $size; $j++) {
            echo "<td>", $i * $j,"</td>";
        } 
        echo "</tr>";
    }
?>

</html>