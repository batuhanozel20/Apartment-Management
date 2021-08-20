<?php
require('db.php');
include("authenticate.php");
$id=$_GET['id'];
$query = "SELECT * FROM staff where id='".$id."'"; 
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <meta charset="utf-8"/>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
 body{
	 background-image:url(https://s3.envato.com/files/243754334/primag.jpg);
	 background-repeat:no-repeat;
	 background-size:cover;
	 width:100%;
	 
	 overflow:auto;
	 
}
.header{
	 text-decoration:bold;
	 text-align : center;
	 font-size:30px;
	 color:#F96;
	 padding-top:10px;
}

.id{
	 margin-left: 1px;
   font-family: sans-serif;
   font-size: 18px;
   color: white;
   margin-top: 5px;
   padding-left: 0px;
   
}
.Name{
	 margin-left: 1px;
   font-family: sans-serif;
   font-size: 18px;
   color: white;
   margin-top: 5px;
   padding-left: 34px;
   
}

.Surname{
	 margin-left: 1px;
   font-family: sans-serif;
   font-size: 18px;
   color: white;
   margin-top: 5px;
   padding-left: 9px;
   
}

.Role{
	 margin-left: 1px;
   font-family: sans-serif;
   font-size: 18px;
   color: white;
   margin-top: 5px;
   padding-left: 9px;
   
}

.phoneNo{
	 margin-left: 1px;
   font-family: sans-serif;
   font-size: 18px;
   color: white;
   margin-top: 5px;
   padding-left: 9px;
   
}

.Salary{
	 margin-left: 1px;
   font-family: sans-serif;
   font-size: 18px;
   color: white;
   margin-top: 5px;
   padding-left: 9px;
   
}



.container{
	 font-family:Roboto,sans-serif;
	 background-image:url(https://image.freepik.com/free-vector/dark-blue-blurred-background_1034-589.jpg) ;
   border-style: px solid grey;
   margin: 0 auto;
   text-align: center;
   opacity: 0.8;
   margin-top: 67px;
   box-shadow: 2px 5px 5px 0px #eee;
   max-width: 500px;
   padding-top: 10px;
   height: 300px;
   margin-top: 166px;
}

.contAfter{
	 font-family:Roboto,sans-serif;
	 background-image:url(https://image.freepik.com/free-vector/dark-blue-blurred-background_1034-589.jpg) ;
   border-style: px solid grey;
   margin: 0 auto;
   text-align: center;
   opacity: 0.8;
   margin-top: 67px;
   box-shadow: 2px 5px 5px 0px #eee;
   max-width: 500px;
   padding-top: 10px;
   height: 800px;
   margin-top: 166px;
}
.btn{
  width: 170px;
}
  
.btn.btn-warning:hover {
    box-shadow: 2px 1px 2px 3px #99ccff;
	background:#5900a6;
	color:#fff;
 
	transition: background-color 1.15s ease-in-out,border-color 1.15s ease-in-out,box-shadow 1.15s ease-in-out;
	
}	 
</style>
<meta charset="utf-8">

<link rel="stylesheet" href="css/gui.css" />
</head>
<body>
<div class="container">
<div class="form">
<p> 
<a href="addStaff.php" class="btn btn-warning">Add New</a> 
<a href="login.php" class="btn btn-warning">Logout</a></p>

<?php
$status = "";

if(isset($_POST['submitStaff']) )
{
    

    $id = ($_POST['id']);
    
    
    $Name = ($_POST['Name']);


    $Surname = ($_POST['Surname']);
    
    
    $Role = ($_POST['Role']);


    $phoneNo = ($_POST['phoneNo']);


    $Salary = ($_POST['Salary']);
  

    
$upd="UPDATE staff SET `Name`='$Name', `Surname`='$Surname', `Role`='$Role', `phoneNo`='$phoneNo', `Salary`='$Salary'
 where id='$id'";
mysqli_query($conn, $upd);
$status = header('Location:viewStaff.php');

}else {
?>
<div>
<h1 class="header">Update Staff </h1>
<form name="form" method="POST" action=""> 

<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />

<p><label class="Name"><b>Name:</b>
<input type="text" name="Name" placeholder="Enter Name"
 value="<?php echo $row['Name'];?>" /></p>

<p><label class="Surname"><b>Surname:</b>
<input type="text" name="Surname" placeholder="Enter Surname" 
 value="<?php echo $row['Surname'];?>" /></p>

<p><label class="Role"><b>Role:</b>
<input type="text" name="Role" placeholder="Enter Role" 
 value="<?php echo $row['Role'];?>" /></p>

<p><label class="phoneNo"><b>Phone Number:</b>
<input type="number" name="phoneNo" placeholder="Enter Phone Number" 
 value="<?php echo $row['phoneNo'];?>" /></p>

<p><label class="Salary"><b>Salary:</b>
<input type="number" name="Salary" placeholder="Enter Salary" 
 value="<?php echo $row['Salary'];?>" /></p>

<p><input name="submitStaff" class="btn btn-warning" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
</div>
</body>
</html>