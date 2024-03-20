<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('heroes')->insert([
            'nickname' => Str::random(10),
            'world' => Str::random(10).'@mkexample.com',
            'status' => Str::random(10),
            'description' => Str::random(10),
            'abilities' => 1,
        ]);
    }
}
