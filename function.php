<?php
  function somar($num1, $num2) {
    return $num1 + $num2;
  }

  function subtrair($num1, $num2) {
    return $num1 - $num2;
  }

  function dividir($num1, $num2) {
    if($num2 == 0) {
      return "Não é possivel dividir por zero.";
    } else {
      return $num1 / $num2;
    }
  }

  function multiplicar($num1, $num2) {
    return $num1 * $num2;
  }
?> 