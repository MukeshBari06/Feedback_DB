<!DOCTYPE html>
<html lang ="en">
<head>
  <meta http-equiv="Content-Type content="text/html; charset="=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="feedback_form.css">
  <script src="feedback_form.js">
  </script>
  <title>
Feedback_form
</title>
</head>


<body>
	<div>
	<form action="feedbacksubmitted.php" method="post">	
	<h1 style="padding-right:  10%">Student Feedback Form (2019-20)</h1>
<div class="row">
	<div class="column1"><br>
		<label for="Department">Department:</label>
		<br><br>
		<label for="Subject_Code">Subject Code:</label>
	</div>
	<div class="column2"><br>
		<Select id="dropdown" name="Department" required>
			<option value="Select">Select</option>
  			<option value="CSE">CSE</option>
  			<option value="ECE">ECE</option>
  			<option value="Mech">Mech</option>
  			<option value="Elec">Elec</option>
  			<option value="MSME">MSME</option>
  			<option value="Civil">Civil</option>
		</Select>
		<br><br>
		<Select id="dropdown" name="Subject_Code" required>
			<option value="Select">Select</option>
  			<option value="110">CSE110</option>
  			<option value="111">CSE111</option>
  			<option value="120">CSE120</option>
  			<option value="130">CSE130</option>
  			<option value="140">CSE140</option>
  			<option value="510">CSE510</option>
		</Select>
	</div>

	<div class="column1"><br>
		<label for="Course">Course:</label>
		<br><br>
		<label for="Subject_Name" >Subject Name:</label>
	</div>
	<div class="column2"><br>
			<Select id="dropdown" name="Course" required>
			<option value="Select">Select</option>
  			<option value="B Tech">B Tech</option>
  			<option value="M Tech">M Tech</option>
  			<option value="PhD">PhD</option>
		</Select>
		<br><br>
		<Select id="dropdown" name="Subject_Name" required>
			<option value="Select">Select</option>
  			<option value="ADA">ADA</option>
  			<option value="TOC">TOC</option>
  			<option value="CAD">CAD</option>
  			<option value="SE">SE</option>
  			<option value="DBMS">DBMS</option>
  			<option value="PQ">PQ</option>
		</Select>
	</div>
	<div class="column1"><br>
		<label for="Semester">Semester:</label>
		<br><br>
		<label for="Semester">Prof. Name:</label>
	</div>
	<div class="column2"><br>
		<Select id="dropdown" name="Semester" required>
			<option value="Select">Select</option>
  			<option value="1">1</option>
  			<option value="2">2</option>
  			<option value="3">3</option>
  			<option value="4">4</option>
  			<option value="5">5</option>
  			<option value="6">6</option>
  			<option value="7">7</option>
  			<option value="8">8</option>
		</Select>
		<br><br>
		<Select id="dropdown" name="Prof_Name" required>
			<option value="0">Select</option>
  			<option value="JTC">JTC</option>
  			<option value="SJ">SJ</option>
  			<option value="VB">VB</option>
  			<option value="GV">GV</option>
  			<option value="MP">MP</option>
  			<option value="NK">NK</option>
  		</Select>
	</div>
</div>
<br>

<table style="width:100%; ">
  <tr >
    <th>S No</th>
    <th>Parameters</th>
    <th><pre> 5  4  3  2  1</pre></th>
  </tr>
    <tr><td>1</td><td>Ability to Explain the Concepts and Principle of the Subject</td>
		<td><input type="radio" id="15" name="1" checked="checked" value="5">
		<input type="radio" id="14" name="1" value="4">
		<input type="radio" id="13" name="1" value="3">
		<input type="radio" id="12" name="1" value="2">
		<input type="radio" id="11" name="1" value="1"></td></tr>
    <tr><td>2</td><td>Knowledge expertice and confidence of a teacher while teaching</td>
		<td><input type="radio" id="25" name="2" checked="checked" value="5">
		<input type="radio" id="24" name="2" value="4">
		<input type="radio" id="23" name="2" value="3">
		<input type="radio" id="22" name="2" value="2">
		<input type="radio" id="21" name="2" value="1"></td></tr>
    <tr><td>3</td><td>Ability to clear doubts in classroom and outside</td>
		<td><input type="radio" id="35" name="3" checked="checked" value="5">
		<input type="radio" id="34" name="3" value="4">
		<input type="radio" id="33" name="3" value="3">
		<input type="radio" id="32" name="3" value="2">
		<input type="radio" id="31" name="3" value="1"></td></tr>
    <tr><td>4</td><td>Ability to conclude concepts with examples</td>
		<td><input type="radio" id="45" name="4" checked="checked" value="5">
		<input type="radio" id="44" name="4" value="4">
		<input type="radio" id="43" name="4" value="3">
		<input type="radio" id="42" name="4" value="2">
		<input type="radio" id="41" name="4" value="1"></td></tr>
    <tr><td>5</td><td>Communication skills and clearity</td>
		<td><input type="radio" id="55" name="5" checked="checked" value="5">
		<input type="radio" id="54" name="5" value="4">
		<input type="radio" id="53" name="5" value="3">
		<input type="radio" id="52" name="5" value="2">
		<input type="radio" id="51" name="5" value="1"></td></tr>
    <tr><td>6</td><td>Punctualioty and regularity ain class</td>
		<td><input type="radio" id="65" name="6" checked="checked" value="5">
		<input type="radio" id="64" name="6" value="4">
		<input type="radio" id="63" name="6" value="3">
		<input type="radio" id="62" name="6" value="2">
		<input type="radio" id="61" name="6" value="1"></td></tr>
    <tr><td>7</td><td>Interaction and Discussion with students</td>
		<td><input type="radio" id="75" name="7" checked="checked" value="5">
		<input type="radio" id="74" name="7" value="4">
		<input type="radio" id="73" name="7" value="3">
		<input type="radio" id="72" name="7" value="2">
		<input type="radio" id="71" name="7" value="1"></td></tr>
    <tr><td>8</td><td>Attitude towards students</td>
		<td><input type="radio" id="85" name="8" checked="checked" value="5">
		<input type="radio" id="84" name="8" value="4">
		<input type="radio" id="83" name="8" value="3">
		<input type="radio" id="82" name="8" value="2">
		<input type="radio" id="81" name="8" value="1"></td></tr>
    <tr><td>9</td><td>Monitoring students and craeting interest in subject</td>
		<td><input type="radio" id="95" name="9" checked="checked" value="5">
		<input type="radio" id="94" name="9" value="4">
		<input type="radio" id="93" name="9" value="3">
		<input type="radio" id="92" name="9" value="2">
		<input type="radio" id="91" name="9" value="1"></td></tr>
    <tr><td>10</td><td>Timely evaluation of internal assessment</td>
		<td><input type="radio" id="105" name="10" checked="checked" value="5">
		<input type="radio" id="104" name="10" value="4">
		<input type="radio" id="103" name="10" value="3">
		<input type="radio" id="102" name="10" value="2">
		<input type="radio" id="101" name="10" value="1"></td>
	</tr>
	</table>
	<br>

	<div align="center">
	Review and Comments for overall improvements<br>
	<input type="textarea" value="No need of any improvement" name="comments" style="height: 70px;  text-align: center;  width: 90%; margin-top: 10px ">
	<br><br>
	<input type="submit" name="submit" value="Submit" 
	style="height: auto; width: auto; margin-top: 10px; " >
	</div>


	</form>
	</div>
</body>
</html>