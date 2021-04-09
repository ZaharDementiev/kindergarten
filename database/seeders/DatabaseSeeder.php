<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTable::class);
        $this->call(GroupsTable::class);
        $this->call(SubjectsTable::class);
        $this->call(TeacherGroupTable::class);
        $this->call(ChildrensTable::class);
    }
}
