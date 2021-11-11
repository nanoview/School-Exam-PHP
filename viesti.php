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
     

<style>
  .container {
    position: sisalto;
  }
  .ilmoitus {
	position: absolute;
    left: 0;
    top: 50%;
    width: 100%;
    text-align: center;
    font-size: 18px;	
  }
 </style>
</head>
<body>
 
 <div class = "sisalto">
  <div class = "ilmoitus">
   <p> Kiitos, että tulet syömään ravintolamme.<br> Otamme pikaisesti yhteyttä sinuun.<br>
   ilmoitus sulkeutuu automaattisesti</p> <h3><div id="counter">5</div></h3> <p> sekunnin kuluttua.</p>
  </div>
 </div> 



 <script type="text/javascript">
 
(function(){
  setTimeout(function(){
    window.location="kuvat.php";
  },5000);
 })();

function countdown() {
   var i = document.getElementById('counter');
   i.innerHTML = parseInt(i.innerHTML)-1;
if (parseInt(i.innerHTML)=0) {
window.close();
}
}
setInterval(function(){ countdown(); },1000);
</script>
  

</body>
</html>