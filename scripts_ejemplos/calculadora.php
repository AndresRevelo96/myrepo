<?php
//Mi calculadora Basica
$n1= $_POST ['num1'];
$n2= $_POST ['num2'];
$op= $_POST ['operar'];
echo "Numero 1: ".$n1;
echo "<br>Numero 2: ".$n2;
echo "<br>Operacion: ".$op;

switch ($op) {
  case '1':
      echo "<br>La suma es: ".($n1+$n2);
    break;
    case '2':
      echo "<br>La Resta es: ".($n1-$n2);
      break;
    case '3':
      echo "<br>La Multiplicacion es: ".($n1*$n2);
        break;
    case '4':
      echo "<br>La Division es: ".($n1/$n2);
          break;
    case '5':

          break;
    case '6':

          break;
    case '7':

          break;
    default:
  echo "Opcion incorrecta";
    break;
}
 ?>
