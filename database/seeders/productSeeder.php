<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                "name"=>"panasonic",
                "price"=>"200",
                "description"=>"A good television with lots of new feature",
                "category"=>"TV",
                 "image"=>"https://images.unsplash.com/photo-1571415060716-baff5f717c37?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1167&q=80"
            ],
            [
                "name"=>"samsung",
                "price"=>"400",
                "description"=>"A good moble phoen with 4gb ram and with lots of new feature",
                "category"=>"Mobile",
                 "image"=>"https://images.unsplash.com/photo-1567581935884-3349723552ca?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80"
            ],
            [
                "name"=>"Dawlance",
                "price"=>"700",
                "description"=>"A good refrigrator with lots of new feature",
                "category"=>"Freezer",
                 "image"=>"https://images.unsplash.com/photo-1584568694244-14fbdf83bd30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=426&q=80"
            ],
        ]);
    }
}
