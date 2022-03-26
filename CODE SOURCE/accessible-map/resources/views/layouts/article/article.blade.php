@extends('header')
@section('content')
<div class="inner-content">
   <div class="container">
      <div class="region-content">
         <div class="news-listing">
            <div class="top-content clearfix">
               <div class="left col-md-6">
                  <h2 class="page-title">NEWS &amp; ARTICLES</h2>
               </div>
              
            </div>
          
            <div class="bottom-content">
               <div class="all-rows">
                   
                   @foreach ($article as $articleitem)
                  <div class="first row col-md-3 col-sm-6 col-xs-6">
                     <a href="{{url('show-article/'.$articleitem->id)}}">
                     </a>
                     <div class="row-content">
                        <a href="{{url('show-article/'.$articleitem->id)}}">
                           <div class="filed-set">
                              <div class="image"><img src="{{asset('uploads/article/'.$articleitem->image)}}" width="250px" height="170px" alt=""></div>
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
         </div>
      </div>
   </div>
</div>
<footer>
   <div class="container">
      <div class="region-content">
         <div class="left col-md-9 col-sm-9 col-xs-12">
            <div class="quick-links-title">
               <h2 class="title-of-menu">Quick links :</h2>
            </div>
            <div class="quick-links">
               <ul id="footerMenu" class="sf-menu nav">
                  <li><a href="en/tourism-guide.html">Tourism Guide</a></li>
                  <li class="last"><a href="places69c3.html?PlacesModelSearch%5Btitle%5D=&amp;PlacesModelSearch%5Bsubsector_id%5D=3&amp;PlacesModelSearch%5Bcity_id%5D=&amp;language=en">Food & Drinks</a></li>
               </ul>
            </div>
         </div>
         <div class="right col-md-3 col-sm-3 col-xs-12">
            <div class="copyright">Copyrights © 2022 <a href="http://dot.jo/" target="_blank">dot.jo.</a> All Rights Reserved.</div>
         </div>
      </div>
   </div>
</footer>
@endsection