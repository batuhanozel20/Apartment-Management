<?php
require('db.php');

?>
<!DOCTYPE html>
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
<div class="form">



<table style="background-color:#fff" border="1" align="center" width="500" >
<thead>
<tr>
<th><strong>User ID</strong></th>
<th><strong>Name</strong></th>
<th><strong>Surname</strong></th>
<th><strong>UserName</strong></th>
<th><strong>Door Number</strong></th>
<th><strong>Fee Debth</strong></th>
<th><strong>Phone Number</strong></th>
<th><strong>E-Mail</strong></th>
<th><strong>Move In Date </strong></th>
<th><strong>Move Out Date</strong></th>

</tr>
</thead>
<tbody>
<?php
$count=1;
$select="SELECT * FROM occupants ORDER BY userID DESC;";
$result = mysqli_query($conn,$select);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["Name"]; ?></td>
<td align="center"><?php echo $row["Surname"]; ?></td>
<td align="center"><?php echo $row["userName"]; ?></td>
<td align="center"><?php echo $row["doorNumber"]; ?></td>
<td align="center"><?php echo $row["feeDebth"]; ?></td>
<td align="center"><?php echo $row["phoneNo"]; ?></td>
<td align="center"><?php echo $row["eMail"]; ?></td>
<td align="center"><?php echo $row["moveInDate"]; ?></td>
<td align="center"><?php echo $row["moveOutDate"]; ?></td>

<td align="center">
<a href="updOcc2.php?id=<?php echo $row["userID"]; ?>">Update</a>
</td>
<td align="center">
</tr>
<?php $count++; } ?>

</tbody>
</table>
</div>
</body>
</html>