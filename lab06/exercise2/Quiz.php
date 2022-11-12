<?php  
$ans1 = $_POST["quizChoice1"]; 
$ans2 = $_POST["quizChoice2"]; 
$ans3 = $_POST["quizChoice3"]; 
$ans4 = $_POST["quizChoice4"]; 
$ans5 = $_POST["quizChoice5"]; 

$ans1cor = "Obama";
$ans2cor = "Third";
$ans3cor = "White";
$ans4cor = "Time to get a watch";
$ans5cor = "This";

$col1="red";
$col2="red";
$col3="red";
$col4="red";
$col5="red";

$correct = 0;
if ($ans1 == $ans1cor) {$correct++; $col1="green";}
if ($ans2 == $ans2cor) {$correct++; $col2="green";}
if ($ans3 == $ans3cor) {$correct++; $col3="green";}
if ($ans4 == $ans4cor) {$correct++; $col4="green";}
if ($ans5 == $ans5cor) {$correct++; $col5="green";}

echo "<!DOCTYPE html><h1>Lab 06 Exercise 2: Quiz</h1>";

echo "<body style='width: fit-content;'>";

echo "<div class='quizForm' style='border: 1px solid black; padding: 8px;'>";
echo "<label>Question 1: What is Obama's last name?</label><br>";
echo "<label style='margin-left: 16px; color: ", $col1, "'>  You answered: ", $ans1, "</label><br>";
echo "<label style='margin-left: 16px;'>  Correct answer: ", $ans1cor, "</label><br>";
echo "</div><br>";

echo "<div class='quizForm' style='border: 1px solid black; padding: 8px;'>";
echo "<label>Question 2: If you pass the person in third place in a race, what place would you be in?</label><br>";
echo "<label style='margin-left: 16px; color: ", $col2, "'>  You answered: ", $ans2, "</label><br>";
echo "<label style='margin-left: 16px;'>  Correct answer: ", $ans2cor, "</label><br>";
echo "</div><br>";

echo "<div class='quizForm' style='border: 1px solid black; padding: 8px;'>";
echo "<label>Question 3: What color is the background?</label><br>";
echo "<label style='margin-left: 16px; color: ", $col3, "'>  You answered: ", $ans3, "</label><br>";
echo "<label style='margin-left: 16px;'>  Correct answer: ", $ans3cor, "</label><br>";
echo "</div><br>";

echo "<div class='quizForm' style='border: 1px solid black; padding: 8px;'>";
echo "<label>Question 4: What time is it?</label><br>";
echo "<label style='margin-left: 16px; color: ", $col4, "'>  You answered: ", $ans4, "</label><br>";
echo "<label style='margin-left: 16px;'>  Correct answer: ", $ans4cor, "</label><br>";
echo "</div><br>";

echo "<div class='quizForm' style='border: 1px solid black; padding: 8px;'>";
echo "<label>Question 5: Choose correctly.</label><br>";
echo "<label style='margin-left: 16px; color: ", $col5, "'>  You answered: ", $ans5, "</label><br>";
echo "<label style='margin-left: 16px;'>  Correct answer: ", $ans5cor, "</label><br>";
echo "</div><br>";

echo "<div class='quizTotal' style='border: 1px solid black; padding: 8px;'>";
echo "TOTAL:<br>", 100 * ($correct / 5), "% (", $correct, "/5)";
echo "</div><br>";

echo "</body>";

?>