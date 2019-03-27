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
    <link href="assets/css/style2.css" rel="stylesheet" />
    <link href="assets/css/custom.css" rel="stylesheet"/>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
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
                    <a>ABOUT US<i class="fa fa-folder-open-o"></i>
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
<div class="general-subhead">
    <h1>OUR PORTFOLIO</h1>
</div>
<!--./ Gereral Subhead End -->


<section id="port-folio">
    <div class="container">

        <div class="row pad-row">
            <?php
            require ('connect.php');

            $sql="select id,gallery_name,gallery_desc,gallery_image from gallery";

            $result=mysqli_query($conn,$sql);

            while ($row=mysqli_fetch_row($result))
            {
                ?>
                <div class="col-lg-6 col-md-6 col-sm-6 ">

                    <div class="portfolio-item">


                        <img src="getgalleryimage.php?id=<?php echo $row[0];?>" alt="Text alternative when image is not available" class="img-responsive "  />
                        <h5 ><?php echo $row[1];?></h5>
                        <div class="overlay">
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>

                            <a class="btn btn-success"  href="images.php?id=<?php echo $row[0];?>">VIEW PROJECT</a>


                            <p>
                               <?php echo $row[2];?>
                            </p>
                            <a href="images.php?id=<?php echo $row[0];?>" >

                                See more..

                            </a>
                        </div>
                    </div>
                </div>



                <?php



            }
            ?>



        </div>

    </div>
</section>
<!-- Portfolio End-->
<div id="request-quote">
    <div class="container">

        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="text-center">
                    <h3>REQUEST A QUOTE NOW</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing  condimentum. </p>
                    <br />
                    <br />
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <form>
                    <div class="col-lg-12 col-md-12 ">
                        <div class="form-group">
                            <input type="text" class="form-control" required="required" placeholder="Name" />
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <input type="text" class="form-control" required="required" placeholder="Email address" />
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <input type="text" class="form-control" required="required" placeholder="Notes" />
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <button type="submit" class="btn btn-primary">SUBMIT REQUEST</button>

                    </div>
                </form>

            </div>
            <div class="col-lg-6 col-md-6">
                <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit onec molestie non sem vel condimentum. Consectetur adipiscing elit onec molestie non sem vel condimentum </p>
                    <small>Consectetur adipiscing elit</small>
                </blockquote>

            </div>
        </div>

    </div>

</div>
<!--./ Request Quote End -->
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
                            <img src="assets/img/user2.png" class="img-circle" alt="" />
                        </div>
                        <div class="media-body">
                            <span class="media-heading"><a href="blog-home.php">Pellentesque habitant morbi tristique</a></span>
                            <small class="muted">Posted 17 June 2014</small>
                        </div>
                    </div>
                    <div class="media">
                        <div class="pull-left">
                            <img src="assets/img/user.gif" class="img-circle" alt="" />
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
                2014 All Rights Reserved | by: <a href="http://binarytheme.com" target="_blank" style="color:#fff" >www.binarytheme.com</a>

            </div>
        </div>

    </div>
</div>
<!--./ footer-end End -->
<!--  Jquery Core Script -->
<script src="assets/js/jquery-1.10.2.js"></script>
<!--  Core Bootstrap Script -->
<script src="assets/js/bootstrap.js"></script>
<!--  PrettyPhoto Script -->
<script src="assets/js/jquery.prettyPhoto.js"></script>
<!--  Custom Scripts -->
<script src="assets/js/custom.js"></script>

</body>
</html>
