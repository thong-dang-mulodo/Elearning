<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="eLearning is a modern and fully responsive Template by WebThemez.">
    <meta name="author" content="webThemez.com">
    <title>eLearning - Free Educational Responsive Web Template </title>

    <link rel="favicon" href="assets/images/favicon.png">

    <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">

    {{ HTML::style('css/bootstrap.min.css'); }}

    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    {{ HTML::style('css/font-awesome.min.css'); }}

    {{ HTML::style('css/bootstrap-theme.css'); }}

    {{ HTML::style('css/da-slider.css'); }}

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
            <span style="padding-left: 836px"><a href="{{ URL::route('account-sign-out') }}">Sign Out</a></span>
        </div>
        <div class="navbar-collapse collapse">

        </div>
        <!--/.nav-collapse -->
    </div>
</div>
<!-- /.navbar -->

<!-- Header -->
<header id="head">
    <div class="container">
        <div class="banner-content">
            <div id="da-slider" class="da-slider">
                <div class="da-slide">
                    <h2>Educational Website</h2>
                    <p>Amazing free responsive website for free, enjoy!!!</p>
                    <div class="da-img"></div>
                </div>
                <div class="da-slide">
                    <h2>Online Education</h2>
                    <p>Bootstrap is a powerful mobile first front-end framework..</p>
                    <div class="da-img"></div>
                </div>
                <div class="da-slide">
                    <h2>Super Success</h2>
                    <p>HTML5 is a markup language used for structuring and presenting Web.</p>
                    <div class="da-img"></div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- /Header -->


<div id="courses">
    <div class="container">
        <h2>Online Courses</h2>
            <?php $count = 0?>
            @foreach($courses as $course)
              <?php $count++ ?>
                @if (($count % 3) == 1)
                    <div class="row">
                @endif
                <div class="col-md-4">
                    <div class="featured-box">
                        <i class="fa fa-cogs fa-2x"></i>
                        <div class="text">
                            <h3>{{ HTML::link('/lession/'.$course->id, $course->title) }}</h3>
                            {{--{{ $course->title }}--}}
                            {{  $course->description }}
                        </div>
                    </div>
                </div>
                @if (($count % 3) == 0)
                    </div>
                @endif
            @endforeach
    </div>
</div>


{{--<script src="assets/js/modernizr-latest.js"></script>--}}
{{ HTML::script('assets/js/modernizr-latest.js') }}
{{--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>--}}
{{ HTML::script('http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js') }}
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
{{ HTML::script('http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js') }}
{{--<script src="assets/js/jquery.cslider.js"></script>--}}
{{ HTML::script('assets/js/jquery.cslider.js') }}
<script src="assets/js/custom.js"></script>
{{ HTML::script('assets/js/custom.js') }}
</body>
</html>
