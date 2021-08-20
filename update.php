<?php
require('db.php');
include("authenticate.php");
$userID=$_GET['id'];
$query = "SELECT * FROM users where userID='".$userID."'"; 
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

.uName{
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

.sName{
	 margin-left: 1px;
   font-family: sans-serif;
   font-size: 18px;
   color: white;
   margin-top: 5px;
   padding-left: 9px;
   
}
.mail{
	 margin-left: 1px;
   font-family: sans-serif;
   font-size: 18px;
   color: white;
   margin-top: 5px;
   padding-left: 30px;
   
}

.phone{
	 margin-left: 1px;
   font-family: sans-serif;
   font-size: 18px;
   color: white;
   margin-top: 5px;
   padding-left: 1px;
   
}
.dNum{
	 margin-left: 1px;
   font-family: sans-serif;
   font-size: 18px;
   color: white;
   margin-top: 5px;
   padding-right: 28px;
   
}
.feed{
	 margin-left: 1px;
   font-family: sans-serif;
   font-size: 18px;
   color: white;
   margin-top: 5px;
   padding-right: 3px;
   
}

.mid{
	 margin-left: 1px;
   font-family: sans-serif;
   font-size: 18px;
   color: white;
   margin-top: 5px;
   padding-left: 13px;
   padding-right: 5px;
   
}
.mod{
	 margin-left: 1px;
   font-family: sans-serif;
   font-size: 18px;
   color: white;
   margin-top: 5px;
   padding-right: 4px;
 
   
}
.lpd{
	 
   font-family: sans-serif;
   font-size: 18px;
   color: white;
   margin-top: 5px;
  
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
   height: 700px;
   margin-top: 10px;
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
<a href="add.php" class="btn btn-warning">Add New</a> 
<a href="login.php" class="btn btn-warning">Logout</a></p>

<?php
$status = "";

if(isset($_POST['submitOcc']) )
{
    

    $Name = ($_POST['Name']);
    
    
    $Surname = ($_POST['Surname']);
    
    
    $doorNumber = ($_POST['doorNumber']);
  

    $phoneNo = ($_POST['phoneNo']);
    
  
    $eMail = ($_POST['eMail']);


    $debt = ($_POST['debt']);
  
  
    $moveInDate = ($_POST['moveInDate']);
  

    $moveOutDate = ($_POST['moveOutDate']);


    $lastPayment = ($_POST['lastPayment']);
    


$upd="UPDATE users SET `Name`='$Name', `Surname`='$Surname',`doorNumber`='$doorNumber',`phoneNo`='$phoneNo',`eMail`='$eMail',`debt`='$debt',`moveInDate`='$moveInDate',`moveOutDate`='$moveOutDate',`lastPayment`='$lastPayment'
 where userID='$userID'";
mysqli_query($conn, $upd);
$status = header('Location:view.php');

}else {
?>
<div>
<h1 class="header">Update an Occupant </h1>
<form name="form" method="POST" action=""> 

<input type="hidden" name="new" value="1" />
<input name="occID" type="hidden" value="<?php echo $row['userID'];?>" />

<p><label class="Name"><b>Name:</b>
<input type="text" name="Name" placeholder="Enter Name"
 value="<?php echo $row['Name'];?>" /></p>

<p><label class="sName"><b>Surname:</b>
<input type="text" name="Surname" placeholder="Enter Surname" 
 value="<?php echo $row['Surname'];?>" /></p>

<p><label class="dNum"><b>Door Number:</b>
<input type="number" name="doorNumber" placeholder="Enter Door Number" 
 value="<?php echo $row['doorNumber'];?>" /></p>

<p><label class="phone"><b>Phone No:</b>
<input type="number" name="phoneNo" placeholder="Enter Phone Number" 
 value="<?php echo $row['phoneNo'];?>" /></p>

<p><label class="mail"><b>E-Mail:</b>
<input type="email" name="eMail" placeholder="Enter E-Mail" 
 value="<?php echo $row['eMail'];?>" /></p>

 <p><label class="feed"><b>Debt:</b>
<input type="number" name="debt" placeholder="Enter Debt" 
 value="<?php echo $row['debt'];?>" /></p>

<p><label class="mid"><b>Move In Date:</b></label>
<input type="date" name="moveInDate" placeholder="Enter Move In Date" 
 value="<?php echo $row['moveInDate'];?>" /></p>


<p><label class="mod"><b>Move Out Date:</b></label>
<input type="date" name="moveOutDate" placeholder="Enter Move Out Date" 
 value="<?php echo $row['moveOutDate'];?>" /></p>

<p><label class="lpd"><b>Last Payment Date:</b></label>
<input type="date" name="lastPayment" placeholder="Enter Last Payment Date" 
 value="<?php echo $row['lastPayment'];?>" /></p>

<p><input name="submitOcc" class="btn btn-warning" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
</div>
</body>
</html>