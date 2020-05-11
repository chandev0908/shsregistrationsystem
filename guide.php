<!DOCTYPE html>
<html>
    <head>
      <meta charset= "utf-8">
	    <meta name="viewpoint" content="width=device-width">
	    <meta name="keywords" content="Web Design, Affordable Web Design, Professional Web Design">
  <!--  <script src="./script.js"></script> -->
  <link href="./practiceregform.css" rel="stylesheet">
  <title>DHS-SHS Early Registration Form</title>
</head>

<body>
  <div class="page-wrap">
	    <header>
		  <div class="container">

		  <div id="branding">
        <img src="./images/dhs.png" style="position:absolute; width:550px; height:500px; top:-150px; left:0%;">
		     <h1 style="position:relative; left:25%; top:10%;"><span class="highlight">DHS-SHS Early Registration System</span></h1>
		   </div>

       </div>
        <div class="adminbtn">
       <form action="./index.php">
          <input value="Back" style="position:relative; left:1850%;  bottom:-20px;  top:-15px; width: 90px; height: 40px; border-radius: 4px; background-color: transparent; font-weight: bold; color: orange;" type="submit">
           </form>
      </div>
		   </header>

       <section id="showcase">
		   <div class="body">
         <h1 style="color:black; border:3px solid #e8491d;"><span class="highlight">Guide: How to Use the Early Registration System?</span></h1>
          <br>
          <br>
          <br>
          <br>

          <style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 90%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: #e8491d;
  font-weight: bold;
  font-size: 40px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  padding-left: 100px;
  left: 25%;
  bottom: 20px;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: white (0,0,0,0.8);
}

/* Caption text */
.text {
  color: red;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
  font-weight: bold;
}

/* Number text (1/3 etc) */
.numbertext {
  color: red;
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
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #e8491d;
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
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
</head>
<body>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
  <img src="img/Homepage.png" style="width:90%">
  <div class="text">STEP ONE</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
  <img src="img/2ndpage.png" style="width:90%">
  <div class="text">STEP TWO</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <img src="img/3rd page.png" style="width:90%">
  <div class="text">STEP THREE</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 4</div>
  <img src="img/4th page.png" style="width:90%">
  <div class="text">STEP FOUR</div>
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
<br>
<br>
<br>
<br>

     <h2 style="border: 3px solid red; font-size:25px">Welcome Incoming SHS Learners!</h2>

     <p>In this page, we are hereby and fully equiped to help and guide you on using this system. In this case, just only follow the steps and procedures listed and posted on the page then start to prceed your registration process if you are fully equiped in the processes.</p>
     <p>Be carefull on the pages that you have seen if you don't sure about that, consult to the administrator for the information and other consults on using this system. The system hereby to advance a great gratitude for usage itself.</p>
                    <p>Remember, all your printable requirements should held and prepared on you for the finalization and completion of your registration. Thank you and God Bless!</p>

     <hr>

     <h2>STEP ONE:</h2>
     <img src="img/Homepage.png" title="Homepage" style="width:1000px;">
     <p>Go to the Homepage or main site of the DHS-SHS Early Registration System then click "ENROLL" button for the process of registration.</p>
     <p><b>TRIVIA ERS#1:</b> The Homepage consists of the following button pages which held you to another important pages in this system but, the Admin Button reserved only for Administrators of registration process; not for students!</p>

     <hr>
     <h2>STEP TWO:</h2>
     <img src="img/2ndpage.png" title="2nd" style="width:1000px;">
     <p>After you click the "ENROLL" button, you are required to fill up the form given to you technically. Please be sure that all your informations or profile itself is factual and should be doubled-check before you proceed. LRN should enter according to the true number of digits.</p>

     <hr>

     <h2>STEP THREE:</h2>
     <img src="img/3rd page.png" title="3rd" style="width:890px;">
     <p>After you complete the form, a text will appear to your screen ("You Successfully Registered"), then wait for 5 seconds for the processing of your data!</p>
     <p><b>TRIVIA ERS#2:</b> If you've insert an information that is not truly clearly stated, don't worry becuase you can inform the Administrator to have a request to update or change the wrong information that you input in the form!</p>

     <hr>

     <h2>STEP FOUR:</h2>
     <img src="img/4th page.png" title="4th" style="width:1000px;">
     <p>After you wait, your registration is now complete! The page is going back to the Homepage automatically, then you're done now and pass only the requirements for the finalization of your registration.</p>
<br>
<br>
<br>
<br>
<br>
             <h3>Now, you succeed for your registration! Congratulations!, your data will processing to another procedure for the enrollment works. Thank you for using the system!</h3>


</section>
 </div>

 <footer>
 		    <p> Programmed by: Group - 1 Computer Programming 2020-2021, Copyright &copy; 2019 </p>
 </footer>
</div>
</div>
</body>
</html>
