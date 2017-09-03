<?php
error_reporting(0);
$root='../';
?>
<?php include $root.'auth.inc.php'?>
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
     <h1  class="heading">Certificates from Sankalp</h1>
	 
	 <center><b><h4>Please select a Batch</h4></b><br>
			
<select class="form-control" name="batch"  >
			 <option selected="selected" value="0">Select Batch</option>
			 <option value="2010" onclick="a();">2010</option>
			<option value="2011" onclick="2011();">2011</option> 
			
			
				
			</select>

<div id= "2010"style="display:none" >
 <table class="donerlist_head">
		  
		  <th>Sl. No.</th><th>Name</th><th>Batch</th><th>Special Remark</th><th>Certificate No.</th>
		  </table>
		  <table class="donerlist">
		            <?php
		   $result=mysql_query("select * from 2k10 ");
			while($row = mysql_fetch_array($result))
			{
			      $i=$row['SNO'];  
				  if($i%2==0)
{

echo('<tr class="tabledark">');
}
else
{
echo('<tr class="tablelight">');
}
?>

				  
				    
      					<td  ><?php echo $row['SNO'] ?></td>
						<td ><?php echo $row['NAME'] ?></td>
						<td ><?php echo $row['BATCH'] ?></td>
						<td ><?php echo $row['REMARK'] ?></td>
						<td ><?php echo $row['CERTI_NO'] ?></td>
      					</tr>
						<?php } ?>
						</table>
						</div>
	</center>

<p>&nbsp;</p>
<p>&nbsp;</p><p>&nbsp;</p>
<p>&nbsp;</p>
	
   </div><!----------pagecontent end here--------->
 </div><!------col2 end here--->  
    </div><!--wrapper end here--------->
</div><!---------bg end here---------->
<!-- Footer Section -->
<div class="clear"></div>
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript">
function a(){

$('#2010').fadeIn("slow").css("display","block");
}
function oth(){
$('#2011').fadeIn("slow").css("display","block");
}
</script>
<?php include $root.'footer.php' ?>
