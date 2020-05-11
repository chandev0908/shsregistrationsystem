<?php

 function fetch_data()
 {
   $output = '';
   include('./conn.php');
      $sql = "SELECT * FROM ictcss ORDER BY Gender DESC";
      $result = mysqli_query($conn, $sql);
      while($row = mysqli_fetch_array($result))
      {
      $output .= '<tr>
                          <td>'.$row["lrn"].'</td>
                          <td>'.$row["firstname"].'</td>
                          <td>'.$row["lastname"].'</td>
                          <td>'.$row["middlename"].'</td>
                          <td>'.$row["date_of_birth"].'</td>
                          <td>'.$row["Gender"].'</td>
                          <td>'.$row["school"].'</td>
                          <td>'.$row["section"].'</td>
                          <td>'.$row["strand"].'</td>
                     </tr>';
      }
      return $output;
 }
 if(isset($_POST["generate_pdf"]))
 {
      require_once('./tcpdf/tcpdf.php');
      $obj_pdf = new TCPDF('L', PDF_UNIT, 'A4', true, 'UTF-8', false);
      $obj_pdf->SetCreator(PDF_CREATOR);
      $obj_pdf->SetTitle("ICT-CSSLIST");
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
      $obj_pdf->SetDefaultMonospacedFont('helvetica');
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);
      $obj_pdf->setPrintHeader(false);
      $obj_pdf->setPrintFooter(false);
      $obj_pdf->SetAutoPageBreak(TRUE, 10);
      $obj_pdf->SetFont('helvetica', '', 11);
      $obj_pdf->AddPage();
      $content = '';
      $content .= '
      <h4 align="center">ICT-CSS STUDENT LIST</h4><br />
      <table border="1" cellspacing="0" cellpadding="3">
           <tr>
           <th width="12%">LRN</th>
           <th width="12%">FIRSTNAME</th>
           <th width="12%">LASTNAME</th>
           <th width="12%">MIDDLENAME</th>
           <th width="12%">DATE OF BIRTH</th>
           <th width="7%">SEX</th>
           <th width="15%">LAST ATTENDED SCHOOL</th>
           <th width="10%">LAST SECTION</th>
           <th width="8%">STRAND</th>
           </tr>
      ';
      $content .= fetch_data();
      $content .= '</table>';
      $obj_pdf->writeHTML($content);
      $obj_pdf->Output('file.pdf', 'I');
 }
 ?>
 <!DOCTYPE html>
 <html>
      <head>
           <title>SoftAOX | Generate HTML Table Data To PDF From MySQL Database Using TCPDF In PHP</title>
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
      </head>
      <body>
           <br />
           <div class="container">
                <h4 align="center"> ICT-CSS LIST PDF</h4><br />
                <div class="table-responsive">
                	<div class="col-md-12" align="right">
                     <form method="post">
                          <input type="submit" name="generate_pdf" class="btn btn-success" value="Generate PDF" />
                     </form>
                     </div>
                     <br/>
                     <br/>
                     <table class="table table-bordered">
                          <tr>
                               <th width="20%">LRN</th>
                               <th width="20%">FIRSTNAME</th>
                               <th width="20%">LASTNAME</th>
                               <th width="20%">MIDDLENAME</th>
                               <th width="15%">DATE OF BIRTH</th>
                               <th width="10%">SEX</th>
                               <th width="50%">LAST ATTENDED SCHOOL</th>
                               <th width="50%">LAST SECTION</th>
                               <th width="25%">STRAND</th>
                          </tr>
                     <?php
                     echo fetch_data();
                     ?>
                     </table>
                </div>
           </div>
      </body>
</html>
