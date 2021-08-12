<html>

<body>

<h1> <font color="#78184a" > ALL REGISTERED STUDENTS </font> <h1/>
  
<table border="2">
<tr>
<th>EMAIL</th>
<th>NAME</th>
<th>ROLLNO.</th>
<th>MOBILE</th>
<th>BRANCH</th>
<th>YEAR</th></tr>

</body>


<?php

include("connection.php");
error_reporting(0);
$query = "SELECT * FROM student";
$data = mysqli_query($connect,$query);
$total = mysqli_num_rows($data);


//echo $result['email']." ".$result['name']." ".$result['rollno']." ".$result['mobile']." ".$result['branch']." ".$result['year'];

if ($total!=0)
{

  while($result=mysqli_fetch_assoc($data))
  {
    echo "
    <tr>
    <td>".$result['email']."</d>
    <td>".$result['name']."</d>
    <td>".$result['rollno']."</d>
    <td>".$result['mobile']."</d>
    <td>".$result['branch']."</d>
    <td>".$result['year']."</d>
    ";
  }
}
else
{
  echo "No records found";
}
?>
</table>

</body>
</html>
