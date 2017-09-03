<!--footer -->
<div class="nav" style="background-color:#2C3E50">
	<p><br></p>
    <div class="row">
    <div class="col-lg-1"></div>
    <div class="col-lg-10">

        <div class="col-md-2">
            
            <ul class="nav nav-list">
                <li><a style="padding:5px"  href="http://en.wikipedia.org/wiki/Non-governmental_organization" target="_blank" class="flink" >NGO</a></li>
                <li><a style="padding:5px"  href="<?php echo $root;?>quick_links/sitemap" class="flink" >Site map</a></li>
                <li><a style="padding:5px"  href="<?php echo $root;?>quick_links/others/sankalp_brochure.pdf" target="_blank" class="flink" >Sankalp Brochure</a></li>
                <li><a style="padding:5px"  href="<?php echo $root;?>donate/donerlists" class="flink">&nbsp;Doner List&nbsp;</a></li>
                 <li><a style="padding:5px"  href="<?php echo $root;?>quick_links/downloads" class="flink">&nbsp;Downloads&nbsp;</a></li>
                <li><a style="padding:5px"  href="<?php echo $root;?>quick_links/privacy" class="flink">&nbsp;Privacy Policy&nbsp;</a></li>
                <li><a style="padding:5px"  href="<?php echo $root;?>quick_links/disclaimer" class="flink">&nbsp;Disclaimer&nbsp;</a></li>
                <li><a style="padding:5px"  href="<?php echo $root;?>faqs/faqs" class="flink">&nbsp;FAQ&nbsp;</a></li>
            </ul> 
        </div> 
        <div class="col-md-1"></div>
            <div class="col-md-2">
            
            <ul class="nav nav-list">
                <li><a style="padding:5px"  href="<?php echo $root;?>membership/joinus" class="flink">&nbsp;Membership&nbsp;</a></li>
                <li><a style="padding:5px"  href="<?php echo $root;?>alumni/alumni" class="flink">&nbsp;Alumni&nbsp;</a></li>
                <li><a style="padding:5px"  href="<?php echo $root;?>donate/" class="flink">&nbsp;Donate Money&nbsp;</a></li>
                 <li><a style="padding:5px"  href="<?php echo $root;?>donate/donatebooks" class="flink">&nbsp;Donate Books&nbsp;</a></li>
                <li><a style="padding:5px"  href="<?php echo $root;?>donate/sponsorchild" class="flink">&nbsp;Sponsor a child&nbsp;</a></li>
                <li><a style="padding:5px"  href="<?php echo $root;?>gallery/#image-gallery" class="flink">&nbsp;Image Gallery&nbsp;</a></li>
                <li><a style="padding:5px"  href="<?php echo $root;?>gallery/#news-gallery" class="flink">&nbsp;News Gallery&nbsp;</a></li>
                <li><a style="padding:5px"  href="<?php echo $root;?>centers/centers" class="flink">&nbsp;Our Centers&nbsp;</a></li>
            </ul> 
        </div>   
        <div class="col-md-1"></div>
            <div class="col-md-2">
            
            <ul class="nav nav-list">
                <li><a style="padding:5px"  href="<?php echo $root;?>team/academicteam" class="flink">&nbsp;Academic Team&nbsp;</a></li>
                <li><a style="padding:5px"  href="<?php echo $root;?>team/maintenanceteam" class="flink">&nbsp;Maintenance Team&nbsp;</a></li>
                <li><a style="padding:5px"  href="<?php echo $root;?>team/financeteam" class="flink">&nbsp;Finance Team&nbsp;</a></li>
                <li><a style="padding:5px"  href="<?php echo $root;?>team/publicrelationteam" class="flink">&nbsp;Public Relations Team&nbsp;</a></li>
                                <li><a style="padding:5px"  href="<?php echo $root;?>team/eventmanagement" class="flink">&nbsp;Event Management Team&nbsp;</a></li>
				<li><a style="padding:5px"  href="<?php echo $root;?>team/sponsorshipteam" class="flink">&nbsp;Sponsorship Team&nbsp;</a></li>
                <li><a style="padding:5px"  href="<?php echo $root;?>team/webteam" class="flink">&nbsp;Web Team&nbsp;</a></li>
                
            </ul> 
        </div>  
        <div class="col-md-1"></div>
            <div class="col-md-3">
            
            <ul class="nav nav-list">
                <li><a style="padding:5px"  href="<?php echo $root;?>contact" class="flink">&nbsp;Contact us&nbsp;</a></li>
                <li><a style="padding:5px"  href="#" class="flink">&nbsp;+91 7739836960&nbsp;</a></li>
                <li><a style="padding:5px"  href="#" class="flink">&nbsp;+91 8863081994&nbsp;</a></li>
                <li><a style="padding:5px"  href="mailto:contact@sankalpnitjamshedpur.org" class="flink">&nbsp;contact@sankalpnitjamshedpur.org&nbsp;</a></li>
                <li><a style="padding:5px"  href="mailto:dev@sankalpnitjamshedpur.org" class="flink">&nbsp;dev@sankalpnitjamshedpur.org&nbsp;</a></li>
            </ul> 
        </div>  
        <p><br></p> <p><br></p><p><br></p> <p><br></p>
        <div class="col-md-10" ><font class="flink"><br>Copyright &copy; 2015 <a href="<?php echo $root;?>team/webteam">Sankalp Web Team. </a>Sankalp - A Pledge to Change. All Rights Reserved .
          <br /> Design and Devloped By  <b><a  href="http://www.facebook.com/ashunitjsr" target="_blank">Ashutosh Kumar</a></b> and <b><a href="https://www.facebook.com/MauryaRKM" target="_blank">RishiKesh Maurya </a></b>.
    </font> </div>
    </div>
    </div>

</div>





<!-- /.container -->

<!-- jQuery -->
<script src="<?php echo $root?>js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo $root?>js/bootstrap.min.js"></script>
<div id="fb-root"></div>
<script type="text/javascript">
    window.fbAsyncInit = function() {
            FB.init({
                    appId   : '<?php echo $facebook->getAppId(); ?>',
                    session : <?php echo json_encode($session); ?>, // don't refetch the session when PHP already has it
                    status  : true, // check login status
                    cookie  : true, // enable cookies to allow the server to access the session
                    xfbml   : true // parse XFBML
            });

            // whenever the user logs in, we refresh the page
            FB.Event.subscribe('auth.login', function() {
                    window.location.reload();
            });
    };

    (function() {
            var e = document.createElement('script');
            e.src = document.location.protocol + '//connect.facebook.net/en_US/all.js';
            e.async = true;
            document.getElementById('fb-root').appendChild(e);
    }());
</script>
</div>
