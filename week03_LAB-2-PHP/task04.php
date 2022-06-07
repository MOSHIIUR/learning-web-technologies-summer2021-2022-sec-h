<?php
$x=567; $y=43; $z=1332;

  $largest = $x;

  if ($x >= $y && $x >= $z)
    $largest = $x;
  if ($y >= $x && $y >= $z)
    $largest = $y;
  if ($z >= $x && $z >= $y)
    $largest = $z;

echo "Largest number from three numbers $x, $y and $z is: $largest\n";

  

?>