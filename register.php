<?php
include("connection.php");
error_reporting(0);
 ?>

<html>
<head>

<style type="text/css">
*{
margin 0;
padding 0;
}
body
{
background: url('bg.jpg');
backgroung-position:center;
background-size: cover;
font-family: 'Montserrat',sans-serif;
}
regform
{
width:800px;
background-color:rgb(0,0,0,6);
margin:auto;
color:#000000;
padding:10px 0px 10px 0px;
text-align:center;
border-radius:15px 15px 0px 0px;
}
.main
{
background-color:rgb(0,0,0,0.5);
width:800px;
margin:auto;
}
form
{
padding:10px;
}
#name
{
width:100%;
height:100px;
}
.Enter your Vardhaman email ID
{
margin-left:25px;
margin-top:30px;
width:125px;
color:white;
font-size:18px;
font-weight:700;
}
.Password
{
margin-left:25px;
margin-top:30px;
width:125px;
color:white;
font-size:18px;
font-weight:700;
}
.Confirm Password
{
margin-left:25px;
margin-top:30px;
width:125px;
color:white;
font-size:18px;
font-weight:700;
}
.Name
{
margin-left:25px;
margin-top:30px;
width:125px;
color:white;
font-size:18px;
font-weight:700;
}
.Roll number
{
margin-left:25px;
margin-top:30px;
width:125px;
color:white;
font-size:18px;
font-weight:700;
}
.Mobile Number
{
margin-left:25px;
margin-top:30px;
width:125px;
color:white;
font-size:18px;
font-weight:700;
}
.branch
{
margin-left:25px;
margin-top:30px;
width:125px;
color:white;
font-size:18px;
font-weight:700;
}
.year
{
margin-left:25px;
margin-top:30px;
width:125px;
color:white;
font-size:18px;
font-weight:700;
}
.register
{
  background: #3498db;
  border: 1px solid #2691d9;
  color: blue;
  font-size: 18px;
  letter-spacing: 1px;
  font-weight: 600;
  cursor: pointer;
  font-family: 'Montserrat',sans-serif;
}


</style>
</head>
<body> <center>

<div class="regform">
<font color="TOMATO">
<h1> <marquee> <u>WELCOME TO VARDHAMAN COLLEGE OF ENGINEERING</U> </MARQUEE></H1>
<h1>REGISTER HERE </h1></font>

</div>
<div class="input">
<form>
<div id="name">
<br>
<br>
<br>
<table border="3" align="center" width="600" height="400">
<tbody>
<tr>
<th><label>Enter your Vardhaman email ID</label></th>
<td><input type="text" placeholder="email" pattern=".+@vardhaman\.org" name="email" required> </td>
</tr>
</div>
<div class="input">
<tr>
<th><label>Password :</label></th>
<td><input type="Password" placeholder="password" name = "password"></td>
</tr>
</div> <br>

<div class="input">
<tr>
<th><label>Confirm Password :</label></th>
<td><input type="Password" placeholder="confirmpassword" name="conpassword"></td>
</tr>
</div>
<br>
<div class="input">
<tr>
<th><label>Name :</label> </th>
<td><input type="text" placeholder="name" name="name" required></td>
</tr>

</div>
<br>

<div class="input">
<tr>
<th><label>Roll number :</label></th>
<td><input type="text" placeholder="rollno" name="rollno" required></td>
</tr>
</div>
<br>

<div class="input">
<tr>
<th><label>Mobile Number :</label></th>
<td><input type="text" placeholder="mobile" name="mobile" required></td>
</tr>
</div>
<br>


<div class="input">
<tr>
<th><label for="branch">Select your branch:</label></th>
<td><select placeholder="branch" id="branch" name="branch">
  <option value="CSE">COMPUTER SCIENCE ENGINEERING</option>
  <option value="IT">INFORMATION TECHNOLOGY</option>
  <option value="MECH">MECHANICAL ENGINEERING</option>
  <option value="ECE">ELECTRICAL AND ELECTRONICS ENGINEERING</option>
  <option value="EEE">ELECTRONICS AND COMMUNICATION ENGINEERING</option>
</select>
</td>
</tr>
</div>
<br>

<div class="input">
<tr>
<th><label for="year">Passed out year :</label> </th>
  <td><input type="number" id="year" placeholder="year" min="2012" max="2025" name="yr"></td>
</tr>
</div>
<br>
<div class="input">
<tr>
<td colspan="2" align="center">
<button type="submit" placeholder="register" name="submit" class="btn">REGISTER</button><br>
   already registered? <a href="main.html">click here </a>
</td>

</tr>
</tbody>
</table>
</div>

</center>
</form>
</body>
</html>

<?php
$em = $_GET['email'];
$pwd=$_GET['password'];
$cpwd=$_GET['conpassword'];
$na=$_GET['name'];
$rno=$_GET['rollno'];
$mob=$_GET['mobile'];
$bch=$_GET['branch'];
$yr=$_GET['yr'];

$query = "INSERT INTO STUDENT VALUES ('$em','$pwd','$cpwd','$na','$rno','$mob','$bch','$yr')";
$data = mysqli_query($connect,$query);

if($data)
{
  //echo "data inserted succesfully";
}
else {
  //echo "data inserted failed";
}
 ?>
