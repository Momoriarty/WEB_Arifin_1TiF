<?php

$x = 6;
$y = 7;

function Testing()
{
    global $x, $y;
    $y = $x + $y;
}

Testing();
echo $y;
