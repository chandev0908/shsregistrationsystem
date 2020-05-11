<!-- Header Showcase -->
<?php
session_start();
if(isset($_SESSION['message']))
		{
			echo '<script type="text/javascript">alert("'.$_SESSION['message'].'");</script>';
			header('Refresh:0');
			session_destroy();
		}
 ?>
<link href="./style2.css" rel="stylesheet">
<link href="./style.css" rel="stylesheet">
<header>
<h1 class="logo">WELCOME LEARNERS</h1>
<input type="checkbox" id="nav-toggle" class="nav-toggle">
<nav>
<ul>
<li><a href="index.php">Home</a></li>
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
      <h2 class="content-title">Welcome SHS Learners!</h2>
        <form action="connection.php" method="POST">
            <br>
            LRN : <br>
            <input type="text" pattern="[0-9]{12}"  style="width: 40%;padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;  border-radius: 4px;box-sizing: border-box;" name="lrn" placeholder="INPUT YOUR 12 DIGIT LRN" required>
            <br>
            First Name : <br>
            <input type="text"   name="first" placeholder="Firstname" required>
            <br>
            Last Name : <br>
            <input type="text"  name="last" placeholder="Lastname" required>
            <br>
           Middlename :<br>
           <input type="text" class="form__input" name="middle" placeholder="Middlename" required>
              <br>
        Date of Birth:<br>
         <input   type="Date" style="height:30px;" name="date_of_birth" placeholder="DD/MM/YY" required>
         <br>
         <br>
         Gender :
              <input type="radio" name="sex" value="Male" required>Male
              <input type="radio" name="sex" value="Female" required>Female
              <br>
              <br>
              Last attended School :
              <br>
              <input   type="text" class="form__input" name="school" placeholder="Last attended School" required>
         <br>
            Last Section : <br><input   type="text" class="form__input" name="section" placeholder="Section" required>
         <br>
           <h3>Academic Tracks :</h3>

                <input type="radio" name="strand" value="HUMMS" required>Humss
                <br>
                <input type="radio" name="strand" value="ABM" required>ABM
                <br>
                <input type="radio" name="strand" value="STEM" required>Stem
                <h3>TVL Tracks</h3>
				<input type="radio" name="strand" value="ICT-PROGRAMMING" required>ICT-Computer Programming
                <br>
                <input type="radio" name="strand" value="ICT-CSS" required>ICT-Computer System Servicing
                <br>
                <input type="radio" name="strand" value="COOKERY" required>HE Cookery
                <br>
                <input type="radio" name="strand" value="DRESSMAKING" required>Dressmaking
                <br>
                <input type="radio" name="strand" value="EIM" required>EIM(Electricity and Installation Maintenance)
<br>
<br>
       <input value="Register" id="submit" style="position:relative; border: 1px solid  red;   width: 300px; height: 60px; border-radius: 3px; background-color: #e8491d; font-weight: bold; color: white;" type="submit">
        </form>
        </div>
  </section>


</main>

<!-- Footer -->
<footer id="main-footer">
  <div><p>Project By Research Group of:</p></div>
  <div><p> DEVELOPMENT AND VALIDATION OF EARLY REGISTRATION SYSTEM FOR INCOMING SHS GRADE 11 IN DAPDAP HIGH SCHOOL</p></div>

</footer>
