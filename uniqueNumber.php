<?php
  function findUniq($a) {
    for($i = 0; $i < count($a); $i++) {
      if(1 === count(array_keys($a, $a[$i]))) {
        return $a[$i];
      }
    }
  }

  findUniq([ 1, 1, 1, 2, 1, 1 ]);
 ?>
