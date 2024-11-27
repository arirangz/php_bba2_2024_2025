<?php
function area(float $length, float $width): float
{
    return $length * $width;
}

$my_rectangle_length = 5;
$my_rectangle_width = 7;
$my_rectangle_area = area($my_rectangle_length, $my_rectangle_width);

echo $my_rectangle_area; // This will display 35
