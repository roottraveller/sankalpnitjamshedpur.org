<?php
error_reporting(0);
$root='';
?>

<?php include $root.'header.php' ?>
        <!-- <div class="clear"></div>-->
		<!--<div id="bg">-->
		  <div class="page_space"></div>
	
	<div id="wrapper_sec">
	<div class="spacehome"></div>
	<!--<p><br /></p>-->
   <!-- side panal -->
   <div class="left">
    <?php include $root.'sidepanal1.php' ?>
     </div>
	
<!---- main content------------->
<div class="right"> 
  <?php include 'newslide.php'; ?>
  </div>
  
  <div  class="clear"></div>	<div id="wrapper_sec">	  
<!---- main content------------->
     <h1  class="heading">Sankalp - A Pledge To Change</h1> 		
		  <div class="moto">"Service has taught us courage, compassion, love, appreciation, team work and humanity. We have seen hardship and pain and the power a simple act of kindness holds. And we have been changed forever by the people we have met and worked with."</div>
		  
		  <p><br /></p>
		  <div id="noticeboard">
		     <div class="noticehed">Recent Updates in Sankalp</div>
			
				<div class="notice">
				 <?php include 'noticeboard.php'?>
				 </div>
			</div><!--noticeboard end ----->
<div id="homeright"> 
		<!--<div id="slider2">-->
	<div class="newsimg">
			<img src="<?php echo $root;?>images/poster/poster1.jpg"  alt="" height="140px" width="330px"  />
		<!--	<div class="banner_des">
                <h4></h4>
                <p></p>
                </div>-->
	</div> <div class="clear"></div>
			<div class="spacehome"></div>
			         <div class="clear"></div>
	<div class="newsimg">
			<img src="<?php echo $root;?>images/poster/poster2.jpg"  alt="" height="140px" width="330px"  />
			<!--<div class="banner_des">
                <h4></h4>
                <p></p>
                </div>-->
	</div>
</div><!------homeright end---------->
 
		<div class="clear"></div>
		 <h4> click below to ADD your COMMENTS.</h4>
		  	<?php include 'comment.php' ?><!-- comment display-->	
	
    </div><!--wrapper end here--------->
</div><!---------bg end here---------->
<!-- Footer Section -->


<div class="clear"></div>
<?php include 'footer.php' ?>
