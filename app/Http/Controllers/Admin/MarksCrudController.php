<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UserCrudRequest;
use App\Models\Address;
use App\Models\Children;
use App\Models\Marks;
use App\Models\Subject;
use App\Models\User;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class MarksCrudController extends CrudController
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
        $this->crud->setModel(Marks::class);
        $this->crud->allowAccess('show');
        $this->crud->setEntityNameStrings('Оценка', 'Оценки');
        $this->crud->setRoute(backpack_url('marks'));
        if (backpack_user()->type == User::PARENT) {
            $this->crud->addClause('where', 'children_id', Children::where('parent_id', backpack_user()->id)->first()->id);
            $this->crud->denyAccess('delete');
            $this->crud->denyAccess('create');
            $this->crud->denyAccess('update');
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
                'name' => 'children',
                'label' => 'Ребенок',
                'type' => 'model_function',
                'function_name' => 'childrenName',
                'limit' => 1000,
            ],
            [
                'name' => 'subject',
                'label' => 'Предмет',
                'type' => 'model_function',
                'function_name' => 'subjectName',
                'limit' => 1000,
            ],
            [
                'name' => 'mark',
                'label' => 'Оценка',
                'type' => 'number',
            ],
        ]);
    }


    protected function addUserFields()
    {
        if (backpack_user()->type == User::DIRECTOR) {
            $this->crud->addField([
                'name' => 'children_id',
                'label' => "Ребенок",
                'type' => 'select2_from_array',
                'options' => Marks::allChildrens(),
                'allows_null' => false,
//                'default' => Children::where('id', $this->crud->getCurrentEntry()->children_id)->first()->id,
            ]);
        } else if (backpack_user()->type == User::TEACHER) {
            $this->crud->addField([
                'name' => 'children_id',
                'label' => "Ребенок",
                'type' => 'select2_from_array',
                'options' => Marks::allChildrensOfTeacher(),
                'allows_null' => false,
//                'default' => Children::where('id', $this->crud->getCurrentEntry()->children_id)->first()->id,
            ]);
        }
        $this->crud->addFields([
            [
                'name' => 'subject_id',
                'label' => "Предмет",
                'type' => 'select2_from_array',
                'options' => Marks::allSubjects(),
                'allows_null' => false,
//                'default' => Subject::where('id', $this->crud->getCurrentEntry()->subject_id)->first()->id,
            ],
            [
                'name' => 'mark',
                'label' => 'Оценка',
                'type' => 'number',
            ],
        ]);
    }
}
