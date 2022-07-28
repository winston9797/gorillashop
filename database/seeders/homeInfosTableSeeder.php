<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class homeInfosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('home_infos')->insert([
            'name'=>'gorilla shop',
            'description'=>'this is a description of a shop webiste'
        ]);

        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin@admin.com'),
        ]);
        DB::table('categories')->insert([
            'name' => 'default'
        ]);
        DB::table('tags')->insert([
            'name' => 'default'
        ]);
    }
}
