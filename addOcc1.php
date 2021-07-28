<html>
<head>
<meta charset="utf-8"/>
   
    <link rel="stylesheet" href="gui.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
</head>
 
<body>
<form method="POST" action="addOcc2.php">
<table border="1" align="center">
<tr>
<td colspan="2" align="center"> Add an Occupant</td>
 
</tr>
<tr>
<tr>
<td>User ID</td>
<td><input type="number" name="userID"required/></td>
</tr>
<tr>
<td>Name</td>
<td><input type="text" name="Name"required /></td>
</tr>
<tr>
<td>Surname</td>
<td><input type="text" name="Surname"required /></td>
</tr>
<tr>
<td>User Name</td>
<td><input type="text" name="userName"></td>
</tr>
<tr>
<td>Door Number</td>
<td><input type="number" name="doorNumber"required /></td>
</tr>
<tr>
<td>Fee Debth</td>
<td><input type="number" name="feeDebth"></td>
</tr>
<tr>
<td>Phone Number</td>
<td><input type="number" name="phoneNo"></td>
</tr>
<tr>
<td>E-Mail</td>
<td><input type="email" name="eMail"></td>
</tr>
<tr>
<td>Move in Date</td>
<td><input type="date" name="moveInDate"required /></td>
</tr>
<tr>
<td>Move out Date</td>
<td><input type="date" name="moveOutDate"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="Save"></td>
</tr>
</table>
</form>
 
</body>
 
</html>
