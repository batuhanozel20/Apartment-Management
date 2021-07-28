
<html>
 
<head>
<meta charset="utf-8">
<title>Occupants</title>

<style>
body{ 
background-image:url('b.jpg');
background-repeat:no-repeat;
background-size: cover;
}

</style>
</head>
 
<body>
<table style="background-color:#fff" border="1" align="center" width="500" >
<tr>
<td>User ID</td>
<td>Name</td>
<td>Surname</td>
<td>Username</td>
<td>DoorNumber</td>
<td>Fee Debth</td>
<td>Phone Number</td>
<td>E-Mail</td>
<td>moveInDate</td>
<td>moveOutDate</td>
 
<td>Delete</td>
 
</tr>
<?php
require('db.php');
$result=mysqli_query($conn,"SELECT * FROM occupants"); 
 
while($row=mysqli_fetch_array($result))
{
echo '<tr>';
echo '<td>'.$row['userID'].'</td>';
echo '<td>'.$row['Name'].'</td>';
echo '<td>'.$row['Surname'].'</td>';
echo '<td>'.$row['userName'].'</td>';
echo '<td>'.$row['doorNumber'].'</td>';
echo '<td>'.$row['feeDebth'].'</td>';
echo '<td>'.$row['phoneNo'].'</td>';
echo '<td>'.$row['eMail'].'</td>';
echo '<td>'.$row['moveInDate'].'</td>';
echo '<td>'.$row['moveOutDate'].'</td>';

echo '<td> <a href="delOcc2.php?id='.$row['userID'].'" onclick="return warning();">Delete</a> </td>';
echo '</tr>';
}
?>
</table>
 
</body>
</html>
 
<script language="JavaScript">
function warning() {
 
if (confirm("Are You Sure About That ?"))
   return true;
else 
   return false;
}
</script>