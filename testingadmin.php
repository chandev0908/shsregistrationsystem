<?php
require('connection.php');
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
  <div class="body">
	    <header>
		  <div class="container">
		  <div id="branding">
		     <h1><span class="highlight">DHS-SHS Early Registration System</span></h1>
		   </div>
		   </header>

       <section id="showcase">
		   <div class="body">
		     <h1>Welcome Admin</h1>
         <?php
             $sql = "SELECT * FROM tvl";
             $result = mysqli_query($conn, $sql);

             if (mysqli_num_rows($result)<=0) {
                echo "Student's data not found";
             }
             else {

         ?>
         <br>
        <b style="margin-left: 20px;">Dear, Admin you can update all Student data from this table,</b>
        <table style="margin-left: 10px; margin-right: 10px;" border="1px" center:0px;>
         <tr>
           <th>S.N</th>
           <th>FirstName</th>
           <th>LastName</th>
           <th>MiddleName</th>
           <th>Date of Birth</th>
           <th>Sex</th>
           <th>Last attended School</th>
           <th>Section</th>
           <th>Strand</th>
           <th>Update</th>
           <th>Delete</th>

         </tr>
         <?php
                 while ($row=mysqli_fetch_assoc($result)) {
                   ?>
                   <tr>
                     <td><?=$row['studentid'];?></td>
                     <td><?=$row['firstname'];?></td>
                     <td><?=$row['lastname'];?></td>
                     <td><?=$row['middlename'];?></td>
                     <td><?=$row['date_of_birth'];?></td>
                     <td><?=$row['Gender'];?></td>
                     <td><?=$row['school'];?></td>
                     <td><?=$row['section'];?></td>
                     <td><?=$row['strand'];?></td>
                     <td><a href="update.php?s_id=<?=$row['studentid']?>">UPDATE</a></td>
                     <td><a href="insert_db.php?s_id=<?=$row['studentid']?>">DELETE</a></td>
                   </tr>
                   <?php
                 }
                 ?>
                 </table>
                 <?php
               }

             ?>
</section>


 <footer>
 		    <p> Programmed by: Group - 1 Computer Programming 2020-2021, Copyright &copy; 2019 </p>
 </footer>
</div>
</body>
</html>
