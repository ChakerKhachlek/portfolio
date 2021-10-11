<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TechnologiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('technologies')->insert(
            [
            'name' => 'PHP',
            'pourcentage' => 100,
        ]);
        DB::table('technologies')->insert(
            [
                'name' => 'Laravel',
                'pourcentage' => 100,
            ]);
        DB::table('technologies')->insert(
            [
                'name' => 'Laravel Livewire',
                'pourcentage' => 100,
            ]);
        DB::table('technologies')->insert(
            [
                'name' => 'Bootstrap',
                'pourcentage' => 100,
            ]);
        DB::table('technologies')->insert(
            [
                'name' => 'Github',
                'pourcentage' => 100,
            ]);
        DB::table('technologies')->insert(
            [
                'name' => 'WebSockets',
                'pourcentage' => 100,
            ]);
        DB::table('technologies')->insert(
            [
                'name' => 'Java',
                'pourcentage' => 85,
            ]);
        DB::table('technologies')->insert(
            [
                'name' => 'Flutter',
                'pourcentage' => 50,
            ]);

    }
}
