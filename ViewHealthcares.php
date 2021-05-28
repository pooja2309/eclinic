<html> 
   <head>
      <title>Healthcare</title>
<style>
body  {
  background-image: url("Healthcare.jpg");
  background-color: #cccccc;
  background-repeat: no-repeat;
  background-size: 1600px 800px;
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
				
            $Plancode = $_POST['Plancode'];
            
            $sql = "SELECT Plansoffered,Offers,Cost,No_of_tests,Laboratory,Location,Labcontactinfo FROM routinecheckups WHERE Plansoffered= '$Plancode'" ;
            mysql_select_db('Project');
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval ) {
               die('No results: ' . mysql_error());
            }
            
            echo "Search Results\n";
        
    while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
       echo  "<br> - Plan: ". $row["Plansoffered"]. " - Offer: ". $row["Offers"]." - Number of tests included: ". $row["No_of_tests"]. " - Laboratory: ". $row["Laboratory"]. " - Location: ". $row["Location"]. " - LabContact : ". $row["Labcontactinfo"]. "<br>";
	
    }
	?> <br/><div id="center_button">
    	    <center><button onclick="location.href='check.html'">Home</button>   </center> 
	<?php       


            mysql_close($conn);
         }else {
            ?>
                 <br/>
	<p style="text-align:center; font-size:300%;">
		View Plan
	<center>
                   <form method = "post" action = "<?php $_PHP_SELF ?>" autocomplete="off">
                  <table width = "400" border = "0" cellspacing = "1" 
                     cellpadding = "2">
                     
                     <tr>
		<td width = "100">Plancode</td>
                        <td><input name = "Plancode" type = "text" 
	        id = "Plancode"></td>
		
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
<br/><br/><br/><br/><br/>
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