<!-- Header Showcase -->
<link href="./slideshow.css" rel="stylesheet">
<link href="./style2.css" rel="stylesheet">
<link href="./style.css" rel="stylesheet">
<header>
<h1 class="logo">WELCOME LEARNERS</h1>
<input type="checkbox" id="nav-toggle" class="nav-toggle">
<nav>
<ul>
<li><a href="#section-a">Enroll</a></li>
<li><a href="#section-b">Guide</a></li>
<li><a href="about.php">About</a></li>
<li><a href="admin.php">Admin</a></li>
</ul>
</nav>
<label for="nav-toggle" class="nav-toggle-label">
<span></span>
</label>
</header>
<section id="showcase" class="grid">
  <div class="bg-image"></div>
  <div class="content-wrap">
    <img src="dhs.png">
    <h1 style="font-size:55;">SHS EARLY REGISTRATION</h1>


  </div>
</section>

<!-- Main Area -->
<main id="main">
  <!-- Section A -->
  <section id="section-a" class="grid">
    <div class="content-wrap">
      <br>
      <br>
      <br>
      <br>
      <h2 class="content-title">Welcome SHS Learners!</h2>
      <div class="content-text">
        <p>This is your system which provides an ease paced procedures in order you to early register or enroll fast and safe. If you are a newcomer SHS student here in Dapdap High School, please make sure that you have already your requirements and knowledge about the Senior High School program and its curriculum.

At this point, the system serves as your main guide and gateway through your nice and well-performed registering process. The system consists of the following

features and actions that students or enrolees need to attain and insert the given values and informations require for the profile.

</p>
<br>
<br>
<p>Let your enroll begins! Thank you!</p>
<a href="form.php"><input style="width: 300px; height: 60px; background-color: #e8491d; font-weight: bold; color: white;" type="submit" value="START THE ENROLLMENT"></div></a>
      </div>
  </section>

<!-- SECTION B -->

  <section id="section-b" class="grid">
    <div class="content-wrap">
      <br>
      <br>
      <br>
      <h2 class="content-title">GUIDE ON HOW TO USE THE PROGRAM!</h2>
      <div class="content-text">
        <div class="slideshow-container">

        <div class="mySlides fade">
          <div class="numbertext">1 / 4</div>
          <img src="img/GuideA.png" style="width:100%">
          <h2 style="font-size:17px; color:aqua;">STEP ONE</h2>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">2 / 4</div>
          <img src="img/LC.png" style="width:100%">
          <h2 style="font-size:17px; color:aqua;" >STEP TWO</h2>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">3 / 4</div>
          <img src="img/3rd page.png" style="width:100%">
          <h2 style="font-size:17px; color:aqua;">STEP THREE</h2>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">4 / 4</div>
          <img src="img/4th page.png" style="width:100%">
          <h2 style="font-size:17px; color:aqua;">STEP FOUR</h2>
        </div>
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
        <div class="top">
    <h2 >Welcome Incoming SHS Learners!</h2>

    <p>In this page, we are hereby and fully equiped to help and guide you on using this system. In this case, just only follow the steps and procedures listed and posted on the page then start to prceed your registration process if you are fully equiped in the processes.</p>
    <p>Be carefull on the pages that you have seen if you don't sure about that, consult to the administrator for the information and other consults on using this system. The system hereby to advance a great gratitude for usage itself.</p>
                   <p>Remember, all your printable requirements should held and prepared on you for the finalization and completion of your registration. Thank you and God Bless!</p>
    </div>
    <hr>
    <div class="second">
    <h2>STEP ONE:</h2>
    <img src="img/GuideA.png" title="Homepage" >
    <p>Go to the Homepage or main site of the DHS-SHS Early Registration System then click "ENROLL" button for the process of registration.</p>
    <p><b>TRIVIA ERS#1:</b> The Homepage consists of the following button pages which held you to another important pages in this system but, the Admin Button reserved only for Administrators of registration process; not for students!</p>
  </div>
  <hr>
    <div class="third">
    <h2>STEP TWO:</h2>
    <img src="img/LC.png" title="2nd" >
    <p>After you click the "ENROLL" button, you are required to fill up the form given to you technically. Please be sure that all your informations or profile itself is factual and should be doubled-check before you proceed. LRN should enter according to the true number of digits.</p>
</div>
    <hr>
    <div class="fourth">
    <h2>STEP THREE:</h2>
    <img src="img/3rd page.png" title="3rd">
    <p>After you complete the form, a text will appear to your screen ("You Successfully Registered"), then wait for 5 seconds for the processing of your data!</p>
    <p><b>TRIVIA ERS#2:</b> If you've insert an information that is not truly clearly stated, don't worry becuase you can inform the Administrator to have a request to update or change the wrong information that you input in the form!</p>
</div>
<hr>
    <div class="bottom">
    <h2>STEP FOUR:</h2>
    <img src="img/4th page.png" title="4th" >
    <p>After you wait, your registration is now complete! The page is going back to the Homepage automatically, then you're done now and pass only the requirements for the finalization of your registration.</p>
</div>
<br>
            <h1>Now, you succeed for your registration! Congratulations!, your data will processing to another procedure for the enrollment works. Thank you for using the system!</h1>


  </section>

</main>

<!-- Footer -->
<footer id="main-footer">
  <div><p>Project By Research Group of:</p></div>
  <div><p> DEVELOPMENT AND VALIDATION OF EARLY REGISTRATION SYSTEM FOR INCOMING SHS GRADE 11 IN DAPDAP HIGH SCHOOL</p></div>
</div>
</footer>
