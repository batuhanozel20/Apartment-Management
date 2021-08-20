<?php
require('db.php');
include("authenticate.php");
$budID=$_GET['id'];
$query = "SELECT * FROM budget where budID='".$budID."'"; 
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

.budName{
	 margin-left: 1px;
   font-family: sans-serif;
   font-size: 18px;
   color: white;
   margin-top: 5px;
   padding-left: 0px;
   
}
.budPrice{
	 margin-left: 1px;
   font-family: sans-serif;
   font-size: 18px;
   color: white;
   margin-top: 5px;
   padding-left: 34px;
   
}

.budID{
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
<a href="addBudget.php" class="btn btn-warning">Add New</a> 
<a href="login.php" class="btn btn-warning">Logout</a></p>

<?php
$status = "";

if(isset($_POST['submitBudget']) )
{
    

    $budID = ($_POST['budID']);
    
    
    $budName = ($_POST['budName']);
    
    
    $budPrice = ($_POST['budPrice']);
  

    
$upd="UPDATE budget SET `budName`='$budName', `budPrice`='$budPrice'
 where budID='$budID'";
mysqli_query($conn, $upd);
$status = header('Location:viewBudget.php');

}else {
?>
<div>
<h1 class="header">Update Budget </h1>
<form name="form" method="POST" action=""> 

<input type="hidden" name="new" value="1" />
<input name="budID" type="hidden" value="<?php echo $row['budID'];?>" />

<p><label class="budName"><b>Budget Name:</b>
<input type="text" name="budName" placeholder="Enter Budget Name"
 value="<?php echo $row['budName'];?>" /></p>

<p><label class="budPrice"><b>Budget Price:</b>
<input type="number" name="budPrice" placeholder="Enter Budget Price" 
 value="<?php echo $row['budPrice'];?>" /></p>

<p><input name="submitBudget" class="btn btn-warning" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
</div>
</body>
</html>