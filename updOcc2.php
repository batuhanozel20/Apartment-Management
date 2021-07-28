<?php
 require('db.php');
 $userID=$_REQUEST['id'];


 $sql="SELECT * FROM occupants WHERE id=$userID";

$result= mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
</head>

<body>
<div class="form">
<p><a href="updOcc1.php">Update</a> 

<h1>Update Record</h1>
<?php 
$status = "";

if(isset($_POST['new']) && $_POST['new']==1)
{

$userID=$_REQUEST['id'];
$Name =$_REQUEST['Name'];
$Surname =$_REQUEST['Surname'];
$userName =$_REQUEST['userName'];
$doorNumber =$_REQUEST['doorNumber'];
$feeDebth =$_REQUEST['feeDebth'];
$phoneNo =$_REQUEST['phoneNo'];
$eMail =$_REQUEST['eMail'];
$moveInDate =$_REQUEST['moveInDate'];
$moveOutDate =$_REQUEST['moveOutDate'];

$upd="UPDATE occupants SET Name='$Name', Surname='$Surname', userName='$userName', doorNumber='$doorNumber', feeDebth='$feeDebth', phoneNo='$phoneNo', eMail='$eMail', moveInDate='$moveInDate', moveOutDate='$moveOutDate'
 WHERE userID='$userID'";
mysqli_query($conn, $upd);
$status = " Updated Successfully. </br></br>
<a href='web.php'>Website</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';

}
else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="User ID" type="hidden" value="<?php echo $row['userID'];?>" />

<p><input type="text" name="Name" placeholder="Enter Name" 
value="<?php echo $row['Name'];?>" /></p>

<p><input type="text" name="Surname" placeholder="Enter Surname" 
value="<?php echo $row['Surname'];?>" /></p>

<p><input type="text" name="Username" placeholder="Enter Username" 
value="<?php echo $row['userName'];?>" /></p>

<p><input type="number" name="Door Number" placeholder="Enter Door Number" 
value="<?php echo $row['doorNumber'];?>" /></p>

<p><input type="number" name="Fee Debth" placeholder="Enter Fee Debth" 
value="<?php echo $row['feeDebth'];?>" /></p>

<p><input type="number" name="Phone Number" placeholder="Enter Phone Number" 
value="<?php echo $row['phoneNo'];?>" /></p>

<p><input type="email" name="E-Mail" placeholder="Enter E-Mail" 
value="<?php echo $row['eMail'];?>" /></p>

<p><input type="date" name="Move In Date" placeholder="Enter Move In Date" 
value="<?php echo $row['moveInDate'];?>" /></p>

<p><input type="date" name="Move Out Date" placeholder="Enter Move Out Date" 
value="<?php echo $row['moveOutDate'];?>" /></p>


<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
</div>
</body>
</html>
