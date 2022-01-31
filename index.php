<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stil.css">
    <title>Home</title>
    <style>
* {box-sizing: border-box}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: absolute;
  margin-left: 35%;
  margin-top: 5%;
}

/* Next & previous buttons */
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

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  opacity: 0%;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
  margin-top: 25%;
  position: absolute;
}
span{
    vertical-align: bottom;

}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
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

/* On smaller screens, decrease text size */
@media only screen and (max-width: 800px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
</head>
<body>
    <div class="containerc">
        <div class="navbar">
            <img src="./logo/interior-solutions-logo.png" class="logo">
            <nav>
                <ul>
                    <li><a href="./index.php">Home</a></li>
                    <li><a href="./about.php">About</a></li>
                    <li><a href="./catalogue.php">Catalogue</a></li>
                    <li><a href="./livingroom.php">Living Room</a></li>
                    <li><a href="./category.php">Category</a></li>
                    <li><a href="./contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
        <div class="slideshow-container">

        <div class="mySlides fade">
        <div class="numbertext"></div>
        <a href="./bedroom.php"><img src="./pic/black-neo-classical-master-bedroom-design.jpg" style="width:100%"></a>
        <div class="text">Bedroom</div>
        </div>

        <div class="mySlides fade">
        <div class="numbertext"></div>
        <a href="./livingroom.php"><img src="./pic/luxury-living-room-interiors.jpg" style="width:100%"></a>
        <div class="text">Living room</div>
        </div>

        <div class="mySlides fade">
        <div class="numbertext"></div>
        <a href="./kitchen.php"><img src="./pic/galley-kitchen-with-island.jpg" style="width:100%"></a>
        <div class="text">Kitchen</div>
        </div>

        <div class="mySlides fade">
        <div class="numbertext"></div>
        <a href="./bathroom.php"><img src="./pic/big-luxury-bathrooms.jpg" style="width:100%"></a>
        <div class="text">Bathroom</div>
        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

        </div>
        <div class="point" style="text-align:center">
        <span class="dot"></span> 
        <span class="dot"></span> 
        <span class="dot"></span>
        <span class="dot"></span>
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

        function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}    
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].className += " active";
        setTimeout(showSlides, 3000); 
        }
        </script>

                

        <div class="content">
            <a href="./catalogue.php" class="btn">Best interior solution 2022 - Order!</a>
            <h1>You can always<br> feel comfortable</h1>
            <p>Organize your home as in a dream.</p>

            <div class="arrow-icons">
                <a id="left" href="./index.php"><img src="./arrow/back-arrow.png"></a>
                <a id="right" href="./about.php"><img src="./arrow/next-arrow.png"></a>
            </div>
        </div>

       


        <div class="social-links">
            <a class="fb" href="https://www.facebook.com">FACEBOOK</a>
            <a class="insta" href="https://www.instagram.com">INSTAGRAM</a>
            <a class="twit" href="https://www.twitter.com">TWITTER</a>
        </div>



    </div>
</body>
</html>