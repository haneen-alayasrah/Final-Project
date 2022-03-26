<?php

namespace App\Http\Controllers\Admin;
use App\Models\Type;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\TypeFormRequest;

class TypeController extends Controller
{
    public function index()
    {
        $type = Type::all();
       return view('admin.type.index' , compact('type'));
    }

    public function create()
    {
        return view('admin.type.create');

    }

    public function store(TypeFormRequest $request)
    {
        $data = $request->validated();

        $type = new Type;
        $type->name = $data['name'];
        $type->meta_title = $data['meta_title'];
        $type->meta_description = $data['meta_description'];
        $type->meta_keyword= $data['meta_keyword'];
        $type->navbar_status = $request->navbar_status == true ? '1' :'0';
        $type->status = $request->status == true ? '1' :'0';
        $type->save();

        return redirect('admin/type')->with('message','Type Add Successfuly');
    }

    public function edit($type_id)
    {
        $type = Type::find($type_id);
        return view('admin.type.edit' , compact('type'));

    }
    public function update(TypeFormRequest $request , $type_id)
    {
        $data = $request->validated();
        $type = Type::find($type_id);

        $type->name = $data['name'];
        $type->meta_title = $data['meta_title'];
        $type->meta_description = $data['meta_description'];
        $type->meta_keyword= $data['meta_keyword'];
        $type->navbar_status = $request->navbar_status == true ? '1' :'0';
        $type->status = $request->status == true ? '1' :'0';
        $type->update();

        return redirect('admin/type')->with('message','Type Updated Successfuly');
    }
    public function destroy($type_id)
    {
        $type = Type::find($type_id);
        if($type)
        {
            $type->delete();
            return redirect('admin/type')->with('message','Type Deleted Successfuly');
        }
        else
        {
            return redirect('admin/type')->with('message','No Type ID Found ');

        }

    }
}
