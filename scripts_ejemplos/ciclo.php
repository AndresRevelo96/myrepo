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
echo "<table border=1><tr>";
$i=1;
while ($i <= 10) {
  if ($i%2==0){
      echo "<td bgcolor='red'>".  $i. "</td>";
  }else{
      echo "<td bgcolor='cyan'>". $i. "</td>";
  }

  $i++;
}
echo "</tr></table>";
 //----------------------------------------------------------------
echo "<br>punto 3<br>";
echo "<table border=1>";
 $i = 1;
 while($i <= 100){
   if ($i%2==0){
       echo "<td bgcolor='red'>".  $i. "</td>";
   }else{
       echo "<td bgcolor='cyan'>". $i. "</td>";
   }

   $i++;
 }
 echo "</tr></table>";
//------------------------------------------------------------
echo "<br>punto 4<br>";
echo "<table border=1>";
$i = 2;
while($i <= 100){
  if ($i%2==0){
      echo "<td bgcolor='red'>".  $i. "</td>";
  }else{
      echo "<td bgcolor='cyan'>". $i. "</td>";
  }

  $i=$i+2;
}
echo "</tr></table>";
//------------------------------------------------------------
echo "<br><br>punto 5<br>";
echo "<table border=1><tr>";
$i = 1;
while($i <= 10){
  $rand=rand(1,100);
  if ($rand%2==0){
      echo "<td bgcolor='red'>".$rand . "</td>";
  }else{
      echo "<td bgcolor='cyan'>".$rand. "</td>";
  }

  $i=$i+1;
}
echo "</tr></table>";
//------------------------------------------------------------
echo "<br><br>punto 6<br>";
echo "<table border=1><tr>";
$suma=0;
for ($i=1; $i <= 100; $i=$i+1) {
 $suma+=$i;
}
echo "<td>".$suma."</td>";
echo "</tr></table>";
//-----------------------------------------------------------
echo "<br><br>punto 7<br>";
echo "<table border=1><tr>";
$i=1;
while ($i <= 100) {
  if ($i%3==0){
      echo "<td bgcolor='cyan'>".  $i. "</td>";
  }
  $i++;
}
echo "</tr></table>";
//-----------------------------------------------------------
echo "<br><br>punto 8<br>";
$par=0;
$impar=0;
for ($i=1;$i<=10;$i++) {
    $aleatorio = rand(1,100);
    if ($aleatorio%2==0) {
      $par=$par+1;
    }
    else {
      $impar=$impar+1;
    }
    echo $aleatorio." ";
    }
    echo "<table border =1>";
    echo "<Br><Br><tr><td>Pares: </td><td> ".$par." </td></tr>";
    echo "<tr> <td>Impares: </td><td> ".$impar." </td></tr>";
echo "</table>";
//-----------------------------------------------------------
echo "<br><br>punto 9<br>";
$parposi=0;
$imparposi=0;
$parneg=0;
$imparneg=0;
  echo "<table border=1>";
for ($i=1;$i<=10;$i++) {
    $rand = rand(-100,100);
      echo "<td>".$rand." </td>";

    if($rand > 0  &&  ($rand%2)==0){
      $parposi=$parposi+1;
    }else if ($rand > 0  && (($rand%3)==0 || ($rand%3)!=0)) {
    $imparposi=$imparposi+1;
  }
  if($rand < 0  &&  ($rand%2)==0){
    $parneg=$parneg+1;
  }else if ($rand < 0  && (($rand%3)==0 || ($rand%3)!=0)) {
  $imparneg=$imparneg+1;
}
}
echo "</table>";

  echo "<br><br>";
  echo "<table border=1>";
  echo "<tr><td>Postivos pares: </td> <td>".$parposi."</td></tr>";
  echo "<tr><td>Postivos impares: </td> <td>".$imparposi."</td></tr>";
  echo "<tr><td>Negativos pares: </td> <td>".$parneg."</td></tr>";
  echo "<tr><td>Negativos impares: </td> <td>".$imparneg."</td></tr>";
echo "</table>";
