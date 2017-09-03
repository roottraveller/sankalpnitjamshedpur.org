    <?php
        error_reporting(0);
        $root='';
    ?>
    <!-- include header -->
    <?php include $root.'header.php' ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">404 
                    <small>Page Not Found</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index">Home</a>
                    </li>
                    <li class="active">404</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">

            <div class="col-lg-12">
                <div class="jumbotron">
                    <h1><span class="error-404">404 Error !</span>
                    </h1>
                    <p>The page you're looking for could not be found. Here are some helpful links to get you back on track:</p>
                     <ul>
          <li><a href="<?php echo $root;?>index.php">Home</a></li>
          <li><a href="<?php echo $root;?>about_us/abus.php">About</a></li>
          <li><a href="<?php echo $root;?>activities/activities.php">What We Do</a>
            <ul>
                <li><a href="<?php echo $root;?>activities/education.php">Education to All</a></li>
                <li><a href="<?php echo $root;?>activities/admissiontoschool.php">Admission in School</a></li>
                 <li><a href="<?php echo $root;?>activities/computerclasses.php">Computer Classes</a></li>
                 <li><a href="<?php echo $root;?>activities/healthcamp.php">Health Camp</a></li>
                 <li><a href="<?php echo $root;?>activities/extracurriculum.php">Extracurriculum Activities</a></li>
             </ul>
          </li>
		             <li><a href="<?php echo $root;?>alumni/alumni">Alumni</a></li>
          <li><a href="<?php echo $root;?>donate/index">Donate</a>
           <ul>
                 <li><a href="<?php echo $root;?>donate_us/donateus.php">Donate Books to Sankalp</a></li>
                 <li><a href="<?php echo $root;?>donate_us/donateus.php">Donate money to Sankalp</a></li>
                 <li><a href="<?php echo $root;?>donate_us/sponsorchild.php">Sponsor Child to Sankalp</a></li>
                 <li><a href="<?php echo $root;?>donate_us/donateus.php">Other Donation to Sanaklp</a></li>
                 
            </ul>
          </li>
		  <li><a href="<?php echo $root;?>sankalpteam">Our Team</a>
            <ul>
                <li><a href="<?php echo $root;?>team/academicteam.php">Academic Team</a></li>
                <li><a href="<?php echo $root;?>team/maintenanceteam.php">Maintenance Team</a></li>
                <li><a href="<?php echo $root;?>team/financeteam.php">Finance Team</a></li>
                <li><a href="<?php echo $root;?>team/publicrelationteam.php">Public Relation Team</a></li>
                <li><a href="<?php echo $root;?>team/sponsorshipteam.php">Sponsorship Team</a></li>
                <li><a href="<?php echo $root;?>team/webteam.php">Web Team</a></li>
          </ul>
          </li>
		  <li><a href="<?php echo $root;?>gallery/imagegallery.php">Image Gallery </a></li>
          <li><a href="<?php echo $root;?>gallery/newsgallery.php">News Gallery</a></li>
           <li><a href="<?php echo $root;?>centers/centers.php">Centers</a></li>
          <li><a href="<?php echo $root;?>membership/joinus.php">Join us</a></li>
		  <li><a href="<?php echo $root;?>donate/donerlists">Doner List</a></li>          
          <!--<li><a href="<?php echo $root;?>membership/membership.php">Membership</a></li>-->
          <li><a href="<?php echo $root;?>quick_links/downloads.php">Downloads</a> </li>
          <li><a href="<?php echo $root;?>contact">Contact us</a></li>
           <li><a href="<?php echo $root;?>faqs/faqs">Faq</a></li>
		   <li><a href="http://en.wikipedia.org/wiki/Non-governmental_organization" target="_blank">NGO</a></li>
          <li><a href="<?php echo $root;?>quick_links/others/sankalp_brochure.pdf" target="_blank">Sankalp Broucher</a></li>
          <li><a href="<?php echo $root;?>quick_links/privacy.php">Privacy Policy</a></li>
          <li><a href="<?php echo $root;?>quick_links/disclaimer.php">Disclaimer</a></li>
          <li><a href="<?php echo $root;?>quick_links/feedback.php">Feedback</a></li>
          <li><a href="<?php echo $root;?>membership/volunteer.php">Volunteer</a></li>
    </ul>
    </div>          
     
          
           
         
    
                </div>
            </div>

        </div>

        

     </div>
    <!-- /.container -->

        <!-- Footer -->

        <?php include $root.'footer.php' ?>
    
</body>

</html>
