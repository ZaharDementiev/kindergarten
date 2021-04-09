<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UserCrudRequest;
use App\Models\Address;
use App\Models\Children;
use App\Models\Group;
use App\Models\TeacherGroup;
use App\Models\User;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class ChildrenCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation {
        store as traitStore;
    }
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation {
        update as traitUpdate;
    }
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;

    public function setup()
    {
        $this->crud->setModel(Children::class);
        $this->crud->allowAccess('show');
        $this->crud->setEntityNameStrings('Ребенок', 'Дети');
        $this->crud->setRoute(backpack_url('childrens'));

        if (backpack_user()->type == User::TEACHER) {
            $this->crud->addClause('where', 'group_id', TeacherGroup::where('teacher_id', backpack_user()->id)->first()->group_id);
        }
    }


    public function setupCreateOperation()
    {
        $this->addUserFields();
    }

    public function setupUpdateOperation()
    {
        $this->addUserFields();
    }

    public function store()
    {
        $this->crud->setRequest($this->crud->validateRequest());
        $this->crud->unsetValidation();

        return $this->traitStore();
    }

    public function update()
    {
        $this->crud->setRequest($this->crud->validateRequest());
        $this->crud->unsetValidation();

        return $this->traitUpdate();
    }

    public function setupListOperation()
    {
        $this->crud->setColumns([
            [
                'name' => 'name',
                'label' => 'Имя',
                'type' => 'text',
            ],
            [
                'name' => 'age',
                'label' => 'Возраст',
                'type' => 'number',
            ],
            [
                'name' => 'parent',
                'label' => 'Родитель',
                'type' => 'model_function',
                'function_name' => 'parentName',
                'limit' => 1000,
            ],
            [
                'name' => 'group',
                'label' => 'Группа',
                'type' => 'model_function',
                'function_name' => 'groupName',
                'limit' => 1000,
            ],
        ]);
    }


    protected function addUserFields()
    {
        $this->crud->addFields([
            [
                'name' => 'name',
                'label' => 'Имя',
                'type' => 'text',
            ],
            [
                'name' => 'age',
                'label' => 'Возраст',
                'type' => 'number',
            ],
            [
                'name'        => 'parent_id',
                'label'       => "Родитель",
                'type'        => 'select2_from_array',
                'options'     => Children::allParents(),
                'allows_null' => false,
//                'default'     => User::where('id', $this->crud->getCurrentEntry()->parent_id)->first()->id,
            ],
            [
                'name'        => 'group_id',
                'label'       => "Группа",
                'type'        => 'select2_from_array',
                'options'     => Children::allGroups(),
                'allows_null' => false,
//                'default'     => Group::where('id', $this->crud->getCurrentEntry()->group_id)->first()->id,
            ]
        ]);
    }
}
