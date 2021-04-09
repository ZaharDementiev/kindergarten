<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class GroupsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $groups = [
            ['Группа А', 'http://billionnews.ru/uploads/posts/2016-05/1463678307_1.jpg'],
            ['Группа Б', 'http://napolshu.com/wp-content/uploads/2017/12/detskiy_sadik_polska.jpg'],
            ['Группа В', 'https://pravdainform.com.ua/wp-content/uploads/2018/05/sadik.jpg'],
            ['Группа Г', 'https://lh3.googleusercontent.com/proxy/U92Jq7y922As3DeXRF74uXth8IkH93pxxuF1Z9mNYhtFUFMWTKH42pGwDaJl_8dJ1uHR7T2DtjQ1uUjzGdXlTm-qkZtPhPphB3JSt28q29Cm-gFXj0NFPxDF7Q'],
            ['Группа Д', 'https://static.ukrinform.com/photos/2017_05/thumb_files/630_360_1495838323-4468.jpg'],
            ['Группа Е', 'https://aif-s3.aif.ru/images/018/543/c1fbf6013ce7d334bb28968a5c5a0d7d.jpg'],
        ];

        foreach ($groups as $group) {
            DB::table('groups')->insert([
                'name' => $group[0],
                'img' => $group[1]
            ]);
        }
    }
}
