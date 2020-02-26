<!DOCTYPE html>
<html lang ="en">
<head>
  <meta http-equiv="Content-Type content="text/html; charset="=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="feedback_form.css">
  <script src="feedback_form.js">
  </script>
  <title>
	Feedback Form Submitted
</title>
</head>

<body>
	<div>
	<h1 style="padding-right:  10%">Student Feedback Form (2019-20)</h1>
<div class="row">
	<div class="column1"><br>
		Department:
		<br><br>
		Subject Code:
	</div>
	<div class="column2"><br><?php echo $_POST["Department"]; ?>
		<br><br>
		<?php echo $_POST["Subject_Code"]; ?>
	</div>

	<div class="column1"><br>
		Course:
		<br><br>
		Subject Name:
	</div>
	<div class="column2"><br>
		<?php echo $_POST["Course"]; ?>
		<br><br>
		<?php echo $_POST["Subject_Name"]; ?>
	</div>
	<div class="column1"><br>
		Semester:
		<br><br>
		Prof. Name:
	</div>
	<div class="column2"><br>
		<?php echo $_POST["Semester"]; ?>
		<br><br>
		<?php echo $_POST["Prof_Name"]; ?>
	</div>
</div>
<br>

<table style="width:100%; ">
  <tr >
    <th>S No</th>
    <th>Parameters</th>
    <th style="text-align: left;">Out of 5</th>
  </tr>
    <tr><td>1</td><td>Ability to Explain the Concepts and Principle of the Subject</td>
		<td><?php echo $_POST["1"]; ?></td></tr>
    <tr><td>2</td><td>Knowledge expertice and confidence of a teacher while teaching</td>
		<td><?php echo $_POST["2"]; ?></td></tr>
    <tr><td>3</td><td>Ability to clear doubts in classroom and outside</td>
		<td><?php echo $_POST["3"]; ?></td></tr>
    <tr><td>4</td><td>Ability to conclude concepts with examples</td>
		<td><?php echo $_POST["4"]; ?></td></tr>
    <tr><td>5</td><td>Communication skills and clearity</td>
		<td><?php echo $_POST["5"]; ?></td></tr>
    <tr><td>6</td><td>Punctualioty and regularity ain class</td>
		<td><?php echo $_POST["6"]; ?></td></tr>
    <tr><td>7</td><td>Interaction and Discussion with students</td>
		<td><?php echo $_POST["7"]; ?></td></tr>
    <tr><td>8</td><td>Attitude towards students</td>
		<td><?php echo $_POST["8"]; ?></td></tr>
    <tr><td>9</td><td>Monitoring students and craeting interest in subject</td>
		<td><?php echo $_POST["9"]; ?></td></tr>
    <tr><td>10</td><td>Timely evaluation of internal assessment</td>
		<td><?php echo $_POST["10"]; ?></td></tr>
	<tr><td> </td><td>Out of 100</td>
		<td>
			<?php 
				$int = (int)$_POST["1"]+(int)$_POST["2"]+(int)$_POST["3"]+(int)$_POST["4"]+
				(int)$_POST["5"]+(int)$_POST["6"]+(int)$_POST["7"]+(int)$_POST["8"]+
				(int)$_POST["9"]+(int)$_POST["10"];
				echo $int;
		?>
		</td></tr>

	</table>
	<br>
<div align="center" style="line-height: 25px">
	Review and Comments for overall improvements<br>
	<?php echo $_POST["comments"]; ?>
	<br><br>




<?php
$servername = "The-Naughty-Guy";
$username = "root";
$password = "sagar12345";
$dbname = "feed_back";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$department=$_POST["Department"];
$course= $_POST["Course"];
$semester= $_POST["Semester"];
$subject_code= $_POST["Subject_Code"];
$subject_name=$_POST["Subject_Name"];
$prof_name= $_POST["Prof_Name"];

$A1= $_POST["1"];
$A2=$_POST["2"];
$A3=$_POST["3"];
$A4=$_POST["4"];
$A5=$_POST["5"];
$A6=$_POST["6"];
$A7=$_POST["7"];
$A8=$_POST["8"];
$A9=$_POST["9"];
$A10=$_POST["10"];

$sql1 = "INSERT INTO details (department, course, semester, subject_code, subject_name, prof_name)
VALUES ($department, $course, $semester, $subject_code, $subject_name, $prof_name)";

$sql2 = "INSERT INTO feedback (subject_code, prof_name, A1,A2,A3,A4,A5,A6,A7,A8,A9,A10)
VALUES ($subject_code, $prof_name, $A1,$A3,$A4,$A5,$A6,$A7,$A8,$A9,$A10)";

if ($conn->query($sql) === TRUE) {
    echo "Submitted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

	</div>
	</div>
</body>
</html>
