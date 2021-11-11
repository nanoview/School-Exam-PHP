<!DOCTYPE html>
<html>
     <head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css" >
        </head>
 <body>

<?php

     function tapahtu(){
        $päivä=date("d.m");
              if     ($päivä >= "1.12" && $päivä  <="26.12"){echo "Hyvää Joulua. Merry Christmas!, Toivotamme sinulle hyvää joulua. " ;}
              elseif($päivä  >= "26.12" && $päivä  <= "5.1"){echo "Hyvää uutta vuotta!! Happy New Year!!";}
              }
              echo tapahtu();
?>

 </body>
</html>