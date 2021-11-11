

<!DOCTYPE html>
<html>
  <title>
    Ruoka Express
  </title>
     <head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link href="https://fonts.googleapis.com/css?family=Spirax&display=swap" rel="stylesheet">
          <link rel="stylesheet" type="text/css" href="css/style.css">
          <script type="text/javascript" src="time.js"></script>
          <script src="https://code.jquery.com/jquery-latest.js"></script>
     </head>
 <body>

<?php
$dateArray=0;
function build_kalenteri($month,$year,$dateArray) {


     $viikonpaiva = array('Su','Ma','Ti','Ke','To','Pe','La');

     
     $ensimainenpaiva = mktime(0,0,0,$month,1,$year);
     $numberDays = date('t',$ensimainenpaiva);

     
     $paivacomponets = getdate($ensimainenpaiva);


     $monthName = $paivacomponets['month'];

     $dayOfWeek = $paivacomponets['wday'];

     $kalenteri = "<table class='kalenteri'>";
     $kalenteri .= "<caption>$monthName $year</caption>";
     $kalenteri .= "<tr>";



     foreach($viikonpaiva as $day) {
          $kalenteri .= "<th class='header'>$day</th>";
     } 


     $currentDay = 1;

     $kalenteri .= "</tr><tr>";

     if ($dayOfWeek > 0) { 
          $kalenteri .= "<td colspan='$dayOfWeek'>&nbsp;</td>"; 
     }
     
     $month = str_pad($month, 2, "0", STR_PAD_LEFT);
  
     while ($currentDay <= $numberDays) {


          if ($dayOfWeek == 7) {

               $dayOfWeek = 0;
               $kalenteri .= "</tr><tr>";

          }
          
          $currentDayRel = str_pad($currentDay, 2, "0", STR_PAD_LEFT);
          
          $date = "$year-$month-$currentDayRel";

          $kalenteri .= "<td class='day' rel='$date'>$currentDay</td>";
 
          $currentDay++;
          $dayOfWeek++;

     }
     
     


     if ($dayOfWeek != 7) { 
     
          $remainingDays = 7 - $dayOfWeek;
          $kalenteri .= "<td colspan='$remainingDays'>&nbsp;</td>"; 

     }
     
     $kalenteri .= "</tr>";

     $kalenteri .= "</table>";

     return $kalenteri;

}

?> 

<?php
date_default_timezone_set('Europe/Helsinki');
     $paivacomponets = getdate();

     $month = $paivacomponets['mon']; 			     
     $year = $paivacomponets['year'];

     echo build_kalenteri($month,$year,$dateArray);

?>

</body>
</html>
