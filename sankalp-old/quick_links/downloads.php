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
     <h1  class="heading">Downloads from Sankalp</h1>
	 
	 <p><b>Please click on any one of the headers to see all the files under that section.</b></p>
			
<p><a href="<?php echo $root?>quick_links/academic.php"><img src="<?php echo $root;?>images/folder.jpg" class="pdf" />Academic Reports</a></p>
<p><a href="<?php echo $root?>quick_links/finance.php" ><img src="<?php echo $root;?>images/folder.jpg" class="pdf" />Financial Reports</a></p>
<p><a href="<?php echo $root?>quick_links/teamtask.php"><img src="<?php echo $root;?>images/folder.jpg" class="pdf" />Task of Various Teams</a></p>
<p><a href="<?php echo $root?>quick_links/others.php" ><img src="<?php echo $root;?>images/folder.jpg" class="pdf" />Other Downloads </a></p>


<p>&nbsp;</p>
<p>&nbsp;</p><p>&nbsp;</p>
<p>&nbsp;</p>
	
   </div><!----------pagecontent end here--------->
 </div><!------col2 end here--->  
    </div><!--wrapper end here--------->
</div><!---------bg end here---------->
<!-- Footer Section -->
<div class="clear"></div>
<?php include $root.'footer.php' ?>
