<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Experiences;
use App\Models\Project;
use App\Models\Technology;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $technologies=Technology::all();
        $categories=Category::all();
        $projects=Project::all();
        $allExperiences=Experiences::all();
        $experiences=$allExperiences->where('type','My Experiences');
        $educations=$allExperiences->where('type','My Educations');

        return view('portfolio',
            [
                'technologies'=>$technologies,
                'categories'=>$categories,
                'projects'=>$projects,
                'experiences'=>$experiences,
                'educations'=> $educations

            ]);
    }
}
