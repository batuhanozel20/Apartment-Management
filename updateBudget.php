<?php
require('db.php');
include("authenticate.php");
$budID=$_REQUEST['id'];
$query = "SELECT * FROM budget where budID='".$budID."'"; 
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

<link rel="stylesheet" href="css/gui.css" />
</head>
<body>
<div class="form">
<p> <a href="dashboard.php">Dashboard</a> 
|<a href="add.php">Add New</a> 
|<a href="login.php">Logout</a></p>

<?php
$status = "";

if(isset($_REQUEST['budID']) )
{
   
    $budName = stripslashes($_REQUEST['budName']);
    $budName = mysqli_real_escape_string($conn, $budName);
    
    $budPrice = stripslashes($_REQUEST['budPrice']);
    $budPrice = mysqli_real_escape_string($conn, $budPrice);



 $upd="UPDATE budget SET `budName`='$budName', `budPrice`='$budPrice''
 where budID='$budID'";
mysqli_query($conn, $upd);
$status = "Updated Successfully. </br></br>
<a href='viewBudget.php'>Apartment Budget</a>";
echo '<p style="color: red;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 

<input type="hidden" name="new" value="1" />
<input name="budID" type="hidden" value="<?php echo $row['budID'];?>" />

<p><label for="budName"><b>Name</b></label><br>
<input type="text" name="budName" placeholder="Name" 
 value="<?php echo $row['budName'];?>" /></p>

 <p><label for="budPrice"><b>Price</b></label><br>
 <input type="number" name="budPrice" placeholder="Price" 
 value="<?php echo $row['budPrice'];?>" /></p>


<p><input name="submitOcc" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
</div>
</body>
</html>