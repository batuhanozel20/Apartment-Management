<?php
require('db.php');
include("authenticate.php");
$id=$_REQUEST['id'];
$query = "SELECT * FROM staff where id='".$id."'"; 
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<style>
 body{ 
  background-image:url('b.jpg');
  background-repeat:no-repeat;
  background-size: cover;
}
.button {
  background-color: #949292; 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
</style>
<meta charset="utf-8">
<title>Edit</title>
<link rel="stylesheet" href="css/gui.css" />
</head>
<body>
<div class="form">
<p> <a href="dashboard.php">Dashboard</a> 
|<a href="addStaff.php">Add New</a> 
|<a href="login.php">Logout</a></p>
<h1>Edit</h1>
<?php
$status = "";

if(isset($_REQUEST['id']) )
{
    

    $Name = stripslashes($_REQUEST['Name']);
    $Name = mysqli_real_escape_string($conn, $Name);
    
    $Surname = stripslashes($_REQUEST['Surname']);
    $Surname = mysqli_real_escape_string($conn, $Surname);
    
    $Role = stripslashes($_REQUEST['Role']);
    $Role = mysqli_real_escape_string($conn, $Role);
    
    $phoneNo = stripslashes($_REQUEST['phoneNo']);
    $phoneNo = mysqli_real_escape_string($conn, $phoneNo);
  
    $Salary = stripslashes($_REQUEST['Salary']);
    $Salary = mysqli_real_escape_string($conn, $Salary); 
  


    

$upd="UPDATE staff SET `Name`='$Name', `Surname`='$Surname', `Role`='$Role',`phoneNo`='$phoneNo',`Salary`='$Salary'
 where id='$id'";
mysqli_query($conn, $upd);
$status = "Updated Successfully. </br></br>
<a href='viewStaff.php'>Staff</a>";
echo '<p style="color: red;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 

<input type="hidden" name="new" value="1" />
<input name="userID" type="hidden" value="<?php echo $row['id'];?>" />

<p><input type="text" name="Name" placeholder="Enter Name" 
 value="<?php echo $row['Name'];?>" /></p>

<p><input type="text" name="Surname" placeholder="Enter Surname" 
 value="<?php echo $row['Surname'];?>" /></p>

<p><input type="text" name="Role" placeholder="Enter Role" 
 value="<?php echo $row['Role'];?>" /></p>

<p><input type="number" name="phoneNo" placeholder="Enter Phone Number" 
 value="<?php echo $row['phoneNo'];?>" /></p>

<p><input type="number" name="Salary" placeholder="Enter Salary" 
 value="<?php echo $row['Salary'];?>" /></p>


<p><input name="submitStaff" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
</div>
</body>
</html>