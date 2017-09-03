	<?php
        error_reporting(0);
        $root='';
    ?>
    <!-- include header -->
	<?php include $root.'header.php' ?>

    <!-- Header Carousel 
    <div id="fb-root"></div>-->
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&appId=1506911036242466&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


    <header id="myCarousel" class="carousel slide" style="height:65%;">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('<?php echo $root?>images/slider/11.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Sankalp iniciative for Right To Education </h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('<?php echo $root?>images/slider/22.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Health camps</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('<?php echo $root?>images/slider/33.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Tour to TATA zoo</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12 ">
                <h3 class="page-header ">
                    <font color="#428BCA" ><b>SANKALP | A PLEDGE TO CHANGE </b> </font>
                </h3>
				<p >
					<div class="col-md-12 well" style="background-color:#2C3E50">
						<font font-style="ubuntu"> </font><h4 class="ftext"><i>"Service has taught us courage, compassion, love, appreciation, team work and humanity.
						We have seen hardship and pain and the power a simple act of kindness holds. 
						And we have been changed forever by the people we have met and worked with."
						</i></h4></font>
					</div>
				</p>
            </div>
			
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color:#2C3E50" >
                        <h4 class="ftext"><i class="fa fa-fw fa-check"></i> About Us</h4>
                    </div>
                    <div class="panel-body">
                        <p><b>Sankalp</b> is a Non-Government Organization (NGO) founded by the alumni of NIT Jamshedpur.
                         We provide free and quality education to underprivileged children living in slums and villages near the college campus.
                        </p>
                        <a href="aboutus" class="btn btn-default" style="background-color:#2C3E50">
                            <font class="ftext">Read More</font></a>
                           <!-- <div class="fb-login-button" data-max-rows="1" data-size="medium" data-show-faces="false" data-auto-logout-link="true"></div> -->
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color:#2980B9">
                        <h4 class="ftext"><i class="fa fa-fw fa-book"></i> What we do</h4>
                    </div>
                    <div class="panel-body">
                        <p><b>Sankalp</b> is currently running at three centers in different areas of Adityapur.
                         At each centre, the schedule and routine to be followed each day, the volunteers that will teach each day,
                          important contact numbers of seniors members of Sankalp, ...</p>
                        <a href="activities" class="btn btn-default" style="background-color:#2980B9">
                            <font class="ftext">Read More</font></a>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color:#D35400">
                        <h4 class="ftext"><i class="fa fa-fw fa-money"></i> Donate Us</h4>
                    </div>
                    <div class="panel-body">
                        <p><b>Donations </b> can be made in the form of <u>cash, cheque, demand draft , debit card , online banking </u> .
                         You can also transfer funds online into our account.
                          We will be very thankful to you for your kind support in promoting a social cause.</p>
                        
                            <div class="pm-button">
                                <a href="donate" class="btn btn-default" style="background-color:#D35400">
                            <font class="ftext">Read More</font></a>
                            <a href="https://www.payumoney.com/paybypayumoney/#/13902" target="_blank">
                                <img src="https://www.payumoney.com//media/images/payby_payumoney/buttons/111.png" />
                            </a>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Portfolio Heading</h2>
            </div>
            <div class="col-md-7 col-sm-6">
                <?php include "noticeboard.php";?>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="<?php echo $root; ?>images/poster/poster1.jpg">
                    <img class="img-responsive img-portfolio img-hover" src="<?php echo $root; ?>images/poster/poster1.jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="<?php echo $root; ?>images/poster/poster2.jpg">
                    <img class="img-responsive img-portfolio img-hover" src="<?php echo $root; ?>images/poster/poster2.jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
        </div>
        <!-- /.row -->

        

        <hr>

    </div>
    <!-- /.container -->

    <!-- Footer -->

    <?php include $root.'footer.php' ?>
    

    
</body>

</html>
