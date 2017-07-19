<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" type="text/css" href="{{url('public/css/font-awesome.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('public/css/bootstrap.min.css')}}">
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
        <nav id="nav" class="navbar navbar-inverse navbar-fixed-top" style="background: rgba(76, 175, 80, 0.0);border: none;">
          <div id="nav-brand" class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="#"><img src="{{url('public/img/logo.png')}}"></a>
            </div>
            <ul id="nav-right" class="nav navbar-nav">
              <li><a href="#">Home</a></li>
              <li><a href="#">Page 1</a></li>
              <li><a href="#">Page 2</a></li>
              <li><a href="#">Page 3</a></li>
            </ul>
          </div>
        </nav>
        <!--/nav-->

        <!--slogan-->
        <div class="container-fluid">
            <div class="row">
                <div id="slogan-image" class="col-md-6 col-sm-6 col-lg-6 col-xs-6">
                    <img src="{{url('public/img/slogan-image.png')}}">
                </div>
            </div>
        </div>
        <!--/slogan-->

        <section class="content">
            <div class="container">
                <div class="row">
                    <!-- side-left-->
                    <div id="side-left" class="col-md-4 col-xs-4 col-lg-4 col-sm-4">
                        <!-- singup-->
                        <div id="singup">
                            <!-- Trigger the modal with a button -->
                            <a href="#" data-toggle="modal" data-target="#myModal">
                                <div id="block-playnow">
                                </div>
                            </a>
                            <!-- Modal -->
                            <div id="myModal" class="modal fade" role="dialog">
                              <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  </div>
                                <!--modal-form-->
                                    <form action="#" class="form-group" id="form-modal">
                                        <h1>Signup Now</h1>
                                        <br>
                                        <input class="form-control" type="text" name="name" placeholder="name">
                                        <br>
                                        <input class="form-control" type="password" name="password" placeholder="password">
                                        <br>
                                        <input class="form-control" type="password" name="repassword" placeholder="repassword">
                                        <br>
                                        <input class="form-control" type="email" name="email" placeholder="email">
                                        <br>
                                        <button type="submit" class="btn btn-default">Signup</button>
                                    </form>
                                <!--/modal-form-->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                        <!--/singup-->
                        <!-- server-->
                        <div id="server">
                            <h5>Danh sách máy chủ</h5>
                            <div id="new-server">
                                <h3>
                                    <a href="">Chân Long - S133</a>
                                </h3>
                                <ul id="old-server">
                                    <li>S133</li>
                                    <li>S132</li>
                                    <li>S131</li>
                                    <li>S130</li>
                                    <li>S129</li>
                                    <li>S128</li>
                                    <li>S127</li>
                                    <li>S126</li>
                                    <li>S125</li>
                                    <li>S124</li>
                                    <li>S123</li>
                                    <li>S122</li>
                                    <li>S121</li>
                                    <li>S120</li>
                                    <li>S119</li>
                                </ul>
                                <ul id="server-tabs">
                                    <li>1</li>
                                    <li>2</li>
                                    <li>3</li>
                                    <li>4</li>
                                    <li>5</li>
                                    <li>6</li>
                                    <li>7</li>
                                    <li>8</li>
                                    <li>9</li>
                                </ul>
                            </div>
                        </div>
                        <!--/server-->
                        <!--function-->
                        <div id="button-big">
                            <ul>
                                <a href="#">
                                    <li class="function" id="recharge"></li>
                                </a>
                                <a href="#">
                                    <li class="function" id="gifcode"></li>
                                </a>
                                <a href="#">
                                    <li class="function" id="tutorial"></li>
                                </a>
                            </ul>
                        </div>    
                        <!--/function-->
                        <!-- facebook-->
                        <div class="fb-page" data-href="https://www.facebook.com/thongtinlienminhhuyenthoai/" data-tabs="timeline" data-width="320px" data-height="650px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/thongtinlienminhhuyenthoai/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/thongtinlienminhhuyenthoai/">Facebook</a></blockquote></div>
                        <!--/facebook-->
                    </div>
                    <!--/side-left-->

                    <!-- slide-right-->
                    <div id="side-right" class="col-md-8 col-sm-8 col-lg-8 col-xs-8" >
                        <div >
                          <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                              <li data-target="#myCarousel" data-slide-to="1"></li>
                              <li data-target="#myCarousel" data-slide-to="2"></li>
                              <li data-target="#myCarousel" data-slide-to="3"></li>
                              <li data-target="#myCarousel" data-slide-to="4"></li>
                            </ol>
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                              <div class="item active">
                                <img id="img-slider" src="{{url('public/img/slider-4.jpg')}}"  style="width:100%;">
                                <div class="carousel-caption">
                                </div>
                              </div>
                              <div class="item">
                                <img id="img-slider" src="{{url('public/img/slider-1.jpg')}}"  style="width:100%;">
                                <div class="carousel-caption">
                                </div>
                              </div>
                              <div class="item">
                                <img id="img-slider" src="{{url('public/img/slider-3.jpg')}}"  style="width:100%;">
                                <div class="carousel-caption">
                                </div>
                              </div>
                              <div class="item">
                                <img id="img-slider" src="{{url('public/img/slider-2.jpg')}}"  style="width:100%;">
                                <div class="carousel-caption">
                                </div>
                              </div>
                              <div class="item">
                                <img id="img-slider" src="{{url('public/img/slider-5.jpg')}}"  style="width:100%;">
                                <div class="carousel-caption">
                                </div>
                              </div>
                        </div>
                    </div>
                    <!--/slide-right-->

                    <!-- page-content-->
                    <!-- menu-->
                    <div id="page-content">
                        <div class="menu">
                            <ul>
                                <li>Tin tức</li>
                                <li>Sự kiện</li>
                                <li>Thông báo</li>
                                <li>Cẩm nang</li>
                            </ul>
                        </div>
                    <!--/menu-->
                    <hr>
                    <!-- content-->
                        <div id="content">
                            <ul id="list">
                                <li id="item">
                                    <div id="item-left">
                                        <img src="{{url('public/img/item-1.png')}}">
                                    </div>
                                    <div id="item-right">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        
                                    </div>
                                </li>
                                <hr>
                                <li id="item">
                                    <div id="item-left">
                                        <img src="{{url('public/img/item-2.jpg')}}">
                                    </div>
                                    <div id="item-right">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    </div>
                                </li>
                                 <li id="item">
                                    <div id="item-left">
                                        <img src="{{url('public/img/item-2.jpg')}}">
                                    </div>
                                    <div id="item-right">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    </div>
                                </li>
                                 <li id="item">
                                    <div id="item-left">
                                        <img src="{{url('public/img/item-3.jpg')}}">
                                    </div>
                                    <div id="item-right">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    </div>
                                </li>
                                <li id="item">
                                    <div id="item-left">
                                        <img src="{{url('public/img/item-4.png')}}">
                                    </div>
                                    <div id="item-right">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    </div>
                                </li>
                                <li id="item">
                                    <div id="item-left">
                                        <img src="{{url('public/img/item-5.png')}}">
                                    </div>
                                    <div id="item-right">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    </div>
                                </li>

                            </ul>
                        </div>
                    <!--/content-->

                    <!-- page-nav-->
                    <div id="page-nav">    
                        <ul>
                            <li>1</li>
                            <li>2</li>
                            <li>3</li>
                            <li>4</li>
                            <li>5</li>
                        </ul>
                    </div>
                    <!--/page-nav-->
                    </div>
                    <!--/page-content-->
                </div>
            </div>
        </section>

        <!-- footer-->
        <section id="footer">
            <div class="container">
                <div class="row">
                    <div id="footer-left" class="col-sm-4 col-sm-4 col-lg-4 col-xs-4">
                        <img src="{{url('public/img/logo-vegagame.png')}}">
                    </div>
                    <div id="footer-right" class="col-sm-8 col-sm-8 col-lg-8 col-xs-8">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </div>
                </div>
            </div>
        </section>
        <!--/footer-->

        <!-- notificate-->
        <section>
            <div class="container-fluid">
                <div class="row">
                    <div id="notificate" class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
                        Chơi game quá 180 phút một ngày ảnh hưởng xấu tới sức khỏe.
                    </div>
                </div>
            </div>
        </section>
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
    </body>
</html>

