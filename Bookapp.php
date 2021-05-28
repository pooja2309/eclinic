<html>
   
   <head>
      <title>Book Appointment</title>
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
         if(isset($_POST['add'])) {
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '1nt17cs121';
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
   
$Username = ($_POST['Username']);
$DocUsername=($_POST['DocUsername']);
$Date= ($_POST['Date']);
$Time_slots=($_POST['Time_slots']);

$sql = "INSERT INTO appointment". "(DocUsername,PatientUsername,Dates,Time_slot) "."VALUES('$DocUsername','$Username','$Date','$Time_slots')";               
            mysql_select_db('Project');
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval ) {
               die('Could not enter data: ' . mysql_error());
            }
            
            echo "Booked Successfully\n";
	?> <div id="center_button">
    	    <center><button onclick="location.href='check.html'">LogOut</button>   </center>  
	<center><button onclick="location.href='UserCheckapp.php'">View Appointment</button>   </center>
	<?php       


            mysql_close($conn);
         }else {
            ?>
                 <br/>
	<p style="text-align:center; font-size:300%;">
		Book Appointment
	<center><center><div id="center_button"><button onclick="location.href='Availabledoctors.php'">View Doctors list</button>   </center>

               <form method = "post" action = "<?php $_PHP_SELF ?>" autocomplete="off">
                  <table width = "400" border = "0" cellspacing = "1" 
                     cellpadding = "2">
                  
                     <tr>
                        <td width = "100">DocUsername</td>
                        <td><input name = "DocUsername" type = "text" 
                           id = "DocUsername"></td>
                     </tr>
                     <tr>
                        <td width = "100">Username</td>
                        <td><input name = "Username" type = "text" 
                           id = "Username"></td>
                     </tr>
                  
                     <tr>
                        <td width = "100">Date</td>
                        <td><input name = "Date" type = "date" 
                           id = "Date"></td>
                     </tr>
                  
                     <tr>
                  <td width = "100">Time_slots</td>
                        <td><input name = "Time_slots" type = "time" 
	        id = "Time_slots"></td>
                     </tr>
                  
                     <tr>
                        <td width = "100"> </td>
                        <td> </td>
                     </tr>
                     <tr>
                        <td width = "100"> </td>
                        <td>
                           <input name = "add" type = "submit" id = "add" 
                              value = "Book">
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