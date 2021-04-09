<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UserCrudRequest;
use App\Models\Address;
use App\Models\Children;
use App\Models\Subject;
use App\Models\TeacherGroup;
use App\Models\User;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class TeacherGroupCrudController extends CrudController
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
        $this->crud->setModel(TeacherGroup::class);
        $this->crud->allowAccess('show');
        $this->crud->setEntityNameStrings('Группа учителя', 'Группы учителей');
        $this->crud->setRoute(backpack_url('teacher-groups'));
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
                'name' => 'teacher',
                'label' => 'Учитель',
                'type' => 'model_function',
                'function_name' => 'teacherName',
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
                'name'        => 'teacher_id',
                'label'       => "Учитель",
                'type'        => 'select2_from_array',
                'options'     => TeacherGroup::allTeachers(),
                'allows_null' => false,
//                'default'     => User::where('id', $this->crud->getCurrentEntry()->parent_id)->first()->id,
            ],
            [
                'name'        => 'group_id',
                'label'       => "Группа",
                'type'        => 'select2_from_array',
                'options'     => TeacherGroup::allGroups(),
                'allows_null' => false,
//                'default'     => User::where('id', $this->crud->getCurrentEntry()->parent_id)->first()->id,
            ],
        ]);
    }
}
