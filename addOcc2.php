<style>
body{ 
background-image:url('b.jpg');
background-repeat:no-repeat;
background-size: cover;
}

</style>
<?php
 require('db.php');

 $userID = $_POST['userID'];  
 $Name = $_POST['Name'];
 $Surname = $_POST['Surname'];
 $userName = $_POST['userName'];
 $doorNumber = $_POST['doorNumber'];
 $feeDebth = $_POST['feeDebth'];
 $phoneNo= $_POST['phoneNo'];
 $eMail= $_POST['eMail'];
 $moveInDate= $_POST['moveInDate'];
 $moveOutDate= $_POST['moveOutDate'];
 
 $sql="SELECT userID FROM occupants WHERE userID='$userID'";
 
$result= mysqli_query($conn,$sql);
$rowCount=mysqli_num_rows($result);
 
if ($rowCount>0)
{
echo "<div class='form'>
<h3>User ID is in use</h3><br/>
<p class='button'><a href='addOcc1.php'>Try Again</a></p>
</div>";

} else{
    $add="INSERT INTO occupants(userID, Name, Surname, userName, doorNumber, feeDebth, phoneNo, eMail, moveInDate,moveOutDate) 
    VALUES ('$userID','$Name','$Surname','$userName','$doorNumber','$feeDebth','$phoneNo','$eMail','$moveInDate','$moveOutDate')";
 
$result=mysqli_query($conn,$add);
 
if ($result==0)
echo "<div class='form'>
<h3>Couldn't Added</h3>
<p class='button'><a href='addOcc1.php'>Try Again</a></p>
</div>";

else
echo "<div class='form'>
      <h3>Added Successfully</h3><br/>
      <p class='button'><a href='web.php'>Website</a></p>
      </div>";
}
 
?>