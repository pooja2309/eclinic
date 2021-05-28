<html> 
   <head>
      <title>MyDetails-User</title>
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
         if(isset($_POST['select'])) {
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '1nt17cs121';
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
				
            $DocUsername = $_POST['DocUsername'];
            
            $sql = "SELECT DocUsername,Name,Phone,Clinic,Experience,Qualification,Specialized,DOB FROM Doctors WHERE DocUsername = '$DocUsername'" ;
            mysql_select_db('Project');
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval ) {
               die('No results: ' . mysql_error());
            }

            
            echo "User Details\n";

        
    while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
?>
</br></br><center><table aligns="center" border="1px" style="width:400px;height:400px;">
<tr>
<th>USERNAME: </th>
<td><center><?php echo $row["DocUsername"]?></center></td>
</tr>
<tr>
<th>NAME: </th>
<td><center><?php echo $row["Name"]?></center></td>
</tr>
<tr>
<th>QUALIFICATION: </th>
<td><center><?php echo $row["Qualification"]?></center></td>
</tr>
<tr>
<th>EXPERIENCE: </th>
<td><center><?php echo $row["Experience"]?></center></td>
</tr>
<tr>
<th>SPECIALIZED: </th>
<td><center><?php echo $row["Specialized"]?></center></td>
</tr>
<tr>
<th>CLINIC: </th>
<td><center><?php echo $row["Clinic"]?></center></td>
</tr>
<tr>
<th>PHONE: </th>
<td><center><?php echo $row["Phone"]?></center></td>
</tr>
<tr>
<th>DOB: </th>
<td><center><?php echo $row["DOB"]?></center></td>
</tr>
<?php
}

?></table> </center>
<br/>
<div id="center_button">
    	    <center><button onclick="location.href='check.html'">LogOut</button>   </center>
	    <center><button onclick="location.href='Docdelete.php'">Delete my account</button>  </center>
	    <center><button onclick="location.href='DocUpdate.php'">Update my account</button>   </center> 
	<?php       


            mysql_close($conn);
         }else {
            ?>
                 <br/>
	<p style="text-align:center; font-size:300%;">
		My Details
	<center>
	Re-enter you UserId
                   <form method = "post" action = "<?php $_PHP_SELF ?>" autocomplete="off">
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