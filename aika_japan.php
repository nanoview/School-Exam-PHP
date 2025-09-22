<!DOCTYPE html>
<html>

     <head>
     <?php include("aika.php");?>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css" >
        </head>
 <body>

<div class="neliö_j">
<span class= "span">
            <?php
            date_default_timezone_set("Asia/tokyo");
            echo getCurrentTimeMessage() ."Tokyo, Japan. <br><br>";
            ?>
</span>
</div>


 </body>
</html>
