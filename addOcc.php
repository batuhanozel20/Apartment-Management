<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <meta charset="utf-8"/>
    <title>Registration</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
 body{
	 background-image:url(https://s3.envato.com/files/243754334/primag.jpg);
	 background-repeat:no-repeat;
	 background-size:cover;
	 width:100%;
	 height:100vh;
	 overflow:auto;
	 
}
table{background-color: #fff;

}
</style>
</head>
<body>
<table border="1" align="center" width="80%">
<tr>
<td>Name</td>
<td>Surname</td>
<td>Username</td>
<td>Door Number</td>
<td>Fee Debth</td>
<td>Phone Number</td>
<td>E-Mail</td>
<td>Move in Date</td>
<td>Move out Date</td>
</tr>
<?php
    require('db.php');
    $result=mysqli_query($conn,"SELECT * FROM occupants");
    
    while($row=mysqli_fetch_array($result)){
        echo'<tr>';
        echo '<td>'.$row['Name'].'</td>';
        echo '<td>'.$row['Surname'].'</td>';
        echo '<td>'.$row['userName'].'</td>';
        echo '<td>'.$row['doorNumber'];
        echo '<td>'.$row['feeDebth'];
        echo '<td>' .$row['phoneNo'].'</td>';
        echo '<td>'.$row['eMail'].'</td>';
        echo '<td>'.$row['moveInDate'].'</td>';
        echo '<td>'.$row['moveOutDate'].'</td>';
        echo "<br>";
        echo '</tr>';}
?>
</body>
</html>
