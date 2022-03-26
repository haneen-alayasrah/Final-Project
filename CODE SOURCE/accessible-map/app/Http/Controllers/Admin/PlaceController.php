<?php

namespace App\Http\Controllers\Admin;
use App\Models\Type;
use App\Models\City;
use App\Models\Place;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\PlaceFormRequest;


class PlaceController extends Controller
{
    public function index()
    {
        $place = Place::all();
        $city = City::where('status', '0')->get();
        $type = Type::where('status', '0')->get();

        return View('admin.place.index' , compact('place' , 'city' ,'type'));
    }

    public function create()
    {
        $type = Type::where('status', '0')->get();
        $city = City::where('status', '0')->get();

        return View('admin.place.create' , compact('type', 'city'));
    }

    public function store(PlaceFormRequest $request)
    {
        $data = $request->validated();

        $place = new Place;
        $place->city_id = $data['city_id'];
        $place->type_id = $data['type_id'];
        $place->name = $data['name'];
        $place->description = $data['description'];

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/place/' , $filename);
            $place->image = $filename;
        }

        $place->location = $data['location'];
        $place->phone = $data['phone'];
        $place->social = $data['social'];
        $place->features_accessible = $data['features'];
        $place->features_and_facilities = $data['features_and_facilities'];
        $place->meta_title = $data['meta_title'];
        $place->meta_description = $data['meta_description'];
        $place->meta_keyword= $data['meta_keyword'];
        $place->status = $request->status == true ? '1' :'0';
        $place->created_by = Auth::user()->id;
        $place->save();

        return redirect('admin/places')->with('message','Place Add Successfuly');
    }

    public function edit($place_id)
    {
        $place = Place::find($place_id);
        $type = Type::where('status', '0')->get();
        $city = City::where('status', '0')->get();

        return view('admin.place.edit' , compact('place' , 'city' ,'type'));

    }

    public function update(PlaceFormRequest $request , $place_id)
    {
        $data = $request->validated();
        $place = Place::find($place_id);

        $place->city_id = $data['city_id'];
        $place->type_id = $data['type_id'];
        $place->name = $data['name'];
        $place->description = $data['description'];

        if($request->hasfile('image'))
        {
            $destination ='uploads/place/'.$place->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/place/' , $filename);
            $place->image = $filename;
        }  
            
        $place->location = $data['location'];
        $place->phone = $data['phone'];
        $place->social = $data['social'];
        $place->features_accessible = $data['features'];
        $place->features_and_facilities = $data['features_and_facilities'];
        $place->meta_title = $data['meta_title'];
        $place->meta_description = $data['meta_description'];
        $place->meta_keyword= $data['meta_keyword'];
        $place->status = $request->status == true ? '1' :'0';
        $place->update();

        return redirect('admin/places')->with('message','Place Updated Successfuly');
    }

    public function destroy($place_id)
    {
        $place = Place::find($place_id);
        if($place)
        {
            $destination ='uploads/place/'.$place->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $place->delete();
            return redirect('admin/places')->with('message','Place Deleted Successfuly');
        }
        else
        {
            return redirect('admin/places')->with('message','No Place ID Found ');

        }

    }
}
