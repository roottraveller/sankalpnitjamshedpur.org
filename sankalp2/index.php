    <?php
        error_reporting(0);
        $root='';
    ?>
    <!-- include header -->
    <?php include $root.'header.php' ?>

    <!-- Header Carousel -->
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&appId=1506911036242466&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    <div id="fb-root"></div>
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
                        <h4 class="ftext"><i>"Service has taught us courage, compassion, love, appreciation, team work and humanity.
                        We have seen hardship and pain and the power a simple act of kindness holds. 
                        And we have been changed forever by the people we have met and worked with."
                        </i></h4>
                    </div>
                </p>
            </div>
            
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color:#2C3E50;" >
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
        <div >
        <div class="col-lg-4 ">
            <a data-toggle="modal" id="btn-login" style="margin-top:0px; background-color:#015297;" href="#ask">
            <div class="panel panel-default" style="position:fixed; right:0px; bottom:0px;margin-bottom:0px;z-index:1335;  border:none;">
             
   
                    <div class="panel-heading" style="background-color:#1ABC9C;padding:3px 0px;">
                        <h4 class="ftext"><i class="fa fa-fw fa-envelope-o"></i> &nbsp; Have A Question <i class="fa fa-fw fa-question"></i></i></h4>
                    </div>
            </a>
            </div>
        </div>
        </div>

        <!-- Portfolio Section -->
        <div class="row">
            <div class="col-lg-12">
                
            </div>
            <p>&nbsp;</p>
            <div class="col-md-7 col-sm-6">
                <?php include "noticeboard.php";?>
            </div>
            <div class="col-md-4 col-sm-6 well">
                <div class="fb-like-box" data-href="https://www.facebook.com/sankalp.nitjsr" data-width="25%" data-colorscheme="light" data-show-faces="false" data-header="false" data-stream="true" data-show-border="false"></div>
            </div>
            <!-- <div class="col-md-4 col-sm-6">

                <a href="<?php echo $root; ?>images/poster/poster2.jpg">
                    <img class="img-responsive img-portfolio img-hover" src="<?php echo $root; ?>images/poster/poster2.jpg" alt="">
                </a>
            </div>
            <!-- showing post from facebook -->
            
            -->
            
        </div>
        <!-- /.row -->

        

       <p><br></p>

    </div>
    <!-- /.container -->
        <div class="modal fade" id="ask" tabinex="0" role="dialog" aria-hidden="true" >
                    <div class="modal-dialog" style="position:fixed; right:0px; bottom:0px;margin-bottom:0px; margin-right:0px; border:none;">
                        <div class="modal-content"style="width:200%">
                            
                            <div class="modal-body">
                                
            <div class="col-md-6 "style="background-color:#1ABC9C;">
                <h3>Send us a Message</h3>
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Full Name:</label>
                            <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Phone Number:</label>
                            <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email Address:</label>
                            <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="5" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>

                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>

        </div>
                            </div>
                            
                        </div>
                    </div>
                
    <!-- Footer -->

    <?php include $root.'footer.php' ?>
    

    
</body>

</html>
