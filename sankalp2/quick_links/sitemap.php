    <?php
        error_reporting(0);
        $root='../';
    ?>
    <!-- include header -->
    <?php include $root.'header.php' ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sanaklp Sitemap
                    <small></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="../">Home</a>
                    </li>
                    <li class="active">Sitemap</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">

            <div class="col-lg-12">
                <div class="jumbotron">
                    
                     <ul>
          <li><a href="<?php echo $root;?>index">Home</a></li>
          <li><a href="<?php echo $root;?>aboutus">About</a></li>
          <li><a href="<?php echo $root;?>activities/">What We Do</a>
            <ul>
                <li><a href="<?php echo $root;?>activities/education">Education to All</a></li>
                <li><a href="<?php echo $root;?>activities/admissiontoschool">Admission in School</a></li>
                 <li><a href="<?php echo $root;?>activities/computerclasses">Computer Classes</a></li>
                 <li><a href="<?php echo $root;?>activities/healthcamp">Health Camp</a></li>
                 <li><a href="<?php echo $root;?>activities/extracurriculum">Extracurriculum Activities</a></li>
             </ul>
          </li>
		             <li><a href="<?php echo $root;?>alumni/alumni">Alumni</a></li>
          <li><a href="<?php echo $root;?>donate/index">Donate</a>
           <ul>
                 <li><a href="<?php echo $root;?>donate/donatebooks">Donate Books to Sankalp</a></li>
                 <li><a href="<?php echo $root;?>donate/">Donate money to Sankalp</a></li>
                 <li><a href="<?php echo $root;?>donate/sponsorchild">Sponsor Child to Sankalp</a></li>
                 <li><a href="<?php echo $root;?>donate/otherdonation">Other Donation to Sanaklp</a></li>
                 
            </ul>
          </li>
		  <li><a href="<?php echo $root;?>team">Our Team</a>
            <ul>
                <li><a href="<?php echo $root;?>team/academicteam">Academic Team</a></li>
                <li><a href="<?php echo $root;?>team/maintenanceteam">Maintenance Team</a></li>
                <li><a href="<?php echo $root;?>team/financeteam">Finance Team</a></li>
                <li><a href="<?php echo $root;?>team/publicrelationteam">Public Relation Team</a></li>
                <li><a href="<?php echo $root;?>team/sponsorshipteam">Sponsorship Team</a></li>
                <li><a href="<?php echo $root;?>team/webteam">Web Team</a></li>
          </ul>
          </li>
		  <li><a href="<?php echo $root;?>gallery/#image-gallery">Image Gallery </a></li>
          <li><a href="<?php echo $root;?>gallery/#news-gallery">News Gallery</a></li>
           <li><a href="<?php echo $root;?>centers/centers">Centers</a></li>
          <li><a href="<?php echo $root;?>membership/joinus">Join us</a></li>
		  <li><a href="<?php echo $root;?>donate/donerlists">Doner List</a></li>          
          <!--<li><a href="<?php echo $root;?>membership/membership.php">Membership</a></li>-->
          <li><a href="<?php echo $root;?>quick_links/downloads">Downloads</a> </li>
          <li><a href="<?php echo $root;?>contact">Contact us</a></li>
           <li><a href="<?php echo $root;?>faqs/faqs">Faq</a></li>
		   <li><a href="http://en.wikipedia.org/wiki/Non-governmental_organization" target="_blank">NGO</a></li>
          <li><a href="<?php echo $root;?>quick_links/others/sankalp_brochure.pdf" target="_blank">Sankalp Broucher</a></li>
          <li><a href="<?php echo $root;?>quick_links/privacy">Privacy Policy</a></li>
          <li><a href="<?php echo $root;?>quick_links/disclaimer">Disclaimer</a></li>
         
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
