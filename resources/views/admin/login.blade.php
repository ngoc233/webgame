<!DOCTYPE html>
<html>
<head>
  <title>Login Admin</title>
 <!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Elegant Login Form Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme  -->
<link rel="stylesheet" href="{{ url('public/admin/login/css/style.css')}}">
   <!-- font-awesome icons -->
<link href="{{ url('public/admin/login/css/font-awesome.css')}}" rel="stylesheet"> 
<!-- //font-awesome icons -->
<link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
  </head>
  <body>
<div class="login-form w3_form">
  <!--  Title-->
      <div class="login-title w3_title">
           <h1>Lạc Trôi</h1>
      </div>
           <div class="login w3_login">
               
                <h2 class="login-header w3_header">Log in</h2>
				    <div class="w3l_grid">
                        <form class="login-container" action="{{url('admin/login')}}" method="post">
                          @if(session('err'))
                            <div style="font-size: 20px; font-weight: bold; color: black">
                              {{session('err')}}.....
                            </div>
                          @endif
                          <input type="hidden" name="_token" value="{{csrf_token()}}"> 
                             <input type="text"
                             style=" background: #fff;
                                margin: 25px 0px;
                                color: #ccc6c6;
                                box-sizing: border-box;
                                display: block;
                                width: 100%;
                                border-width: 1px;
                                border-style: solid;
                                padding: 13px;
                                outline: none;
                                font-family: inherit;
                                font-size: 0.95em;" 
                              placeholder="Name" Name="name" required="" >
                             <input type="password" placeholder="Password" Name="password" required="">
                             <input type="submit" value="Submit">
                        </form>
<div class="second-section w3_section">
     <div class="bottom-header w3_bottom">
          <h3>OR</h3>
     </div>
     <div class="social-links w3_social">
         <ul>
         <!-- facebook -->
             <li> <a class="facebook" href="#" target="blank"><i class="fa fa-facebook"></i></a></li>

         <!-- twitter -->
             <li> <a class="twitter" href="#" target="blank"><i class="fa fa-twitter"></i></a></li>

         <!-- google plus -->
             <li> <a class="googleplus" href="#" target="blank"><i class="fa fa-google-plus"></i></a></li>
       </ul>
   </div>
</div>
                 
<div class="bottom-text w3_bottom_text">
      <p>No account yet?<a href="#">Signup</a></p>
      <h4> <a href="#">Forgot your password?</a></h4>
</div>

                  </div>
       </div>
  
</div>
<div class="footer-w3l">
		<p class="agile">Bâng khuâng mình ta lạc trôi giữa đời - ta lạc trôi giữa trời</a></p>
</div>
</body>
</html>