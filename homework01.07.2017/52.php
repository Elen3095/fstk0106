<?php
function test($x, $y)
{
    if ($y != 0) {
        return $x / $y;
    }
}

echo test(1, 0) or die('Error');
echo 'Unreached line';