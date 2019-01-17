<!-- Find the highest and the lowest in a string of numbers and return them as a string again -->

<?php
  $string = "4 6 2 26 11";
  $numbers = explode(" ", $string);
  sort($numbers);

  $arrlength = count($numbers);

  $newString = "{$numbers[0]} {$numbers[$arrlength-1]}";
  return $newString;
?>
