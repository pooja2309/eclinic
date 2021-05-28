<html>
   
   <head>
      <title>Doctor Signup</title>
<style>
body  {
  background-image: url("Health.jpg");
  background-color: #cccccc;
  background-repeat: no-repeat;
  background-size: 1600px 1000px;
 background-blend-mode: overlay;
}
</style>
   </head>
   
   <body style="background-color:powderblue;font-family:Comic Sans MS;">
   <img src="elogo.png" alt="Img Not available" align="right" height="55" width="80">
      <?php
         if(isset($_POST['add'])) {
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '1nt17cs121';
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
error_reporting(0);            
$DocUsername = ($_POST['DocUsername']);
$Name = ($_POST['Name']);
$Qualification= ($_POST['Qualification']);
$Experience= ($_POST['Experience']);
$rating= ($_POST['rating']);
$Specialized= ($_POST['Specialized']);
$Phone= ($_POST['Phone']);
$Clinic= ($_POST['Clinic']);
$DOB= ($_POST['DOB']);
$sql =  "INSERT INTO Doctors". "(DocUsername,Name,Qualification,Experience,rating,Specialized,Phone,Clinic,DOB) "."VALUES('$DocUsername','$Name','$Qualification',$Experience,$rating,'$Specialized','$Phone','$Clinic','$DOB')";               
            mysql_select_db('Project');
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval ) {
               die('Could not enter data: ' . mysql_error());
            }         
            
?>    
<?php

$dbhost = 'localhost';

$dbuser = 'root';

$dbpass = '1nt17cs121';

$conn = mysql_connect($dbhost, $dbuser, $dbpass);



$Username = $_POST['Username'];


if(! $conn )
{
	
die('could not connect: '. mysql_error());

}

mysql_select_db('Project');

$sql = "SELECT * FROM Doctors WHERE DocUsername='$DocUsername'";

$retval = mysql_query( $sql, $conn);


if(! $retval){

	die('Please try again: '. mysql_error());
}


?>

 <?php	
				
while($row = mysql_fetch_array($retval, MYSQL_ASSOC)){
					
error_reporting(0);            
?>

<marquee>
 <span style="color:blue;font-weight:bold;font-size:20px;">User Added Successfully ! </br>
Welcome to ECLINIC </span></br></marquee></br></br></br>
<center><table aligns="center" border="1px" style="width:1300px; line-height:40px;border-collapse: collapse; color: black">
			
<tr>
				
<th colspan="9"><h2>YOUR DETAILS</h2></th>
			
</tr>
			
<t>

<th>USERNAME</th>				
<th>NAME</th>
				
<th>DATE OF BIRTH</th>
				
<th>CLINIC</th>
				
<th>CONTACT NUMBER</th>
			
</t>
			
					
<tr>
						
<td><?php echo $row ['DocUsername']?></td>
					
<td><?php echo $row ['Name']?></td>
						
<td><?php echo $row ['DOB']?></td>
						
<td><?php echo $row ['Clinic']?></td>
						
<td><?php echo $row ['Phone']?></td>
					
</tr>
				
<?php 
}
 ?>
		
</table>

 </center>

<br/><br/></br></br><div>
<center><button onclick="location.href='DocCheckapp.php'">Check my Appointments</button> </br>
<center><button onclick="location.href='Docdetails.php'">MyDetails</button></center></br>
<center><button onclick="location.href='Settimeslot.php'">Set Availability</button></center>
<center><button onclick="location.href='Deltimeslot.php'">Delete Timeslot</button></center>
<div id="center_button">
<center><button onclick="location.href='check.html'">LogOut</button>   </center> 
<br/><br/><br/></br></br></br></br>
<h4 align="center">
<img src="elogo.png" alt="Img Not available"><br>
<h4 style="color:Black">
<center>
Copyright 2019,eClinic.All Rights Reserved.
</center></h4>


<?php mysql_close($conn);
   }else {
            ?>
                 <br/>
	<p style="text-align:center; font-size:300%;">
		Doctor Signup 

	<center>
               <form method = "post" action = "<?php $_PHP_SELF ?>" autocomplete="off">
                  <table width = "400" border = "0" cellspacing = "1" 
                     cellpadding = "2">
                  
                     <tr>
                        <td width = "100">DocUsername</td>
                        <td><input name = "DocUsername" type = "text" 
                           id = "DocUsername"></td>
                     </tr>
                  
                     <tr>
                        <td width = "100">Name</td>
                        <td><input name = "Name" type = "text" 
                           id = "Name"></td>
                     </tr>
                  
                     <tr>
                  <td width = "100">Qualification</td>
                        <td><input name = "Qualification" type = "text" 
	        id = "Qualification"></td>
                     </tr>
                     <tr>
                  <td width = "100">Experience</td>
                        <td><input name = "Experience" type = "text" 
	        id = "Experience"></td>
                     </tr>
                     <tr>
                  <td width = "100">Specialization</td>
                        <td><input name = "Specialized" type = "text" 
	        id = "Specialized"></td>
                     </tr>
                     <tr>
                  <td width = "100">rating</td>
                        <td><input name = "rating" type = "text" 
	        id = "rating"></td>
                     </tr>
                  
                     <tr>
                        <td width = "100"> </td>
                        <td> </td>
                     </tr>
                	<tr>
                        <td width = "100">Phone</td>
                        <td><input name = "Phone" type = "text" 
                           id = "Phone"></td>
                     </tr>
                     <tr>
                        <td width = "100">Clinic</td>
                        <td><input name = "Clinic" type = "text" 
                           id = "Clinic"></td>
                     </tr>
                     <tr>
                        <td width = "100">DOB</td>
                        <td><input name = "DOB" type = "date" 
                           id = "DOB"></td>
                     </tr>
                     <tr>
                        <td width = "100"> </td>
                        <td>
                           <input name = "add" type = "submit" id = "add" 
                              value = "Add User">
                        </td>
                     </tr>
                  
                  </table>
               </form>
            </center></p>
<br/><br/><br/></br></br></br></br>
<h4 align="center">
<img src="elogo.png" alt="Img Not available"><br>
<h4 style="color:Black">
<center>
Copyright 2019,eClinic.All Rights Reserved.
</center></h4>
            <?php
         }
      ?>
 </body>
</html>