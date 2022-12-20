<?php

namespace Database\Seeders\Main;

use App\Models\Article;
use Illuminate\Database\Seeder;

class MyOlegSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::create(
            ['name' => 'Oleg1',
                'text' => 'Oleg2',
                'alias' => 'Oleg3',
            ]);
    }
}
