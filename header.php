<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hope For Paws an Animals and Pets</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Best Pets Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>

        <style>

:root {
    --error-color: #dc3545;
    --success-color: #28a745;
    --warning-color: #ffc107;
}

.form {
    padding: 10px 20px;
}

.form h1 {
    font-size: 1.5em;
    text-align: center;
    margin-bottom: 20px;

}

.form-field {
    margin-bottom: 5px;

}

.form-field label {
    display: block;
    color: #777;
    margin-bottom: 5px;
}

.form-field input {
    border: solid 2px #f0f0f0;
    border-radius: 3px;
    padding: 10px;
    margin-bottom: 5px;
    font-size: 14px;
    display: block;
    width: 100%;
}

.form-field input:focus {
    outline: none;
}

.form-field.error input {
    border-color: var(--error-color);
}

.form-field.success input {
    border-color: var(--success-color);
}


.form-field small {
    color: var(--error-color);
}


/* button */
.btn {
    width: 100%;
    padding: 3%;
    background: #007bff;
    border-bottom: 2px solid #007bff;
    border-top-style: none;
    border-right-style: none;
    border-left-style: none;
    color: #fff;
    text-transform: uppercase;
}

.btn:hover { 
    background: #0069d9;
    cursor: pointer;
}

.btn:focus {
    outline: none;
}
            </style>
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/font-awesome.css" rel="stylesheet"> <!-- font-awesome icons -->
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property=""/>
    <!-- //Custom Theme files -->
    <!-- web-fonts -->
    <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800" rel="stylesheet">
    <!-- //web-fonts -->
</head>
<body>
<!-- banner -->
<div class="w3ls-banner about-w3lsbanner">
    <div class="w3lsbanner-info">
        <!-- header -->
        <div class="header">
            <div class="container">
                <div class="agile_header_grid">
                    <div class="header-mdl agileits-logo">
                        <h1><a href="index.php">Hope For Paws</a></h1>
                    </div>
                    <div class="agileits_w3layouts_sign_in">
                        <ul>
                            <?php
                            if (!isset($_SESSION['loggedin']))
                            {
                                ?>
                                <li><a href="#myModal2" data-toggle="modal" class="play-icon">Login</a></li>
                            <?php
                            }
                            else{
                            ?>
                             <li> <a href="logout.php"  class="play-icon">Logout</a></li>  
                            <?php
                            }
                            ?>
                            <li>Call us : <span>(1800) 989 7419</span></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="header-nav"><!-- header-two -->
                    <nav class="navbar navbar-default">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <!-- top-nav -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav cl-effect-16">
                                <li><a href="index.php" data-hover="Home">Home</a></li>
                                <li><a href="about.php" data-hover="About">About</a></li>
                                <!--                                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"-->
                                <!--                                       aria-haspopup="true" aria-expanded="false">Pages <span class="caret"></span></a>-->
                                <!--                                    <ul class="dropdown-menu">-->
                                <!--                                        <li><a href="icons.php" data-hover="Web Icons">Web Icons</a></li>-->
                                <!--                                        <li><a href="codes.php" data-hover="Short Codes">Short Codes</a></li>-->
                                <!--                                    </ul>-->
                                <!--                                </li>-->
                                <li><a href="product.php" data-hover="Gallery">E-Store</a></li>
                                <li><a href="contact.php" data-hover="Contact">Contact</a></li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- //header -->
    </div>
</div>
<div class="modal bnr-modal about-modal w3-agileits fade" id="myModal2" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body login-page "><!-- login-page -->
                <div class="sap_tabs">
                    <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                        <ul class="resp-tabs-list">
                            <li class="resp-tab-item" aria-controls="tab_item-0"><span>Login</span></li>
                            <li class="resp-tab-item" aria-controls="tab_item-1"><span>Register</span></li>
                        </ul>
                        <div class="clearfix"></div>
                        <div class="resp-tabs-container">
                            <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                                <div class="agileits-login">
                                    <form action="auth/login_process.php" method="post">
                                        <input type="email" class="email" name="email" placeholder="Email" required=""/>
                                        <input type="password" class="password" name="password" placeholder="Password"
                                               required=""/>
                                        <div class="wthree-text">
                                            <ul>
                                                <li>
                                                    <label class="anim">
                                                        <input type="checkbox" class="checkbox">
                                                        <span> Remember me ?</span>
                                                    </label>
                                                </li>
                                                <li><a href="#">Forgot password?</a></li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="w3ls-submit">
                                            <input type="submit" value="LOGIN">
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
                                <div class="login-top sign-top">
                                    <div class="agileits-login">
                                <form action="auth/registration_process.php" id="signup" method="post">
                                        <div class="form-field">
                                        <input type="text" name="username" class="username" id="username" placeholder="Full Name*" required="">
                                        <small></small>
                        </div>
                        <div class="form-field">
                                            <input type="text" class="phone" id="phone" name="phone" placeholder="Phone Number*" 
                                         required=""/>
                                        <small></small>
                        </div>
                        <div class="form-field">
                                            <input type="email" class="email" id="email" name="email" placeholder="Email*"
                                                   required=""/>
                                                   <small></small>
                        </div>
                        <div class="form-field">
                                            <input type="password" class="password" id="password" name="password"
                                                   placeholder="Password*" required=""/>
                                                   <small></small>
                        </div>
                        <div class="form-field">
                        <input type="password" class="confirm-password" id="confirm-password" name="confirm-password"
                                                   placeholder="Password*" required=""/>
                <small></small>
            </div>
            
                                            <div class="w3ls-submit">
                                                <input class="register" id="register" type="submit" value="register">
                                            </div>
                      
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div> <!-- //login-page -->
        </div>
    </div>
</div>
<!-- //modal sign in -->
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script>
<!-- //js -->
<!-- jarallax -->
<script src="js/SmoothScroll.min.js"></script>
<script src="js/jarallax.js"></script>
<script type="text/javascript">
    /* init Jarallax */
    $('.jarallax').jarallax({
        speed: 0.5,
        imgWidth: 1366,
        imgHeight: 768
    })
</script>
<!-- //jarallax -->
<!-- flexSlider -->
<script defer src="js/jquery.flexslider.js"></script>
<script type="text/javascript">
    $(window).load(function () {
        $('.flexslider').flexslider({
            animation: "slide",
            start: function (slider) {
                $('body').removeClass('loading');
            }
        });
    });
</script>
<!-- //flexSlider -->
<!-- start-smooth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();

            $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
        });
    });
</script>
<!-- //end-smooth-scrolling -->
<!-- smooth-scrolling-of-move-up -->
<script type="text/javascript">
    $(document).ready(function () {
        /*
        var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
        };
        */

        $().UItoTop({easingType: 'easeOutQuart'});

    });
</script>
<!-- //smooth-scrolling-of-move-up -->
<!-- ResponsiveTabs js -->
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true   // 100% fit in a container
        });
    });
</script>
<!-- //ResponsiveTabs js -->
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/bootstrap.js"></script>
<script src="js/app.js"></script>

</body>
</html>