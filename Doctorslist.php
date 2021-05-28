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
            
            $sql = "SELECT DISTINCT DocUsername,Name,Qualification,Specialized,Experience,rating,Clinic,Phone FROM Doctors WHERE Specialized LIKE '%$Specialized%' AND Clinic LIKE '%$Location%'" ;
            mysql_select_db('Project');
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval ) {
               die('No results: ' . mysql_error());
            }
            
        ?><center><h2><span style="color:purple;text-decoration:underline">LIST OF REGISTERED DOCTORS IN ECLINIC</span></h2></center>
<br/>
<marquee>
 <span style="color:blue;font-weight:bold;font-size:20px;">View Doctors From Top Specialities ! </br>
Welcome to ECLINIC </span></br></marquee>
<center><table aligns="center" border="1px" style="width:1300px; line-height:40px;border-collapse: collapse; color: black">
			
<tr>
				
<th colspan="10"></th>
			
</tr>
			
<t>

<th><span style="color:purple;text-decoration:underline;font-size:20px;">USERNAME</th>				
<th><span style="color:purple;text-decoration:underline;font-size:20px;">NAME</th>
				
<th><span style="color:purple;text-decoration:underline;font-size:20px;">QUALIFICATION</th>
				
<th><span style="color:purple;text-decoration:underline;font-size:20px;">EXPERIENCE</th>
				
<th><span style="color:purple;text-decoration:underline;font-size:20px;">SPECIALIZATION</th>
				
<th><span style="color:purple;text-decoration:underline;font-size:20px;">RATING</th>
			
<th><span style="color:purple;text-decoration:underline;font-size:20px;">CLINIC</th>
			
<th><span style="color:purple;text-decoration:underline;font-size:20px;">PHONE</th>
			
	
</t>

</br></br></br>
<?php
    while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {

error_reporting(0);            
?>

			
					
<tr>
						
<td><span style="color:blue;font-weight:bold;font-size:19px;"><?php echo $row ['DocUsername']?></td>
					
<td><span style="color:blue;font-weight:bold;font-size:19px;"><?php echo $row ['Name']?></td>
						
<td><span style="color:darkolivegreen;font-weight:bold;font-size:19px;"><?php echo $row ['Qualification']?></td>
						
<td><span style="color:blue;font-weight:bold;font-size:19px;"><?php echo $row ['Experience']?></td>
						
<td><span style="color:blue;font-weight:bold;font-size:19px;"><?php echo $row ['Specialized']?></td>
						
<td><span style="color:blue;font-weight:bold;font-size:19px;"><?php echo $row ['rating']?></td>
						
<td><span style="color:darkolivegreen;font-weight:bold;font-size:19px;"><?php echo $row ['Clinic']?></td>
						
<td><span style="color:darkolivegreen;font-weight:bold;font-size:19px;"><?php echo $row ['Phone']?></td>
				
</tr>
				
<?php 
           }
	?> 
		</center></table><br/><br/><br/> <br/><br/><br/><br/> <br/>
	    	<div id="center_button">
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
		<td width = "100"><span style="color:darkolivegreen;font-weight:bold;font-size:19px;">Specialization</td>
                        <td><input name = "Specialized" type = "text" 
	        id = "Specialized"></td>
		
                     </tr>
<tr>
		<td width = "100"><span style="color:darkolivegreen;font-weight:bold;font-size:19px;">Location</td>
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