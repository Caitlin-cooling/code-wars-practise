<!-- Take 2 strings s1 and s2 including only letters from a to z. Return a new sorted string, the longest possible, containing unique letters -->

<?php
  function longest($a, $b) {
    $string = $a . $b;
    $array = str_split($string);
    sort($array);
    $newArray = array_unique($array);
    return join($newArray);
  }

  $a = "xyaabbbccccdefww";
  $b = "xxxxyyyyabklmopq";
  echo longest($a, $b);
?>
