<!DOCTYPE html>
<html>
<head>
<style>
body{
  background: #00d2ff; /* fallback for old browsers */
  background: -webkit-linear-gradient(to left, #00d2ff , #928DAB); /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to left, #00d2ff , #928DAB); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}

h1{
  color: navy;
}

input[type=submit]
{
  -moz-box-shadow:inset 0px 1px 0px 0px #97c4fe;
	-webkit-box-shadow:inset 0px 1px 0px 0px #97c4fe;
	box-shadow:inset 0px 1px 0px 0px #97c4fe;
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #3d94f6), color-stop(1, #1e62d0) );
	background:-moz-linear-gradient( center top, #3d94f6 5%, #1e62d0 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#3d94f6', endColorstr='#1e62d0');
	background-color:#3d94f6;
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
	border:1px solid #337fed;
	display:inline-block;
	color:#ffffff;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	font-style:normal;
	height:50px;
	/* line-height:50px;
	width:100px;
  */
	text-decoration:none;
	text-align:center;
	text-shadow:1px 1px 0px #1570cd;

}

</style>

</head>

<body>
  <center>
    <h1> WELCOME TO MESSAGE BOX</h1>

  <br>

<h1> WHICH GROUP DO YOU WANT TO SEND A HELLO TO? </h1>
<br>

<form action="family.php">
<input type="submit" name="submit" value="FAMILY GROUP">
</form>
<br>
<br>

<form action="work.php">
<input type="submit" name="submit" value="WORK GROUP">
</form>
<br>
<br>

<form action="school.php">
<input type="submit" name="submit" value="SCHOOL GROUP">
</form>
<br>
<br>


<br><br><br>
<br>
<form action="third_profile.php">
<input type="submit" name="submit" value="GO BACK TO PROFILE">
</form>
</center>
</body>
</html>
