

$(document).ready(function(){
  $("#timeJapan").load("aika_japan.php");
  setInterval(function(){
    $("#timeJapan").load("aika_japan.php");}, 1000);
})
$(document).ready(function(){
  $("#timeAmerica").load("aika_america.php");
  setInterval(function(){
    $("#timeAmerica").load("aika_america.php");}, 1000);
})

$(document).ready(function(){
  $("#timeFinland").load("aika_suomi.php");
  setInterval(function(){
    $("#timeFinland").load("aika_suomi.php");}, 1000);
})

function toggleNavbar() {
  var x = document.getElementById("myNavbar");
  if (x.className === "navbar") {
    x.className += " responsive";
  } else {
    x.className = "navbar";
  }
}

