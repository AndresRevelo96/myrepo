<?php
echo "punto 1<br>";
echo "<br>1";
echo "<br>2";
echo "<br>3";
echo "<br>4";
echo "<br>5";
echo "<br>6";
echo "<br>7";
echo "<br>8";
echo "<br>9";
echo "<br>10<br>";
//------------------------------------------------------
echo "<br>punto 2<br>";
echo "<b> Ciclo while: </b><br>";
echo "<table border=1>";
 $i = 1;
 while($i <= 10){
   echo "<td>$i</td>";
   $i ++;
 }
echo "</table>";
 //----------------------------------------------------------------
echo "<br>punto 3<br>";
echo "<table border=1>";
 $i = 1;
 while($i <= 100){
   echo "<td>$i</td>";
   $i ++;
 }
echo "</table>";
//------------------------------------------------------------
echo "<br>punto 4<br>";
echo "<table border=1>";
$i = 2;
while($i <= 100){
   echo "<td>$i</td>";
  $i=$i+2;
}
echo "</table>";
//------------------------------------------------------------
echo "<br><br>punto 5<br>";
echo "<table border=1><tr>";
for ($i=1; $i < 10; $i++) {
  echo "<td>". rand(1,10)."</td>";
  }
  echo "</tr></table>";
