<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassModel extends Model
{
    use HasFactory;
    protected $table = 'student_classes';

    static public function getRecord()
    {
        // Select fields from both student_classes and users
        $records = ClassModel::select('student_classes.*', 'users.name as created_by_name')
            ->join('users', 'users.id', '=', 'student_classes.created_by')
            ->where('student_classes.is_delete', '=', 0)
            ->orderBy('student_classes.id', 'desc')
            ->get();

        return $records;
    }

    static public function getSingle($id)
    {
        return ClassModel::find($id);
    }
}
