<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;
      height: 500px;
      object-fit: cover;
}


.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* seurava & ennen  */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}


.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}


.text {
  color: green;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}


.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}


.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}


@media only screen and (max-width: 400px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
</head>
<body>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 10</div>
  <img src="kuva/kaneli.jpg" style="width:100%">
  <div class="text">Kaneli</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 10</div>
  <img src="kuva/mausteet.jpg" style="width:100%">
  <div class="text">Tuoreita puhdasta mausteita</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 10</div>
  <img src="kuva/lohigrill.jpg" style="width:100%">
  <div class="text">Grillattu lohikala</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 10</div>
  <img src="kuva/sienikastike.jpg" style="width:100%">
  <div class="text">Sienikastike</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">5 / 10</div>
  <img src="kuva/lohi.jpg" style="width:100%">
  <div class="text">Lohikeittö</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">6 / 10</div>
  <img src="kuva/herring.jpg" style="width:100%">
  <div class="text">Baltic herring</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">7 / 10</div>
  <img src="kuva/karjalanpaisti.jpg" style="width:100%">
  <div class="text">Karjalanpaisti</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">8 / 10</div>
  <img src="kuva/chicken.jpg" style="width:100%">
  <div class="text">Kana-riisi</div>
</div>


<div class="mySlides fade">
  <div class="numbertext">9 / 10</div>
  <img src="kuva/perch.jpg" style="width:100%">
  <div class="text">Perch ja kerma peruna</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">10 / 10</div>
  <img src="kuva/pöytä.jpg" style="width:100%">
  <div class="text">Pöytä</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> 
  <span class="dot" onclick="currentSlide(5)"></span> 
  <span class="dot" onclick="currentSlide(6)"></span> 
  <span class="dot" onclick="currentSlide(7)"></span> 
  <span class="dot" onclick="currentSlide(8)"></span> 
  <span class="dot" onclick="currentSlide(9)"></span> 
  <span class="dot" onclick="currentSlide(10)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

</body>
</html> 
