<?php


namespace App\Http\Controllers\Admin;


use App\Models\User;

class ParentCrudController extends UserCrud
{
    function mainSettingsSetup()
    {
        $this->crud->setEntityNameStrings('Родитель', 'Родители');
        $this->crud->setRoute(backpack_url('parent'));

        $this->crud->addClause('where', 'type', User::PARENT);
        if (backpack_user()->type == User::TEACHER) {
            $this->crud->denyAccess('create');
            $this->crud->denyAccess('delete');
            $this->crud->denyAccess('update');
        }
    }

    function updateType()
    {
        $this->crud->addField([
            'name' => 'type',
            'type' => 'hidden',
            'value' => User::PARENT
        ]);
    }
}
