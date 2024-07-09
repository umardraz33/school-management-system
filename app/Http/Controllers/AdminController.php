<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class AdminController extends Controller
{
    public function list()
    {   $data['getRecord'] = User::getAdmin();
        $data['header_title'] = 'Admin List';
        return view('admin.adminslist', $data);
    }

    public function add()
    {
        $data['header_title'] = 'Add New Admin';
        return view('admin.add', $data);
    }

    public function insert(Request $request)
    {
        request()->validate([
            'email'=>'required|email|unique:users',
            'name'=>'required',
        ]);

        $user = new User;
        $user->name = trim($request->name);
        $user->email = trim($request->email);
        $user->password = trim($request->password);
        $user->user_type = 1;
        $user->save();
        return redirect('admin/admin/list')->with('success', 'Admin Created Successfully');
    }
    public function edit($id)
    {
        $data['getRecord'] = User::getSingle($id);
        if(!empty( $data['getRecord'])){
            $data['header_title'] = 'Edit Admin';
            return view('admin.edit', $data);

        }else{
            abort(404);
        }
    }
    public function update($id, Request $request)
    {
        request()->validate([
            'email'=>'required|email|unique:users,email,'.$id,
            'name'=>'required',
        ]);
        $user = User::getSingle($id);
        $user->name = trim($request->name);
        $user->email = trim($request->email);
        if(!empty($user->password)){
            $user->password = trim($request->password);
        }
        $user->save();
        return redirect('admin/admin/list')->with('success', 'Admin Updated Successfully');
    }
    public function delete($id)
    {
        $user = User::getSingle($id);
        $user->is_delete = 1;
        $user->save();
        return redirect('admin/admin/list')->with('success', 'Admin Deleted Successfully');
    }
}
