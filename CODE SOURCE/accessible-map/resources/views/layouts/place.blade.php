@extends('header')
@section('content')
<div class="container">
   <div class="region-content">
      <div class="findaplace-listing">
         <h2 class="page-title col-md-6">Find a place</h2>
         <div class="show-hide">
            <h2 class="add-place view-search col-md-6 plus">
               <a class="btn btn-primary" href="/places/#?language=en"><img src="/images/add.png" alt="">View Search Filters</a>                    
            </h2>
            <h2 class="add-place view-search col-md-6 minus">
               <a class="btn btn-primary" href="/places/#?language=en"><img src="/images/minus.png" alt="">Hide Search Filters</a>                    
            </h2>
         </div>
         <form id="place-search-form" class="form-vertical" action="{{url('/place')}}" method="GET"  autocomplete="off">

            <div class="filter col-md-12">
               <div class="filter-content">
                  <div class="filter-form">
                     <div class="form-group col-md-4 highlight-addon hide-errors field-placesmodelsearch-title">
                        <div class="kv-plugin-loading loading-placesmodelsearch-subsector_id">&nbsp;</div>
                        <label class="sr-only" for="placesmodelsearch-title">Name of Place</label>
                        <div class="tt-scrollable-menu">
                           <input type="text" name="PlacesSearch" class="form-control" placeholder="Name of Place">
                        </div>
                     </div>
                     <div class="form-group col-md-4 highlight-addon hide-errors field-placesmodelsearch-subsector_id">
                        <div class="kv-plugin-loading loading-placesmodelsearch-subsector_id">&nbsp;</div>
                        <select id="placesmodelsearch-subsector_id" class="form-control" name="PlacesSearchtype" >
                           <option >TYPE OF PLACE</option>
                           @foreach ($type as $typeitem)
                           <option value="{{$typeitem->id}}">{{$typeitem->name}}</option>
                           @endforeach
                        </select>
                     </div>
                     <div class="form-group col-md-4 highlight-addon hide-errors field-placesmodelsearch-subsector_id">
                        <div class="kv-plugin-loading loading-placesmodelsearch-subsector_id">&nbsp;</div>
                        <select id="placesmodelsearch-subsector_id" class="form-control" name="PlacesSearchcity" >
                           <option >CITY</option>
                           @foreach ($city as $cityitem)
                           <option value="{{$cityitem->id}}">{{$cityitem->name}}</option>
                           @endforeach         
                           </select>
                     </div>
                     <div class="search-buttons">
                        <button type="submit" class="btn btn-lg  btn-primary"><img src="/images/magnifying-glass.png" alt="">Search</button>        
                        <a class="btn btn-lg  btn-primary"  href="{{url('/place')}}">Reset</a>
                     </div>
                  </div>
               </div>
            </div>
      </div>
   </div>
</div>
<div class="bottom-content">
    <!--                    -->
    <div class="container">
       <div class="row">
          @foreach ($place as $placeitem)
          <div class="col-md-4 col-sm-12 ">
            <a href="{{url('show-place/'.$placeitem->id)}}">
               <img id="placeimg" src="{{asset('uploads/place/'.$placeitem->image)}}" alt="Nature"  width="350px" height="250px">
            </a>
             <div class="text-block">
                <h5>{{$placeitem->name}}</h5>
                <a href="{{$placeitem->location}}"> Get Location</a>
                <p>{{$placeitem->phone}}</p>
             </div>
          </div>
          @endforeach
       </div>
      <div class="paginate"> {{$place->links()}}</div>
    </div>
 </div>
</form>
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