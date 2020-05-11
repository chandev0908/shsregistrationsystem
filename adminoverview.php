<?php
include('mainsecurity.php');

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
        <div id="branding">
          <img src="./images/dhs.png" style="position:absolute; width:550px; height:500px; top:-150px; left:0%;">
           <h1 style="position:relative; left:25%; top:10%;"><span class="highlight">DHS-SHS Early Registration System</span></h1>
         </div>
       <form action="logout.php" method="POST">
        <input value="Logout" name="logout_btn"style=" position:relative; top:-15px; left:93%; width: 90px; height: 60px; border-radius: 5px; background-color: transparent; font-weight:bold; color: orange;" type="submit">
       </form>
		   </header>
      <?php
      include('./test.php');
       ?>
<div class="contain">
  <h1 style="position: relative; left:40%; top:2%  ;">Enrollment Summary</h1>
         <div class="overview1">

           <h2>TVL :</h2>
         <?php
         require'conn.php';
         $query="SELECT progid FROM ictprogramming ORDER BY progid";
         $query_run= mysqli_query($conn,$query);
         $row = mysqli_num_rows($query_run);
         echo '<h5>ICT-PROGRAMMING</h5><h2>'.$row.'</h2>'
          ?>
          <?php
          require'conn.php';
          $query="SELECT cssid FROM ictcss ORDER BY cssid";
          $query_run= mysqli_query($conn,$query);
          $row = mysqli_num_rows($query_run);
          echo '<h5>ICT-CSS</h5><h2>'.$row.'</h2>'
           ?>
           <?php

           require'conn.php';
           $query="SELECT cookeryid FROM cookery ORDER BY cookeryid";
           $query_run= mysqli_query($conn,$query);
           $row = mysqli_num_rows($query_run);
           echo '<h5>COOKERY</h5><h2>'.$row.'</h2>'
            ?>
            <?php
            require'conn.php';
            $query="SELECT dressmakingid FROM dressmaking ORDER BY dressmakingid";
            $query_run= mysqli_query($conn,$query);
            $row = mysqli_num_rows($query_run);
            echo '<h5>DRESSMAKING</h5><h2>'.$row.'</h2>'
             ?>
             <?php
             require'conn.php';
             $query="SELECT eimid FROM eim ORDER BY eimid";
             $query_run= mysqli_query($conn,$query);
             $row = mysqli_num_rows($query_run);
             echo '<h5>EIM</h5><h2>'.$row.'</h2>'
              ?>
              </div>
              <div class="overview2">
                <h2>ACADEMIC :</h2>
              <?php
              require'conn.php';
              $query="SELECT hummsid FROM humms ORDER BY hummsid";
              $query_run= mysqli_query($conn,$query);
              $row = mysqli_num_rows($query_run);
              echo '<h5>HUMMS</h5><h2>'.$row.'</h2>'
               ?>
               <?php
               require'conn.php';
               $query="SELECT abmid FROM abm ORDER BY abmid";
               $query_run= mysqli_query($conn,$query);
               $row = mysqli_num_rows($query_run);
               echo '<h5>ABM</h5><h2>'.$row.'</h2>';
                ?>
                <?php
                require'conn.php';
                $query="SELECT stemid FROM stem ORDER BY stemid";
                $query_run= mysqli_query($conn,$query);
                $row = mysqli_num_rows($query_run);
                echo '<h5>STEM</h5><h2>'.$row.'</h2>'
                 ?>
</div>
</div>
 <footer>
 		    <p> Programmed by: Group - 1 Computer Programming 2020-2021, Copyright &copy; 2019 </p>
 </footer>
</body>
</html>
