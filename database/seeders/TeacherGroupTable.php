<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherGroupTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $groups = [
            [31, 1],
            [32, 2],
            [33, 3],
            [34, 4],
            [35, 5],
            [36, 6],
        ];

        foreach ($groups as $group) {
            DB::table('teacher_groups')->insert([
                'teacher_id' => $group[0],
                'group_id' => $group[1]
            ]);
        }
    }
}
