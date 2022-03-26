@extends('header')
@section('content')
<div class="inner-content">
   <div class="container">
      <div class="region-content col-md-12">
         <div class="news-inner">
            <h2 class="page-title">NEWS &amp; ARTICLES</h2>
            <div class="top-content">
               <div class="left-top col-md-6">
                  <div class="node-title">
                     <h3>{{$article->title}}</h3>
                  </div>
               </div>
               <div class="right-top col-md-6">
                  <div class="category news">{{$article->type}}</div>
               </div>
               <div class="left-bottom col-md-6">
                  <div class="editor"><img src="/images/edit.png">{{$article->created_by}}</div>
               </div>
               <div class="right-bottom col-md-6">
                  <div class="date">{{$article->created_at->format(' M d, Y')}}</div>
               </div>
            </div>
            <div class="bottom-content">
               <div class="slideshow newsinner">
                  <div class="bxslider-thumbnail">
                     <div class="bx-wrapper" style="max-width: 100%;">
                        <div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 515px;">
                           <ul class="bx-thumbnail" style="width: 515%; position: relative; transition-duration: 0s; transform: translate3d(-950px, 0px, 0px);">
                              <li style="float: left; list-style: none; position: relative; width: 910px;" class="bx-clone">
                                 <img alt="" src="{{asset('uploads/article/'.$article->image)}}">
                              </li>
                              <li style="float: left; list-style: none; position: relative; width: 910px;">
                                 <img alt="" src="{{asset('uploads/article/'.$article->image)}}">
                              </li>
                              <li style="float: left; list-style: none; position: relative; width: 910px;">
                                 <img alt="" src="/uploads/2019/01/1b1175c6-1714-4b6e-9c2c-db8602ddc720-1110x515.jpg">
                              </li>
                              <li style="float: left; list-style: none; position: relative; width: 910px;">
                                 <img alt="" src="/uploads/2019/01/76cb813c-644a-46fa-b8d7-5e492fa94e0c-1110x515.jpg">
                              </li>
                              <li style="float: left; list-style: none; position: relative; width: 910px;" class="bx-clone">
                                 <img alt="" src="/uploads/2019/01/1f43153c-eed6-4016-b6a5-ab192509b3e4-1110x515.jpg">
                              </li>
                           </ul>
                        </div>
                        <div class="bx-controls"></div>
                     </div>
                  </div>
               </div>
               <div class="body article-body">
                  <p>{{$article->article}}</p>
               </div>
               <div class="comments-section">
                  <div class="comments">
                     @if (session('message'))
                     <div class="alert alert-success">{{session('message')}}</div>
                     @endif
                     @if ($errors->any())
                     <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                        <div>{{$error}}</div>
                        @endforeach
                     </div>
                     @endif
                     <div class="comments-main-form">
                        <div class="comment-form  clearfix">
                           <form id="comment-form" action="{{url('/add-comment/'.$article->id)}}" method="POST">
                              @csrf <!-- {{ csrf_field() }} -->
                              <input type="hidden" name="_csrf">
                              <div class="row">
                                 <div class="col-lg-12">
                                    <div class="form-group field-comment-content required">
                                       <div class="help-block"></div>
                                       <textarea id="comment-content" class="form-control input-sm" name="comment" placeholder="Write a comment" aria-required="true"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Post  </button>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                     <!--    -->        
                     @forelse ($article->articlecomments as $commentart)
                     <div id="p0" data-pjax-container="" data-pjax-push-state="" data-pjax-timeout="1000">
                        <div id="w1" class="comments">
                           <div class="comment" data-key="22">
                              <div class="comment 1">
                                 <div class="user-image">
                                    <img src="/images/comments-user.png">
                                 </div>
                                 <div class="filed-set">
                                    <div class="user-name">{{$commentart->username}}</div>
                                    <div class="user-date"><time data-toggle="timeago" >{{$commentart->created_at->format(' M d, Y')}}</time></div>
                                    <div class="comment-body">
                                       {{$commentart->comment}}  
                                    </div>
                                    <div>
                                       <a href="{{url('delete-articlecomment/'.$commentart->id)}}" class="btn btn-danger btn-sm me-2">Delete </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="text-center"></div>
                        </div>
                     </div>
                     @empty
                     <strong>NO Comments Yet</strong> 
                     @endforelse
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection