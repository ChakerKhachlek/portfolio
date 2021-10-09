<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Project;
use App\Models\Technology;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $technologies=Technology::all();
        $categories=Category::all();
        $projects=Project::all();
        return view('portfolio',
            [
                'technologies'=>$technologies,
                'categories'=>$categories,
                'projects'=>$projects

            ]);
    }
}
