<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $size = $_REQUEST['size'];
    $sum = 0;

    $array = [];
    for ($i = 0; $i < $size; $i++) {
        $array[$i] = [];
        for ($j = 0; $j < $size; $j++) {
            $array[$i][$j] = $_REQUEST['item-' . $i . '-' . $j];
        }
    }

echo "Sum of diagonal line: ";
for ($i =0; $i<$size; $i++){
    $sum += $array[$i][$i];
}
echo $sum;
}