<?php
require 'login/functions.php';
require 'src/facebook.php';
$facebook = new Facebook(array(
            'appId' => $config["fb_app_id"],
            'secret' => $config["fb_app_secret"],
            'cookie' => true,
        ));

$congratulations = FALSE;
// capture the $_REQUEST coming to this page and check if it's a new user
check_registration($facebook,$config["fb_fields"]);

$session = $facebook->getSession();

$me = null;
// Session based API call.
if ($session) {
    try {
        $uid = $facebook->getUser();
        // We can use a Graph API call from the PHP-SDK
        //$me = $facebook->api('/me');
        // Or just use our Database!
        $me = get_user_by_id($uid);
    } catch (FacebookApiException $e) {
        error_log($e);
    }
}

// login or logout url will be needed depending on current user state.
if ($me) {
    $logoutUrl = $facebook->getLogoutUrl();
} else {
    // we are not using this url in our example
    $loginUrl = $facebook->getLoginUrl();
}

?>

<!-- html starts from here -->
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="SHORTCUT ICON" href="<?php echo $root;?>images/logo.gif" type="image/x-icon" />   

    <title>Sankalp | A Pledge To Change</title>

    <link href="<?php echo $root?>css/bootstrap.min.css" rel="stylesheet">
		    <link href="<?php echo $root?>css/donerlist-table.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo $root?>css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo $root?>font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- DEFINING CUSTOM CSS -->
    <style type="text/css">
        .cover{
            background: url("<?php echo $root?>images/cover2.jpg") no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        .ftext{
            color: #ffffff
        }
        .flink{
            color: #9D9D9D
        }
        .tablelight {
            background-color: #FFF;
        }
        .tabledark {
        }
    </style>

</head>

<body class="cover">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" style="background-color:#2C3E50" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo $root?>index" style="padding:0px">
                    <div >
                        <image src="<?php echo $root?>images/logo1.png" height="50px" width="68px"></img>
                        <img src="<?php echo $root?>images/head.png" height="50px" width="180px"/>
                    </div>
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="<?php echo $root?>aboutus">About</a>
                    </li>
                    <li>
                        <a href="<?php echo $root?>activities/">What we do</a>
                    </li>
     					<li>
						<a href="<?php echo $root?>alumni/alumni">Alumni </a>
					</li>
                    <li>
                        <a href="<?php echo $root?>donate">Donate </a>
                    </li>
                    <li>
                        <a href="<?php echo $root?>team/index">Team </a>
                    </li>
                    <li>
                        <a href="<?php echo $root?>gallery/index">Gallery </a>
                    </li>
					<li>
							<a href="<?php echo $root ?>centers/centers">Centers</a>
							</li>
                   
                    <li>
						<a href="<?php echo $root?>membership/joinus">Join us </a>
					</li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Other Pages <b class="caret"></b></a>
                        <ul class="dropdown-menu">
						<li>
							<a href="<?php echo $root ?>quick_links/others/sankalppoem.pdf" target="_blank">Poem on Sankalp</a>
							</li>
							<li>
                                <a href="<?php echo $root?>quick_links/others/sankalp_brochure.pdf" target="_blank">Sankalp Brochure</a>
                            </li>
							<li>
                                <a href="<?php echo $root?>donate/donerlists">Doner List</a>
                            </li>
							 <li>
                        <a href="<?php echo $root?>quick_links/downloads">Downloads </a>
                    </li>
                           <li>
                        <a href="<?php echo $root?>contact">Contact</a>
                    </li>
							
							<li>
                                <a href="<?php echo $root?>faqs/faqs">FAQ</a>
                            </li>
							 <li>
                        <a href="<?php echo $root?>quick_links/sitemap">Site Map </a>
                    </li>

                            
                        </ul>
                    </li>
                    <li>
                        <div class="login-status">
                             <?php if ($me): ?>
                                <div class="profile">
                                <img class="profile-img" src="https://graph.facebook.com/<?php echo $uid; ?>/picture" alt="" />
                                
                                <a href="<?php echo $logoutUrl; ?>">
                                 <img src="<?php echo $root?>images/logout.png" />
                                </a>
                                </div>
                            <?php else: ?>
                                <fb:login-button registration-url="login/register.php" />
                            <?php endif ?>
                        </div>

                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
