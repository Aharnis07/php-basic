<?php
$x = 1;
while ($x <= 5) {
    echo "WhileLoops " . $x . "<br>";
    $x++;
}
?>
<?php
$x = 0;
do {
    echo "doWhile " . $x . "<br>";
    $x++;
} while ($x <= 4);
?>
<?php

for ($x = 0; $x <= 10; $x++) {
    echo "forLoops" . $x . "<br>";
}
?>
<?php
$colours = array("Red", "Green", "Blue");
foreach ($colours as $value) {
    echo $value . "<br>";
}
?>
