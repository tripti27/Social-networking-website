<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
     border: 1px solid black;
}
h1{
color:Brown;
width:100%;
font-size:40px;
height:14px;}

body {
background: #A52A2A; /* fallback for old browsers */
background: -webkit-linear-gradient(to left, #00d2ff , #928DAB); /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to left, #00d2ff , #928DAB); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}

input[type=submit]{

	background-color:#A52A2A;
	-webkit-border-top-left-radius:20px;
	-moz-border-radius-topleft:20px;
	border-top-left-radius:20px;
	-webkit-border-top-right-radius:20px;
	-moz-border-radius-topright:20px;
	border-top-right-radius:20px;
	-webkit-border-bottom-right-radius:20px;
	-moz-border-radius-bottomright:20px;
	border-bottom-right-radius:20px;
	-webkit-border-bottom-left-radius:20px;
	-moz-border-radius-bottomleft:20px;
	border-bottom-left-radius:20px;
	text-indent:0;
	border:1px solid #ee1eb5;
	display:inline-block;
	color:#ffffff;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	font-style:normal;
	height:65px;
	line-height:65px;
	width:131px;
	text-decoration:none;
	text-align:center;
	text-shadow:1px 1px 0px #c70067

}

input[name=submit1]{
	background-color:#A52A2A;
	color:#ffffff;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	font-style:normal;
	height:40px;
	line-height:40px;
	width:80px;
	text-decoration:none;
	text-align:center;
	text-shadow:1px 1px 0px #c70067
}

</style>
</head>
<body>
<center>
<h1>FRIEND SUGGESTIONS</h1>
<br><br>

<?php
$con=mysqli_connect("localhost","root","12345","mydatabase");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result=mysqli_query($con,"SELECT * FROM suggestion WHERE movie='serendipity' OR city='bangalore'");


echo "<table border='1'>
<tr>

<th><h2>  NAME  </h2></th>
<th><h2>  CITY  </h2></th>
<th><h2>  ACTOR  </h2></th>
<th><h2>  AGE  </h2></th>
<th><h2>  MOVIE  </h2></th>
<th><h2> ADD</h2></th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td><h3>" . $row['name'] . "</td></h3>";
echo "<td><h3>" . $row['city'] . "</td></h3>";
echo "<td><h3>" . $row['actor'] . "</td></h3>";
echo "<td><h3>" . $row['age'] . "</td></h3>";
echo "<td><h3>" . $row['movie'] . "</td></h3>";
echo "<form action='reqsent.php'>";
echo "<td><input type='submit' name='submit1' value='ADD'></td>";
echo "</form>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?> 

<br>


<center>
<br><br>
<tr>
<form action="third_profile.php">
<td><input type="submit" name="button1" value="GO TO PROFILE">
</td>
</form>
</tr>
</center>
</body>
</html>