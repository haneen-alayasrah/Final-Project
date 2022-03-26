@extends('header')
@section('content')
<div class="findaplace-inner">
<div class="inner-content">
<div class="bottom-header">
   <div class="container">
      <div class="region-content col-md-12">
         <h2 class="page-title">Find a place</h2>
         <div class="title-of">
            <h3>{{$place->name}}</h3>
            <a class="" style="cursor: pointer;" data-toggle="popover-x" data-placement="right" data-target="#w0"><img src="/images/title-of-find.png" alt=""></a>
            <div id="w0" class="popover popover-default popover-lg popover-x" trigger="hover focus" role="dialog">
               <div class="arrow"></div>
               <div class="popover-header popover-title">
                  <button type="button" class="close" data-dismiss="popover-x" aria-hidden="true">×</button>
                  Description
               </div>
               <div class="popover-body popover-content">
                  <p>This place has been visited and checked by Accessible Jordan.</p>
               </div>
            </div>
            <div class="popover-x-marker" style="display: none;"></div>
         </div>
         <div class="direction-menu">
            <div class="call-now place">
               <a href="https://maps.google.com?saddr=Current+Location&amp;daddr=31.96041,35.90408" target="_blank"><img class="logo" src="/images/skyline.png" alt="">Amman - Jabal Amman</a>                        
            </div>
            <div class="direction"><a href="{{$place->location}}" target="_blank"><img src="/images/navigation-blue-en.png">Get Directions                            </a>
            </div>
            <div class="call-now responsive">
               <a href="{{$place->phone}} "><img src="/images/call-answer-grey-en.png">{{$place->phone}}   
               </a><!-- (06) 464 1361 -->
            </div>
         </div>
         <div class="call-now">
            <a href="tel:+962-6-560-7100"><img src="/images/call-answer-grey-en.png">{{$place->phone}}                         </a><!-- (06) 464 1361 -->
         </div>
         <div class="website">
            <a href="{{$place->social}}" target="_blank"><img src="/images/www.png" alt="">{{$place->social}}</a>                    
         </div>
         <div class="social-icons" style="display: none;">
            <ul class="menu menu--social-media nav" style="/*display: none*/">
               <li>
                  <a href="/" target="_blank" rel="" class="facebook"><img src="/images/facebook.png"></a>
               </li>
               <li>
                  <a href="/" target="_blank" rel="" class="twitter"><img src="/images/twitter.png"></a>
               </li>
               <li>
                  <a href="/" target="_blank" rel="" class="instagram"><img src="/images/instagram2.png"></a>
               </li>
            </ul>
         </div>
      </div>
   </div>
</div>
<!-- content region -->
<div class="content">
<div class="container">
   <div class="region-content col-md-12">
      <div class="slideshow findplace">
         <div class="bxslider-thumbnail">
            <div class="bx-wrapper" style="max-width: 100%;">
               <div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 403px;">
                  <ul class="bx-thumbnail" style="width: 1515%; position: relative; transition-duration: 0s; transform: translate3d(-744px, 0px, 0px);">
                     <li style="float: left; list-style: none; position: relative; width: 704px;" class="bx-clone">
                        <img alt="" src="/uploads/2018/10/ghoroub2-920x403.png">
                     </li>
                     <li style="float: left; list-style: none; position: relative; width: 704px;">
                        <img alt="" src="{{asset('uploads/place/'.$place->image)}}">
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <div class="accessibility-features">
         <h2 class="block-title">Accessibility Features:</h2>
         <ul>
            <li> {{$place->features_accessible}}</li>
         </ul>
      </div>
      <div class="third-region">
         <div class="accessibility-description">
            <h2 class="block-title">Accessibility description:</h2>
            <div class="body">
               {{$place->description}}
            </div>
         </div>
         <div class="features-facilities">
            <h2 class="block-title">FEATURES AND FACILITIES:</h2>
            <ul class="col-md-6 col-sm-6 col-xs-12">
               <li>{{$place->features_and_facilities}}</li>
            </ul>
         </div>
      </div>
    
   </div>
</div>
@endsection