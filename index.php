<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>








    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">





    <![endif]-->
    <title>Nepal Co-operation Center</title>
    <!--  Bootstrap Style -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!--  Font-Awesome Style -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!--  Font-Awesome Animation Style -->
    <link href="assets/css/font-awesome-animation.css" rel="stylesheet" />
    <!--  Pretty Photo Style -->
    <link href="assets/css/prettyPhoto.css" rel="stylesheet" />
    <!--  Google Font Style -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <!--  Custom Style -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/modal.css" rel="stylesheet"/>
    <link href="assets/css/custom.css" rel="stylesheet"/>







    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <script type="text/javascript" src="https://form.jotform.me/jsform/70731122643447"></script>

     <!-- FORm KO LAAGI-->






    <![endif]-->
</head>
<body>








<div class="navbar navbar-default navbar-fixed-top menu-back">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="index.php">
                <img src="assets/img/logo.png" class="navbar-brand-logo " alt="" />
            </a>
        </div>
        <div class="navbar-collapse collapse" >
            <ul class="nav navbar-nav navbar-right">

                <li class="dropdown">
                    <a href="index.php">HOME PAGE<i class="fa fa-folder-open-o"></i>
                        <span></span>

                    </a>
                </li>
                <li class="dropdown">
                    <a >ABOUT US<i class="fa fa-folder-open-o"></i>
                        <span>know us better</span>

                    </a>
                    <ul class="dropdown-menu dropdown-menu-left">
                        <li>
                            <a href="our-services.php">
                                <i class="fa fa-edit"></i>What we do
                                <span></span>
                            </a>

                        </li>
                        <li>
                            <a href="team-members.php">
                                <i class="fa fa-bullhorn"></i>Team Members
                                <span></span>
                            </a>

                        </li>


                    </ul>
                </li>

                <li class="dropdown">
                    <a href="gallery.php">GALLERY<i class="fa fa-image"></i>
                        <span>some of our work</span>
                    </a>

                </li>



                <li class="dropdown">
                    <a href="contact.php">CONTACT <i class="fa fa-globe"></i>
                        <span>leave a message</span>
                    </a>
                </li>

                <!--<a href="javascript:void( window.open('signup.php','blank', 'scrollbars=yes, toolbar=no, width=700, height=500' ))"> Sign Up</a>-->
                <!--  <a href="#myPopup">SIGN UP</a>-->

                <li class="dropdown">
                    <a href="signup.php">SIGN UP</a>

                </li>
                <li class="dropdown">
                    <a href="signin.php">SIGN IN</a>


                </li>


                <li class="dropdown">
                    <a id="myDonation">DONATION FORM</a>
                    <div id="myDonationModal" class="modal">

                        <!-- Modal content -->
                        <div class="modal-content">
                            <span class="close">&times;</span>
                            <form id="contact_form" action="donateform.php" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <label for="myDonation"><p>Please fill this form and we will contact you by email or phone call</p></label>

                                </div>
                                <div class="row">
                                    <label for="name">Your first name:</label><br />
                                    <input id="name" class="input" name="fname" type="text" value="" size="30" required /><br />
                                </div>
                                <div class="row">
                                    <label for="name">Your last name:</label><br />
                                    <input id="name" class="input" name="lname" type="text" value="" size="30" required /><br />
                                </div>
                                <div class="row">
                                    <label for="email">Your email:</label><br />
                                    <input id="email" class="input" name="email" type="text" value="" size="30" required /><br />
                                </div>
                                <div class="row">
                                    <label for="message">Your phone no:</label><br />
                                    <input id="phone" class="input" name="phone" cols="30" required/><br />
                                </div>
                                <br>
                                <input id="submit_button" type="submit" value="done" />
                            </form>
                        </div>

                    </div>

                    <script>
                        // Get the modal
                        var myDonation = document.getElementById('myDonationModal');

                        // Get the button that opens the modal
                        var btn = document.getElementById("myDonation");

                        // Get the <span> element that closes the modal
                        var span = document.getElementsByClassName("close")[0];

                        // When the user clicks the button, open the modal
                        btn.onclick = function() {
                            myDonation.style.display = "block";
                        }

                        // When the user clicks on <span> (x), close the modal
                        span.onclick = function() {
                            myDonation.style.display = "none";
                        }

                        // When the user clicks anywhere outside of the modal, close it
                        window.onclick = function(event) {
                            if (event.target == myDonation) {
                                myDonation.style.display = "none";
                            }
                        }
                    </script>


                </li>




        </div>
        </ul>
    </div>
</div>
</div>


<!--./ Top Menu End -->
<div class="div-social-top">

    <i class="fa fa-globe "></i>E-mail:  info@yourdomain.com   | <i class="fa fa-mobile "></i>Call: put no|  <i class="fa fa-map-marker "></i>Location here&nbsp;
    <a href="#">
        <i class="fa fa-facebook-square "></i>
    </a>

    <a href="#">
        <i class="fa fa-linkedin-square "></i>
    </a>
    <a href="#">
        <i class="fa fa-pinterest-square "></i>
    </a>


</div>
<!--./ Social Div End -->
<div id="main-slider">

    <div id="carousel-example" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner">
            <div class="item active">
                <img src="assets/img/1.jpg" alt="" />
                <div class="carousel-caption ">
                    <h4 class="back-light">One for these innocent faces
                    </h4>
                </div>
            </div>
            <div class="item">
                <img src="assets/img/2.jpg" alt="" />
                <div class="carousel-caption ">
                    <h4 class="back-light">Be a part of us. Help us to help them
                    </h4>
                </div>
            </div>

        </div>
        <!--INDICATORS-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example" data-slide-to="1"></li>
           <!-- <li data-target="#carousel-example" data-slide-to="2"></li>-->
        </ol>
        <!--PREVIUS-NEXT BUTTONS-->
        <a class="left carousel-control" href="#carousel-example" data-slide="prev">
            <i class="fa fa-angle-left fa-3x control-icon clr-main"></i>
        </a>
        <a class="right carousel-control" href="#carousel-example" data-slide="next">
            <i class="fa fa-angle-right fa-3x control-icon clr-main"></i>
        </a>
    </div>

</div>
<!--./ Main Slider End -->
<div id="welocme-note">

   <!-- <div class="welcome-div">
        <i class="fa fa-paper-plane-o fa-2x"></i><span> </span>
    </div>-->

</div>
<!--./ Welcome Section End -->
<section id="home-service" style="margin-top:20px;">
    <div class="container">
        <div class="row ">
            <div class="col-lg-4 col-md-4  col-sm-4 "  >
                <a href="our-services.php">
                <i  class="fa fa-desktop fa-5x  icon-round  faa-ring animated"></i>
                <h4><strong>Who We Are</strong> </h4>
                </a>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>
            </div>
            <div class="col-lg-4 col-md-4  col-sm-4" >
                <a href="team-members.php">
                    <i class="fa fa-paper-plane-o  fa-5x icon-round  faa-pulse animated"></i>

                    <h4><strong>Our Members</strong> </h4>
                </a>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>
            </div>
            <div class="col-lg-4 col-md-4  col-sm-4" >
                <a href="gallery.php">
                <i class="fa fa-bullhorn  fa-5x icon-round faa-horizontal animated"></i>
                <h4><strong>Our Gallery Of Works </strong></h4>
                </a>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>
            </div>

        </div>

    </div>
</section>
<!--./ Home Service End -->
<section id="vedio-sec">
    <div class="container">
        <div class="row pad-top-botm">
            <div class="col-lg-6 col-md-6">
                <h2>What Is Special About Us ? </h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.

                </p>
                <button class="btn btn-primary" type="button">
                    Read Full Details <span class="badge">+</span>
                </button>
                <br />
                <br />
            </div>

            <div class="col-lg-6 col-md-6">
                <iframe class="vedio-style" src="http://www.youtube.com/embed/VpZmIiIXuZ0" ></iframe>



            </div>
        </div>
    </div>
</section>
<!--./ vedio-sec End -->
<div class="middle-section">

    <div class="container">
        <div class="row ">
            <div class="col-lg-12 col-md-12 ">
                <h1>Help Us Out</h1>
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="5KYZJL6BMJZQ6">
                    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                </form>

                <div id="testimonials" class="carousel slide" data-ride="carousel">



                    <div class="carousel-inner">
                        <div class="item">
                            <div class="container center">
                                <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 slide-custom">


                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="container center">
                                <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 slide-custom">

                                </div>
                            </div>
                        </div>
                        <div class="item active">
                            <div class="container center">
                                <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 slide-custom">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--./ Testimonials End -->

<section id="service-info">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12 col-md-12">
                <h3 class="clr-main"><strong>OUR SERVICE LIST </strong></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit onec molestie non sem vel condimentum. </p>
                <br />
                <br />
            </div>
        </div>
        <div class="row pad-top-botm">
            <div class="col-lg-4 col-md-4">
                <div class="media">
                    <div class="pull-left">
                        <i class=" fa fa-folder-open-o fa-4x rotate-icon "></i>

                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">Easy To code</h3>
                        <p>
                            Aenean faucibus luctus enim. Duis quis sem risu suspend lacinia elementum nunc.
                            Aenean faucibus luctus enim. Duis quis sem risu suspend lacinia elementum nunc.
                        </p>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="media">
                    <div class="pull-left">
                        <i class="fa fa-power-off fa-4x rotate-icon "></i>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">Best To Use</h3>
                        <p>
                            Aenean faucibus luctus enim. Duis quis sem risu suspend lacinia elementum nunc.
                            Aenean faucibus luctus enim. Duis quis sem risu suspend lacinia elementum nunc.
                        </p>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="media">
                    <div class="pull-left">
                        <i class="fa fa-paper-plane-o fa-4x rotate-icon "></i>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">Customize Friendly</h3>
                        <p>
                            Aenean faucibus luctus enim. Duis quis sem risu suspend lacinia elementum nunc.
                            Aenean faucibus luctus enim. Duis quis sem risu suspend lacinia elementum nunc.
                        </p>

                    </div>
                </div>
            </div>
        </div>

        <div class="row pad-top-botm ">
            <div class="col-lg-6 col-md-6">
                <div class="alert alert-info transparent-bk upfront-trans">
                    <i class="fa fa-edit fa-2x "></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit.

                </div>

                <hr />
                <iframe src="http://player.vimeo.com/video/18312392" class="vedio-style"></iframe>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="col-lg-6 col-md-6">

                    <div class="alert alert-success transparent-bk upfront-trans">
                        <i class="fa fa-folder-open-o fa-2x"></i>Lorem ipsum dolor sit amet.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </div>


                </div>
                <div class="col-lg-6 col-md-6">

                    <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fenvato&amp;width=235&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false&amp;appId=438889712801266" style="border: none; overflow: hidden; width: 235px; height: 258px;"></iframe>

                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="alert alert-info transparent-bk upfront-trans">
                        <i class="fa fa-info fa-2x "></i><b>JUST A  SMALL INFORMATION :  </b>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.

                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.

                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!--./ Service info Section End -->
<div class="just-stats">
    <div class="container">
        <div class="row ">
            <div class="col-lg-3 col-md-3 ">
                <div class="stats-div">
                    <i class="fa fa-rocket fa-5x"></i>
                    <h3>3000+</h3>
                    <h4>Projects</h4>
                </div>
            </div>


            <div class="col-lg-3 col-md-3 ">
                <div class="stats-div">
                    <i class="fa fa-globe fa-5x"></i>
                    <h3>149+</h3>
                    <h4>Countries</h4>
                </div>

            </div>
            <div class="col-lg-3 col-md-3 ">

                <div class="stats-div">
                    <i class="fa fa-building fa-5x"></i>
                    <h3>250 +</h3>
                    <h4>Offices</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 ">
                <div class="stats-div">
                    <i class="fa fa-comments-o fa-5x"></i>
                    <h3>1305+</h3>
                    <h4>Clients</h4>
                </div>
            </div>
        </div>
    </div>
</div>
<!--./ stats div end -->
<div id="media-sec">
    <div class="container">

        <div class="row">
            <div class="col-lg-12 col-md-12" >
                <div class="text-center">
                    <h3>WHAT MEDIA SAY'S ABOUT US</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit onec molestie non sem vel condimentum. </p>
                    <br />
                    <br />
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit onec molestie non sem vel condimentum. </p>
                    <small>Consectetur adipiscing elit</small>
                </blockquote>

            </div>
            <div class="col-lg-6 col-md-6">
                <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit onec molestie non sem vel condimentum. </p>
                    <small>Consectetur adipiscing elit</small>
                </blockquote>

            </div>
        </div>

    </div>

</div>
<!--./ Media Section End -->
<div id="footer-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4" id="about-ftr">
                <i class="fa fa-building fa-2x"></i>
                <span>A Small Introduction</span>
                <small>replace this dummy text with your text</small>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Praesent suscipit sem vel ipsum elementum venenatis.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Praesent suscipit sem vel ipsum elementum venenatis.

                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Praesent suscipit sem vel ipsum elementum venenatis.
                </p>
            </div>
            <div class="col-lg-4 col-md-4">
                <i class="fa fa-paper-plane-o fa-2x"></i>
                <span>From the blog</span>
                <small>replace this dummy text with your text</small>
                <div id="blog-footer-div">
                    <div class="media">
                        <div class="pull-left">
                            <img src="assets/img/user2.png" class="img-circle" alt=""  />
                        </div>
                        <div class="media-body">
                            <span class="media-heading"><a href="blog-home.php">Pellentesque habitant morbi tristique</a></span>
                            <small class="muted">Posted 17 June 2014</small>
                        </div>
                    </div>
                    <div class="media">
                        <div class="pull-left">
                            <img src="assets/img/user.gif" class="img-circle" alt=""/>
                        </div>
                        <div class="media-body">
                            <span class="media-heading"><a href="blog-home.php">Pellentesque habitant morbi tristique</a></span>
                            <small class="muted">Posted 27 June 2014</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4">
                <i class="fa fa-sliders fa-2x"></i>
                <span>Our location</span>
                <small>replace this dummy text with your text</small>
                234/90, Newyork Street , USA
                <br />
                Call: 456-0980-0000
                <br />
                mail: info@domain.com
                <br />
                <br />
                <form role="form">
                    <div class="input-group">
                        <input type="text" class="form-control" autocomplete="off" placeholder="Enter your email" required />
                        <span class="input-group-btn">
                                <button class="btn btn-primary" type="button">Subdcribe!</button>
                            </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--./ footer-sec  End -->
<div id="footser-end">
    <div class="container">

        <div class="row">
            <div class="col-lg-12 col-md-12">
                2017 All rights reserved

            </div>
        </div>

    </div>
</div>
<!--./ footer-end End -->
<!--  Jquery Core Script -->
<script src="assets/js/jquery-1.10.2.js"></script>
<!--  Core Bootstrap Script -->
<script src="assets/js/bootstrap.js"></script>
<!--  Custom Scripts -->
<script src="assets/js/custom.js"></script>

</body>
</html>
