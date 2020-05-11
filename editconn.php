<?php
require('conn.php');


if (isset($_POST['hummsid'])) {

  $lrn = $_POST['edit_lrn'];
  $first = $_POST['edit_firstname'];
  $last = $_POST['edit_lastname'];
  $middle = $_POST['edit_middlename'];
  $dob = $_POST['edit_dob'];
  $sex = $_POST['edit_gender'];
  $school = $_POST['edit_school'];
  $section = $_POST['edit_section'];
  $strand = $_POST['course'];
  $student_id=$_POST['hummsid'];

    $sql="UPDATE humms SET lrn='$lrn',firstname='$first',lastname='$last',middlename='$middle',date_of_birth='$dob',Gender='$sex',school='$school',section='$section',strand='$strand' WHERE hummsid=$student_id";
      if(mysqli_query($conn,$sql)){
        header('location:adminhumms.php');
      }
      else{
        mysqli_error($conn);
      }

}
elseif (isset($_POST['abmid'])) {

  $lrn = $_POST['edit_lrn'];
  $first = $_POST['edit_firstname'];
  $last = $_POST['edit_lastname'];
  $middle = $_POST['edit_middlename'];
  $dob = $_POST['edit_dob'];
  $sex = $_POST['edit_gender'];
  $school = $_POST['edit_school'];
  $section = $_POST['edit_section'];
  $strand = $_POST['course'];
  $student_id=$_POST['abmid'];

    $sql="UPDATE abm SET lrn='$lrn',firstname='$first',lastname='$last',middlename='$middle',date_of_birth='$dob',Gender='$sex',school='$school',section='$section',strand='$strand' WHERE abmid=$student_id";
      if(mysqli_query($conn,$sql)){
        header('location:adminabm.php');
      }
      else{
        mysqli_error($conn);
      }

}
elseif (isset($_POST['stemid'])) {

  $lrn = $_POST['edit_lrn'];
  $first = $_POST['edit_firstname'];
  $last = $_POST['edit_lastname'];
  $middle = $_POST['edit_middlename'];
  $dob = $_POST['edit_dob'];
  $sex = $_POST['edit_gender'];
  $school = $_POST['edit_school'];
  $section = $_POST['edit_section'];
  $strand = $_POST['course'];
  $student_id=$_POST['stemid'];

    $sql="UPDATE stem SET lrn='$lrn',firstname='$first',lastname='$last',middlename='$middle',date_of_birth='$dob',Gender='$sex',school='$school',section='$section',strand='$strand' WHERE stemid=$student_id";
      if(mysqli_query($conn,$sql)){
        header('location:adminstem.php');
      }
      else{
        mysqli_error($conn);
      }

}
elseif (isset($_POST['progid'])) {

  $lrn = $_POST['edit_lrn'];
  $first = $_POST['edit_firstname'];
  $last = $_POST['edit_lastname'];
  $middle = $_POST['edit_middlename'];
  $dob = $_POST['edit_dob'];
  $sex = $_POST['edit_gender'];
  $school = $_POST['edit_school'];
  $section = $_POST['edit_section'];
  $strand = $_POST['course'];
  $student_id=$_POST['progid'];

    $sql="UPDATE ictprogramming SET lrn='$lrn',firstname='$first',lastname='$last',middlename='$middle',date_of_birth='$dob',Gender='$sex',school='$school',section='$section',strand='$strand' WHERE progid=$student_id";
      if(mysqli_query($conn,$sql)){
        header('location:adminprogramming.php');
      }
      else{
        mysqli_error($conn);
      }

}
elseif (isset($_POST['cssid'])) {

  $lrn = $_POST['edit_lrn'];
  $first = $_POST['edit_firstname'];
  $last = $_POST['edit_lastname'];
  $middle = $_POST['edit_middlename'];
  $dob = $_POST['edit_dob'];
  $sex = $_POST['edit_gender'];
  $school = $_POST['edit_school'];
  $section = $_POST['edit_section'];
  $strand = $_POST['course'];
  $student_id=$_POST['cssid'];

    $sql="UPDATE ictcss SET lrn='$lrn',firstname='$first',lastname='$last',middlename='$middle',date_of_birth='$dob',Gender='$sex',school='$school',section='$section',strand='$strand' WHERE cssid=$student_id";
      if(mysqli_query($conn,$sql)){
        header('location:admincss.php');
      }
      else{
        mysqli_error($conn);
      }

}
elseif (isset($_POST['cookeryid'])) {

  $lrn = $_POST['edit_lrn'];
  $first = $_POST['edit_firstname'];
  $last = $_POST['edit_lastname'];
  $middle = $_POST['edit_middlename'];
  $dob = $_POST['edit_dob'];
  $sex = $_POST['edit_gender'];
  $school = $_POST['edit_school'];
  $section = $_POST['edit_section'];
  $strand = $_POST['course'];
  $student_id=$_POST['cookeryid'];

    $sql="UPDATE cookery SET lrn='$lrn',firstname='$first',lastname='$last',middlename='$middle',date_of_birth='$dob',Gender='$sex',school='$school',section='$section',strand='$strand' WHERE cookeryid=$student_id";
      if(mysqli_query($conn,$sql)){
        header('location:admincookery.php');
      }
      else{
        mysqli_error($conn);
      }

}
elseif (isset($_POST['dressmakingid'])) {

  $lrn = $_POST['edit_lrn'];
  $first = $_POST['edit_firstname'];
  $last = $_POST['edit_lastname'];
  $middle = $_POST['edit_middlename'];
  $dob = $_POST['edit_dob'];
  $sex = $_POST['edit_gender'];
  $school = $_POST['edit_school'];
  $section = $_POST['edit_section'];
  $strand = $_POST['course'];
  $student_id=$_POST['dressmakingid'];

    $sql="UPDATE dressmaking SET lrn='$lrn',firstname='$first',lastname='$last',middlename='$middle',date_of_birth='$dob',Gender='$sex',school='$school',section='$section',strand='$strand' WHERE dressmakingid=$student_id";
      if(mysqli_query($conn,$sql)){
        header('location:admindressmaking.php');
      }
      else{
        mysqli_error($conn);
      }

}
elseif (isset($_POST['eimid'])) {

  $lrn = $_POST['edit_lrn'];
  $first = $_POST['edit_firstname'];
  $last = $_POST['edit_lastname'];
  $middle = $_POST['edit_middlename'];
  $dob = $_POST['edit_dob'];
  $sex = $_POST['edit_gender'];
  $school = $_POST['edit_school'];
  $section = $_POST['edit_section'];
  $strand = $_POST['course'];
  $student_id=$_POST['eimid'];

    $sql="UPDATE eim SET lrn='$lrn',firstname='$first',lastname='$last',middlename='$middle',date_of_birth='$dob',Gender='$sex',school='$school',section='$section',strand='$strand' WHERE eimid=$student_id";
      if(mysqli_query($conn,$sql)){
        header('location:admineim.php');
      }
      else{
        mysqli_error($conn);
      }

}
elseif (isset($_GET['hummsid'])) {
		$student_id=$_GET['hummsid'];

		$sql="DELETE FROM humms WHERE hummsid=$student_id";
			if(mysqli_query($conn,$sql)){
				header('location:adminhumms.php');
			}
			else{
				mysqli_error($conn);
			}
	}
elseif (isset($_GET['abmid'])) {
  		$student_id=$_GET['abmid'];

  		$sql="DELETE FROM abm WHERE abmid=$student_id";
  			if(mysqli_query($conn,$sql)){
  				header('location:adminabm.php');
  			}
  			else{
  				mysqli_error($conn);
  			}
  	}
elseif (isset($_GET['stemid'])) {
      		$student_id=$_GET['stemid'];

      		$sql="DELETE FROM stem WHERE stemid=$student_id";
      			if(mysqli_query($conn,$sql)){
      				header('location:adminstem.php');
      			}
      			else{
      				mysqli_error($conn);
      			}
      	}
elseif (isset($_GET['progid'])) {
    	$student_id=$_GET['progid'];

      		$sql="DELETE FROM ictprogramming WHERE progid=$student_id";
      		if(mysqli_query($conn,$sql)){
  				header('location:adminprogramming.php');
    			}
            			else{
      				mysqli_error($conn);
      			}
          	}
            elseif (isset($_GET['cssid'])) {
                	$student_id=$_GET['cssid'];

                  		$sql="DELETE FROM ictcss WHERE cssid=$student_id";
                  		if(mysqli_query($conn,$sql)){
              				header('location:admincss.php');
                			}
                        			else{
                  				mysqli_error($conn);
                  			}
                      	}
                        elseif (isset($_GET['cookeryid'])) {
                            	$student_id=$_GET['cookeryid'];

                              		$sql="DELETE FROM cookery WHERE cookeryid=$student_id";
                              		if(mysqli_query($conn,$sql)){
                          				header('location:admincookery.php');
                            			}
                                    			else{
                              				mysqli_error($conn);
                              			}
                                  	}
                                    elseif (isset($_GET['dressmakingid'])) {
                                        	$student_id=$_GET['dressmakingid'];

                                          		$sql="DELETE FROM dressmaking WHERE dressmakingid=$student_id";
                                          		if(mysqli_query($conn,$sql)){
                                      				header('location:admindressmaking.php');
                                        			}
                                                			else{
                                          				mysqli_error($conn);
                                          			}
                                              	}
                                                elseif (isset($_GET['eimid'])) {
                                                    	$student_id=$_GET['eimid'];

                                                      		$sql="DELETE FROM eim WHERE eimid=$student_id";
                                                      		if(mysqli_query($conn,$sql)){
                                                  				header('location:admineim.php');
                                                    			}
                                                            			else{
                                                      				mysqli_error($conn);
                                                      			}
                                                          	}

?>
