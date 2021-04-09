<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marks extends Model
{
    use HasFactory, CrudTrait;

    protected $guarded = ['id'];
    public $timestamps = true;
    protected $table = 'children_subject';

    public function childrenName()
    {
        return Children::where('id', $this->children_id)->first()->name;
    }

    public function subjectName()
    {
        return Subject::where('id', $this->subject_id)->first()->name;
    }

    public static function allChildrens()
    {
        $childrens = Children::all();
        $collection = [];
        foreach ($childrens as $children) {
            $collection[$children->id] = $children->name;
        }
        return $collection;
    }

    public static function allChildrensOfTeacher()
    {
        $group = TeacherGroup::where('teacher_id', backpack_user()->id)->first()->group_id;
        $childrens = Children::where('group_id', $group)->get();
        $collection = [];
        foreach ($childrens as $children) {
            $collection[$children->id] = $children->name;
        }
        return $collection;
    }

    public static function allSubjects()
    {
        $subjects = Subject::all();
        $collection = [];
        foreach ($subjects as $subject) {
            $collection[$subject->id] = $subject->name;
        }
        return $collection;
    }
}
