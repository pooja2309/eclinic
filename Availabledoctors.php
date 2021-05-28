<html> 
   <head>
      <title>Select doctors in top specialities</title>
<style>
body  {
  background-image: url("doctors.jpg");
  background-color: #cccccc;
  background-repeat: no-repeat;
  background-size: 1700px 1000px;
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
				
            $Specialized = $_POST['Specialized'];
 $Location = $_POST['Location'];
            
            $sql = "SELECT DISTINCT a.DocUsername,Name,Qualification,Specialized,Experience,rating,Clinic,Phone,Time_slots,Dates FROM Doctors d,availabletimeslot a WHERE d.Specialized LIKE '%$Specialized%' AND d.Clinic LIKE '%$Location%' AND d.DocUsername=a.DocUsername" ;
            mysql_select_db('Project');
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval ) {
               die('No results: ' . mysql_error());
            }
            
        ?><center><h2>Availability</h2></center>
<br/>
<marquee>
 <span style="color:blue;font-weight:bold;font-size:20px;">View Doctors From Top Specialities ! </br>
Welcome to ECLINIC </span></br></marquee>
<center><table aligns="center" border="1px" style="width:1300px; line-height:40px;border-collapse: collapse; color: black">
			
<tr>
				
<th colspan="10"></th>
			
</tr>
			
<t>

<th>USERNAME</th>				
<th>NAME</th>
				
<th>QUALIFICATION</th>
				
<th>EXPERIENCE</th>
				
<th>SPECIALIZATION</th>
				
<th>RATING</th>
			
<th>CLINIC</th>
			
<th>PHONE</th>
			
<th>DATE</th>
<th>TIMESLOT</th>		
</t>

</br></br></br>
<?php
    while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {

error_reporting(0);            
?>

			
					
<tr>
						
<td><?php echo $row ['DocUsername']?></td>
					
<td><?php echo $row ['Name']?></td>
						
<td><?php echo $row ['Qualification']?></td>
						
<td><?php echo $row ['Experience']?></td>
						
<td><?php echo $row ['Specialized']?></td>
						
<td><?php echo $row ['rating']?></td>
						
<td><?php echo $row ['Clinic']?></td>
						
<td><?php echo $row ['Phone']?></td>
					
<td><?php echo $row ['Dates']?></td>
					
<td><?php echo $row ['Time_slots']?></td>
					
</tr>
				
<?php 
           }
	?> 
		</center></table><br/><br/><br/> <br/><br/><br/><br/> <br/><br/><br/><br/> <br/><br/><br/><br/>
	    	<div id="center_button">
	    <center><button onclick="location.href='Bookapp.php'">Book Appointment</button>   </center>
    	    <center><button onclick="location.href='check.html'">Home</button>   </center> <br/><br/><br/><br/> 
<h4 align="center">
<img src="elogo.png" alt="Img Not available"><br>
<h4 style="color:Black">
<center>
Copyright 2019,eClinic.All Rights Reserved.
</center></h2>
	<?php       


            mysql_close($conn);
         }else {
            ?>
                 <br/>
	<p style="text-align:center; font-size:300%;">
		Select Doctors in Top Specialities
	<center>
                   <form method = "post" action = "<?php $_PHP_SELF ?>" autocomplete="off">
                  <table width = "400" border = "0" cellspacing = "1" 
                     cellpadding = "2">
                     
                     <tr>
		<td width = "100">Specialization</td>
                        <td><input name = "Specialized" type = "text" 
	        id = "Specialized"></td>
		
                     </tr>
<tr>
		<td width = "100">Location</td>
                        <td><input name = "Location" type = "text" 
	        id = "Location"></td>
		
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
<h3> Top Specialists available : <br/></h3>
<h4 style="color:blue;margin-left:60px">

<ul>
<li>Oncologist</li>
<li>GeneralSurgeon</li>
<li>Pathologist</li>
<li>Dermatologist</li>
<li>GeneralPhysician</li>
<li>Pediatrician</li>
<li>Gynaecologist</li>
<li>Dentist</li>
<li>And many more.....</li>
</ul>
</h4><br/>
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