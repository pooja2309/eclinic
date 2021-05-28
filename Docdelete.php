<html>
   
   <head>
      <title>Doctor Delete Account</title>
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
         if(isset($_POST['delete'])) {
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '1nt17cs121';
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
error_reporting(0);            
            $DocUsername = $_POST['DocUsername'];
            $Phone_number = $_POST['Phone_number'];
            $DOB = $_POST['DOB'];
$sql = "SELECT DocUsername FROM Doctors WHERE DocUsername = '$DocUsername' AND Phone='$Phone_number' AND DOB='$DOB'" ;               
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
else {            
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

$sql = "DELETE FROM Doctors WHERE DocUsername='$DocUsername'";

$retval = mysql_query( $sql, $conn);


if(!$retval){

	die('Done '. mysql_error());
}

 if(!mysql_fetch_array($retval, MYSQL_ASSOC))
{
?>
<h3><center>
Successful Deletion </center>
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
?>
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
		RE-ENTER YOUR DETAILS
	<center>
               <form method = "post" action = "<?php $_PHP_SELF ?>" autocomplete="off" >
                  <table width = "400" border = "0" cellspacing = "1" 
                     cellpadding = "2">
                  
                     <tr>
                        <td width = "100">DocUsername</td>
                        <td><input name = "DocUsername" type = "text" 
                           id = "DocUsername"></td>
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
                           <input name = "delete" type = "submit" id = "delete" 
                              value = "delete">
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