
<!DOCTYPE html>
<html>
<?php
include "db.php";
?>
<head>
  
<h1 style="text-align:center;color:white;">Welcome to My Apartment</h1>

<//div align="center">
 <//img src="Apt.jpg" style="width:300px;height: 300px" /><///div>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

body {font-family: Arial Black;
background-repeat:no-repeat;
background-image:url('a.jpg');
background-size: cover;}

table, th, td {
  border: 1px solid black;
}

.tab {
  overflow: hidden;

 
}


.tab button {
  
  float: left;
  border: solid;
  border-width:3px;
  outline: none;
  cursor: pointer;
  padding: 14px;
  transition: 0.3s;
  font-size: 30px;
  background-color: rgb(255,255,0);
  width: 300px;

 
}


.tab button:hover {
  
}


.tab button.active {
  background-color: rgb(153,153,0);
}


.tabcontent {
  display: none;
  padding: 6px 12px;
  
  border-top: none;
}
</style>
</head>

<body >

<div class="tab">
  <button style="background-color:rgb(153,153,0);  class="tablinks" onclick="floorCount(event, 'Announcements')">Announcements
  
</button>
 
</div>

<div  id="Announcements" >
<p>Announcements will be shared here</p>
</div>

<div class="tab">
  <button  class="tablinks" onclick="floorCount(event, 'Occupants')">Occupants</button>
</div>




<div  id="Occupants" class="tabcontent">
  <button class="tablinks" onclick="floorCount(event, 'Floor 1')">Floor 1</button>
  <button class="tablinks" onclick="floorCount(event, 'Floor 2')">Floor 2</button>
  <button class="tablinks" onclick="floorCount(event, 'Floor 3')">Floor 3</button>
  <button class="tablinks" onclick="floorCount(event, 'Floor 4')">Floor 4</button>
  <button class="tablinks" onclick="floorCount(event, 'Floor 5')">Floor 5</button>
  <button class="tablinks" onclick="floorCount(event, 'Floor 6')">Floor 6</button>
  <button class="tablinks" onclick="floorCount(event, 'Floor 7')">Floor 7</button>
  <button class="tablinks" onclick="floorCount(event, 'Floor 8')">Floor 8</button>
  <button class="tablinks" onclick="floorCount(event, 'Floor 9')">Floor 9</button>
  <button class="tablinks" onclick="floorCount(event, 'Floor 10')">Floor 10</button>
</div>


<div id="Floor 1" class="tabcontent">

<table style="width:10%">
<h3>Door Number 1</h3>
  <tr>
    <th>Firstname</th>
    <th>Lastname</th> 
    <th>Phone Number</th>
    <th>Fee Debth</th>
  
  </tr>
  <tr>
    <td>Jill</td>
    <td>Smith</td>
    <td>123456789</td>
    <td>200</td>
   
  </tr>

  <tr>
    <td>Eve</td>
    <td>Smith</td>
    <td>654354758</td>
    
  </tr>
 
  <tr>
    <td>John</td>
    <td>Smith</td>
    
  </tr>

</table>



<table style="width:10%">
<h3>Door Number 2</h3>
  <tr>
    <th>Firstname</th>
    <th>Lastname</th> 
    <th>Phone Number</th>
    <th>Fee Debth</th>
  </tr>
 
 <tr>
    <td>Johnny</td>
    <td>Bravo</td>
    <td>145437065</td>
    <td>100</td>
  </tr>
 
  <tr>
    <td>Alexa</td>
    <td>Bravo</td>
    <td>483250490</td>
    
  </tr>

</table>



  <p> You should click "Occupants" button to see another floor(s)</p>
</div>

<div id="Floor 2" class="tabcontent">
<table style="width:10%">
<h3>Door Number 3</h3>
  <tr>
    <th>Firstname</th>
    <th>Lastname</th> 
    <th>Phone Number</th>
    <th>Fee Debth</th>
  </tr>
 
 <tr>
    <td>Eric</td>
    <td>Gungor</td>
    <td>354367657</td>
    <td>0</td>
  </tr>
 
</table>

<table style="width:10%">
<h3>Door Number 4</h3>
  <tr>
    <th>Firstname</th>
    <th>Lastname</th> 
    <th>Phone Number</th>
    <th>Fee Debth</th>
  </tr>
 
 <tr>
    <td>Bot</td>
    <td>Gabe</td>
    <td>636313534</td>
    <td>500</td>    

  </tr>
 
  <tr>
    <td>Bot</td>
    <td>Helena</td>
    <td>634638578</td>
   
  </tr>

</table>
 <p> You should click "Occupants" button to see another floor(s)</p>
</div>

<div id="Floor 3" class="tabcontent">
<table style="width:10%">
<h3>Door Number 5</h3>
  <tr>
    <th>Firstname</th>
    <th>Lastname</th> 
    <th>Phone Number</th>
    <th>Fee Debth</th>
  </tr>
 
 <tr>
    <td>Lebron</td>
    <td>James</td>
    <td>636765324</td>
    <td>0</td>
  </tr>

<tr>
    <td>Sage</td>
    <td>James</td>
    <td>250823950</td>
    
  </tr>
 
</table>

<table style="width:10%">
<h3>Door Number 6</h3>
  <tr>
    <th>Firstname</th>
    <th>Lastname</th> 
    <th>Phone Number</th>
    <th>Fee Debth</th>
  </tr>
 
 <tr>
    <td>Garen</td>
    <td>Dover</td>
    <td>145967245</td>
    <td>300</td>    

  </tr>
 
  <tr>
    <td>Ashley</td>
    <td>Dover</td>
    <td>643703675</td>
    
  </tr>

</table>
 <p> You should click "Occupants" button to see another floor(s)</p>

</div>

<div id="Floor 4" class="tabcontent">
<table style="width:10%">
<h3>Door Number 7</h3>
  <tr>
    <th>Firstname</th>
    <th>Lastname</th> 
    <th>Phone Number</th>
    <th>Fee Debth</th>
  </tr>
 
  <tr>
    <td>Henry</td>
    <td>Homph</td>
    <td>532867089</td>
    <td>100</td>
  </tr>

  <tr>
    <td>Amy</td>
    <td>Homph</td>
    <td>096634085</td>
    
   </tr>

   <tr>
    <td>Mary</td>
    <td>Homph</td>
    <td>230682435</td>
    
   </tr>

   <tr>
    <td>Dennis</td>
    <td>Homph</td>
   
   </tr>


 </table>

<table style="width:10%">
<h3>Door Number 8</h3>
  <tr>
    <th>Firstname</th>
    <th>Lastname</th> 
    <th>Phone Number</th>
    <th>Fee Debth</th>
  </tr>
 
 <tr>
    <td>Sam</td>
    <td>Dorm</td>
    <td>205896723</td>
    <td>0</td>    

  </tr>
 
  <tr>
    <td>Sofia</td>
    <td>Dorm</td>
    <td>439085643</td>
    
  </tr>

</table>
  <p> You should click "Occupants" button to see another floor(s)</p>
</div>

<div id="Floor 5" class="tabcontent">
 <table style="width:10%">
<h3>Door Number 9</h3>
  <tr>
    <th>Firstname</th>
    <th>Lastname</th> 
    <th>Phone Number</th>
    <th>Fee Debth</th>
  </tr>
 
 <tr>
    <td>Sally</td>
    <td>Hole</td>
    <td>954809236</td>
    <td>100</td>    

  </tr>

</table>

<table style="width:10%">
<h3>Door Number 10</h3>
  <tr>
    <th>Firstname</th>
    <th>Lastname</th> 
    <th>Phone Number</th>
    <th>Fee Debth</th>
  </tr>
 
 <tr>
    <td>Cıwanlaw</td>
    <td>Jiyan</td>
    <td>130524691</td>
    <td>400</td>    

  </tr>
 
  <tr>
    <td>Pelşin</td>
    <td>Jiyan</td>
    <td>439085643</td>
    
  </tr>

  <tr>
    <td>Arjen</td>
    <td>Jiyan</td>
    <td>346859132</td>
    
  </tr>

  <tr>
    <td>Perwin</td>
    <td>Jiyan</td>
    <td>320593290</td>
    
  </tr>

  <tr>
    <td>Tujo</td>
    <td>Jiyan</td>
    
    
  </tr>

  <tr>
    <td>Şiyar</td>
    <td>Jiyan</td>
   
    
  </tr>
</table>
  <p> You should click "Occupants" button to see another floor(s)</p>
</div>

<div id="Floor 6" class="tabcontent">
  <table style="width:10%">
<h3>Door Number 11</h3>
  <tr>
    <th>Firstname</th>
    <th>Lastname</th> 
    <th>Phone Number</th>
    <th>Fee Debth</th>
  </tr>
 
 <tr>
    <td>Karen</td>
    <td>Chewy</td>
    <td>235603923</td>
    <td>300</td>    

  </tr>

 <tr>
    <td>Mel</td>
    <td>Kona</td>
    <td>683096358</td>
   

  </tr>
</table>

 <table style="width:10%">
<h3>Door Number 12</h3>
  <tr>
    <th>Firstname</th>
    <th>Lastname</th> 
    <th>Phone Number</th>
    <th>Fee Debth</th>
  </tr>
 
 <tr>
    <td>Jack</td>
    <td>Mol</td>
    <td>325702419</td>
    <td>100</td>    

  </tr>
</table>
  <p> You should click "Occupants" button to see another floor(s)</p>
</div>

<div id="Floor 7" class="tabcontent">
  <table style="width:10%">
<h3>Door Number 13</h3>
  <tr>
    <th>Firstname</th>
    <th>Lastname</th> 
    <th>Phone Number</th>
    <th>Fee Debth</th>
  </tr>
 
 <tr>
    <td>Ezekiel</td>
    <td>Morose</td>
    <td>481352152</td>
    <td>0</td>    

  </tr>

 <tr>
    <td>Lucy</td>
    <td>Morose</td>
    <td>325079248</td>
   

  </tr>
</table>

 <table style="width:10%">
<h3>Door Number 14</h3>
  <tr>
    <th>Firstname</th>
    <th>Lastname</th> 
    <th>Phone Number</th>
    <th>Fee Debth</th>
  </tr>
 
 <tr>
    <td>Jones</td>
    <td>Horn</td>
    <td>135809364</td>
    <td>400</td>    

  </tr>

<tr>
    <td>Mandy</td>
    <td>Horn</td>
    <td>356094762</td>
     

  </tr>

<tr>
    <td>Melanie</td>
    <td>Horn</td>
   

  </tr>

</table>
  <p> You should click "Occupants" button to see another floor(s)</p>
</div>

<div id="Floor 8" class="tabcontent">
  <table style="width:10%">
<h3>Door Number 15</h3>
  <tr>
    <th>Firstname</th>
    <th>Lastname</th> 
    <th>Phone Number</th>
    <th>Fee Debth</th>
  </tr>
 
 <tr>
    <td>Ezekiel</td>
    <td>Morose</td>
    <td>481352152</td>
    <td>0</td>    

  </tr>

 <tr>
    <td>Lucy</td>
    <td>Morose</td>
    <td>325079248</td>
   

  </tr>
</table>

 <table style="width:10%">
<h3>Door Number 16</h3>
  <tr>
    <th>Firstname</th>
    <th>Lastname</th> 
    <th>Phone Number</th>
    <th>Fee Debth</th>
  </tr>
 
 <tr>
    <td>Jones</td>
    <td>Horn</td>
    <td>135809364</td>
    <td>400</td>    

  </tr>

<tr>
    <td>Mandy</td>
    <td>Horn</td>
    <td>356094762</td>
     

  </tr>

<tr>
    <td>Melanie</td>
    <td>Horn</td>
   

  </tr>

</table>
  <p> You should click "Occupants" button to see another floor(s)</p>
</div>

<div id="Floor 9" class="tabcontent">
  <table style="width:10%">
<h3>Door Number 17</h3>
  <tr>
    <th>Firstname</th>
    <th>Lastname</th> 
    <th>Phone Number</th>
    <th>Fee Debth</th>
  </tr>
 
 <tr>
    <td>Ezekiel</td>
    <td>Morose</td>
    <td>481352152</td>
    <td>0</td>    

  </tr>

 <tr>
    <td>Lucy</td>
    <td>Morose</td>
    <td>325079248</td>
   

  </tr>
</table>

 <table style="width:10%">
<h3>Door Number 18</h3>
  <tr>
    <th>Firstname</th>
    <th>Lastname</th> 
    <th>Phone Number</th>
    <th>Fee Debth</th>
  </tr>
 
 <tr>
    <td>Jones</td>
    <td>Horn</td>
    <td>135809364</td>
    <td>400</td>    

  </tr>

<tr>
    <td>Mandy</td>
    <td>Horn</td>
    <td>356094762</td>
     

  </tr>

<tr>
    <td>Melanie</td>
    <td>Horn</td>
   

  </tr>

</table>
  <p> You should click "Occupants" button to see another floor(s)</p>
</div>

<div id="Floor 10" class="tabcontent">
  <table style="width:10%">
<h3>Door Number 19</h3>
  <tr>
    <th>Firstname</th>
    <th>Lastname</th> 
    <th>Phone Number</th>
    <th>Fee Debth</th>
  </tr>
 
 <tr>
    <td>Ezekiel</td>
    <td>Morose</td>
    <td>481352152</td>
    <td>0</td>    

  </tr>

 <tr>
    <td>Lucy</td>
    <td>Morose</td>
    <td>325079248</td>
   

  </tr>
</table>

 <table style="width:10%">
<h3>Door Number 20</h3>
  <tr>
    <th>Firstname</th>
    <th>Lastname</th> 
    <th>Phone Number</th>
    <th>Fee Debth</th>
  </tr>
 
 <tr>
    <td>Jones</td>
    <td>Horn</td>
    <td>135809364</td>
    <td>400</td>    

  </tr>

<tr>
    <td>Mandy</td>
    <td>Horn</td>
    <td>356094762</td>
     

  </tr>

<tr>
    <td>Melanie</td>
    <td>Horn</td>
   

  </tr>

</table>
  <p> You should click "Occupants" button to see another floor(s)</p>
</div>

<div class="tab">
  <button class="tablinks" onclick="floorCount(event, 'Apartment Budget')">Apartment Budget</button>
</div>




<div id="Apartment Budget" class="tabcontent">



<h3>Budget</h3> 
<?php
$db= mysqli_select_db($conn,"web programming");
$query=mysqli_query($conn,"CREATE TABLE `web programming`.`budget`
( `Garden Expense` INT(50) NOT NULL ,
`Electric Bill` INT(50) NOT NULL ,
`Generator Fuel` INT(50) NOT NULL , 
`Generator Maintance` INT(50) NOT NULL ,
`Water Bill` INT(50) NOT NULL , 
`Staff Salary` INT(50) NOT NULL
, `Staff Insurance` INT(50) NOT NULL , 
`Staff Brief` INT(50) NOT NULL , 
`Security Expsense` INT(50) NOT NULL , 
`Cleaning Expense` INT(50) NOT NULL , 
`Pool Expense` INT(50) NOT NULL , 
`Central Heating Expense` INT(50) NOT NULL , 
`Other Expenses` INT(50) NOT NULL ) ENGINE = InnoDB");

$db= mysqli_select_db($conn,"web programming");
$query=mysqli_query($conn,"INSERT INTO `budget` (`Garden Expense`, `Electric Bill`,
`Generator Fuel`, `Generator Maintance`, `Water Bill`, 
`Staff Salary`, `Staff Insurance`, `Staff Brief`, 
`Security Expsense`, `Cleaning Expense`, `Pool Expense`,
`Central Heating Expense`, `Other Expenses`)
VALUES ('3000', '5000', '2000', '4500', '8000', '4800',
'3200', '3800', '5200', '1800', '3600', '5500', '1300')");

?>


</div>

<div class="tab">
  <button class="tablinks" onclick="floorCount(event, 'Staff')">Staff</button>
</div>




<div id="Staff" class="tabcontent">
  



<table style="width:10%">

<h3>Staff</h3> 
 <tr>
    <th>Firstname</th>
    <th>Lastname</th> 
    <th>Role</th>
    <th>Phone Number</th>
    <th>Salary</th>
  </tr>
 
 <tr>
    <td>Jeremy</td>
    <td>Cam</td>
    <td>Clean & Care</td>
    <td>582409635</td>
    <td>2400</td>    

  </tr>

<tr>
    <td>David</td>
    <td>Strooper</td>
    <td>Security</td>
    <td>310579165</td>
    <td>2400</td>     

  </tr>

</table>

</div>


<div class="tab">
  <button class="tablinks" onclick="floorCount(event, 'Utility Status')">Utility Status</button>
</div>
<div id="Utility Status" class="tabcontent">
<table style="width:10%">

<h3>Utility</h3> 
 <tr>
    <th>Utility</th>
    <th>Status</th> 

  </tr>
 
 <tr>
    <td>Generator</td>
    <td><button class="tablinks" onclick="floorCount(event, 'Status')">ON</button></td>
    <td><button class="tablinks" onclick="floorCount(event, 'Status')">OFF</button></td>
</td>
 </tr>

 <tr>
    <td>Pool</td>
    <td><button class="tablinks" onclick="floorCount(event, 'Status')">FULL</button></td>
    <td><button class="tablinks" onclick="floorCount(event, 'Status')">EMPTY</button></td>
</td>
 </tr>

 <tr>
    <td>Elevator</td>
    <td><button class="tablinks" onclick="floorCount(event, 'Status')">ON</button></td>
    <td><button class="tablinks" onclick="floorCount(event, 'Status')">OFF</button></td>
</td>
 </tr>
</div>
</div>


<script>
function floorCount(evt, floorName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(floorName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>

</body>
</html> 