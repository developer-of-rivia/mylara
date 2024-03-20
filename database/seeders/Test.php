<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class Test extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('heroes')->insert([
        //     'nickname' => Str::random(10),
        //     'world' => Str::random(10).'@mkexample.com',
        //     'status' => Str::random(10),
        //     'description' => Str::random(10),
        // ]);
    }
}
