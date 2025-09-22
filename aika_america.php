<!DOCTYPE html>
<html>

     <head>
     <?php include("aika.php");?>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css" >
        </head>
 <body>


<div class="neliö_a">
  <span class="span">
            <?php
            date_default_timezone_set("America/New_York");
            echo getCurrentTimeMessage(). " Newyork, America. ";
            ?>
  </span>
</div>


 </body>
</html>
