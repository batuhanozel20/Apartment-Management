<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Edit</title>
    <link rel="stylesheet" href="a.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
  body{ 
  background-image:url('b.jpg');
  background-repeat:no-repeat;
  background-size: cover;
}
</style>
</head>
<body>
<?php
    require('db.php');
    
    if (isset($_REQUEST['id'])) {
        
        $id = stripslashes($_REQUEST['id']);
        $id = mysqli_real_escape_string($conn, $id);

        $Name = stripslashes($_REQUEST['Name']);
        $Name = mysqli_real_escape_string($conn, $Name);

        $Surname = stripslashes($_REQUEST['Surname']);
        $Surname = mysqli_real_escape_string($conn, $Surname);
        
        $phoneNo = stripslashes($_REQUEST['phoneNo']);
        $phoneNo = mysqli_real_escape_string($conn, $phoneNo);

        $Role = stripslashes($_REQUEST['Role']);
        $Role = mysqli_real_escape_string($conn, $Role);

        $Salary = stripslashes($_REQUEST['Salary']);
        $Salary = mysqli_real_escape_string($conn, $Salary);
        
  
        $query= "UPDATE staff SET `Name`='$Name', `Surname`='$Surname', `Role`='$Role',`phoneNo`='$phoneNo',`Salary`='$Salary'
        where id='$id'";
        $result= mysqli_query($conn, $query);

       

        if ($result) {
            echo "<div class='form'>
                  <h3>Updated Successfully</h3><br/>
                  <p class='link'><a href='viewStaff.php'>View</a></p>
                  </div>";
        } 

         
        
  
    } else {
?>
   
            <form class="form" action="" method="post">
            <h1 class="login-title">Edit</h1>
            
            <input type="number" class="login-input" name="id" placeholder="id" required/>
            <input type="text" class="login-input" name="Name" placeholder="Name" required />
            <input type="text" class="login-input" name="Surname" placeholder="Surname" required/>
            <input type="text" class="login-input" name="Role" placeholder="Role" required/>
            <input type="number" class="login-input" name="phoneNo" placeholder="Phone Number" required/>
            <input type="Salary" class="login-input" name="Salary" placeholder="Salary" required />
            
       
             <input type="submit" value="Register">
             <p class="link"><a href="login.php">Click to Login</a></p>
    </form>

       
       
    </form>
<?php
    }
?>
</body>
</html>
