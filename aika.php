<!DOCTYPE html>
<html>
     <head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css" >
        </head>
 <body>

<?php
     function omaika(){
              $aika=date("H:i:s");
              if     ($aika >= "05:00:00" && $aika  <= "08:59:00"){echo "Hyvää huomenta. Aika on $aika.<br>";}
              elseif($aika  >= "09:00:00" && $aika  <= "13:59:59"){echo "Hyvää päivää. Aika on  $aika.<br>";}
              elseif($aika  >= "14:00:00" && $aika  <= "17:59:59"){echo "Hyvää iltapäivää. Aika on $aika.<br>";}
              elseif($aika  >= "18:00:00" && $aika  <= "22:59:59"){echo "Hyvää iltaa. Aika on $aika.<br>";}
              elseif($aika  >= "23:00:00" && $aika  <= "23:59:59"){echo "Hyvää yötä. Aika on $aika.<br>";}
              elseif($aika  >= "00:00:00" && $aika  <= "04:59:59"){echo "Hyvää yötä. Aika on $aika.<br>";}
              else                                                {echo "Mitä syödään seuravaksi!!!!!!";}
              }
?>

 </body>
</html>
