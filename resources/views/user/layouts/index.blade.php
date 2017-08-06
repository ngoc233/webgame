<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        
        <title>Web Game</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" type="text/css" href="{{url('public/css/font-awesome.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('public/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{url('public/css/normalize.css')}}">
        <link rel="stylesheet" href="{{url('public/css/main.css')}}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="{{url('public/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- nav -->
        @include('user.layouts.nav')
        <!--/nav-->

        <!--slogan-->
        @include('user.layouts.slogan')
        <!--/slogan-->

        <section class="content">
            <div class="container">
                <div class="row">
                    <!-- side-left-->
                    @include('user.layouts.side-left')
                    <!--/side-left-->

                    <!-- slide-right-->
                    @include('user.layouts.slider')
                    <!--/slide-right-->

                    <!-- page-content-->
                    <!-- menu-->
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div id="page-content">
                            <div class="menu">
                                <ul>
                                    @foreach($arrays['cates'] as $cate)
                                    <li><button onclick="ajax_category({{$cate->id}})">{{$cate->name}}</button></li>
                                    @endforeach 
                                </ul>
                            </div>
                    <!--/menu-->
                    <hr>
                    <!-- content-->
                    <div id="content">
                    @yield('content')
                    </div>
                    <!--/content-->
                    
                    </div>
                    <!--/page-content-->
                </div>
            </div>
            </div>
            </div>
        </section>

        <!-- footer-->
        @include('user.layouts.footer')
        <!--/footer-->
        <!-- notificate-->
        <!--/notificate-->
        <!-- Add your site or application content here -->
        <script src="{{url('public/js/jquery-3.2.1.min.js')}}"></script>
        <script src="{{url('public/js/bootstrap.min.js')}}"></script>
        <script src="{{url('public/js/plugins.js')}}"></script>
        <script src="{{url('public/js/main.js')}}"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
        <!-- facebook-javacsript-->
        <div id="fb-root"></div>
            <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                  if (d.getElementById(id)) return;
                  js = d.createElement(s); js.id = id;
                  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.10";
                  fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));
        </script>
        <!--/facebook-javascript-->
        <!-- nav-croll-->
        <script type="text/javascript">
            $(document).ready(function(){       
            var scroll_start = 0;
            var startchange = $('#nav');
            var offset = startchange.offset();
            if (startchange.length){
            $(document).scroll(function() { 
                    scroll_start = $(this).scrollTop();
                    if(scroll_start > offset.top) {
                       $(".navbar").css('background-color', 'rgba(0, 170, 131, 0.60)');
                    }
                    else if (scroll_start == 0)
                    {
                        $(".navbar").css('background-color', 'rgba(76, 175, 80, 0.0)');
                    }   
                    else
                    {
                       $('.navbar').css('background-color', 'rgba(0, 170, 131, 0.64))');
                    }
                });
            }

        });
        </script>
        <!--/nav-scroll-->
        <!-- ajaxcategory -->
        <script type="text/javascript">
            function ajax_category(id){
                var demo = window.location.href ;
                var a    = demo.search("p=");
                if (a != 0)
                {
                    $.ajax({
                        url : id,
                        type : "get",
                        data : {
                        },
                        dataType:"text",
                        success : function (result){
                            $('#content').html(result);
                        }
                    });
                }
                if(a == -1)
                {
                    $.ajax({
                        url : "cate/"+id,
                        type : "get",
                        data : {
                        },
                        dataType:"text",
                        success : function (result){
                            $('#content').html(result);
                        }
                    });
                }
            }
        </script>
        <!--/ajaxcategory -->
        <!-- ajaxpost -->
        <script type="text/javascript">
            function ajax_post(id)
            {
                $.ajax({
                        url : "post/"+id,
                        type : "get",
                        data : {
                        },
                        dataType:"text",
                        success : function (result){
                            $('#content').html(result);
                        }
                    });   
            }
        </script>
        <!--/ajaxpost -->
    </body>
</html>

