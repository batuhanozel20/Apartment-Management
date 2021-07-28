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
	 height:100vh;
	 overflow:auto;
	 
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
     height: 400px;
     margin-top: 166px;
}

.uName{
	 margin-left: 90px;
     font-family: sans-serif;
     font-size: 14px;
     color: white;
     margin-top: 5px;
}

.header{
	 text-decoration:bold;
	 text-align : center;
	 font-size:30px;
	 color:#F96;
	 padding-top:10px;
}

.pw{
	 color: white;
     text-align : center;
     margin-top: 9px;
     font-size: 14px;
     font-family: sans-serif;
     margin-left: 90px;
     margin-top: 9px;
}
#password{
 margin-top: 6px;
}

.sbutton{
	 color: white;
     font-size: 20px;
     border: 1px solid white;
     background-color: #080808;
     width: 32%;
     margin-left: 41%;
     margin-top: 16px;
	 box-shadow: 0px 2px 2px 0px white;
  	   
   }

.btn.btn-warning:hover {
    box-shadow: 2px 1px 2px 3px #99ccff;
	background:#5900a6;
	color:#fff;
	transition: background-color 1.15s ease-in-out,border-color 1.15s ease-in-out,box-shadow 1.15s ease-in-out;
	
}	 
</style>    
</head>

<body>
 <div class="container">

 <?php
    require('db.php');
    session_start();
 
    if (isset($_POST['userName'])) {
        $userName = stripslashes($_REQUEST['userName']);    
        $userName = mysqli_real_escape_string($conn, $userName);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn, $password);
       
        $query    = "SELECT * FROM `usertable` WHERE userName='$userName'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($conn, $query);
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['userName'] = $userName;
            
            header("Location: dashboard.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>


     <header class="header"> Login</header><hr></hr>
	
	<div class="row ">
	 
         <div class="col-sm-12">
             <div class="row">
			     <div class="col-xs-4">
          	         <label class="uName">Username:  </label> </div>
		         <div class="col-xs-8">
		             <input type="text" class="form-control" name="userName" id="uName" placeholder="Enter your Username">
             </div>
		      </div>
		 </div>
		 
		 
         
    

          <div class="col-sm-12">
		         <div class="row">
				     <div class="col-xs-4">
		 	              <label class="pw">Password :</label></div>
				  <div class="col-xs-8">
			             <input type="password" class="form-control"  name="password" id="password" placeholder="Enter your Password">
			           
				 </div>
          </div>
		  </div>
		  
    <br>
		     <div class="col-sm-12">
             <br>  
             <input type="submit" value="Login" name="submit" class="btn btn-warning"/> <br> <br>
                
                 <div class="btn btn-warning">New Registration</div> <br> <br>

                 <div class="btn btn-warning">Forgot Password</div>
		   </div>
		 </div>
	 </div>	 
		 		 
		 
</div>
<?php
    }
?>
</body>		
</html>
	 