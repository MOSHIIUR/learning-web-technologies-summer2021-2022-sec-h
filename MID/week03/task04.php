<?php

	$x = 45; $y=70, $z=80;



  if ($x >= $y && $x >= $z)
    $largest = $x;
  
  if ($y >= $x && $y >= $z)
    $largest = $y;
  
  if ($z >= $x && $z >= $y)
    $largest = $z;
  
  echo "Largest number among $x, $y and $z is: $largest";
}



?>