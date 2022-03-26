<?php

namespace App\Http\Controllers\Admin;
use App\Models\City;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\CityFormRequest;

class CityController extends Controller
{
    public function index()
    {
        $city = City::all();
       return view('admin.city.index' , compact('city'));
    }

    public function create()
    {
        return view('admin.city.create');

    }

    public function store(CityFormRequest $request)
    {
        $data = $request->validated();

        $city = new City;
        $city->name = $data['name'];
        $city->meta_title = $data['meta_title'];
        $city->meta_description = $data['meta_description'];
        $city->meta_keyword= $data['meta_keyword'];
        $city->navbar_status = $request->navbar_status == true ? '1' :'0';
        $city->status = $request->status == true ? '1' :'0';
        $city->save();

        return redirect('admin/city')->with('message','City Add Successfuly');
    }

    public function edit($city_id)
    {
        $city = City::find($city_id);
        return view('admin.city.edit' , compact('city'));

    }
    public function update(CityFormRequest $request , $city_id)
    {
        $data = $request->validated();
        $city = City::find($city_id);

        $city->name = $data['name'];
        $city->meta_title = $data['meta_title'];
        $city->meta_description = $data['meta_description'];
        $city->meta_keyword= $data['meta_keyword'];
        $city->navbar_status = $request->navbar_status == true ? '1' :'0';
        $city->status = $request->status == true ? '1' :'0';
        $city->update();

        return redirect('admin/city')->with('message','City Updated Successfuly');
    }
    public function destroy($city_id)
    {
        $city = City::find($city_id);
        if($city)
        {
            $city->delete();
            return redirect('admin/city')->with('message','City Deleted Successfuly');
        }
        else
        {
            return redirect('admin/city')->with('message','No City ID Found ');

        }

    }
}
