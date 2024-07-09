<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use Auth;
class SubjectController extends Controller
{
    public function list(){
        $data['getRecord'] = Subject::getRecord();
        $data['header_title'] = 'Subject List';
        return view('admin.Subject.subjectlist', $data);
    }
    public function add(){
        $data['header_title'] = 'Add Subject';
        return view('admin.Subject.addsubject', $data);
    }
    public function insert(Request $request){
        request()->validate([
            'name'=>'required',
        ]);
        $save = new Subject;
        $save->name = $request->name;
        $save->type= $request->type;
        $save->status = $request->status;
        $save->created_by = Auth::user()->id;
        $save->save();
        return redirect('admin/subject/list')->with('success', 'Subject Created Successfully');
    }

    
    public function edit($id)
    {
        $data['getRecord'] = Subject::getSingle($id);
        if(!empty( $data['getRecord'])){
            $data['header_title'] = 'Edit Subject';
            return view('admin.Subject.editsubject', $data);

        }else{
            abort(404);
        }
    }



    public function update($id, Request $request)
    {
        request()->validate([
            'name'=>'required',
        ]);
        $user = Subject::getSingle($id);
        $user->name = trim($request->name);
        $user->type = $request->type;
        $user->status = $request->status;
        $user->save();
        return redirect('admin/subject/list')->with('success', 'Subject Updated Successfully');
    }


    public function delete($id)
    {
        $user = Subject::getSingle($id);
        $user->is_deleted = 1;
        $user->save();
        return redirect('admin/subject/list')->with('success', 'Subject Deleted Successfully');
    }

}
