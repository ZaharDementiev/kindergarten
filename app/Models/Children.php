<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Children extends Model
{
    use HasFactory, CrudTrait;

    protected $guarded = ['id'];
    public $timestamps = true;

    public function parentName()
    {
        return User::where('id', $this->parent_id)->first()->name;
    }

    public function groupName()
    {
        return Group::where('id', $this->group_id)->first()->name;
    }

    public function parent()
    {
        return $this->hasOne(User::class, 'id', 'parent_id');
    }

    public static function allParents() {
        $parents = User::where('type', User::PARENT)->get();
        $collection = [];
        foreach ($parents as $parent) {
            $collection[$parent->id] = $parent->name;
        }
        return $collection;
    }

    public static function allGroups() {
        $groups = Group::all();
        $collection = [];
        foreach ($groups as $group) {
            $collection[$group->id] = $group->name;
        }
        return $collection;
    }
}
