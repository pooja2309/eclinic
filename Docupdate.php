<html> 
   <head>
      <title>DoctorUpdate</title>
<style>
body  {
  background-image: url("Eclinic.jpg");
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
         if(isset($_POST['update'])) {
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '1nt17cs121';
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
            $DocUsername = $_POST['DocUsername'];
            $Qualification=$_POST['Qualification'];
            $Experience=$_POST['Experience'];
            $rating = $_POST['rating'];
            $Specialized = $_POST['Specialized'];
            $Clinic = $_POST['Clinic'];
            $Old_Phone=$_POST['Old_Phone'];
            $Phone=$_POST['Phone'];
            $DOB=$_POST['DOB'];
	error_reporting(0);            
            $sql = "UPDATE Doctors SET Qualification='$Qualification', Experience=$Experience, Specialized='$Specialized', Clinic='$Clinic', Phone=$Phone, rating=$rating WHERE DocUsername='$DocUsername' AND DOB='$DOB' AND Phone=$Old_Phone";
            mysql_select_db('Project');
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval ) {
               die('No results: ' . mysql_error());
            }

        if(!mysql_fetch_array($retval, MYSQL_ASSOC))
{
?>
<h3><center>
Thankyou for Using EClinic </center>
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
            echo "Successfully Updated !\n";
        
   
	?> <br/><div id="center_button">
	    <center><button onclick="location.href='DocAppointments.php'">Check my Appointments</button> </br>
                   <center><button onclick="location.href='Docdetails.php'">MyDetails</button></center></br>
	    <div id="center_button">
    	    <center><button onclick="location.href='check.html'">LogOut</button>   </center> 
<h3><center>
</center>
<h2><center>Welcome to EClinic</center></h2>
</h3></br></br></br>
</br></br></br></br><p align="center">
<img src="elogo.png" alt="Img Not available"><br>
<p style="color:Black"></br></br>
<center>
Copyright 2019,eClinic.All Rights Reserved.
</center></p>	

	<?php       
}

            mysql_close($conn);
         }else {
            ?>
                 <br/>
	<p style="text-align:center; font-size:300%;">
		UserUpdate
	<center>
               <form method = "post" action = "<?php $_PHP_SELF ?>" autocomplete="off">
                  <table width = "400" border =" 0" cellspacing = "1" 
                     cellpadding = "2">
                  
                     <tr>
                        <td width = "100">DocUsername</td>
                        <td><input name = "DocUsername" type = "text" 
                           id = "DocUsername"></td>
                     </tr>

                     <tr>
                        <td width = "100">DOB</td>
                        <td><input name = "DOB" type = "date" 
                           id = "DOB"></td>
                     </tr>
	 <tr>
                        <td width = "100">Old_Phone</td>
                        <td><input name = "Old_Phone" type = "text" 
                           id = "Old_Phone"></td>
                     </tr>
	Type Valid Details:
                     <tr>
                        <td width = "100">Phone</td>
                        <td><input name = "Phone" type = "text" 
                           id = "Phone"></td>
                     </tr>
                  
                     <tr>
                        <td width = "100">Qualification</td>
                        <td><input name = "Qualification" type = "text" 
                           id = "Qualification"></td>
                     </tr>
                     <tr>
                        <td width = "100">Specialized</td>
                        <td><input name = "Specialized" type = "text" 
                           id = "Specialized"></td>
                     </tr>
                      <tr>
                        <td width = "100">Experience</td>
                        <td><input name = "Experience" type = "text" 
                           id = "Experience"></td>
                     </tr>
                         <tr>
                        <td width = "100">rating</td>
                        <td><input name = "rating" type = "text" 
                           id = "rating"></td>
                     </tr>
                         <tr>
                        <td width = "100">Clinic</td>
                        <td><input name = "Clinic" type = "text" 
                           id = "Clinic"></td>
                     </tr>
             
                     <tr>
                        <td width = "100"> </td>
                        <td> </td>
                     </tr>
                  
                     <tr>
                        <td width = "100"> </td>
                        <td>
                           <input name = "update" type = "submit" 
                              id = "update" value = "Update">
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