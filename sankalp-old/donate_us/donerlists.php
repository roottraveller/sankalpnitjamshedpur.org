<?php
error_reporting(0);
$root='../';
?>
<?php include $root.'header.php' ?>
         <div class="clear"></div>
		  <div class="page_space"></div>
	
	<div id="wrapper_sec">
   <!-- side panal -->
   <div class="col1">
    <?php include $root.'sidepanal.php' ?>
	<?php include $root.'auth.inc.php'?>
	
		  
     </div>
<!---- main content------------->
<div class="col2">    
  <div class="pagecontent">	
     <h1  class="heading">Donor's List</h1>
		  <p>We are thankful to you for your kind  donations and for showing faith in us and supporting our cause.<br />
		  Note: Some of the donors have requested us not to reveal their identity. Their names are not shown here.</br></br>
           <b>Last Updated in:- October 2014.</b> </p>
          
		  <table class="donerlist_head">
		  
		  <th>Sl. No.</th><th>Name</th><th>Batch(for NIT Jsr alumni)</th><th>Current Position</th>
		  </table>
		  <table class="donerlist">
		            <?php
		   $result=mysql_query("select * from doners ");
			while($row = mysql_fetch_array($result))
			{
			      $i=$row['sno'];  
				  if($i%2==0)
{

echo('<tr class="tabledark">');
}
else
{
echo('<tr class="tablelight">');
}
?>

				  
				    
      					<td  ><?php echo $row['sno'] ?></td>
						<td ><?php echo $row['name'] ?></td>
						<td ><?php echo $row['batch'] ?></td>
						<td ><?php echo $row['company'] ?></td>
      					</tr>
						<?php } ?>
						</table>
		 
		  <p>&nbsp;</p>
		  <h3>Other Donations :</h3>
		  <div class="donertable">
		  Cash donation by Amit, Dev, Indradev Giri, Ratnesh (2007 batch) for computer purchase.<br />
	      Employees of Tata steel donated a laptop for Computer literacy to Sankalp.<br />
	      Smita Kujur(2009 batch) donated some Books to Sankalp Library.<br />
	       Employees of Tata Steel set up a library for student of SANKALP.<br /> 
		  </div>
		 
		  <p>Any Queries mail us to <a href="#">contact@sankalpnitjamshedpur.org  </a></p>
		  <p>Thanks to all of you for generous support . </p>
		  <h3>SANKALP TEAM</h3>
	
		      

   </div><!----------pagecontent end here--------->
 </div><!------col2 end here--->  
    </div><!--wrapper end here--------->
</div><!---------bg end here---------->
<!-- Footer Section -->
<div class="clear"></div>
<?php include $root.'footer.php' ?>