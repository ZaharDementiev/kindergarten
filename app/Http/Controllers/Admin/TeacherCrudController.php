<?php


namespace App\Http\Controllers\Admin;


use App\Models\User;

class TeacherCrudController extends UserCrud
{
    function mainSettingsSetup()
    {
        $this->crud->setEntityNameStrings('Учитель', 'Учители');
        $this->crud->setRoute(backpack_url('teacher'));

        $this->crud->addClause('where', 'type', User::TEACHER);
    }

    function updateType()
    {
        $this->crud->addField([
            'name' => 'type',
            'type' => 'hidden',
            'value' => User::TEACHER
        ]);
    }
}
