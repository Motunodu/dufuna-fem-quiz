<?php
$x=10;
$y= 20;
function myQuiz() {global $x,$y;
    $y=$x+$y;
    $x=$x*$y;
}
myQuiz();
echo "The sum of x and y is"."$y<br>";
echo "The product of x and y is"."$x<br>";
?>














