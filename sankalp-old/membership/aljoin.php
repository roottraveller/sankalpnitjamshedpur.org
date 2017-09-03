<html>
<head>
<style>
.b{ font-family:Arial, Helvetica, sans-serif; width:200;}
</style>
</head>
<body><?php
mysql_connect ("localhost", "root","")  or die (mysql_error());
    mysql_select_db ('sankalp');
	
	
	

   
  


$fname = $_POST['fname'];
 $lname = $_POST['lname'];
   $email = $_POST['email'];

$y=$_POST['year'];
$m=$_POST['month'];
$d=$_POST['day'];
$dob=$y."-".$m."-".$d;

$d=$d."-".$m."-".$y;
$b1=$_POST['batch_from'];
$b2=$_POST['batch_to'];
$batch=$b1."-".$b2;
$address = $_POST['address'];
$phone = $_POST['phone'];

$whyjoin = $_POST['whyjoin'];
$howhelp = $_POST['howhelp'];
$branch = $_POST['branch'];
$gender = $_POST['gender'];
$company=$_POST['company'];
$desig=$_POST['desig'];



  if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
	   
	   echo "<script type=text/javascript>alert('Image already exists! change image name or upload another image');
	     window.history.back(); </script>";
   
      }
    else
      {
		    
            $link ="upload/".$_FILES['file']['name'];
             move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/". $_FILES["file"]["name"]);
     
	  
	 

	  }
  
  
                
            
 
        


  


$sql="insert INTO alumni (fname,lname,email,address,phone,desig,company,whyjoin,howhelp,branch,dob,batch,image) VALUES ('$fname','$lname','$email','$address','$phone','$desig','$company','$whyjoin','$howhelp','$branch','$dob','$batch','$link')";

if(mysql_query($sql))
 {  ?>
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
      <h1 class="heading">ALUMNI Registration</h1>
		
        <h1 class="heading1" >  Thank You for registration</font></h1>
		
		 <div class="clear"></div>
 <table align="center"  border="2" bordercolor="#333333" cellspacing="10">
		 <tr ><td class="b">First Name</td><td class="b"> <?php echo $fname; ?></td>
		 </tr>
		 <tr class="b"><td class="b">Last Name</td>
		<td class="b"><?php echo $lname; ?></td>
		 </tr>
		 <tr><td class="b">your current Image</td>
		 <td align="center" class="b"><img align="left" src=" <?php echo $link; ?>" height="100" width="80"</td>
		 </tr>
		 <tr><td class="b">Gender</td>
		<td class="b"><?php echo $gender; ?></td>
		
		 </tr>
		 <tr><td class="b">Date of Birth</td>
		 <td class="b"><?php echo $d; ?>
			</td>
			</tr>
			<tr><td class="b">Email-ID</td>
			<td class="b"><?php echo $email; ?></td>
			</tr>
			
			<tr><td class="b">Batch (required only for alumnis of NIT Jsr)</td>
		<td class="b"><?php echo $b1; ?>
			&nbsp;&nbsp;&nbsp;&nbsp; To &nbsp;&nbsp;&nbsp;&nbsp;
			<?php echo $b2; ?>
		     </td>
			 </tr>
			 <tr><td class="b">Branch (required only for alumnis of NIT Jsr)</td>
			 <td class="b"><?php echo $branch; ?></td></tr>
			<tr>
		   <td class="b">Contact Details</td>
		   </tr>
		   <tr><td class="b">Contact Address </td>
		   <td class="b"><textarea id="address" name="address" rows="8" cols="50" class="frmstyle"><?php echo $address; ?></textarea></td>
		   </tr>
		   <tr><td class="b">Contact Number</td>
		   <td class="b"><?php echo $phone; ?></td>
		   </tr>
		   <tr><td class="b">Only for Alumnis</td>
		   <td class="b">Brief description about your present company or organisation you are associated with. </td>
		   </tr>
		   <tr><td class="b">Designation</td>
		   <td class="b"><?php echo $desig; ?></td>
		   </tr>
		   <tr><td class="b">Company/Organisation (Name &amp; Address)</td>
		   <td class="b"><textarea id="company" name="company" rows="8" cols="50"><?php echo $company; ?></textarea></td>
		   </tr>
		   
		   <tr><td class="b">Why you want to join Sankalp? (optional)</td>
		   <td class="b"><textarea name="whyjoin" id="whyjoin" class="frmstyle"><?php echo $whyjoin; ?></textarea></td>
		   </tr>
		   <tr><td class="b">How would you help Sankalp? (optional)</td>
		   <td class="b"><textarea name="howhelp" id="howhelp" class="frmstyle"><?php echo $howhelp; ?></textarea></td>
		   </tr>
		   </table>
           <br>
	<center>	<?php echo "<a href='membership.php' onClick=\"return confirm('go to main page')\">OK</a>";?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
			</center>		 
	
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
