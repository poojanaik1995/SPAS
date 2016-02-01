<?php
if(isset($_POST['submit']))
{
	$note = $_POST['element_1'];
	
	$con = mysql_connect("localhost","Admin","pkvcobas132");
	if(!$con)
		die("Reason : ".mysql_error());
               
	mysql_select_db("SPAS",$con);
	
	$query = "INSERT INTO notifications values('$note')";
                
   
	
	if(mysql_query($query,$con))
	{
		echo'<script type="text/javascript">
			alert("Successfull!");
			
		window.location.href="index.php";
		</script>';
	}
	else
	{
		echo'<script type="text/javascript">
			alert("Unsuccessfull!");
			window.location.href="addNotification.html";
			</script>';
	}
}
//hello
?>
