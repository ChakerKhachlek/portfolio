<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert(
            [
                'title' => 'Online heaven platform',
                'banner_image_link'  => 'https://i.ibb.co/D4HXW0B/screencapture-localhost-8000-2020-12-30-18-10-33.png',
                'description'  => 'Oonline Heaven Platform , represents a solution for the broadcasting of animated series, the sharing of publications and the collection of information about video games. This platform is the answer to the needs of the community. ',
                'stack'  => 'Laravel Framework , Livewire Framework , RAWG api , Angular 8',
                'category_id'  => 1,
            ]);

        DB::table('screenshots')->insert(
            [
                'link' => 'https://i.ibb.co/TPGMnX0/screencapture-localhost-8000-forum-home-2020-12-30-18-29-50.png',
                'project_id'=>1
            ]);
        DB::table('screenshots')->insert(
            [
                'link' => 'https://i.ibb.co/xG6v579/screencapture-localhost-8000-forum-profile-1-edit-interest-2020-12-30-18-30-29.png',
                'project_id'=>1
            ]);
        DB::table('screenshots')->insert(
            [
                'link' =>'https://i.ibb.co/DRq0Kf3/screenshot-localhost-8000-stream-category-1-1605124045973.png',
                'project_id'=>1
            ]);

        DB::table('screenshots')->insert(
            [
                'link' => 'https://i.ibb.co/zm7vB9G/screenshot-localhost-8000-stream-episode-35-1605124084049.png',
                'project_id'=>1
            ]);
        DB::table('screenshots')->insert(
            [
                'link' => 'https://i.ibb.co/2vxRpS9/screenshot-localhost-8000-stream-home-1605124009883.png',
                'project_id'=>1
            ]);
        DB::table('screenshots')->insert(
            [
                'link' => 'https://i.ibb.co/s6dtFSw/screenshot-localhost-8000-stream-home-1605124035727.png',
                'project_id'=>1
            ]);
        DB::table('screenshots')->insert(
            [
                'link' => 'https://i.ibb.co/JQxmJL0/screenshot-localhost-8000-stream-season-49-1605124075387.png',
                'project_id'=>1
            ]);
        DB::table('screenshots')->insert(
            [
                'link' => 'https://i.ibb.co/F6MRH3T/screenshot-localhost-8000-stream-serie-11-1605124058864.png',
                 'project_id'=>1
            ]);

        DB::table('screenshots')->insert(
            [
                'link' => 'https://i.ibb.co/mtK9qYL/screenshot-localhost-8000-stream-serie-21-1605124068608.png',
                'project_id'=>1
            ]);


        DB::table('projects')->insert(
            [
                'title' => 'Mobile streaming app',
                'banner_image_link'  => 'https://i.ibb.co/4KC8CdJ/133982795-387737119195967-6724531398676094254-n-Copy.jpg',
                'description'  => 'The product is a mobile application accessible from devices under the Android operating system, mainly used for watching anime movies.',
                'stack'  => 'Java , Native android , Laravel backend , Restful api , Microsoft Azure',
                'category_id'  => 2,
            ]);

        DB::table('screenshots')->insert(
            [
                'link' => 'https://i.ibb.co/m930CBL/133900141-399488811271254-7811595447123570470-n.jpg',
                'project_id'=>2
            ]);
        DB::table('screenshots')->insert(
            [
                'link' => 'https://i.ibb.co/LRHhGjL/133920249-416624443109720-2784315339387866274-n.jpg',
                'project_id'=>2
            ]);
        DB::table('screenshots')->insert(
            [
                'link' => 'https://i.ibb.co/H2MPtRh/133967586-441047980598041-7774539905969152358-n.jpg',
                'project_id'=>2
            ]);

        DB::table('screenshots')->insert(
            [
                'link' => 'https://i.ibb.co/XbBpkYk/133982795-387737119195967-6724531398676094254-n.jpg',
                'project_id'=>2
            ]);

        DB::table('screenshots')->insert(
            [
                'link' => 'https://i.ibb.co/5nZhsjB/134049776-167017288536744-1717798741101709199-n.jpg',
                'project_id'=>2
            ]);

        DB::table('screenshots')->insert(
            [
                'link' => 'https://i.ibb.co/jDNx7fV/134053430-2952470431652421-1233363089219201009-n.jpg',
                'project_id'=>2
            ]);

        DB::table('screenshots')->insert(
            [
                'link' => 'https://i.ibb.co/Srqgr5y/134086003-1005642426592326-2987278376221650227-n.jpg',
                'project_id'=>2
            ]);
        DB::table('screenshots')->insert(
            [
                'link' => 'https://i.ibb.co/bmqdtSM/134524201-230706968495653-925191202639306254-n.jpg',
                'project_id'=>2
            ]);

        DB::table('screenshots')->insert(
            [
                'link' => 'https://i.ibb.co/bmqdtSM/134524201-230706968495653-925191202639306254-n.jpg',
                'project_id'=>2
            ]);
        DB::table('screenshots')->insert(
            [
                'link' => ' https://i.ibb.co/cLDwpjY/Back-Office.png',
                'project_id'=>2
            ]);

        DB::table('screenshots')->insert(
            [
                'link' => ' https://i.ibb.co/c2fW23r/Azure.png',
                'project_id'=>2
            ]);


    }
}
