<!DOCTYPE html>
<html lang="en">
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

<div class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <!-- Button for smallest screens -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            <a class="navbar-brand" href="index.html">

                {{--<img src="assets/images/logo.png" alt="Techro HTML5 template">--}}
                {{HTML::image('/images/logo.png')}}

            </a>
            <span style="padding-left: 836px"><a href="{{ URL::route('account-sign-out') }}">Sign Out</a></span>
        </div>
        <div class="navbar-collapse collapse">

        </div>
        <!--/.nav-collapse -->
    </div>
</div>
<!-- /.navbar -->

<header id="head" class="secondary">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <h1>Course->Lession: {{ $coursename }}</h1>
            </div>
        </div>
    </div>
</header>

<!-- container -->
<section class="container">
    <div class="row">
        <!-- main content -->
        <section class="col-sm-8 maincontent">

            @foreach($lessions as $lession)

                <h3> {{ $lession->title }}</h3>
                <p> {{ $lession->description }} </p>

            @endforeach
        </section>
        <aside class="col-sm-4 sidebar sidebar-right">

            <div class="panel">
                <h4>Latest News</h4>
                <ul class="list-unstyled list-spaces">
                    <li><a href="">Responsive Design</a><br>
                        <span class="small text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, laborum.</span></li>
                    <li><a href="">HTML5, CSS3 and JavaScript</a><br>
                        <span class="small text-muted">Consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam</span></li>
                    <li><a href="">Bootstrap</a><br>
                        <span class="small text-muted">Eveniet, consequuntur eius repellendus eos aliquid molestiae ea</span></li>
                    <li><a href="">Clean Template</a><br>
                        <span class="small text-muted">Sed, mollitia earum debitis est itaque esse reiciendis amet cupiditate.</span></li>
                    <li><a href="">Premium Quality</a><br>
                        <span class="small text-muted">Voluptate minus illo tenetur sint ab in culpa cumque impedit quibusdam. Saepe, molestias quia.</span></li>
                </ul>
            </div>

        </aside>
        <!-- /Sidebar -->

    </div>
</section>

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
                            <a href="about.blade.php">About</a> |
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
</body>
</html>
