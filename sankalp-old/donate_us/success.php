<html>
<head>
<style>
.b{ font-family:Arial, Helvetica, sans-serif; width:200;}
</style>
</head>
<body>
<?php
mysql_connect ("localhost", "root","")  or die (mysql_error());
    mysql_select_db ('sankalp');
	
	
	$name=$_POST['name'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$donate=$_POST['donate'];
	
	$sql="insert INTO donate (name,email,contact,donate) values ('$name','$email','$contact','$donate')";
	if(mysql_query($sql))
	{
	/*
echo  
	 "<script type=text/javascript>alert('your donation has been submitted successfully . Thanks for your kind donation !');
	 window.history.back(2); 
	  </script>";}
	else {echo  
"<script type=text/javascript>alert('Error in connection . Please try again !');
	 window.history.back(2); </script>";	}?>
	 
	
	*/
	
	
	 ?>
  <?php
error_reporting(0);
$root='../';
?>
 <?php include $root.'header.php' ?>
        <!-- <div class="clear"></div>-->
		  <div class="page_space"></div>
	
	<div id="wrapper_sec">
   <!-- side panal -->
   <div class="col1">
    <?php include $root.'sidepanal.php' ?>
     </div>
	
<!---- main content------------->
<div class="col2">    
  <div class="pagecontent">	
  
  
      <h1 class="heading1" >  Thank You for your valuable Donation.</font></h1>
	  
	  </br>
	  		 <div class="clear"></div>
 <table align="center"   cellspacing="10">
		 <tr ><td class="b">Name </td><td class="b">  <?php echo $name; ?></td>
		 </tr>
		 <tr class="b"><td class="b">Email-ID </td>
		<td class="b">  <?php echo $email; ?></td>
		 </tr>
		 <tr><td class="b">Contact No </td>
		 <td  class="b">  <?php echo $contact; ?></td>
		 </tr>
		 <tr><td class="b">Your Donations </td>
		<td class="b"> <?php echo $donate; ?></td>
		
		 </tr>
		 </table>
	  </br>
	  
	<center> <h1  >	<?php echo "<a href='donate.php' onClick=\"return confirm('go to main page')\">OK</a>";?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
			</h1>	 </center>
	
		   <?php
	}

else

echo "Error in connection .....";

	 

?>
		   
		 </div><!----------pagecontent end here--------->
      </div><!------col2 end here--->  
    </div><!--wrapper end here--------->
</div><!---------bg end here---------->
<!-- Footer Section -->
<div class="clear"></div>
<?php include $root.'footer.php' ?>

