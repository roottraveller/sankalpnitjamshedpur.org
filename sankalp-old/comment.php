<head>
<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
<script src="js/jquery.colorbox-min.js" type="text/javascript"></script>
<script src="js/jquery.ui.js" type="text/javascript"></script>
<script src="js/jquery.corners.min.js" type="text/javascript"></script>
<script src="js/bg.pos.js" type="text/javascript"></script>
<script src="js/jquery.wysiwyg.js" type="text/javascript"></script>
<script type="text/javascript" src="js/tabs.pack.js"></script>
<script src="js/cleanity.js" type="text/javascript"></script>
</head>
<?php include 'auth.inc.php'; ?>

<div style="padding: 10px 10px 5px;"><!-- use no-padding wherever you need element padding gone -->
  
              <ul role="tablist" class="list-links ui-accordion ui-widget ui-helper-reset" id="cmthome">
                  <li class="ui-accordion-li-fix" onclick="document.location.href='index.php';" style="cursor:pointer"><a title="Close Comment" tabindex="-1" aria-expanded="false" role="tab" class="ui-accordion-header ui-helper-reset ui-state-active ui-corner-all" href="index.php"><span class="ui-icon ui-icon-triangle-1-s"></span><img src="<?php echo $root;?>images/up.png" width="30" height="20" /></a>
                   </li> 
                 
                  <li class="ui-accordion-li-fix"><a title="View Comment" tabindex="-1" aria-expanded="false" role="tab" class="ui-accordion-header ui-helper-reset ui-state-default ui-corner-all" href="#"><span class="ui-icon ui-icon-triangle-1-e"></span><img src="<?php echo $root;?>images/down.png"  width="30" height="20"/></a>
           <p>
		
		<?php 		
			
	$sql=mysql_query("select * from comment order by sno DESC");
	
	 while ($r = mysql_fetch_array($sql)){
	
  ?>

 <table class="usercmt">
 <div class="tablespace"></div>
		             <tr ><td><div class="left"><?php echo $r['name'] ?> </div> : Comments</td></tr>
      				<tr><td> <div class="cmnt_ppt"><?php echo $r['comment'] ?></div></td></tr>
					<tr><td> <div class="right">Posted on : <?php echo $r['date'] ?></div></td></tr>
		             <tr><td> </td></tr>
		 </table>
		
		
		 <?php	}?>
		 
 <br />
     <font style="font-family:'Courier New', Courier, monospace"; size="+1">   <a href="quick_links/feedback.php"> Add your comment </a></font>
                  </li>
                 
              </ul>
             
			  </div>
  
		  
		  
		  
		  