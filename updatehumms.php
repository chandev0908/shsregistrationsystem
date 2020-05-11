<?php
include('conn.php');
 ?>
<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
      <?php
       $sql="SELECT * FROM humms";
       $records= mysqli_query($conn, $sql);
       ?>
       <table>
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
           while($row=mysqli_fetch_array($records))
           {
             echo"<tr><form action=update.php method=post>";
             echo"<td><input type=text name=edit_lrn value='".$row['lrn']."'></td>";
             echo"<td><input type=text name=edit_firstname value='".$row['firstname']."'></td>";
             echo"<td><input type=text name=edit_lastname value='".$row['lastname']."'></td>";
             echo"<td><input type=text name=edit_middlename value='".$row['middlename']."'></td>";
             echo"<td><input type=text name=edit_dateofbirth value='".$row['date_of_birth']."'></td>";
             echo"<td><input type=text name=edit_gender value='".$row['Gender']."'></td>";
             echo"<td><input type=text name=edit_school value='".$row['school']."'></td>";
             echo"<td><input type=text name=edit_section value='".$row['section']."'></td>";
             echo"<td><input type=text name=edit_strand value='".$row['strand']."'></td>";
             echo"<input type=hidden name=id value'".$row['studentid']."'>";
             echo"<td><input type=submit></td>";
             echo "</form></tr>";
           }
            ?>
    </body>
    </html>
