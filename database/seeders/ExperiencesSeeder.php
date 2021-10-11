<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExperiencesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('experiences')->insert(
            [
                'type'=>'My Experiences',
                'enterprise' => 'STEG',
                'title'  => 'Introductory traineeship',
                'description'  => 'My first year traineeship',
                'address'  => 'STEG Goulette',
                'start_date'  => '2018',
                'end_date'  => '2019',
            ]);

        DB::table('experiences')->insert(
            [
                'type'=>'My Experiences',
                'enterprise' => 'Tunisair',
                'title'  => 'Mid year traineeship',
                'description'  => 'Development of a statistical tool for reservations made by TUNISAIR B2B customers.',
                'address'  => 'Charguia II 2035 Tunis - Carthage',
                'start_date'  => '2019',
                'end_date'  => '2020',
            ]);

        DB::table('experiences')->insert(
            [
                'type'=>'My Experiences',
                'enterprise' => 'GreenEx',
                'title'  => 'End of year project',
                'description'  => 'In this context, our project is helping to facilitate the mission of the manager through a
                web application, and which consists of development of a solution composed of both helping
                organized data-tables and guiding charts. These components serve the purpose of tracking the
                day-to-day inputs and outputs as well as the overall spendings and incomes of the company. ',
                'address'  => 'Jbel el Oust. Z.I Zaghouan',
                'start_date'  => '2020',
                'end_date'  => '2021',
            ]);

        DB::table('experiences')->insert(
            [
                'type'=>'My Educations',
                'enterprise' => 'Carthage Presidence Secondary School',
                'title'  => 'Bachelor\'s degree',
                'description'  => '',
                'address'  => '118 Avenue Habib Bourguiba',
                'start_date'  => '2017',
                'end_date'  => '2018',
            ]);


        DB::table('experiences')->insert(
            [
                'type'=>'My Educations',
                'enterprise' => 'ISET RADES',
                'title'  => 'LICENCE DEGREE',
                'description'  => '',
                'address'  => 'Av. de France, Radès',
                'start_date'  => '2018',
                'end_date'  => '2021',
            ]);

        DB::table('experiences')->insert(
            [
                'type'=>'My Educations',
                'enterprise' => 'ESPRIT',
                'title'  => 'ENGINEERING ',
                'description'  => '',
                'address'  => '18, rue de l\'Usine - ZI Aéroport Charguia II 2035 Ariana',
                'start_date'  => '2021',
                'end_date'  => 'present',
            ]);
    }
}
