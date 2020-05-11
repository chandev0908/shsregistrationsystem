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
		     <h1><span class="highlight">DHS-SHS Early Registration System</span></h1>
		   </div>
       </div>
       <form action="./adminlogin.php">
        <div class="adminbtn">
          <div class="flex"><input value="Admin" id="submit" style="position:absolute; left:1750px;  bottom:-65px; margin-left: 430px; width: 90px; height: 60px; margin-top: 5px; margin-left: 73px; border-radius: 5px; background-color: transparent; font-weight: bold; color: orange;" type="submit"></div>
           </form>
      </div>
		   </header>

       <section id="showcase">
         <div class="minicontainer">
            <h1> HUMMS DATA </h2>
             <table style="position:relative; left:1%; top:30%";>
               <tr>
                 <?php
                 require'conn.php';
                 $query="SELECT studentid FROM humms ORDER BY studentid";
                 $query_run= mysqli_query($conn,$query);
                 $row = mysqli_num_rows($query_run);
                 echo 'TOTAL COUNTS :';
                 echo '<h2>'.$row.'</h2>'
                  ?>
               </tr>
               <tr>
             <td><a href="adminprogramming.php">TVL-PROGRAMMING</a></td>
             <td><a href="admincss.php">TVL-CSS</a></td>
             <td><a href="admincookery.php">TVL-COOKERY</a></td>
             <td><a href="admindressmaking.php">TVL-DRESSMAKING</a></td>
             <td><a href="admineim.php">TVL-EIM</a></td>
             <td><a href="adminhumms.php">HUMMS-List</a></td>
             <td><a href="adminabm.php">ABM-List</a></td>
             <td><a href="adminstem.php">STEM-List</a></td>
             </tr>
             </table>
         	<?php
         			$sql = "SELECT * FROM humms";
         			$result = mysqli_query($conn, $sql);

         			if (mysqli_num_rows($result)<=0) {
         				 echo "Student's data not found";
         			}
         			else {

         	?>
         	<br>
          <table style="position: relative; left:1%; margin-bottom:10px;" border="1px">
         	<tr>
         		<th>S.N</th>
             <th>LRN</th>
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
                       <td><?=$row['lrn'];?></td>
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
 </div>
</div>
 <footer>
 		    <p> Programmed by: Group - 1 Computer Programming 2020-2021, Copyright &copy; 2019 </p>
 </footer>
</body>
</html>
