<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UserCrudRequest;
use App\Models\Address;
use App\Models\User;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

abstract class UserCrud extends CrudController
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
        $this->crud->setModel(User::class);
        $this->crud->allowAccess('show');

        $this->mainSettingsSetup();
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

        $item = $this->traitStore();

        $user = $this->crud->getCurrentEntry();
        $user->password = Hash::make($user->password);
        $user->save();

        return $item;
    }

    public function update()
    {
        $this->crud->setRequest($this->crud->validateRequest());
        $this->crud->unsetValidation();

        $item = $this->traitUpdate();
        $user = $this->crud->getCurrentEntry();
        $user->password = Hash::make($user->password);
        $user->save();

        return $item;
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
                'name' => 'email',
                'label' => 'Почта',
                'type' => 'text',
            ],
            [
                'name' => 'phone',
                'label' => 'Телефон',
                'type' => 'text',
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
                'name' => 'email',
                'label' => 'Почта',
                'type' => 'text',
            ],
            [
                'name' => 'password',
                'label' => 'Пароль',
                'type' => 'password',
            ],
            [
                'name' => 'phone',
                'label' => 'Телефон',
                'type' => 'text',
            ],
        ]);
        $this->updateType();
    }

    abstract function mainSettingsSetup();
    abstract function updateType();
}
