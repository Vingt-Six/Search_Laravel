<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                "name" => "Admin",
                "email" => "admin@admin.com",
                "password" => Hash::make("admin@admin.com")
            ],
            [
                "name" => "Alixe",
                "email" => "alixe@alixe.com",
                "password" => Hash::make("alixe@alixe.com")
            ],
            [
                "name" => "Isma",
                "email" => "isma@isma.com",
                "password" => Hash::make("isma@isma.com")
            ],
            [
                "name" => "Cactus",
                "email" => "cactus@cactus.com",
                "password" => Hash::make("cactus@cactus.com")
            ],
            [
                "name" => "Hedi",
                "email" => "hedi@hedi.com",
                "password" => Hash::make("hedi@hedi.com")
            ],
            [
                "name" => "Johan",
                "email" => "johan@johan.com",
                "password" => Hash::make("johan@johan.com")
            ],
        ]);
    }
}
