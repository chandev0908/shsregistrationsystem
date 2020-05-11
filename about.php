<?php
session_start();

 ?>
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
	    <header>
		  <div class="container">
        <div id="branding">
          <img src="./images/dhs.png" style="position:absolute; width:550px; height:500px; top:-150px; left:0%;">
           <h1 style="position:relative; left:25%; top:10%;"><span class="highlight">DHS-SHS Early Registration System</span></h1>
         </div>
         <form action="index.php" method="POST">
          <input value="Back" name="back_btn"style=" position:relative; top:-15px; left:93%; width: 90px; height: 60px; border-radius: 5px; background-color: transparent; font-weight:bold; color: orange;" type="submit">
         </form>

   		  <nav>
   		    <ul>
   			</ul>
   		   </nav>
   		   </div>
   		   </header>

          <section id="showcase">
   		   <div class="container">
            <h1 style="color:black; border:3px solid #e8491d;"><span class="highlight">Senior High School Early Registration System</span></h1>

             <br>
             <br>
             <br>
             <br>

             <h2 style="color:orange; border:2px solid Orange; font-family:verdana; font-size:250%;">What is Early Registration?</h2>
             <img src="img/ER.png" style="width:1450px;height:550px; border: 5px solid orange;">
                 <p>In accordance to
                    the <em><b style="color:red;">DepEd or Department of Education</em></b>, the early registration system is a process of every schools (primary, secondary) in which all students need to</p>
         <p>apply to determine the probability and limit of the students who are still enrolling at the same school and determine the number or total who will proceed to the other school or transfer in terms.</p>
         <p>Although, this process is with accordance to the rules and law signed by the DepEd itself and the government, it has numerous importance on why students should need to take early registration and
         these are the following importance:</p>

             <p>1. to know the totality of students enrolees</p>
             <p>2. to know the probability of students to enroll to the other schools</p>
             <p>3. to know the number of accomodations needed for the students who are enrolled</p>
             <p>4. to know the totality of students enrolees</p>
             <p>5. to know the totality of students enrolees</p>
             <p>6. to know the totality of students enrolees</p>
             <p>7. to know the totality of students enrolees</p>
             <p>8. to know the totality of students enrolees</p>

             <h2 style="color:green; border:2px solid Orange; font-family:verdana; font-size:250%;">Senior High School Strand and Specializations</h2>
             <img src="img/front of school.jpg" alt="front of school" title="front of school" style="width:1000px;height:590px; border: 5px solid orange;">
         <p>The K to 12 Program covers Kindergarten and 12 years of basic education (six years of primary education, four years of Junior High School, and two years of Senior High School [SHS]) to provide</p>
          <p>sufficient time for mastery of concepts and skills, develop lifelong learners, and prepare graduates for tertiary education, middle-level skills development, employment, and entrepreneurship.</p>
         <p>The Senior High School has a curriculum different from the Junior Level in which students needs to chose their expertise and specializations that they decide. The following are the strands and specializations in which divided in to two, the ACADEMIC and the VOCATIONAL strands.</p>

                   <h2>ACADEMIC STRAND</h2>
                   <style>
                  * {
                  box-sizing: border-box;
                  }

                  body {
                  background-color: #f1f1f1;
                  padding: 20px;
                  font-family: Arial;
                  }

                  /* Center website */
                  .main {
                  max-width: 1000px;
                  margin: auto;
                  }

                  h1 {
                  font-size: 50px;
                  word-break: break-all;
                  }

                  .row {
                  margin: 10px -16px;
                  }

                  /* Add padding BETWEEN each column */
                  .row,
                  .row > .column {
                  padding: 8px;
                  }

                  /* Create three equal columns that floats next to each other */
                  .column {
                  float: left;
                  width: 33.33%;
                  display: none; /* Hide all elements by default */
                  }

                  /* Clear floats after rows */
                  .row:after {
                  content: "";
                  display: table;
                  clear: both;
                  }

                  /* Content */
                  .content {
                  background-color: white;
                  padding: 10px;
                  }

                  /* The "show" class is added to the filtered elements */
                  .show {
                  display: block;
                  }

                  /* Style the buttons */
                  .btn {
                  border: 3px solid red;
                  outline: none;
                  padding: 12px 16px;
                  background-color: #e8491d;
                  cursor: pointer;
                  }

                  .btn:hover {
                  background-color: white;
                  }

                  .btn.active {
                  background-color: #e8491d;
                  color: white;
                  }
                  </style>
                  </head>
                  <body>
                  <!-- MAIN (Center website) -->
                  <div class="main">
                  <div id="myBtnContainer">
                  <button class="btn active" onclick="filterSelection('all')">Lists</button>
                  <button class="btn" onclick="filterSelection('abm')"> Accountancy and Business Management</button>
                  <button class="btn" onclick="filterSelection('humms')"> Humanities and Social Sciences</button>
                  <button class="btn" onclick="filterSelection('stem')"> Science Technology Engineering and Mathematics</button>
                  </div>
                  <!-- Portfolio Gallery Grid -->
                  <div class="row">
                  <div class="column abm">
                  <div class="content">
                  <img src="img/ABM.jpg" alt="ABM" style="width:60%">
                  <h4>Accounting and Finance</h4>
                  </div>
                  </div>
                  <div class="column abm">
                  <div class="content">
                  <img src="img/ABM.jpg" alt="ABM" style="width:60%">
                  <h4>Business Management</h4>
                  </div>
                  </div>
                  <div class="column abm">
                  <div class="content">
                  <img src="img/ABM.jpg" alt="ABM" style="width:60%">
                  <h4>Book Keeper</h4>
                  </div>
                  </div>
                  <div class="column abm">
                  <div class="content">
                  <img src="img/ABM.jpg" alt="ABM" style="width:60%">
                  <h4>Business Outsourcing</h4>
                  </div>
                  </div>
                  <div class="column abm">
                  <div class="content">
                  <img src="img/ABM.jpg" alt="ABM" style="width:60%">
                  <h4>Call Center Agent</h4>
                  </div>
                  </div>
                  <div class="column humms">
                  <div class="content">
                  <img src="img/HUMMS.png" alt="HUMMS" style="width:60%">
                  <h4>Liberal Arts</h4>
                  </div>
                  </div>
                  <div class="column humms">
                  <div class="content">
                  <img src="img/HUMMS.png" alt="HUMMS" style="width:70%">
                  <h4>College of Education</h4>
                  </div>
                  </div>
                  <div class="column humms">
                  <div class="content">
                  <img src="img/HUMMS.png" alt="HUMMS" style="width:70%">
                  <h4>Criminology</h4>
                  </div>
                  </div>
                  <div class="column humms">
                  <div class="content">
                  <img src="img/HUMMS.png" alt="HUMMS" style="width:70%">
                  <h4>Philosophy</h4>
                  </div>
                  </div>
                  <div class="column humms">
                  <div class="content">
                  <img src="img/HUMMS.png" alt="HUMMS" style="width:70%">
                  <h4>Social Sciences and Arts</h4>
                  </div>
                  </div>
                  <div class="column stem">
                  <div class="content">
                  <img src="img/STEM.png" alt="STEM" style="width:60%">
                  <h4>College of Science and Technologies (Science Major)</h4>
                  </div>
                  </div>
                  <div class="column stem">
                  <div class="content">
                  <img src="img/STEM.png" alt="STEM" style="width:70%">
                  <h4>College of Engineering</h4>
                  </div>
                  </div>
                  <div class="column stem">
                  <div class="content">
                  <img src="img/STEM.png" alt="STEM" style="width:70%">
                  <h4>College of Medicine</h4>
                  </div>
                  </div>
                  <div class="column stem">
                  <div class="content">
                  <img src="img/STEM.png" alt="STEM" style="width:60%">
                  <h4>Architecture and Drafting</h4>
                  </div>
                  </div>
                  <!-- END GRID -->
                  </div>
                  <!-- END MAIN -->
                  </div>
                  <script>
                  filterSelection("all")
                  function filterSelection(c) {
                  var x, i;
                  x = document.getElementsByClassName("column");
                  if (c == "all") c = "";
                  for (i = 0; i < x.length; i++) {
                  w3RemoveClass(x[i], "show");
                  if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
                  }
                  }

                  function w3AddClass(element, name) {
                  var i, arr1, arr2;
                  arr1 = element.className.split(" ");
                  arr2 = name.split(" ");
                  for (i = 0; i < arr2.length; i++) {
                  if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
                  }
                  }

                  function w3RemoveClass(element, name) {
                  var i, arr1, arr2;
                  arr1 = element.className.split(" ");
                  arr2 = name.split(" ");
                  for (i = 0; i < arr2.length; i++) {
                  while (arr1.indexOf(arr2[i]) > -1) {
                  arr1.splice(arr1.indexOf(arr2[i]), 1);
                  }
                  }
                  element.className = arr1.join(" ");
                  }


                  // Add active class to the current button (highlight it)
                  var btnContainer = document.getElementById("myBtnContainer");
                  var btns = btnContainer.getElementsByClassName("btn");
                  for (var i = 0; i < btns.length; i++) {
                  btns[i].addEventListener("click", function(){
                  var current = document.getElementsByClassName("active");
                  current[0].className = current[0].className.replace(" active", "");
                  this.className += " active";
                  });
                  }
                  </script>
                   <br>
                   <br>
                                <h3>TECHVOC-TECHNICAL AND VOCATIONAL LIVELIHOOD (TVL) STRAND</h3>
                   <style>
                  * {
                  box-sizing: border-box;
                  }
                  body {
                  background-color: #f1f1f1;
                  padding: 20px;
                  font-family: Arial;
                  }
                  /* Center website */
                  .main {
                  max-width: 1000px;
                  margin: auto;
                  }
                  h1 {
                  font-size: 50px;
                  word-break: break-all;
                  }
                  .row {
                  margin: 10px -16px;
                  }
                  /* Add padding BETWEEN each column */
                  .row,
                  .row > .column {
                  padding: 8px;
                  }
                  /* Create three equal columns that floats next to each other */
                  .column {
                  float: left;
                  width: 33.33%;
                  display: none; /* Hide all elements by default */
                  }
                  /* Clear floats after rows */
                  .row:after {
                  content: "";
                  display: table;
                  clear: both;
                  }
                  /* Content */
                  .content {
                  background-color: white;
                  padding: 10px;
                  }
                  /* The "show" class is added to the filtered elements */
                  .show {
                  display: block;
                  }
                  /* Style the buttons */
                  .btn {
                  border: 3px solid red;
                  outline: none;
                  padding: 12px 16px;
                  background-color: #e8491d;
                  cursor: pointer;
                  }
                  .btn:hover {
                  background-color: white;
                  }
                  .btn.active {
                  background-color: #e8491d;
                  color: white;
                  }
                  </style>
                  </head>
                  <body>
                  <!-- MAIN (Center website) -->
                  <div class="main">
                  <div id="myBtnContainer">
                  <button class="btn active" onclick="filterSelection('all')">Lists</button>
                  <button class="btn" onclick="filterSelection('css')">Computer System Servicing CSS</button>
                  <button class="btn" onclick="filterSelection('com')"> Computer Programming COM.PROG</button>
                  <button class="btn" onclick="filterSelection('dres')"> Dressmaking and Tailoring</button>
                  <button class="btn" onclick="filterSelection('he')">Home Economics HE</button>
                  <button class="btn" onclick="filterSelection('eim')">Electricity Installation and Maintenance EIM</button>
                  </div>
                  <!-- Portfolio Gallery Grid -->
                  <div class="row">
                  <div class="column css">
                  <div class="content">
                  <img src="img/TVL.png" alt="TVL" style="width:60%">
                  <h4>Hardware and Software Servicing</h4>
                  </div>
                  </div>
                  <div class="column css">
                  <div class="content">
                  <img src="img/TVL.png" alt="TVL" style="width:60%">
                  <h4>Computer Technician and Maintenance</h4>
                  </div>
                  </div>
                  <div class="column com">
                  <div class="content">
                  <img src="img/TVL.png" alt="TVL" style="width:60%">
                  <h4>Freelance Web Developing</h4>
                  </div>
                  </div>
                  <div class="column com">
                  <div class="content">
                  <img src="img/TVL.png" alt="TVL" style="width:60%">
                  <h4>Web and Software Developer</h4>
                  </div>
                  </div>
                  <div class="column com">
                  <div class="content">
                  <img src="img/TVL.png" alt="TVL" style="width:70%">
                  <h4>Computer Science</h4>
                  </div>
                  </div>
                  <div class="column com">
                  <div class="content">
                  <img src="img/TVL.png" alt="TVL" style="width:70%">
                  <h4>Information and Technology IT</h4>
                  </div>
                  </div>
                  <div class="column com">
                  <div class="content">
                  <img src="img/TVL.png" alt="TVL" style="width:70%">
                  <h4>Game Development</h4>
                  </div>
                  </div>
                  <div class="column dres">
                  <div class="content">
                  <img src="img/TVL.png" alt="TVL" style="width:70%">
                  <h4>Fashion Designing</h4>
                  </div>
                  </div>
                  <div class="column dres">
                  <div class="content">
                  <img src="img/TVL.png" alt="TVL" style="width:70%">
                  <h4>Freelance Tailoring/Business</h4>
                  </div>
                  </div>
                  <div class="column he">
                  <div class="content">
                  <img src="img/TVL.png" alt="TVL" style="width:70%">
                  <h4>Hospitality and Management</h4>
                  </div>
                  </div>
                  <div class="column he">
                  <div class="content">
                  <img src="img/TVL.png" alt="TVL" style="width:70%">
                  <h4>Cookery/Breading and Pastry</h4>
                  </div>
                  </div>
                  <div class="column he">
                  <div class="content">
                  <img src="img/TVL.png" alt="TVL" style="width:70%">
                  <h4>Bartending NC</h4>
                  </div>
                  </div>
                  <div class="column eim">
                  <div class="content">
                  <img src="img/TVL.png" alt="TVL" style="width:70%">
                  <h4>Electrical Maintenance</h4>
                  </div>
                  </div>
                  <div class="column eim">
                  <div class="content">
                  <img src="img/TVL.png" alt="TVL" style="width:70%">
                  <h4>Lineman Operation</h4>
                  </div>
                  </div>
                  <!-- END GRID -->
                  </div>
                  <!-- END MAIN -->
                  </div>
                  <script>
                  filterSelection("all")
                  function filterSelection(c) {
                  var x, i;
                  x = document.getElementsByClassName("column");
                  if (c == "all") c = "";
                  for (i = 0; i < x.length; i++) {
                  w3RemoveClass(x[i], "show");
                  if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
                  }
                  }

                  function w3AddClass(element, name) {
                  var i, arr1, arr2;
                  arr1 = element.className.split(" ");
                  arr2 = name.split(" ");
                  for (i = 0; i < arr2.length; i++) {
                  if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
                  }
                  }

                  function w3RemoveClass(element, name) {
                  var i, arr1, arr2;
                  arr1 = element.className.split(" ");
                  arr2 = name.split(" ");
                  for (i = 0; i < arr2.length; i++) {
                  while (arr1.indexOf(arr2[i]) > -1) {
                  arr1.splice(arr1.indexOf(arr2[i]), 1);
                  }
                  }
                  element.className = arr1.join(" ");
                  }


                  // Add active class to the current button (highlight it)
                  var btnContainer = document.getElementById("myBtnContainer");
                  var btns = btnContainer.getElementsByClassName("btn");
                  for (var i = 0; i < btns.length; i++) {
                  btns[i].addEventListener("click", function(){
                  var current = document.getElementsByClassName("active");
                  current[0].className = current[0].className.replace(" active", "");
                  this.className += " active";
                  });
                  }
                  </script>
                   <br>
                   <br>
   <h2 style="color:green; border:2px solid Orange; font-family:verdana; font-size:250%;">Senior High School Activities</h2>
                   <style>
                   * {
                     box-sizing: border-box;
                   }

                   body {
                     background-color: #f1f1f1;
                     padding: 20px;
                     font-family: Arial;
                   }

                   /* Center website */
                   .main {
                     max-width: 1000px;
                     margin: auto;
                   }

                   h1 {
                     font-size: 50px;
                     word-break: break-all;
                   }

                   .row {
                     margin: 8px -16px;
                   }

                   /* Add padding BETWEEN each column */
                   .row,
                   .row > .column {
                     padding: 8px;
                   }

                   /* Create four equal columns that floats next to each other */
                   .column {
                     float: left;
                     width: 25%;
                   }

                   /* Clear floats after rows */
                   .row:after {
                     content: "";
                     display: table;
                     clear: both;
                   }

                   /* Content */
                   .content {
                     background-color: white;
                     padding: 10px;
                   }

                   /* Responsive layout - makes a two column-layout instead of four columns */
                   @media screen and (max-width: 900px) {
                     .column {
                       width: 50%;
                     }
                   }

                   /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
                   @media screen and (max-width: 600px) {
                     .column {
                       width: 100%;
                     }
                   }
                   </style>
                   </head>
                   <body>

                   <!-- MAIN (Center website) -->
                   <div class="main">

                   <h1 style="font-size:25px;">Senior Highs' Activities</h1>
                   <hr>

                   <h2 style="font-size:20px;">Major Senior High School Activities</h2>
                   <h2 style="font-size:15px;">The following bellow are the sample SHS activities done by year until the generation comes.</h2>

                   <!-- Portfolio Gallery Grid -->
                   <div class="row">
                     <div class="column">
                       <div class="content">
                         <img src="img/TVL.png" alt="TVL" style="width:80%">
                         <h3>TECHNOLYMPICS</h3>
                         <p>Test your own adaptive skills when it comes from Technical aspects and work-related activities and have fun with full of smile!.</p>
                       </div>
                     </div>
                     <div class="column">
                       <div class="content">
                       <img src="img/research.png" alt="research" style="width:70%">
                         <h3>SHS RESEARCH DEFENSE (PROPOSAL AND FINAL)</h3>
                         <p>A battle between a study and problem...Let your research handle and present to give positive changes for everyone!.</p>
                       </div>
                     </div>
                     <div class="column">
                       <div class="content">
                       <img src="img/district.jpg" alt="district" style="width:100%">
                         <h3>SCHOOLS' PRESS CONFERENCE JOURNALISM</h3>
                         <p>Write with a purpose! and leave a mark of bravery and fairness! Be a journalist and join the battle.</p>
                       </div>
                     </div>
                     <div class="column">
                       <div class="content">
                       <img src="img/night.png" alt="night" style="width:100%">
                         <h3>SENIOR HIGHS' NIGHT</h3>
                         <p>Tired for anything? Well, Seniors Week gives you excellent experiences for being a Senior High student!.</p>
                       </div>
                     </div>
                   <!-- END GRID -->
                   </div>

                   <div class="content">
                     <img src="img/kanlahi.jpg" alt="kanlahi" style="width:100%">
                     <h3>DHS KANLAHI FESTIVAL DANCE COMPETITION</h3>
                     <p>Gaze like the wing and flow your body with meaningful movements for the wonderful battle in colorful Kanlahi Festival!</p>
                     <p>Be part of Performing Arts club and join for the battle of good and sportmanship contest for street dance competition in Kanlahi Festival.</p>
                   </div>

                   <!-- END MAIN -->
                   </div>

                   <br>
                   <br>
                   <h2 style="color:blue; border:2px solid Orange; font-family:verdana; font-size:250%;">Purpose of Creating Early Registration System!</h2>
                    <p>The early registration system has wide varities of impotance and purpose created and developed by the programmers in which includes the main problem on why do we should create this system?</p>
                     <p>Sincerely, the purpose of having this system is to enhance and give a convinience for the students registration process, also to enhance the owrks of the teachers to prevent time consuming,</p>
                                                      <p>hassleness, paper-based and expensiveness when it comes from printing fill up forms manually.</p>

                     <br>
                     <br>
                     <br>

                   <h2 style="color:red; border:2px solid Orange; font-family:verdana; font-size:250%;">Meet The Team!!!</h2>
                   <p>By this time, the system would lie to guide you from the faces behind when it comes from the development of the early registration system of DHS-SHS. These are the following faces and their major works:</p>
                      <br>
                      <br>
                      <br>

                      <style>
    * {
      box-sizing: border-box;
    }

    body {
      background-color: #f1f1f1;
      padding: 20px;
      font-family: Arial;
    }

    /* Center website */
    .main {
      max-width: 1000px;
      margin: auto;
    }

    h1 {
      font-size: 50px;
      word-break: break-all;
    }

    .row {
      margin: 10px -16px;
    }

    /* Add padding BETWEEN each column */
    .row,
    .row > .column {
      padding: 8px;
    }

    /* Create three equal columns that floats next to each other */
    .column {
      float: left;
      width: 33.33%;
      display: none; /* Hide all elements by default */
    }

    /* Clear floats after rows */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }

    /* Content */
    .content {
      background-color: white;
      padding: 10px;
    }

    /* The "show" class is added to the filtered elements */
    .show {
      display: block;
    }

    /* Style the buttons */
    .btn {
      border: 3px solid red;
      outline: none;
      padding: 12px 16px;
      background-color: #e8491d;
      cursor: pointer;
    }

    .btn:hover {
      background-color: white;
    }

    .btn.active {
      background-color: #e8491d;
      color: white;
    }
    </style>
    </head>
    <body>

    <!-- MAIN (Center website) -->
    <div class="main">

    <h2 style="font size:50px;">The Team ERS</h2>
    <hr>

    <h2 style="font-size: 15px;">These are the following faces which contributes greatly in order to developed the system well.</h2>

    <div id="myBtnContainer">
      <button class="btn active" onclick="filterSelection('all')"> Teammates</button>
      <button class="btn" onclick="filterSelection('programmers')"> Programmers</button>
      <button class="btn" onclick="filterSelection('researchers')"> Researchers</button>
    </div>

    <!-- Portfolio Gallery Grid -->
    <div class="row">
      <div class="column programmers, researchers">
        <div class="content">
          <img src="img/TVL.png" alt="TVL" style="width:60%">
          <h4>Christian A. Dalagan</h4>
          <p>Major System Programmer/Research Assistant Leader</p>
        </div>
      </div>
      <div class="column programmers, researchers">
        <div class="content">
        <img src="img/STEM.png" alt="STEM" style="width:70%">
          <h4>Arjay G. Rey Matias</h4>
          <p>Programmer-Design and Layout/Research Leader</p>
        </div>
      </div>
      <div class="column programmers">
        <div class="content">
        <img src="img/TVL.png" alt="TVL" style="width:80%">
          <h4>Francis Querubin Magpayo</h4>
          <p>Programmer/Researcher</p>
        </div>
      </div>

      <div class="column researchers">
        <div class="content">
          <img src="img/TVL.png" alt="TVL" style="width:60%">
          <h4>Grace Tamayo</h4>
          <p>Researcher</p>
        </div>
      </div>
      <div class="column programmers">
        <div class="content">
        <img src="img/TVL.png" alt="TVL" style="width:60%">
          <h4>Justin M. Manarang</h4>
          <p>Programmer/Researcher</p>
        </div>
      </div>
      <div class="column programmers">
        <div class="content">
        <img src="img/TVL.png" alt="TVL" style="width:60%">
          <h4>Vhanes Clarence B. Berber</h4>
          <p>Programmer</p>
        </div>
      </div>
      <div class="column researchers">
        <div class="content">
        <img src="img/TVL.png" alt="TVL" style="width:60%">
          <h4>Charlo T. De Vero</h4>
          <p>Researcher</p>
        </div>
      </div>
      <div class="column researchers">
        <div class="content">
        <img src="img/TVL.png" alt="TVL" style="width:70%">
          <h4>Mac Iverson De Guzman</h4>
          <p>Researcher</p>
        </div>
      </div>
      <div class="column programmers">
        <div class="content">
        <img src="img/TVL.png" alt="TVL" style="width:70%">
          <h4>John Paul P. Palad</h4>
          <p>Programmer</p>
        </div>
      </div>
      <div class="column researchers">
        <div class="content">
        <img src="img/TVL.png" alt="TVL" style="width:70%">
          <h4>Almond Kaisser Castello</h4>
          <p>Researcher</p>
        </div>
      </div>
      <div class="column researchers">
        <div class="content">
        <img src="img/TVL.png" alt="TVL" style="width:70%">
          <h4>Rickxel Vallespin</h4>
          <p>Researcher</p>
        </div>
      </div>
    <!-- END GRID -->
    </div>

    <!-- END MAIN -->
    </div>

    <script>
    filterSelection("all")
    function filterSelection(c) {
      var x, i;
      x = document.getElementsByClassName("column");
      if (c == "all") c = "";
      for (i = 0; i < x.length; i++) {
        w3RemoveClass(x[i], "show");
        if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
      }
    }

    function w3AddClass(element, name) {
      var i, arr1, arr2;
      arr1 = element.className.split(" ");
      arr2 = name.split(" ");
      for (i = 0; i < arr2.length; i++) {
        if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
      }
    }

    function w3RemoveClass(element, name) {
      var i, arr1, arr2;
      arr1 = element.className.split(" ");
      arr2 = name.split(" ");
      for (i = 0; i < arr2.length; i++) {
        while (arr1.indexOf(arr2[i]) > -1) {
          arr1.splice(arr1.indexOf(arr2[i]), 1);
        }
      }
      element.className = arr1.join(" ");
    }


    // Add active class to the current button (highlight it)
    var btnContainer = document.getElementById("myBtnContainer");
    var btns = btnContainer.getElementsByClassName("btn");
    for (var i = 0; i < btns.length; i++) {
      btns[i].addEventListener("click", function(){
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
      });
    }
    </script>

               <p>Grade-12 TVL-3 Computer Programming</p>
               <br>
               <br>
               <br>
               <br>
          </section>
          </div>
   <br>
          <footer>
          		    <p> Programmed by: DHS-SHS Group - 1 Computer Programming 2020-2021, Copyright &copy; 2020 </p>
          </footer>

</body>
</html>
