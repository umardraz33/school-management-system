<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $table = "subjects";

    static public function getRecord()
    {
        // Select fields from both student_classes and users
        $records = Subject::select('subjects.*', 'users.name as created_by_name')
            ->join('users', 'users.id', '=', 'subjects.created_by')
            ->where('subjects.is_deleted', '=', 0)
            ->orderBy('subjects.id', 'desc')
            ->get();

        return $records;
    }

    static public function getSingle($id)
    {
        return Subject::find($id);
    }
}
