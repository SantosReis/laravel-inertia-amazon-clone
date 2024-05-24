<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(['name' => 'Electronics']);
        DB::table('categories')->insert(['name' => 'Home']);
        DB::table('categories')->insert(['name' => 'Men\'s Fashion']);
        DB::table('categories')->insert(['name' => 'Women\'s Fashion']);
        DB::table('categories')->insert(['name' => 'Pets']);
        DB::table('categories')->insert(['name' => 'Arts & Crafts']);
    }
}
