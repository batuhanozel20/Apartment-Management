<?php
 require('db.php');
$delID= $_GET['id'];
 
$result=mysqli_query($conn,"DELETE FROM occupants
WHERE userID=".$delID);
 
if($result>0){
echo "Deleted Successfully";
header( "refresh:1;url=delOcc1.php" ); ?>
<br>
<br>
<a href="web.php" class="button">Website</a>
<?php }
else
echo "There is a problem it cannot be deleted ";
 
?>