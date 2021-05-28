<html> 
   <head>
      <title>Check Appointment</title>
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
         if(isset($_POST['select'])) {
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '1nt17cs121';
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
				
                $Username = $_POST['Username'];
	$DOB = $_POST['DOB'];
            
            $sql = "SELECT p.Name,a.DocUsername,Clinic,Dates,Time_slot FROM Doctors d,appointment a,Users p WHERE d.DocUsername='$Username' AND p.Username=a.PatientUsername" ;
            mysql_select_db('Project');
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval ) {
               die('No results: ' . mysql_error());
            }
            ?>
            <center><h2>Appointment</h2></center>
<br/><div id="center_button">
 <br/><div id="center_button">
    	    <center><button onclick="location.href='check.html'">LogOut</button>   </center> 
<marquee>
 <span style="color:blue;font-weight:bold;font-size:20px;">Your Appointment ! </br>
Welcome to ECLINIC </span></br></marquee>
<center><table aligns="center" border="1px" style="width:1300px; line-height:40px;border-collapse: collapse; color: black">
			
<tr>
				
<th colspan="10"></th>
			
</tr>
			
<t>

<th>NAME</th>				
<th>DATE</th>
<th>TIMESLOT</th>		
<th>CLINIC</th>		

</t>

</br></br></br>
<?php         
    while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
       
error_reporting(0);            
?>

							
<tr>
						
<td><?php echo $row ['Name']?></td>
						
<td><?php echo $row ['Dates']?></td>
						
<td><?php echo $row ['Time_slot']?></td>
						
<td><?php echo $row ['Clinic']?></td>
						
</tr>
				
<?php 
	
    }
	?> <?php       


            mysql_close($conn);
         }else {
            ?>
                 <br/>
	<p style="text-align:center; font-size:300%;">
		Appointments...
	<center>
	Re-enter your details...
                   <form method = "post" action = "<?php $_PHP_SELF ?>" autocomplete="off">
                  <table width = "400" border = "0" cellspacing = "1" 
                     cellpadding = "2">
                     
                     <tr>
		<td width = "100">Username</td>
                        <td><input name = "Username" type = "text" 
	        id = "Username"></td>
		
                     </tr>
      <tr>
		<td width = "100">DOB</td>
                        <td><input name = "DOB" type = "date" 
	        id = "DOB"></td>
		
                     </tr>
                     
                     <tr>
                        <td width = "100"> </td>
                        <td> </td>
                     </tr>
                     
                     <tr>
                        <td width = "100"> </td>
                        <td>
                           <input name = "select" type = "submit" 
                              id = "select" value = "select">
                        </td>
                     </tr>
                     
                  </table>
     </form>
            </center></p>
<br/><br/><br/>
<h4 align="center">
<img src="elogo.png" alt="Img Not available"><br>
<h4 style="color:Black">
<center>
Copyright 2019,eClinic.All Rights Reserved.
</center></h2>
            <?php
         }
      ?>
   
   </body>
</html>