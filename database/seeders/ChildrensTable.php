<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChildrensTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $childrens = [
            ['Pogorelov Ivan', 4, 1, 1],
            ['Samaylova Irina', 3, 2, 1],
            ['Tatiaina Yulia', 3, 3, 1],
            ['Tatiain Oleg', 4, 3, 2],
            ['Salamaha Oleg', 3, 4, 2],
            ['Strongman Nastya', 3, 5, 2],
            ['Samaylova Tanya', 3, 6, 3],
            ['Samaylov Vlad', 4, 6, 3],
            ['Kulchitskaya Tanya', 4, 7, 3],
            ['Kompanitsa Anton', 4, 9, 4],
            ['Doniev Yura', 5, 10, 4],
            ['Shtan Pavel', 5, 11, 4],
            ['Rozhkovskaya Anna', 4, 12, 5],
            ['Zhyrun Oleg', 3, 13, 5],
            ['Zhyrun Masha', 3, 13, 5],
            ['Bulgar Dima', 5, 15, 6],
            ['Runa Oleg', 3, 16, 6],
            ['Kozhanov Misha', 4, 17, 6],
            ['Shuliak Anita', 5, 18, 1],
            ['Panasova Lera', 5, 19, 2],
            ['Runa Lera', 3, 20, 3],
            ['Olkin Oleg', 4, 21, 4],
            ['Olkin Nikita', 4, 21, 5],
            ['Egorkin Kolya', 5, 22, 6],
            ['Sailor Vlad', 3, 23, 1],
            ['Klas Karina', 3, 24, 2],
            ['Moisenko Alena', 4, 25, 3],
            ['Raketskii Anton', 4, 26, 4],
            ['Bondarenko Kolya', 5, 27, 5],
            ['Maksicha Nastya', 3, 28, 6],
            ['Safo Kolya', 3, 29, 1],
            ['Kasnovetskaya Nastya', 4, 30, 2],
        ];

        foreach ($childrens as $children) {
            DB::table('childrens')->insert([
                'name' => $children[0],
                'age' => $children[1],
                'parent_id' => $children[2],
                'group_id' => $children[3]
            ]);
        }
    }
}
