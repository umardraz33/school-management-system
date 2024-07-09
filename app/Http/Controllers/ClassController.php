<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\ClassModel;

class ClassController extends Controller
{
    public function list()
    {
        $data['getRecord'] = ClassModel::getRecord();
        $data['header_title'] = 'Class List';
        return view('admin.class.classlist', $data);
    }
    public function add()
    {
        $data['header_title'] = 'Add New Class';
        return view('admin.class.addclass', $data);
    }


    public function insert(Request $request)
    {
        request()->validate([
            'name'=>'required',
        ]);
        $save = new ClassModel;
        $save->name = $request->name;
        $save->status = $request->status;
        $save->created_by = Auth::user()->id;
        $save->save();
        return redirect('admin/class/list')->with('success', 'Class Created Successfully');
    }

    public function edit($id)
    {
        $data['getRecord'] = ClassModel::getSingle($id);
        if(!empty( $data['getRecord'])){
            $data['header_title'] = 'Edit Class';
            return view('admin.class.edit', $data);

        }else{
            abort(404);
        }
    }

    public function update($id, Request $request)
    {
        request()->validate([
            'name'=>'required',
        ]);
        $user = ClassModel::getSingle($id);
        $user->name = trim($request->name);
        $user->status = $request->status;
        $user->save();
        return redirect('admin/class/list')->with('success', 'Class Updated Successfully');
    }

    public function delete($id)
    {
        $user = ClassModel::getSingle($id);
        $user->is_delete = 1;
        $user->save();
        return redirect('admin/class/list')->with('success', 'Class Deleted Successfully');
    }


}
