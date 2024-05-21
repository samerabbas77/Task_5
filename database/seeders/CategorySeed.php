<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' =>'scientific'],
            ['name' =>'cultural'],
            ['name' =>'entertainment'],
        ];
        DB::table('categories')->insert($categories);
    }

}
