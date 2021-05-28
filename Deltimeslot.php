<html>
  <head>
      <title>Delete Timeslot</title>
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
         if(isset($_POST['delete'])) {
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '1nt17cs121';
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
				
            $DocUsername = $_POST['DocUsername'];
            $Date = $_POST['Date'];
	
            error_reporting(0);
            $sql = "DELETE FROM availabletimeslot WHERE Dates='$Date' AND DocUsername='$DocUsername'" ;
            mysql_select_db('Project');
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval ) {
               die('No results: ' . mysql_error());
            }

        if(!mysql_fetch_row($retval, MYSQL_ASSOC))
{
?>
<h3><center>
</center>
</h3></br></br>
<h2><center>
Thankyou For using ECLINIC...</h2></center>
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
            echo "Successfully Deleted\n";
        
   
	?> <br/>
	    <div id="center_button">
    	    <center><button onclick="location.href='check.html'">LogOut</button>   </center> 
<h3><center>
Deleted Timeslot</center>
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
	ENTER VALID DETAILS:
               <form method = "post" action = "<?php $_PHP_SELF ?>" autocomplete="off">
                  <table width = "400" border = "0" cellspacing = "1" 
                     cellpadding = "2">
                    
                     <tr>
                        <td width = "100">DocUsername</td>
                        <td><input name = "DocUsername" type = "text" 
                           id = "DocUsername"></td>
                     </tr>
                    
                     <tr>
                        <td width = "100">Date</td>
                        <td><input name = "Date" type = "date" 
                           id = "Date"></td>
                     </tr>
                     
                     <tr>
                        <td width = "100"> </td>
                        <td> </td>
                     </tr>
                     
                     <tr>
                        <td width = "100"> </td>
                        <td>
                           <input name = "delete" type = "submit" 
                              id = "delete" value = "Delete">
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