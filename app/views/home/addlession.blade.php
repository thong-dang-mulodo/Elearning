<!DOCTYPE html>
<html lang="en">
{{--<head>--}}
    {{--<meta charset="utf-8">--}}
    {{--<meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
    {{--<meta name="description" content="eLearning is a modern and fully responsive Template by WebThemez.">--}}
    {{--<meta name="author" content="webThemez.com">--}}
    {{--<title>eLearning - Free Educational Responsive Web Template </title>--}}
    {{--<link rel="favicon" href="assets/images/favicon.png">--}}
    {{--<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">--}}
    {{--<link rel="stylesheet" href="assets/css/bootstrap.min.css">--}}
    {{--<link rel="stylesheet" href="assets/css/font-awesome.min.css">--}}
    {{--<!-- Custom styles for our template -->--}}
    {{--<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">--}}
    {{--<link rel="stylesheet" href="assets/css/style.css">--}}
    {{--<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->--}}
    {{--<!--[if lt IE 9]>--}}
    {{--<script src="assets/js/html5shiv.js"></script>--}}
    {{--<script src="assets/js/respond.min.js"></script>--}}
    {{--<![endif]-->--}}
{{--</head>--}}

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="eLearning is a modern and fully responsive Template by WebThemez.">
    <meta name="author" content="webThemez.com">

    <title>eLearning - Free Educational Responsive Web Template </title>
    <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    {{ HTML::style('css/bootstrap.min.css'); }}
    {{ HTML::style('css/font-awesome.min.css'); }}
    {{ HTML::style('css/bootstrap-theme.css'); }}
    {{ HTML::style('css/style.css'); }}
    {{ HTML::script('js/html5shiv.js'); }}
    {{ HTML::script('js/respond.min.js'); }}
    <![endif]-->
</head>

<body>
<!-- Fixed navbar -->
<div class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <!-- Button for smallest screens -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            <a class="navbar-brand" href="index.html">
                {{--<img src="assets/images/logo.png" alt="Techro HTML5 template">--}}
                {{HTML::image('/images/logo.png')}}
            </a>

        </div>
    </div>
</div>
<!-- /.navbar -->

<header id="head" class="secondary">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <h1>Contact us</h1>
            </div>
        </div>
    </div>
</header>

<!-- container -->
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h3 class="section-title">Your Lession: </h3>
            <p>
                The below 2 textbox is created for teacher to add Lession to the course  "Courseid".
            </p>

            {{ Form::open(array('url' => 'saveLession/1')) }}
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" placeholder="Subject">
                </div>
                <div class="form-group">
                    <label>Contain</label>
                    <textarea class="form-control" id="message" placeholder="Write you message here..." style="height:100px;"></textarea>
                </div>
            {{ Form::submit('Add Lession', array('class' => 'btn')) }}
            {{ Form::close() }}
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="section-title">Office Address</h3>
                    <div class="contact-info">
                        <h5>Address</h5>
                        <p>5th Street, Carl View - United States</p>

                        <h5>Email</h5>
                        <p>info@webthemez.com</p>

                        <h5>Phone</h5>
                        <p>+09 123 1234 123</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <h3 class="section-title">Timings</h3>
                    <div class="contact-info">
                        <h5>Monday - Friday</h5>
                        <p>09:00 AM - 6:30 PM</p>

                        <h5>Saturday</h5>
                        <p>Closed</p>

                        <h5>Sunday</h5>
                        <p>Closed</p>
                    </div>
                </div>
            </div>
            <p>
                Lorem ipsumn qersl ioinm sersoe non urna dolor sit amet, consectetur piesn qersl ioinm sersoe non urna dolor aecena.
            </p>
        </div>
    </div>
</div>
<!-- /container -->



<footer id="footer">
    <div class="container">
        <div class="social text-center">
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-dribbble"></i></a>
            <a href="#"><i class="fa fa-flickr"></i></a>
            <a href="#"><i class="fa fa-github"></i></a>
        </div>

        <div class="clear"></div>
        <!--CLEAR FLOATS-->
    </div>
    <div class="footer2">
        <div class="container">
            <div class="row">

                <div class="col-md-6 panel">
                    <div class="panel-body">
                        <p class="simplenav">
                            <a href="index.html">Home</a> |
                            <a href="about.html">About</a> |
                            <a href="courses.html">Courses</a> |
                            <a href="fees.html">Fees</a> |
                            <a href="portfolio.html">Portfolio</a> |
                            <a href="contact.html">Contact</a>
                        </p>
                    </div>
                </div>

                <div class="col-md-6 panel">
                    <div class="panel-body">
                        <p class="text-right">
                            Copyright &copy; 2014. Template by <a href="http://webthemez.com/" rel="develop">WebThemez.com</a>
                        </p>
                    </div>
                </div>

            </div>
            <!-- /row of panels -->
        </div>
    </div>
</footer>


<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="assets/js/custom.js"></script>

<!-- Google Maps -->
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script src="assets/js/google-map.js"></script>


</body>
</html>
