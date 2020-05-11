<?php
include('mainsecurity.php');

?>
<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM ictprogramming WHERE CONCAT (lrn, firstname, lastname, middlename) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);

}
 else {
    $queryqew = "SELECT * FROM ictprogramming";
    $search_result = filterTable($queryqew);
}

// function to connect and execute the query
function filterTable($queryqew)
{
    $connect = mysqli_connect("localhost", "root", "", "registration_db");
    $filter_Result = mysqli_query($connect, $queryqew);
    return $filter_Result;
}

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
  <div class="page-wrap">
	    <header>
		  <div class="container">
        <div id="branding">
          <img src="./images/dhs.png" style="position:absolute; width:550px; height:500px; top:-150px; left:0%;">
           <h1 style="position:relative; left:25%; top:10%;"><span class="highlight">DHS-SHS Early Registration System</span></h1>
         </div>
         <form action="adminoverview.php" method="POST">
          <input value="Overview" name="overview"style=" position:relative; top:-15px;left:93%; width: 90px; height: 60px; border-radius: 5px; background-color: transparent; font-weight:bold; color: orange;" type="submit">
         </form>
       </div>
      </div>
		   </header>
       <form action="./printmanage/printcomprog.php" method="POST">
        <input value="Print PDF" name="overview"style=" hover: white;position:relative; top:-78px; left:87%; width: 90px; height: 60px; border-radius: 5px; background-color:#35424a; font-weight:bold; color: orange;" type="submit">
       </form>
       <section id="showcase">
         <div class="minicontainer">
            <h1> ICT-PROGRAMMING DATA </h2>
             <table align="center" style="position:relative; top:30%";>

            <?php
            require'conn.php';
            $query="SELECT progid FROM ictprogramming ORDER BY progid";
            $query_run= mysqli_query($conn,$query);
            $row = mysqli_num_rows($query_run);
            echo 'TOTAL COUNTS :';
            echo '<h2>'.$row.'</h2>'
              ?><tr>
              <th>  <?php
             $sqltry = "SELECT count(progid) AS total  FROM ictprogramming WHERE Gender= 'Male'";
             $resulttry = mysqli_query($conn,$sqltry);
             $valuestry = mysqli_fetch_assoc($resulttry);
             $numrows = $valuestry['total'];
             echo 'MALE COUNTS :';
             echo '<h2>'.$numrows.'</h2>'
              ?></th>
              <th><?php
              $sqltry = "SELECT count(progid) AS total  FROM ictprogramming WHERE Gender= 'Female'";
              $resulttry = mysqli_query($conn,$sqltry);
              $valuestry = mysqli_fetch_assoc($resulttry);
              $numrows = $valuestry['total'];
              echo 'FEMALE COUNTS :';
              echo '<h2>'.$numrows.'</h2>'
               ?></th>
         </tr>
             </table>
         	<?php
         			$sql = "SELECT * FROM ictprogramming";
         			$result = mysqli_query($conn, $sql);

         			if (mysqli_num_rows($result)<=0) {
         				 echo "Student's data not found";
         			}
         			else {

         	?>
          <form action="adminprogramming.php" method="post">
              <input style="width:20%; position:relative;"type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
              <input type="submit" style="height:40px; width:80px; font-weight: bold;"name="search" value="Search"><br><br>
</form>
         	<br>
          <table align="center" style="position: relative; margin-bottom:10px;" border="1px">
         	<tr>
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
         				  while($row = mysqli_fetch_array($search_result)):
         						?>
         						<tr>
                       <td><?=$row['lrn'];?></td>
         							<td><?=$row['firstname'];?></td>
         							<td><?=$row['lastname'];?></td>
         							<td><?=$row['middlename'];?></td>
         							<td><?=$row['date_of_birth'];?></td>
         							<td><?=$row['Gender'];?></td>
         							<td><?=$row['school'];?></td>
         							<td><?=$row['section'];?></td>
         							<td><?=$row['strand'];?></td>
         							<td><a href="update.php?progid=<?=$row['progid']?>">UPDATE</a></td>
         							<td><a href="editconn.php?progid=<?=$row['progid']?>">DELETE</a></td>
         						</tr>
         						<?php
         				      endwhile;
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
