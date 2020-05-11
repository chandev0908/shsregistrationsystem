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
          <input value="Index" name="overview"style=" position:relative; top:-15px; left:92%; width: 90px; height: 60px; border-radius: 5px; background-color: transparent; font-weight:bold; color: orange;" type="submit">
         </form>
		   </div>
		   </header>

       <section id="showkis">
		   <div class="container">
       <h1 style=" right:28%; top: 2px; border: 3px solid orange; padding: 30px; font-size:45px;">DHS - SHS Administrator Panel</h1>
       <?php
            if(isset($_SESSION['status']) && $_SESSION['status'] !='')
          {
            echo '<h2>'.$_SESSION['status'].'</h2>';
            unset($_SESSION['status']);
          }
        ?>
       <div class="login">
       <form action="adminsecurity.php" method="POST">
         <br>
         Username (Administrator) : <input type="text" style="margin-left: 430px; width: 550px; height: 45px; margin-top: 5px; margin-left: 73px; border-radius: 5px;" name="username" placeholder="Username" required>
         <br>
         Password (Administrator) : <input type="password" style="margin-left: 430px; width: 550px; height: 45px; margin-top: 5px; margin-left: 73px; border-radius: 5px;"  name="password" placeholder="Password" required>
         <br>

        <div class="flex"><input name="login_btn" class="input" style="margin-left: 430px; border: 2px solid red; width: 170px; height: 45px; margin-top: 5px; margin-left: 73px; border-radius: 5px; background-color:#e8491d;; font-weight: bold; color: white;" type="submit"  value="Submit"></div>
        <div class="flex"><input class="reset" style="margin-left: 430px; border: 2px solid red; width: 170px; height: 45px; margin-top: 5px; margin-left: 73px; border-radius: 5px; background-color:#e8491d;; font-weight: bold; color: white;" type="reset" value="Reset"></div>
      </form>
    </div>
         </section>


 <footer>
 		    <p> Programmed by: DHS-SHS Group - 1 Computer Programming 2020-2021, Copyright &copy; 2020 </p>
 </footer>

</body>
</html>
