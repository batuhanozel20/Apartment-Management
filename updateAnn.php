<?php
require('db.php');
include("authenticate.php");
$annID=$_GET['id'];
$query = "SELECT * FROM announcement where annID='".$annID."'"; 
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

.aID{
	 margin-left: 1px;
   font-family: sans-serif;
   font-size: 18px;
   color: white;
   margin-top: 5px;
   padding-left: 0px;
   
}
.aDate{
	 margin-left: 1px;
   font-family: sans-serif;
   font-size: 18px;
   color: white;
   margin-top: 5px;
   padding-left: 34px;
   
}

.a{
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
<a href="addAnn.php" class="btn btn-warning">Add New</a> 
<a href="login.php" class="btn btn-warning">Logout</a></p>

<?php
$status = "";

if(isset($_POST['submitAnn']) )
{
    

    $annID = ($_POST['annID']);
    
    
    $annDate = ($_POST['annDate']);
    
    
    $ann = ($_POST['ann']);
  

    
$upd="UPDATE announcement SET `annDate`='$annDate', `ann`='$ann'
 where annID='$annID'";
mysqli_query($conn, $upd);
$status = header('Location:viewAnn.php');

}else {
?>
<div>
<h1 class="header">Update Announcewment </h1>
<form name="form" method="POST" action=""> 

<input type="hidden" name="new" value="1" />
<input name="annID" type="hidden" value="<?php echo $row['annID'];?>" />

<p><label class="aDate"><b>Announcement Date:</b>
<input type="date" name="annDate" placeholder="Enter Announcement Date"
 value="<?php echo $row['annDate'];?>" /></p>

<p><label class="a"><b>Announcement:</b>
<input type="text" name="ann" placeholder="Enter Announcement" 
 value="<?php echo $row['ann'];?>" /></p>

<p><input name="submitAnn" class="btn btn-warning" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
</div>
</body>
</html>