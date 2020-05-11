<?php
	require('conn.php');

	if (isset($_GET['hummsid'])) {
		$student_id=$_GET['hummsid'];
		$sql="SELECT * FROM humms WHERE hummsid=$student_id";
		$result=mysqli_query($conn,$sql);
		$row=mysqli_fetch_assoc($result);
		?>
		<style type="text/css">
			form input {
			    width: 528px;
			    height: 40px;
			    font-size: 21px;
			    padding-left: 15px;
			}
		</style>
		<b style="margin-left: 400px; font-size: 30px;">Student data Update Form</b> @admin
		<form style="margin-left: 400px; width: 250px;" action="editconn.php" method="POST">
			<input type="hidden" name="hummsid" value=<?=$student_id?>><br/>
      LRN:<input required type="text" name="edit_lrn" value=<?=$row['lrn'];?>><br/>
			Firstname:<input required type="text" name="edit_firstname" value=<?=$row['firstname'];?>><br/>
			Lastname:<input required type="text" name="edit_lastname" value=<?=$row['lastname'];?>><br/>
		  Middlename:<input required type="text" name="edit_middlename" value=<?=$row['middlename'];?>><br/>
			Date of Birth:<input required type="date" name="edit_dob" value=<?=$row['date_of_birth'];?>><br/>
			Gender:<input required type="text" name="edit_gender" value=<?=$row['Gender'];?>><br/>
			Last School Attended:<input required type="text" name="edit_school" value=<?=$row['school'];?>><br/>
			Section:<input required type="text" name="edit_section" value=<?=$row['section'];?>><br/>
			Strand:<input required type="text" name="course" value=<?=$row['strand'];?>><br/>
			<input style="width: auto; margin-top: 10px;" type="submit" name="submit" value="Update">
		</form>
    <?php
  	}


  	elseif (isset($_GET['abmid'])) {
  		$student_id=$_GET['abmid'];
  		$sql="SELECT * FROM abm WHERE abmid=$student_id";
  		$result=mysqli_query($conn,$sql);
  		$row=mysqli_fetch_assoc($result);
  		?>
  		<style type="text/css">
  			form input {
  			    width: 528px;
  			    height: 40px;
  			    font-size: 21px;
  			    padding-left: 15px;
  			}
  		</style>
  		<b style="margin-left: 400px; font-size: 30px;">Student data update Form</b> @admin
  		<form style="margin-left: 400px; width: 250px;" action="editconn.php" method="POST">
        <input type="hidden" name="abmid" value=<?=$student_id?>><br/>
        LRN:<input required type="text" name="edit_lrn" value=<?=$row['lrn'];?>><br/>
        Firstname:<input required type="text" name="edit_firstname" value=<?=$row['firstname'];?>><br/>
        Lastname:<input required type="text" name="edit_lastname" value=<?=$row['lastname'];?>><br/>
        Middlename:<input required type="text" name="edit_middlename" value=<?=$row['middlename'];?>><br/>
        Date of Birth:<input required type="date" name="edit_dob" value=<?=$row['date_of_birth'];?>><br/>
        Gender:<input required type="text" name="edit_gender" value=<?=$row['Gender'];?>><br/>
        Last School Attended:<input required type="text" name="edit_school" value=<?=$row['school'];?>><br/>
        Section:<input required type="text" name="edit_section" value=<?=$row['section'];?>><br/>
        Strand:<input required type="text" name="course" value=<?=$row['strand'];?>><br/>
        <input style="width: auto; margin-top: 10px;" type="submit" name="submit" value="Update">
  		</form>
      <?php
      }


      elseif (isset($_GET['stemid'])) {
        $student_id=$_GET['stemid'];
        $sql="SELECT * FROM stem WHERE stemid=$student_id";
        $result=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($result);
        ?>
        <style type="text/css">
          form input {
              width: 528px;
              height: 40px;
              font-size: 21px;
              padding-left: 15px;
          }
        </style>
        <b style="margin-left: 400px; font-size: 30px;">Student data update Form</b> @admin
        <form style="margin-left: 400px; width: 250px;" action="editconn.php" method="POST">
          <input type="hidden" name="stemid" value=<?=$student_id?>><br/>
          LRN:<input required type="text" name="edit_lrn" value=<?=$row['lrn'];?>><br/>
          Firstname:<input required type="text" name="edit_firstname" value=<?=$row['firstname'];?>><br/>
          Lastname:<input required type="text" name="edit_lastname" value=<?=$row['lastname'];?>><br/>
          Middlename:<input required type="text" name="edit_middlename" value=<?=$row['middlename'];?>><br/>
          Date of Birth:<input required type="date" name="edit_dob" value=<?=$row['date_of_birth'];?>><br/>
          Gender:<input required type="text" name="edit_gender" value=<?=$row['gender'];?>><br/>
          Last School Attended:<input required type="text" name="edit_school" value=<?=$row['school'];?>><br/>
          Section:<input required type="text" name="edit_section" value=<?=$row['section'];?>><br/>
          Strand:<input required type="text" name="course" value=<?=$row['strand'];?>><br/>
          <input style="width: auto; margin-top: 10px;" type="submit" name="submit" value="Update">
        </form>
        <?php
        }


        elseif (isset($_GET['progid'])) {
          $student_id=$_GET['progid'];
          $sql="SELECT * FROM ictprogramming WHERE progid=$student_id";
          $result=mysqli_query($conn,$sql);
          $row=mysqli_fetch_assoc($result);
          ?>
          <style type="text/css">
            form input {
                width: 528px;
                height: 40px;
                font-size: 21px;
                padding-left: 15px;
            }
          </style>
          <b style="margin-left: 400px; font-size: 30px;">Student data update Form</b> @admin
          <form style="margin-left: 400px; width: 250px;" action="editconn.php" method="POST">
            <input type="hidden" name="progid" value=<?=$student_id?>><br/>
            LRN:<input required type="text" name="edit_lrn" value=<?=$row['lrn'];?>><br/>
            Firstname:<input required type="text" name="edit_firstname" value=<?=$row['firstname'];?>><br/>
            Lastname:<input required type="text" name="edit_lastname" value=<?=$row['lastname'];?>><br/>
            Middlename:<input required type="text" name="edit_middlename" value=<?=$row['middlename'];?>><br/>
            Date of Birth:<input required type="date" name="edit_dob" value=<?=$row['date_of_birth'];?>><br/>
            Gender:<input required type="text" name="edit_gender" value=<?=$row['Gender'];?>><br/>
            Last School Attended:<input required type="text" name="edit_school" value=<?=$row['school'];?>><br/>
            Section:<input required type="text" name="edit_section" value=<?=$row['section'];?>><br/>
            Strand:<input required type="text" name="course" value=<?=$row['strand'];?>><br/>
            <input style="width: auto; margin-top: 10px;" type="submit" name="submit" value="Update">
          </form>
          <?php
          }


          elseif (isset($_GET['cssid'])) {
            $student_id=$_GET['cssid'];
            $sql="SELECT * FROM ictcss WHERE cssid=$student_id";
            $result=mysqli_query($conn,$sql);
            $row=mysqli_fetch_assoc($result);
            ?>
            <style type="text/css">
              form input {
                  width: 528px;
                  height: 40px;
                  font-size: 21px;
                  padding-left: 15px;
              }
            </style>
            <b style="margin-left: 400px; font-size: 30px;">Student data update Form</b> @admin
            <form style="margin-left: 400px; width: 250px;" action="editconn.php" method="POST">
              <input type="hidden" name="cssid" value=<?=$student_id?>><br/>
              LRN:<input required type="text" name="edit_lrn" value=<?=$row['lrn'];?>><br/>
              Firstname:<input required type="text" name="edit_firstname" value=<?=$row['firstname'];?>><br/>
              Lastname:<input required type="text" name="edit_lastname" value=<?=$row['lastname'];?>><br/>
              Middlename:<input required type="text" name="edit_middlename" value=<?=$row['middlename'];?>><br/>
              Date of Birth:<input required type="date" name="edit_dob" value=<?=$row['date_of_birth'];?>><br/>
              Gender:<input required type="text" name="edit_gender" value=<?=$row['Gender'];?>><br/>
              Last School Attended:<input required type="text" name="edit_school" value=<?=$row['school'];?>><br/>
              Section:<input required type="text" name="edit_section" value=<?=$row['section'];?>><br/>
              Strand:<input required type="text" name="course" value=<?=$row['strand'];?>><br/>
              <input style="width: auto; margin-top: 10px;" type="submit" name="submit" value="Update">
            </form>
            <?php
            }


            elseif (isset($_GET['cookeryid'])) {
              $student_id=$_GET['cookeryid'];
              $sql="SELECT * FROM cookery WHERE cookeryid=$student_id";
              $result=mysqli_query($conn,$sql);
              $row=mysqli_fetch_assoc($result);
              ?>
              <style type="text/css">
                form input {
                    width: 528px;
                    height: 40px;
                    font-size: 21px;
                    padding-left: 15px;
                }
              </style>
              <b style="margin-left: 400px; font-size: 30px;">Student data update Form</b> @admin
              <form style="margin-left: 400px; width: 250px;" action="editconn.php" method="POST">
                <input type="hidden" name="cookeryid" value=<?=$student_id?>><br/>
                LRN:<input required type="text" name="edit_lrn" value=<?=$row['lrn'];?>><br/>
                Firstname:<input required type="text" name="edit_firstname" value=<?=$row['firstname'];?>><br/>
                Lastname:<input required type="text" name="edit_lastname" value=<?=$row['lastname'];?>><br/>
                Middlename:<input required type="text" name="edit_middlename" value=<?=$row['middlename'];?>><br/>
                Date of Birth:<input required type="date" name="edit_dob" value=<?=$row['date_of_birth'];?>><br/>
                Gender:<input required type="text" name="edit_gender" value=<?=$row['Gender'];?>><br/>
                Last School Attended:<input required type="text" name="edit_school" value=<?=$row['school'];?>><br/>
                Section:<input required type="text" name="edit_section" value=<?=$row['section'];?>><br/>
                Strand:<input required type="text" name="course" value=<?=$row['strand'];?>><br/>
                <input style="width: auto; margin-top: 10px;" type="submit" name="submit" value="Update">
              </form>
              <?php
              }


              elseif (isset($_GET['dressmakingid'])) {
                $student_id=$_GET['dressmakingid'];
                $sql="SELECT * FROM dressmaking WHERE dressmakingid=$student_id";
                $result=mysqli_query($conn,$sql);
                $row=mysqli_fetch_assoc($result);
                ?>
                <style type="text/css">
                  form input {
                      width: 528px;
                      height: 40px;
                      font-size: 21px;
                      padding-left: 15px;
                  }
                </style>
                <b style="margin-left: 400px; font-size: 30px;">Student data update Form</b> @admin
                <form style="margin-left: 400px; width: 250px;" action="editconn.php" method="POST">
                  <input type="hidden" name="dressmakingid" value=<?=$student_id?>><br/>
                  LRN:<input required type="text" name="edit_lrn" value=<?=$row['lrn'];?>><br/>
                  Firstname:<input required type="text" name="edit_firstname" value=<?=$row['firstname'];?>><br/>
                  Lastname:<input required type="text" name="edit_lastname" value=<?=$row['lastname'];?>><br/>
                  Middlename:<input required type="text" name="edit_middlename" value=<?=$row['middlename'];?>><br/>
                  Date of Birth:<input required type="date" name="edit_dob" value=<?=$row['date_of_birth'];?>><br/>
                  Gender:<input required type="text" name="edit_gender" value=<?=$row['Gender'];?>><br/>
                  Last School Attended:<input required type="text" name="edit_school" value=<?=$row['school'];?>><br/>
                  Section:<input required type="text" name="edit_section" value=<?=$row['section'];?>><br/>
                  Strand:<input required type="text" name="course" value=<?=$row['strand'];?>><br/>
                  <input style="width: auto; margin-top: 10px;" type="submit" name="submit" value="Update">
                </form>
                <?php
                }


                elseif (isset($_GET['eimid'])) {
                  $student_id=$_GET['eimid'];
                  $sql="SELECT * FROM eim WHERE eimid=$student_id";
                  $result=mysqli_query($conn,$sql);
                  $row=mysqli_fetch_assoc($result);
                  ?>
                  <style type="text/css">
                    form input {
                        width: 528px;
                        height: 40px;
                        font-size: 21px;
                        padding-left: 15px;
                    }
                  </style>
                  <b style="margin-left: 400px; font-size: 30px;">Student data update Form</b> @admin
                  <form style="margin-left: 400px; width: 250px;" action="editconn.php" method="POST">
                    <input type="hidden" name="eimid" value=<?=$student_id?>><br/>
                    LRN:<input required type="text" name="edit_lrn" value=<?=$row['lrn'];?>><br/>
                    Firstname:<input required type="text" name="edit_firstname" value=<?=$row['firstname'];?>><br/>
                    Lastname:<input required type="text" name="edit_lastname" value=<?=$row['lastname'];?>><br/>
                    Middlename:<input required type="text" name="edit_middlename" value=<?=$row['middlename'];?>><br/>
                    Date of Birth:<input required type="date" name="edit_dob" value=<?=$row['date_of_birth'];?>><br/>
                    Gender:<input required type="text" name="edit_gender" value=<?=$row['Gender'];?>><br/>
                    Last School Attended:<input required type="text" name="edit_school" value=<?=$row['school'];?>><br/>
                    Section:<input required type="text" name="edit_section" value=<?=$row['section'];?>><br/>
                    Strand:<input required type="text" name="course" value=<?=$row['strand'];?>><br/>
                    <input style="width: auto; margin-top: 10px;" type="submit" name="submit" value="Update">
                  </form>
                <?php
                }
