<html>
   
   <head>
      <title>User Login</title>
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
         if(isset($_POST['Login'])) {
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '1nt17cs121';
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
error_reporting(0);            
$Username = ($_POST['Username']);
$Phone_number = ($_POST['Phone_number']);
$DOB= ($_POST['DOB']);
$sql = "SELECT Name,Username FROM Users WHERE Username='$Username' AND Phone_number='$Phone_number' AND DOB='$DOB'" ;               
            mysql_select_db('Project');
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval ) {
               die('Could not enter data: ' . mysql_error());
            }       
        if(!mysql_fetch_array($retval, MYSQL_ASSOC))
{
?>
<h3><center>
Incorrect Details </center>
</h3></br></br>
<center><button onclick="location.href='check.html'">Home</button>   </center>
</br></br><p align="center">
<img src="elogo.png" alt="Img Not available"><br>
<p style="color:Black">
<center>
Copyright 2019,eClinic.All Rights Reserved.
</center></p>
 <?php
}
else
{  
            
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

$sql = "SELECT * FROM Users WHERE Username='$Username'";

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
 <span style="color:blue;font-weight:bold;font-size:20px;"> </br>
Welcome to ECLINIC </span></br></marquee></br></br></br>
<center><table aligns="center" border="1px" style="width:1300px; line-height:40px;border-collapse: collapse; color: black">
			
<tr>
				
<th colspan="9"><h2>YOUR DETAILS</h2></th>
			
</tr>
			
<t>

<th>USERNAME</th>				
<th>NAME</th>
				
<th>DATE OF BIRTH</th>
				
<th>ADDRESS</th>
				
<th>CONTACT NUMBER</th>
			
</t>
			
					
<tr>
						
<td><?php echo $row ['Username']?></td>
					
<td><?php echo $row ['Name']?></td>
						
<td><?php echo $row ['DOB']?></td>
						
<td><?php echo $row ['Address']?></td>
						
<td><?php echo $row ['Phone_number']?></td>
					
</tr>
				
<?php 
}
 ?>
		
</table>

 </center>

<br/><br/></br></br><div>
<center><button onclick="location.href='UserCheckapp.php'">Check my Appointments</button></center> </br>
<center><button onclick="location.href='Bookapp.php'">Book Appointments</button> </center></br>
<center><button onclick="location.href='Userdetails.php';">MyDetails</button></center></br>
<div id="center_button">
<center><button onclick="location.href='check.html'">LogOut</button>   </center> 
<br/><br/><br/></br></br></br></br>
<h4 align="center">
<img src="elogo.png" alt="Img Not available"><br>
<h4 style="color:Black">
<center>
Copyright 2019,eClinic.All Rights Reserved.
</center></h4>


<?php
}
 mysql_close($conn);
   }else {
            ?>
                 <br/>
	<p style="text-align:center; font-size:300%;">
		User Login
	<center>
               <form method = "post" action = "<?php $_PHP_SELF ?>" autocomplete="off" >
                  <table width = "400" border = "0" cellspacing = "1" 
                     cellpadding = "2">
                  
                     <tr>
                        <td width = "100">Username</td>
                        <td><input name = "Username" type = "text" 
                           id = "Username"></td>
                     </tr>
               
                     <tr>
                        <td width = "100"> </td>
                        <td> </td>
                     </tr>
                	<tr>
                        <td width = "100">Phone_number</td>
                        <td><input name = "Phone_number" type = "text" 
                           id = "Phone_number"></td>
                     </tr>
                     <tr>
                        <td width = "100">DOB</td>
                        <td><input name = "DOB" type = "date" 
                           id = "DOB"></td>
                     </tr>
                     <tr>
                        <td width = "100"> </td>
                        <td>
                           <input name = "Login" type = "submit" id = "Login" 
                              value = "Login">
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