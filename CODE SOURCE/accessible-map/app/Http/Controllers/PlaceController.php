<?php

namespace App\Http\Controllers;
use App\Models\Type;
use App\Models\City;
use App\Models\Place;

use Illuminate\Http\Request;

class PlaceController extends Controller
{
    public function index(Request $request)
    {
        $type = Type::all();
        $city = City::all();


     
     
            if($request->has('PlacesSearch')) {
                $place=Place::where('name' ,'LIKE' ,'%'.$request->PlacesSearch.'%')->orderBy('id' , 'desc')->paginate(9);
              
            }
            elseif( $request->has('PlacesSearchtype')){
                $place=Place::where('type_id' ,'LIKE' ,'%'.$request->PlacesSearchtype.'%')->orderBy('id' , 'desc')->paginate(9);

            }
            elseif( $request->has('PlacesSearchcity')){
                $place=Place::where('city_id' ,'LIKE' ,'%'.$request->PlacesSearchcity.'%')->orderBy('id' , 'desc')->paginate(9);

            }
            else
            {
            $place=Place::orderBy('id' , 'desc')->paginate(6);
            }
           
        


        return view('layouts.place' , compact('place','city','type' ));
    }


    public function show($place_id){

        $place = Place::find($place_id);

        return view('layouts.place.show' , compact('place'));
    }

}

