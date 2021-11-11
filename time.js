

$(document).ready(function(){
  $("#japan").load("aika_japan.php");
  setInterval(function(){
    $("#japan").load("aika_japan.php");}, 1000);
})
$(document).ready(function(){
  $("#america").load("aika_america.php");
  setInterval(function(){
    $("#america").load("aika_america.php");}, 1000);
})

$(document).ready(function(){
  $("#suomi").load("aika_suomi.php");
  setInterval(function(){
    $("#suomi").load("aika_suomi.php");}, 1000);
})

function myFunction() {
  var x = document.getElementById("mynavtanko");
  if (x.className === "navtanko") {
    x.className += " responsive";
  } else {
    x.className = "navtanko";
  }
}

