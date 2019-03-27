<?php
//Mi calculadora Basica
$n1= $_POST ['num1'];
$n2= $_POST ['num2'];
$op= $_POST ['operar'];
//echo "Numero 1: ".$n1;
//echo "<br>Numero 2: ".$n2;
//echo "<br>Operacion: ".$op;
switch ($op) {
  case '1':
    echo "La suma es: ".($n1+$n2);
    break;
    case '2':
      echo "La Resta es: ".($n1-$n2);
      break;
    case '3':
        echo "La Multiplicacion es: ".($n1*$n2);
        break;
    case '4':
          echo "La Division es: ".($n1/$n2);
          break;
    case '5':
            echo "La Resta es: ".($n1-$n2);
            break;
    default:
  echo "Opcion incorrecta";
    break;
}
 ?>
