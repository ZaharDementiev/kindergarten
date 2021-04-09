<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en-US">
<!--<![endif]-->
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">

    <title>Kids Land - Responsive Children HTML5 Template - About Us</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]> <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900%7CPacifico' rel='stylesheet' type='text/css'>

    <!-- Favicons -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <link rel="stylesheet" href="/css/bootstrap/css/bootstrap.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="/js/prettyphoto/css/prettyPhoto.css" type="text/css" media="all" />

</head>

<body>


<div id="main" class="wrap">

    <header id="header-bar" class="wrap">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="clearfix">
                        <div id="logo"><a href="/index.html"><img class="img-responsive" src="/images/logo.png" alt=""/></a></div>

                        <nav class="navbar navbar-custom" role="navigation">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse-navigation"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                            </div>
                            <div class="collapse navbar-collapse" id="collapse-navigation">
                                <ul class="nav menu-nav">
                                    <li><a href="{{route('main')}}">Главная</a></li>
                                    <li ><a href="{{route('groups')}}">О нас</a>
                                </ul>
                            </div><!-- /.navbar-collapse -->

                        </nav>

                    </div><!--.clearfix-->

                </div><!--.col-md-12-->
            </div><!--.row-->
        </div><!--.container-->
    </header><!-- header-bar-->


    <section class="page-top wrap">

        <h2 class="page-section-title">Детсад</h2>

    </section><!-- page-top -->
    <div class="zz-bottom"></div>

    @yield('content')

    <div class="zz-top-foo"></div>
    <footer class="wrap">

        <div class="container">
            <div class="row">

                <div class="col-md-4">
                    <div class="foo-block">
                        <h4 class="widgettitle">About</h4>
                        <p>In justo risus, fermentum eget egestas eget, element vitae tortor. Maecenas lorem mi, interdum id commodo ac, tincidunt vitae magna. In hac habitasse platea dictumst. Pellentesque quam.    </p>
                    </div><!--end foo-block-->
                </div><!--end col-md-4-->

                <div class="col-md-4">
                    <div class="foo-block">
                        <h4 class="widgettitle">Schedule</h4>
                        <ul>
                            <li>Monday - Friday: 9.00 AM - 3.00 PM</li>
                            <li>Saturday- Sunday: Closed</li>
                        </ul>
                    </div><!--end foo-block-->
                </div><!--end col-md-4-->

                <div class="col-md-4">
                    <div class="foo-block">
                        <h4 class="widgettitle">Contact Us</h4>
                        <ul>
                            <li>Address: 501 Boulevard, New York City, New York</li>
                            <li>Phone: 1-800-000-111</li>
                            <li>Fax: 1-800-000-111</li>
                            <li>Email: contact [at] kidsland [dot] com</li>
                        </ul>
                    </div><!-- foo-block-->
                </div><!-- col-md-4-->



            </div><!-- row-->

        </div><!-- container-->

        <div class="copyright clearfix">

            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <p>© 2014 Lawyers. All rights reserved. Theme by matchthemes.</p>

                        <ul>
                            <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-youtube"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-vimeo-square"></i></a></li>
                        </ul>

                    </div><!-- col-md-12-->
                </div><!-- row-->
            </div><!-- container-->

        </div><!-- copyright-->

    </footer>

</div><!-- main -->

<div class="scrollup">
    <a class="scrolltop" href="#">
        <i class="fa fa-chevron-up"></i>
    </a>
</div>


<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js'></script>
<script type='text/javascript' src='/css/bootstrap/js/bootstrap.min.js'></script>
<script type='text/javascript' src='/js/jquery.easing.min.js'></script>
<script type='text/javascript' src='/js/jquery.flexslider-min.js'></script>
<script type='text/javascript' src='/js/prettyphoto/js/jquery.prettyPhoto.js'></script>
<script type='text/javascript' src='/js/jquery.form.min.js'></script>
<script type='text/javascript' src='/js/init.js'></script>

</body>
</html>
