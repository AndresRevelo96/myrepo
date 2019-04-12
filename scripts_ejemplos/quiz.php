<html>
    <head>
        <title>Tablas de multiplicar</title>
    </head>

    <body>



<?php
echo "<center>Tabla</center>";
echo "<table border=1><tr>";
echo ("<tr>");
  for($j=1; $j<11; $j++) {
    for ($i = 1; $i < 11; $i++) {
      if ($i%3==0 || $j%3==0 ){
        echo "<td bgcolor='green'>".  $aux = $j*$i. "</td>";
          }else{
        echo "<td bgcolor='yellow' , font='blue'>". $aux = $j*$i. "</td>";
  }
}
  echo ("</tr>");
}
echo "</tr></table>";
?>


    </body>
</html>
