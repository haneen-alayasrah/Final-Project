@extends('header')
@section('content')

<!-- filter region -->
<div class="filter">
   <div class="container">
      <div class="region-content col-md-12">
         <h1>Making Jordan accessible for all</h1>
         <h2>What are you looking for?</h2>
         <div class="filter-form">
            <form id="place-search-form" class="form-inline" action="{{url('/place')}}" method="GET" autocomplete="off">
               <div class="form-group col-md-3 highlight-addon hide-errors field-placesmodelsearch-title">
                  <label class="sr-only" for="placesmodelsearch-title">Name of Place</label>
                  <div class="tt-scrollable-menu"><input type="text" id="placesmodelsearch-title" class="form-control" name="PlacesSearch" placeholder="Name of Place"></div>
               </div>
               <div class="form-group col-md-3 highlight-addon hide-errors field-placesmodelsearch-subsector_id">
                  <div class="kv-plugin-loading loading-placesmodelsearch-subsector_id">&nbsp;</div>
                  <select id="placesmodelsearch-subsector_id" class="form-control" name="PlacesSearchtype" >
                     <option >TYPE OF PLACE</option>  
                  @foreach ($type as $typeitem)
                  <option value="{{$typeitem->id}}">{{$typeitem->name}}</option>  
                  @endforeach
                  </select>
                  
               </div>
               <div class="form-group col-md-3 highlight-addon hide-errors field-placesmodelsearch-city_id">
                  <div class="kv-plugin-loading loading-placesmodelsearch-city_id">&nbsp;</div>
                  <select id="placesmodelsearch-city_id" class="form-control" name="PlacesSearchcity"  data-s2-options="s2options_98abd855">
                     <option value="">City</option>
                     @foreach ($city as $cityitem)
                     <option value="{{$cityitem->id}}">{{$cityitem->name}}</option>  
                     @endforeach
                  </select>
               </div>
               <button type="submit" class="button form-submit btn-primary btn icon-before"><img src="images/search_button.png" alt=""> Search</button>
            </form>
         </div>
      </div>
   </div>
</div>
<!-- End filter region -->
<!-- html-video region -->
<div class="html-video">
   <div class="region-content">
      <div class="video">
         <video  autoplay muted id="videoHP">
            <source src="images/homepage.mp4" type="video/mp4">
         </video>
      </div>
   </div>
</div>
<!-- End html-video region -->
<!-- contact-us region -->
<div class="contact-us">
   <div class="container">
      <div class="region-content col-md-12">
         <div class="content">
            <div class="breif">
               Accessible Jordan can help you make your space, event or experience accessible to everyone.
            </div>
            <div class="link"><a
               class="contact-us-link" href="{{url('/contact')}}">Contact Us</a></div>
         </div>
      </div>
   </div>
</div>
<!-- End contact-us region -->
<!-- News region -->

<div class="news">
   <div class="container">
      <div class="region-content col-md-12">
         <h2>LATEST NEWS & ARTICLES</h2>
            <div class="bottom-content">
               <div class="all-rows">
                   
                   @foreach ($article as $articleitem)
                  <div class="first row col-md-3 col-sm-6 col-xs-6">
                     <a href="/en/posts/view?slug=jitoa-announces-partnership">
                     </a>
                     <div class="row-content">
                        <a href="{{url('show-article/'.$articleitem->id)}}">
                           <div class="filed-set">
                              <div class="image"><img src="{{asset('uploads/article/'.$articleitem->image)}}" width="250px" height="170px" alt="article"></div>
                              <div class="category news">{{$articleitem->type}}</div>
                           </div>
                           <div class="date">{{ $articleitem->created_at->format(' M d, Y') }}
                        </div>
                        </a>
                        <div class="title"><a href="{{url('show-article/'.$articleitem->id)}}">
                           </a><a href="{{url('show-article/'.$articleitem->id)}}">{{ Str::of($articleitem->title)->words(4) }}</a>                                    
                        </div>
                        <div class="link-to">
                           <a href="{{url('show-article/'.$articleitem->id)}}">Read More</a>                                    
                        </div>
                     </div>
                  </div>
                  @endforeach
               </div>
               <div class="pager">
               </div>
            </div>
         <div class="view-all"><a
            href="{{url('/article')}}">VIEW MORE Articles</a>
         </div>
      </div>
   </div>
</div>
<!-- End News region -->
<!-- Newsletter region -->
<div class="newsletter">
   <div class="container">
      <div class="region-content">
         <div class="left col-md-6">
            <div class="image"><img src="images/newsletter1.png"/></div>
         </div>
         <div class="right col-md-6">
            <div class="news-form">
               <!-- Begin Mailchimp Signup Form -->
               <link href="../cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
               <style type="text/css">
                  #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
               </style>
               <div id="mc_embed_signup">
                  <form action="https://accessiblejordan.us19.list-manage.com/subscribe/post?u=298c921b734dd7be8ed0e4b19&amp;id=21446508c3" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                     <div id="mc_embed_signup_scroll">
                        <h2>Subscribe to Our Newsletter</h2>
                        <div class="mc-field-group">
                           <label for="mce-FNAME">Full Name<span class="asterisk">*</span>
                           </label>
                           <input type="text" value="" name="FNAME" class="required" id="mce-FNAME">
                        </div>
                        <div class="mc-field-group">
                           <label for="mce-EMAIL">Email Address<span class="asterisk">*</span>
                           </label>
                           <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
                        </div>
                        <div class="mc-field-group">
                           <label for="mce-MMERGE4">City<span class="asterisk">*</span>
                           </label>
                           <select name="MMERGE4" class="required" id="mce-MMERGE4">
                              <option value=""></option>
                           </select>
                        </div>
                        <div id="mce-responses" class="clear">
                           <div class="response" id="mce-error-response" style="display:none"></div>
                           <div class="response" id="mce-success-response" style="display:none"></div>
                        </div>
                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_298c921b734dd7be8ed0e4b19_21446508c3" tabindex="-1" value=""></div>
                        <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                     </div>
                  </form>
               </div>
               <script type='text/javascript' src='../s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[1]='FNAME';ftypes[1]='text';fnames[0]='EMAIL';ftypes[0]='email';fnames[4]='MMERGE4';ftypes[4]='dropdown';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
               <div class="help-text">
                   <img src="images/info-button.png"/>Every month our subscribers get awesome updates 
                 </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- End Newsletter region -->
<footer>
    <div class="container">
        <div class="region-content">
            <div class="left col-md-9 col-sm-9 col-xs-12">
                <div class="quick-links-title"><h2 class="title-of-menu">Quick links :</h2></div>
                <div class="quick-links">

                    <ul id="footerMenu" class="sf-menu nav"><li><a href="en/tourism-guide.html">Tourism Guide</a></li>
<li class="last"><a href="places69c3.html?PlacesModelSearch%5Btitle%5D=&amp;PlacesModelSearch%5Bsubsector_id%5D=3&amp;PlacesModelSearch%5Bcity_id%5D=&amp;language=en">Food & Drinks</a></li></ul>                </div>
            </div>
            <div class="right col-md-3 col-sm-3 col-xs-12">
                <div class="copyright">Copyrights © 2022 <a href="http://dot.jo/" target="_blank">dot.jo.</a> All Rights Reserved.</div>
            </div>
        </div>
    </div>
</footer>

@endsection