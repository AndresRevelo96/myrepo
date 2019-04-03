<html>
  <head>
    <title>Trabajo</title>
  </head>
      <body>
        <table border="0" align="center">
          <form name="frm1" action="clico2.php" method="post">
          <tr>
            <center><b><font face="Times new Roman" size="15" color="BLACK">CICLOS REPETITIVOS</font></b></center><br>
          </tr>

          <tr>
            <td><font face="Times new Roman" size="5" color="BLACK">Ingrese un numero:</font><br>
            <input type="number" name= "num1" requeried><br><br></td>
          </tr>

          <tr>
            <td align="center"><input type="submit" value="Calcular"><br></td></td>
          </tr>
        </form>
        </table>

      </body>
</html>

<?php
$n1= $_POST ['num1'];
echo "Numero digitado: ".$n1;
echo "<br>Tabla 1<br>";
echo "<table border=1><tr>";
 $i = 1;
 while($i <= $n1){
   if ($i%2==0){
       echo "<td bgcolor='red'>".  $i. "</td>";
   }else{
       echo "<td bgcolor='cyan'>". $i. "</td>";
   }

   $i++;
 }
 echo "</tr></table>";
//--------------------------------------------
echo "<br>Tabla 2<br>";
echo "<table border=1><tr>";
 $i = $n1;
 while($n1 = $i){
   if ($i%2==0){
       echo "<td bgcolor='red'>".  $i. "</td>";
   }else{
       echo "<td bgcolor='cyan'>". $i. "</td>";
   }
     $i--;
 }
echo "</tr></table>";
//--------------------------------------------
echo "<br>Tabla 3<br>";
echo "<table border=1><tr>";
$i = 1;
while ($i <= $n1){
    echo "<br>" .$i;
    $i++;
  }
  echo "<tr></table>";
?>
