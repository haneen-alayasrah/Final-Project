@extends('header')
@section('content')
<div class="inner-content">
   <div class="container">
      <div class="region-content contact-us-inner">
         <h2 class="page-title">Contact us</h2>
         @if (session('message'))
         <div class="alert alert-success">{{session('message')}}</div>
      @endif
         <h4>
            Please contact us if you have any questions, comments, or suggestions by filling out the following form or emailing us directly at info@accessiblemap.com.
         </h4>
         <div class="contact-us ">
            @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <div>{{$error}}</div>
                @endforeach
            </div>
            @endif
            <form id="contact-form" class="contact-us-form form-vertical" action="{{url('/contact')}}" method="POST">
                @csrf <!-- {{ csrf_field() }} -->

               <div class="form-group required">
                  <input type="text" id="contactform-name" class="form-control" name="sent_by" placeholder="Full Name *" aria-required="true">
               </div>
               <div class="form-group">
                  <input type="text" id="contactform-phone" class="form-control" name="number" placeholder="Number">
               </div>
               <div class="form-group required">
                  <input type="text" id="contactform-email" class="form-control" name="email" placeholder="Email address *" aria-required="true">
               </div>
               <div class="form-group required">
                  <textarea id="contactform-body" class="form-control" name="message" rows="10" placeholder="Your message *" aria-required="true"></textarea>
               </div>
               <button type="submit" class="btn btn-lg btn-primary btn-block">Send</button>
            </form>
         </div>
      </div>
   </div>
</div>
<!-- End Newsletter region -->
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