<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
      <link rel="stylesheet" href="{{ asset('assets/css/responsive.css')}}">
      <link rel="stylesheet" href="src/icons/fontawesome5.9.0/css/all.css" />
      <link rel="stylesheet" href="src/css/default.css" />
      <link rel="stylesheet" href="src/css/asb.css" />
      <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
      <script src="{{asset('assets/js/script.js')}}"></script>
      <script src="{{ asset('assets_admin/js/jquery-3.6.0.min.js')}}"></script>
      <link href="{{asset('assets/css/e6196531/css/bootstrap0630.css?v=1641226875')}}" rel="stylesheet">
      <title>ACCESSIBLE MAP</title>
      <link rel="shortcut icon" href="/images/logo.jpeg" type="image/x-icon">
   </head>
   <body style="zoom: 1;">
      <header>
         <div class="container">
            <div class="top-header">
               <div class="col-md-3 col-sm-3 col-xs-12 left">
                  <div class="logo"><a href="index.html"><img src="/images/logo.jpeg" height="170" width="200"/></a></div>
               </div>
               <div class="col-md-9 col-sm-9 col-xs-12 right">
                  <div class="responsive-links"><img src="images/menu.png" class="open-menu"/><img
                     src="images/close.png" class="close-menu"/></div>
                  <div class="top">
                     <div class="login">
                        <ul class="sf-menu" id="login">
                           <li>
                            
                                 @auth

                                 <a  href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <img src="/images/users.png"  height="20" width="20"/>
                                    Logout 
                                       </a>
                                       <form id="logout-form" action="{{route('logout')}}" method="POST" class="d-none">
                                          @csrf
                                          </form>
                                       @endauth

                                 </li>
                           </li>
                        </ul>
                     </div>
                     <div class="social-icons">
                        <ul class="menu menu--social-media nav">
                           <li>
                              <a href="https://www.facebook.com/accessiblejordan/" target="_blank"
                                 rel="" class="facebook"><img src="/images/facebook.png"/></a>
                           </li>
                           <li>
                              <a href="https://www.twitter.com/accessiblejo/" target="_blank"
                                 rel="" class="twitter"><img src="/images/twitter.png"/></a>
                           </li>
                           <li>
                              <a href="https://www.instagram.com/accessiblejordan/" target="_blank"
                                 rel="" class="instagram"><img src="/images/instagram2.png"/></a>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="bottom">
                     <div class="search"><a href="en/search.html"><img src="images/search.png" alt=""></a></div>
                     <div class="menu">
                        <ul id="main-menu" class="sf-menu nav" style="touch-action: pan-y;">
                           <li class="active"><a href="{{url('/home')}}">Home</a></li>
                           <li><a href="{{url('/about')}}">About</a></li>
                           <li><a href="{{url('/service')}}">Services</a></li>
                           <li><a href="{{url('/place')}}">FIND A PLACE</a></li>
                           <li><a href="{{url('/article')}}">Articles</a></li>
                           <li><a href="{{url('/contact')}}">Contact Us</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      @yield('content')
      <script src="{{ asset('assets_admin/js/jquery-3.6.0.min.js')}}"></script>
      <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"
    ></script>
    <script type="text/javascript" src="src/js/asb.js"></script>
   </body>
   
</html>