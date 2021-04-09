<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherGroup extends Model
{
    use HasFactory, CrudTrait;

    protected $guarded = ['id'];
    public $timestamps = true;

    public function teacherName()
    {
        return User::where('id', $this->teacher_id)->first()->name;
    }

    public function groupName()
    {
        return Group::where('id', $this->group_id)->first()->name;
    }

    public static function allGroups() {
        $groups = Group::all();
        $collection = [];
        foreach ($groups as $group) {
            $collection[$group->id] = $group->name;
        }
        return $collection;
    }

    public static function allTeachers() {
        $teachers = User::where('type', User::TEACHER)->get();
        $collection = [];
        foreach ($teachers as $teacher) {
            $collection[$teacher->id] = $teacher->name;
        }
        return $collection;
    }
}
