
<?php
session_start();
include_once'conn.php';
$course=$_POST['strand'];
if($course== 'ICT-PROGRAMMING')
{
$first = $_POST['first'];
$lrn = $_POST['lrn'];
$last = $_POST['last'];
$middle = $_POST['middle'];
$dob = $_POST['date_of_birth'];
$sex = $_POST['sex'];
$school = $_POST['school'];
$section = $_POST['section'];
$strand = $_POST['strand'];

$Checking = "SELECT * FROM humms WHERE lrn ='$lrn'";
$result= mysqli_query($conn,$Checking);
$row_count= mysqli_num_rows($result);
$Checking2 = "SELECT * FROM abm WHERE lrn ='$lrn'";
$result2= mysqli_query($conn,$Checking2);
$row_count2= mysqli_num_rows($result2);
$Checking3 = "SELECT * FROM stem WHERE lrn ='$lrn'";
$result3= mysqli_query($conn,$Checking3);
$row_count3= mysqli_num_rows($result3);
$Checking4 = "SELECT * FROM ictprogramming WHERE lrn ='$lrn'";
$result4= mysqli_query($conn,$Checking4);
$row_count4= mysqli_num_rows($result4);
$Checking5 = "SELECT * FROM ictcss WHERE lrn ='$lrn'";
$result5= mysqli_query($conn,$Checking5);
$row_count5= mysqli_num_rows($result5);
$Checking6 = "SELECT * FROM cookery WHERE lrn ='$lrn'";
$result6= mysqli_query($conn,$Checking6);
$row_count6= mysqli_num_rows($result6);
$Checking7 = "SELECT * FROM dressmaking WHERE lrn ='$lrn'";
$result7= mysqli_query($conn,$Checking7);
$row_count7= mysqli_num_rows($result7);
$Checking8 = "SELECT * FROM eim WHERE lrn ='$lrn'";
$result8= mysqli_query($conn,$Checking8);
$row_count8= mysqli_num_rows($result8);
			if($row_count > 0)
			{
				$_SESSION['message']=" Dear, ". $lrn." You are already registered.";
				header("Location:form.php");
			}
			elseif($row_count2 > 0)
						{
							$_SESSION['message']=" Dear, ". $lrn." You are already registered.";
							header("Location:form.php");
						}
			elseif($row_count3 > 0)
						{
							$_SESSION['message']=" Dear, ". $lrn." You are already registered.";
							header("Location:form.php");
						}
			elseif($row_count3 > 0)
						{
							$_SESSION['message']=" Dear, ". $lrn." You are already registered.";
							header("Location:form.php");
						}
			elseif($row_count4 > 0)
						{
							$_SESSION['message']=" Dear, ". $lrn." You are already registered.";
							header("Location:form.php");
						}
			elseif($row_count5 > 0)
						{
							$_SESSION['message']=" Dear, ". $lrn." You are already registered.";
							header("Location:form.php");
						}
			elseif($row_count6 > 0)
						{
							$_SESSION['message']=" Dear, ". $lrn." You are already registered.";
							header("Location:form.php");
						}
			elseif($row_count7 > 0)
						{
							$_SESSION['message']=" Dear, ". $lrn." You are already registered.";
							header("Location:form.php");
						}
			elseif($row_count8 > 0)
						{
							$_SESSION['message']=" Dear, ". $lrn." You are already registered.";
							header("Location:form.php");
						}
      else{
        $sql= "INSERT INTO ictprogramming(`lrn`,`firstname`, `lastname`, `middlename`, `date_of_birth`, `Gender`, `school`, `section`, `strand`) VALUES  ('$lrn','$first', '$last', '$middle', '$dob', '$sex', '$school', '$section', '$strand')";

				if(mysqli_query($conn,$sql))
				{
					$_SESSION['message']=" Dear, ". $first." your are registered.";
					header("Location:form.php");
				}
			}

}
if($course== 'ICT-CSS')
{
$first = $_POST['first'];
$lrn = $_POST['lrn'];
$last = $_POST['last'];
$middle = $_POST['middle'];
$dob = $_POST['date_of_birth'];
$sex = $_POST['sex'];
$school = $_POST['school'];
$section = $_POST['section'];
$strand = $_POST['strand'];

$Checking = "SELECT * FROM humms WHERE lrn ='$lrn'";
$result= mysqli_query($conn,$Checking);
$row_count= mysqli_num_rows($result);
$Checking2 = "SELECT * FROM abm WHERE lrn ='$lrn'";
$result2= mysqli_query($conn,$Checking2);
$row_count2= mysqli_num_rows($result2);
$Checking3 = "SELECT * FROM stem WHERE lrn ='$lrn'";
$result3= mysqli_query($conn,$Checking3);
$row_count3= mysqli_num_rows($result3);
$Checking4 = "SELECT * FROM ictprogramming WHERE lrn ='$lrn'";
$result4= mysqli_query($conn,$Checking4);
$row_count4= mysqli_num_rows($result4);
$Checking5 = "SELECT * FROM ictcss WHERE lrn ='$lrn'";
$result5= mysqli_query($conn,$Checking5);
$row_count5= mysqli_num_rows($result5);
$Checking6 = "SELECT * FROM cookery WHERE lrn ='$lrn'";
$result6= mysqli_query($conn,$Checking6);
$row_count6= mysqli_num_rows($result6);
$Checking7 = "SELECT * FROM dressmaking WHERE lrn ='$lrn'";
$result7= mysqli_query($conn,$Checking7);
$row_count7= mysqli_num_rows($result7);
$Checking8 = "SELECT * FROM eim WHERE lrn ='$lrn'";
$result8= mysqli_query($conn,$Checking8);
$row_count8= mysqli_num_rows($result8);
			if($row_count > 0)
			{
				$_SESSION['message']=" Dear, ". $lrn." You are already registered.";
				header("Location:form.php");
			}
			elseif($row_count2 > 0)
						{
							$_SESSION['message']=" Dear, ". $lrn." You are already registered.";
							header("Location:form.php");
						}
			elseif($row_count3 > 0)
						{
							$_SESSION['message']=" Dear, ". $lrn." You are already registered.";
							header("Location:form.php");
						}
			elseif($row_count3 > 0)
						{
							$_SESSION['message']=" Dear, ". $lrn." You are already registered.";
							header("Location:form.php");
						}
			elseif($row_count4 > 0)
						{
							$_SESSION['message']=" Dear, ". $lrn." You are already registered.";
							header("Location:form.php");
						}
			elseif($row_count5 > 0)
						{
							$_SESSION['message']=" Dear, ". $lrn." You are already registered.";
							header("Location:form.php");
						}
			elseif($row_count6 > 0)
						{
							$_SESSION['message']=" Dear, ". $lrn." You are already registered.";
							header("Location:form.php");
						}
			elseif($row_count7 > 0)
						{
							$_SESSION['message']=" Dear, ". $lrn." You are already registered.";
							header("Location:form.php");
						}
			elseif($row_count8 > 0)
						{
							$_SESSION['message']=" Dear, ". $lrn." You are already registered.";
							header("Location:form.php");
						}
      else{
        $sql= "INSERT INTO ictcss (`lrn`,`firstname`, `lastname`, `middlename`, `date_of_birth`, `Gender`, `school`, `section`, `strand`) VALUES
        ('$lrn','$first', '$last', '$middle', '$dob', '$sex', '$school', '$section', '$strand')";
				if(mysqli_query($conn,$sql))
				{
					$_SESSION['message']=" Dear, ". $first." your are registered.";
					header("Location:form.php");
				}
			}
}
if($course== 'COOKERY')
{
$first = $_POST['first'];
$lrn = $_POST['lrn'];
$last = $_POST['last'];
$middle = $_POST['middle'];
$dob = $_POST['date_of_birth'];
$sex = $_POST['sex'];
$school = $_POST['school'];
$section = $_POST['section'];
$strand = $_POST['strand'];

$Checking = "SELECT * FROM humms WHERE lrn ='$lrn'";
$result= mysqli_query($conn,$Checking);
$row_count= mysqli_num_rows($result);
$Checking2 = "SELECT * FROM abm WHERE lrn ='$lrn'";
$result2= mysqli_query($conn,$Checking2);
$row_count2= mysqli_num_rows($result2);
$Checking3 = "SELECT * FROM stem WHERE lrn ='$lrn'";
$result3= mysqli_query($conn,$Checking3);
$row_count3= mysqli_num_rows($result3);
$Checking4 = "SELECT * FROM ictprogramming WHERE lrn ='$lrn'";
$result4= mysqli_query($conn,$Checking4);
$row_count4= mysqli_num_rows($result4);
$Checking5 = "SELECT * FROM ictcss WHERE lrn ='$lrn'";
$result5= mysqli_query($conn,$Checking5);
$row_count5= mysqli_num_rows($result5);
$Checking6 = "SELECT * FROM cookery WHERE lrn ='$lrn'";
$result6= mysqli_query($conn,$Checking6);
$row_count6= mysqli_num_rows($result6);
$Checking7 = "SELECT * FROM dressmaking WHERE lrn ='$lrn'";
$result7= mysqli_query($conn,$Checking7);
$row_count7= mysqli_num_rows($result7);
$Checking8 = "SELECT * FROM eim WHERE lrn ='$lrn'";
$result8= mysqli_query($conn,$Checking8);
$row_count8= mysqli_num_rows($result8);
			if($row_count > 0)
			{
				$_SESSION['message']=" Dear, ". $lrn." You are already registered.";
				header("Location:form.php");
			}
			elseif($row_count2 > 0)
						{
							$_SESSION['message']=" Dear, ". $lrn." You are already registered.";
							header("Location:form.php");
						}
			elseif($row_count3 > 0)
						{
							$_SESSION['message']=" Dear, ". $lrn." You are already registered.";
							header("Location:form.php");
						}
			elseif($row_count3 > 0)
						{
							$_SESSION['message']=" Dear, ". $lrn." You are already registered.";
							header("Location:form.php");
						}
			elseif($row_count4 > 0)
						{
							$_SESSION['message']=" Dear, ". $lrn." You are already registered.";
							header("Location:form.php");
						}
			elseif($row_count5 > 0)
						{
							$_SESSION['message']=" Dear, ". $lrn." You are already registered.";
							header("Location:form.php");
						}
			elseif($row_count6 > 0)
						{
							$_SESSION['message']=" Dear, ". $lrn." You are already registered.";
							header("Location:form.php");
						}
			elseif($row_count7 > 0)
						{
							$_SESSION['message']=" Dear, ". $lrn." You are already registered.";
							header("Location:form.php");
						}
			elseif($row_count8 > 0)
						{
							$_SESSION['message']=" Dear, ". $lrn." You are already registered.";
							header("Location:form.php");
						}
      else{
        $sql= "INSERT INTO cookery (`lrn`,`firstname`, `lastname`, `middlename`, `date_of_birth`, `Gender`, `school`, `section`, `strand`) VALUES
        ('$lrn','$first', '$last', '$middle', '$dob', '$sex', '$school', '$section', '$strand')";
				if(mysqli_query($conn,$sql))
				{
					$_SESSION['message']=" Dear, ". $first." your are registered.";
					header("Location:form.php");
				}
			}

}
if($course== 'DRESSMAKING')
{
$first = $_POST['first'];
$lrn = $_POST['lrn'];
$last = $_POST['last'];
$middle = $_POST['middle'];
$dob = $_POST['date_of_birth'];
$sex = $_POST['sex'];
$school = $_POST['school'];
$section = $_POST['section'];
$strand = $_POST['strand'];

$Checking = "SELECT * FROM humms WHERE lrn ='$lrn'";
$result= mysqli_query($conn,$Checking);
$row_count= mysqli_num_rows($result);
$Checking2 = "SELECT * FROM abm WHERE lrn ='$lrn'";
$result2= mysqli_query($conn,$Checking2);
$row_count2= mysqli_num_rows($result2);
$Checking3 = "SELECT * FROM stem WHERE lrn ='$lrn'";
$result3= mysqli_query($conn,$Checking3);
$row_count3= mysqli_num_rows($result3);
$Checking4 = "SELECT * FROM ictprogramming WHERE lrn ='$lrn'";
$result4= mysqli_query($conn,$Checking4);
$row_count4= mysqli_num_rows($result4);
$Checking5 = "SELECT * FROM ictcss WHERE lrn ='$lrn'";
$result5= mysqli_query($conn,$Checking5);
$row_count5= mysqli_num_rows($result5);
$Checking6 = "SELECT * FROM cookery WHERE lrn ='$lrn'";
$result6= mysqli_query($conn,$Checking6);
$row_count6= mysqli_num_rows($result6);
$Checking7 = "SELECT * FROM dressmaking WHERE lrn ='$lrn'";
$result7= mysqli_query($conn,$Checking7);
$row_count7= mysqli_num_rows($result7);
$Checking8 = "SELECT * FROM eim WHERE lrn ='$lrn'";
$result8= mysqli_query($conn,$Checking8);
$row_count8= mysqli_num_rows($result8);
			if($row_count > 0)
			{
				$_SESSION['message']=" Dear, ". $lrn." You are already registered.";
				header("Location:form.php");
			}
			elseif($row_count2 > 0)
						{
							$_SESSION['message']=" Dear, ". $lrn." You are already registered.";
							header("Location:form.php");
						}
			elseif($row_count3 > 0)
						{
							$_SESSION['message']=" Dear, ". $lrn." You are already registered.";
							header("Location:form.php");
						}
			elseif($row_count3 > 0)
						{
							$_SESSION['message']=" Dear, ". $lrn." You are already registered.";
							header("Location:form.php");
						}
			elseif($row_count4 > 0)
						{
							$_SESSION['message']=" Dear, ". $lrn." You are already registered.";
							header("Location:form.php");
						}
			elseif($row_count5 > 0)
						{
							$_SESSION['message']=" Dear, ". $lrn." You are already registered.";
							header("Location:form.php");
						}
			elseif($row_count6 > 0)
						{
							$_SESSION['message']=" Dear, ". $lrn." You are already registered.";
							header("Location:form.php");
						}
			elseif($row_count7 > 0)
						{
							$_SESSION['message']=" Dear, ". $lrn." You are already registered.";
							header("Location:form.php");
						}
			elseif($row_count8 > 0)
						{
							$_SESSION['message']=" Dear, ". $lrn." You are already registered.";
							header("Location:form.php");
						}
      else{
        $sql= "INSERT INTO dressmaking (`lrn`,`firstname`, `lastname`, `middlename`, `date_of_birth`, `Gender`, `school`, `section`, `strand`) VALUES
        ('$lrn','$first', '$last', '$middle', '$dob', '$sex', '$school', '$section', '$strand')";
				if(mysqli_query($conn,$sql))
				{
					$_SESSION['message']=" Dear, ". $first." your are registered.";
					header("Location:form.php");
				}
			}
}
if($course== 'EIM')
{
$first = $_POST['first'];
$lrn = $_POST['lrn'];
$last = $_POST['last'];
$middle = $_POST['middle'];
$dob = $_POST['date_of_birth'];
$sex = $_POST['sex'];
$school = $_POST['school'];
$section = $_POST['section'];
$strand = $_POST['strand'];

$Checking = "SELECT * FROM humms WHERE lrn ='$lrn'";
$result= mysqli_query($conn,$Checking);
$row_count= mysqli_num_rows($result);
$Checking2 = "SELECT * FROM abm WHERE lrn ='$lrn'";
$result2= mysqli_query($conn,$Checking2);
$row_count2= mysqli_num_rows($result2);
$Checking3 = "SELECT * FROM stem WHERE lrn ='$lrn'";
$result3= mysqli_query($conn,$Checking3);
$row_count3= mysqli_num_rows($result3);
$Checking4 = "SELECT * FROM ictprogramming WHERE lrn ='$lrn'";
$result4= mysqli_query($conn,$Checking4);
$row_count4= mysqli_num_rows($result4);
$Checking5 = "SELECT * FROM ictcss WHERE lrn ='$lrn'";
$result5= mysqli_query($conn,$Checking5);
$row_count5= mysqli_num_rows($result5);
$Checking6 = "SELECT * FROM cookery WHERE lrn ='$lrn'";
$result6= mysqli_query($conn,$Checking6);
$row_count6= mysqli_num_rows($result6);
$Checking7 = "SELECT * FROM dressmaking WHERE lrn ='$lrn'";
$result7= mysqli_query($conn,$Checking7);
$row_count7= mysqli_num_rows($result7);
$Checking8 = "SELECT * FROM eim WHERE lrn ='$lrn'";
$result8= mysqli_query($conn,$Checking8);
$row_count8= mysqli_num_rows($result8);
			if($row_count > 0)
			{
				$_SESSION['message']=" Dear, ". $lrn." You are already registered.";
				header("Location:form.php");
			}
			elseif($row_count2 > 0)
						{
							$_SESSION['message']=" Dear, ". $lrn." You are already registered.";
							header("Location:form.php");
						}
			elseif($row_count3 > 0)
						{
							$_SESSION['message']=" Dear, ". $lrn." You are already registered.";
							header("Location:form.php");
						}
			elseif($row_count3 > 0)
						{
							$_SESSION['message']=" Dear, ". $lrn." You are already registered.";
							header("Location:form.php");
						}
			elseif($row_count4 > 0)
						{
							$_SESSION['message']=" Dear, ". $lrn." You are already registered.";
							header("Location:form.php");
						}
			elseif($row_count5 > 0)
						{
							$_SESSION['message']=" Dear, ". $lrn." You are already registered.";
							header("Location:form.php");
						}
			elseif($row_count6 > 0)
						{
							$_SESSION['message']=" Dear, ". $lrn." You are already registered.";
							header("Location:form.php");
						}
			elseif($row_count7 > 0)
						{
							$_SESSION['message']=" Dear, ". $lrn." You are already registered.";
							header("Location:form.php");
						}
			elseif($row_count8 > 0)
						{
							$_SESSION['message']=" Dear, ". $lrn." You are already registered.";
							header("Location:form.php");
						}
      else{
        $sql= "INSERT INTO eim (`lrn`,`firstname`, `lastname`, `middlename`, `date_of_birth`, `Gender`, `school`, `section`, `strand`) VALUES
        ('$lrn','$first', '$last', '$middle', '$dob', '$sex', '$school', '$section', '$strand')";
				if(mysqli_query($conn,$sql))
				{
					$_SESSION['message']=" Dear, ". $first." your are registered.";
					header("Location:form.php");
				}
			}
}
if($course== 'HUMMS')
{
$lrn = $_POST['lrn'];
$first = $_POST['first'];
$last = $_POST['last'];
$middle = $_POST['middle'];
$dob = $_POST['date_of_birth'];
$sex = $_POST['sex'];
$school = $_POST['school'];
$section = $_POST['section'];
$strand = $_POST['strand'];

$Checking = "SELECT * FROM humms WHERE lrn ='$lrn'";
$result= mysqli_query($conn,$Checking);
$row_count= mysqli_num_rows($result);
$Checking2 = "SELECT * FROM abm WHERE lrn ='$lrn'";
$result2= mysqli_query($conn,$Checking2);
$row_count2= mysqli_num_rows($result2);
$Checking3 = "SELECT * FROM stem WHERE lrn ='$lrn'";
$result3= mysqli_query($conn,$Checking3);
$row_count3= mysqli_num_rows($result3);
$Checking4 = "SELECT * FROM ictprogramming WHERE lrn ='$lrn'";
$result4= mysqli_query($conn,$Checking4);
$row_count4= mysqli_num_rows($result4);
$Checking5 = "SELECT * FROM ictcss WHERE lrn ='$lrn'";
$result5= mysqli_query($conn,$Checking5);
$row_count5= mysqli_num_rows($result5);
$Checking6 = "SELECT * FROM cookery WHERE lrn ='$lrn'";
$result6= mysqli_query($conn,$Checking6);
$row_count6= mysqli_num_rows($result6);
$Checking7 = "SELECT * FROM dressmaking WHERE lrn ='$lrn'";
$result7= mysqli_query($conn,$Checking7);
$row_count7= mysqli_num_rows($result7);
$Checking8 = "SELECT * FROM eim WHERE lrn ='$lrn'";
$result8= mysqli_query($conn,$Checking8);
$row_count8= mysqli_num_rows($result8);
			if($row_count > 0)
			{
				$_SESSION['message']=" Dear, ". $lrn." You are already registered.";
				header("Location:form.php");
			}
			elseif($row_count2 > 0)
						{
							$_SESSION['message']=" Dear, ". $lrn." You are already registered.";
							header("Location:form.php");
						}
			elseif($row_count3 > 0)
						{
							$_SESSION['message']=" Dear, ". $lrn." You are already registered.";
							header("Location:form.php");
						}
			elseif($row_count3 > 0)
						{
							$_SESSION['message']=" Dear, ". $lrn." You are already registered.";
							header("Location:form.php");
						}
			elseif($row_count4 > 0)
						{
							$_SESSION['message']=" Dear, ". $lrn." You are already registered.";
							header("Location:form.php");
						}
			elseif($row_count5 > 0)
						{
							$_SESSION['message']=" Dear, ". $lrn." You are already registered.";
							header("Location:form.php");
						}
			elseif($row_count6 > 0)
						{
							$_SESSION['message']=" Dear, ". $lrn." You are already registered.";
							header("Location:form.php");
						}
			elseif($row_count7 > 0)
						{
							$_SESSION['message']=" Dear, ". $lrn." You are already registered.";
							header("Location:form.php");
						}
			elseif($row_count8 > 0)
						{
							$_SESSION['message']=" Dear, ". $lrn." You are already registered.";
							header("Location:form.php");
						}
      else{
        $sql= "INSERT INTO humms (`lrn`,`firstname`, `lastname`, `middlename`, `date_of_birth`, `Gender`, `school`, `section`, `strand`) VALUES
        ('$lrn','$first', '$last', '$middle', '$dob', '$sex', '$school', '$section', '$strand')";
				if(mysqli_query($conn,$sql))
				{
					$_SESSION['message']=" Dear, ". $first." your are registered.";
					header("Location:form.php");
				}
			}
}
if($course== 'ABM')
{
  $lrn = $_POST['lrn'];
$first = $_POST['first'];
$last = $_POST['last'];
$middle = $_POST['middle'];
$dob = $_POST['date_of_birth'];
$sex = $_POST['sex'];
$school = $_POST['school'];
$section = $_POST['section'];
$strand = $_POST['strand'];

$Checking = "SELECT * FROM humms WHERE lrn ='$lrn'";
$result= mysqli_query($conn,$Checking);
$row_count= mysqli_num_rows($result);
$Checking2 = "SELECT * FROM abm WHERE lrn ='$lrn'";
$result2= mysqli_query($conn,$Checking2);
$row_count2= mysqli_num_rows($result2);
$Checking3 = "SELECT * FROM stem WHERE lrn ='$lrn'";
$result3= mysqli_query($conn,$Checking3);
$row_count3= mysqli_num_rows($result3);
$Checking4 = "SELECT * FROM ictprogramming WHERE lrn ='$lrn'";
$result4= mysqli_query($conn,$Checking4);
$row_count4= mysqli_num_rows($result4);
$Checking5 = "SELECT * FROM ictcss WHERE lrn ='$lrn'";
$result5= mysqli_query($conn,$Checking5);
$row_count5= mysqli_num_rows($result5);
$Checking6 = "SELECT * FROM cookery WHERE lrn ='$lrn'";
$result6= mysqli_query($conn,$Checking6);
$row_count6= mysqli_num_rows($result6);
$Checking7 = "SELECT * FROM dressmaking WHERE lrn ='$lrn'";
$result7= mysqli_query($conn,$Checking7);
$row_count7= mysqli_num_rows($result7);
$Checking8 = "SELECT * FROM eim WHERE lrn ='$lrn'";
$result8= mysqli_query($conn,$Checking8);
$row_count8= mysqli_num_rows($result8);
			if($row_count > 0)
			{
				$_SESSION['message']=" Dear, ". $lrn." You are already registered.";
				header("Location:form.php");
			}
			elseif($row_count2 > 0)
						{
							$_SESSION['message']=" Dear, ". $lrn." You are already registered.";
							header("Location:form.php");
						}
			elseif($row_count3 > 0)
						{
							$_SESSION['message']=" Dear, ". $lrn." You are already registered.";
							header("Location:form.php");
						}
			elseif($row_count3 > 0)
						{
							$_SESSION['message']=" Dear, ". $lrn." You are already registered.";
							header("Location:form.php");
						}
			elseif($row_count4 > 0)
						{
							$_SESSION['message']=" Dear, ". $lrn." You are already registered.";
							header("Location:form.php");
						}
			elseif($row_count5 > 0)
						{
							$_SESSION['message']=" Dear, ". $lrn." You are already registered.";
							header("Location:form.php");
						}
			elseif($row_count6 > 0)
						{
							$_SESSION['message']=" Dear, ". $lrn." You are already registered.";
							header("Location:form.php");
						}
			elseif($row_count7 > 0)
						{
							$_SESSION['message']=" Dear, ". $lrn." You are already registered.";
							header("Location:form.php");
						}
			elseif($row_count8 > 0)
						{
							$_SESSION['message']=" Dear, ". $lrn." You are already registered.";
							header("Location:form.php");
						}
      else{
        $sql= "INSERT INTO abm (`lrn`,`firstname`, `lastname`, `middlename`, `date_of_birth`, `Gender`, `school`, `section`, `strand`) VALUES
        ('$lrn','$first', '$last', '$middle', '$dob', '$sex', '$school', '$section', '$strand')";
				if(mysqli_query($conn,$sql))
				{
					$_SESSION['message']=" Dear, ". $first." your are registered.";
					header("Location:form.php");
				}
			}
}
if($course== 'STEM')
{
$lrn = $_POST['lrn'];
$first = $_POST['first'];
$last = $_POST['last'];
$middle = $_POST['middle'];
$dob = $_POST['date_of_birth'];
$sex = $_POST['sex'];
$school = $_POST['school'];
$section = $_POST['section'];
$strand = $_POST['strand'];

$Checking = "SELECT * FROM humms WHERE lrn ='$lrn'";
$result= mysqli_query($conn,$Checking);
$row_count= mysqli_num_rows($result);
$Checking2 = "SELECT * FROM abm WHERE lrn ='$lrn'";
$result2= mysqli_query($conn,$Checking2);
$row_count2= mysqli_num_rows($result2);
$Checking3 = "SELECT * FROM stem WHERE lrn ='$lrn'";
$result3= mysqli_query($conn,$Checking3);
$row_count3= mysqli_num_rows($result3);
$Checking4 = "SELECT * FROM ictprogramming WHERE lrn ='$lrn'";
$result4= mysqli_query($conn,$Checking4);
$row_count4= mysqli_num_rows($result4);
$Checking5 = "SELECT * FROM ictcss WHERE lrn ='$lrn'";
$result5= mysqli_query($conn,$Checking5);
$row_count5= mysqli_num_rows($result5);
$Checking6 = "SELECT * FROM cookery WHERE lrn ='$lrn'";
$result6= mysqli_query($conn,$Checking6);
$row_count6= mysqli_num_rows($result6);
$Checking7 = "SELECT * FROM dressmaking WHERE lrn ='$lrn'";
$result7= mysqli_query($conn,$Checking7);
$row_count7= mysqli_num_rows($result7);
$Checking8 = "SELECT * FROM eim WHERE lrn ='$lrn'";
$result8= mysqli_query($conn,$Checking8);
$row_count8= mysqli_num_rows($result8);
			if($row_count > 0)
			{
				$_SESSION['message']=" Dear, ". $lrn." You are already registered.";
				header("Location:form.php");
			}
			elseif($row_count2 > 0)
						{
							$_SESSION['message']=" Dear, ". $lrn." You are already registered.";
							header("Location:form.php");
						}
			elseif($row_count3 > 0)
						{
							$_SESSION['message']=" Dear, ". $lrn." You are already registered.";
							header("Location:form.php");
						}
			elseif($row_count3 > 0)
						{
							$_SESSION['message']=" Dear, ". $lrn." You are already registered.";
							header("Location:form.php");
						}
			elseif($row_count4 > 0)
						{
							$_SESSION['message']=" Dear, ". $lrn." You are already registered.";
							header("Location:form.php");
						}
			elseif($row_count5 > 0)
						{
							$_SESSION['message']=" Dear, ". $lrn." You are already registered.";
							header("Location:form.php");
						}
			elseif($row_count6 > 0)
						{
							$_SESSION['message']=" Dear, ". $lrn." You are already registered.";
							header("Location:form.php");
						}
			elseif($row_count7 > 0)
						{
							$_SESSION['message']=" Dear, ". $lrn." You are already registered.";
							header("Location:form.php");
						}
			elseif($row_count8 > 0)
						{
							$_SESSION['message']=" Dear, ". $lrn." You are already registered.";
							header("Location:form.php");
						}
      else{
        $sql= "INSERT INTO stem (`lrn`,`firstname`, `lastname`, `middlename`, `date_of_birth`, `Gender`, `school`, `section`, `strand`) VALUES
        ('$lrn','$first', '$last', '$middle', '$dob', '$sex', '$school', '$section', '$strand')";
				if(mysqli_query($conn,$sql))
				{
					$_SESSION['message']=" Dear, ". $first." your are registered.";
					header("Location:form.php");
				}
			}

}
?>
