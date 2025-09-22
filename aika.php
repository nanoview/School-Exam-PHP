<!DOCTYPE html>
<html>
     <head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css" >
        </head>
 <body>

<?php
     function getCurrentTimeMessage(){
              $currentTime = date("H:i:s");
              if     ($currentTime >= "05:00:00" && $currentTime  <= "08:59:00"){echo "Hyvää huomenta. Aika on $currentTime.<br>";}
              elseif($currentTime  >= "09:00:00" && $currentTime  <= "13:59:59"){echo "Hyvää päivää. Aika on  $currentTime.<br>";}
              elseif($currentTime  >= "14:00:00" && $currentTime  <= "17:59:59"){echo "Hyvää iltapäivää. Aika on $currentTime.<br>";}
              elseif($currentTime  >= "18:00:00" && $currentTime  <= "22:59:59"){echo "Hyvää iltaa. Aika on $currentTime.<br>";}
              elseif($currentTime  >= "23:00:00" && $currentTime  <= "23:59:59"){echo "Hyvää yötä. Aika on $currentTime.<br>";}
              elseif($currentTime  >= "00:00:00" && $currentTime  <= "04:59:59"){echo "Hyvää yötä. Aika on $currentTime.<br>";}
              else                                                {echo "Mitä syödään seuravaksi!!!!!!";}
              }
?>

 </body>
</html>
