<!DOCTYPE html>
<body>
<link href="./practiceregform.css" rel="stylesheet">
<form name="try">
<select style="position:relative; top:40px; left:1%; border: 2px solid black; width:300px;" name="acadstracks" onchange="location = this.value;">
<option selected hidden value="">ACADEMIC TRACKS </option>
<option value="./adminhumms.php">HUMMS </option>
<option value="./adminabm.php">ABM</option>
<option value="./adminstem.php">STEM</option>
</select>
<select style="position:relative; top:40px; left:2%; border: 2px solid black; width:300px;"name="tvltracks" onchange="location = this.value;">
<option selected hidden value="">TVL TRACKS </option>
<option value="./adminprogramming.php">ICT-PROGRAMMING</option>
<option value="./admincss.php">ICT-CSS</option>
<option value="./admincookery.php">COOKERY</option>
<option value="./admindressmaking.php">DRESSMAKING</option>
<option value="./admineim.php">EIM</option>
</select>
</form>
<form action="./form.php">
<input value="ADD RECORD" id="submit" style="position:relative; left:50%;  top:-16px; width: 15%; height: 50px; background-color: #1c26f6; font-weight: bold; color: white;" type="submit"></div>
</form>
</html>
