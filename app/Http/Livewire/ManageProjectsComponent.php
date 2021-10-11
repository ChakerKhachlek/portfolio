<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Project;
use App\Models\Screenshot;
use Livewire\Component;

class ManageProjectsComponent extends Component
{
    public $categories,$selectedCategory,$categoryProjects;

    public $selectedProject;
    public $selectedProjectScreenshots;
    public $title,$description,$stack,$banner_url;
    public $linkNewScreenshot;


    public $createMode=false;
    public $updateMode=false;
    public $createScreenShotMode=false;

    protected $listeners = [
        'categoryProjects:changed' =>'$refresh',
        'screenShots:changed'=>'$refresh',
    ];

    public function mount(){
        $this->categories=Category::all();

    }

    public function render()
    {
        if(!empty($this->selectedCategory)){
            $selectedCategory=Category::find($this->selectedCategory);
            $this->categoryProjects=$selectedCategory->projects()->get();
        }
        return view('livewire.manage-projects-component');
    }

    public function resetInput(){
        $this->title=null;
        $this->description=null;
        $this->stack=null;
        $this->banner_url=null;

    }

    public function createMode(){
        $this->resetInput();
        $this->updateMode=false;
        $this->createMode=true;
    }


    public function updateMode($id){
        $this->resetInput();
        $this->createMode=false;

        $this->selectedProject=$id;
        $record=Project::find($id);

        $this->selectedProjectScreenshots=$record->screenshots()->get();

        $this->title=$record->title;
        $this->description=$record->description;
        $this->stack=$record->stack;
        $this->banner_url=$record->banner_image_link;
        $this->updateMode=true;

    }

    public function addProject(){
        $this->validate([
            'title' => 'required',
            'description'=>'required',
            'stack'=>'required',
            'banner_url'=>'required',
        ]);

        $selectedCategory=Category::find($this->selectedCategory);

        $selectedCategory->projects()->create([
            'title' => $this->title,
            'description' => $this->description,
            'stack' =>$this->stack,
            'banner_image_link' => $this->banner_url,
        ]);
        $this->emit('categoryProjects:changed');
        $this->resetInput();

    }

    public function updateProject(){
        $record=Project::find($this->selectedProject);
        $record->update([
            'title' => $this->title,
            'description' => $this->description,
            'stack' =>$this->stack,
            'banner_image_link' => $this->banner_url,
        ]);
        $this->resetInput();
        $this->emit('categoryProjects:changed');
        $this->updateMode=false;
    }

    public function deleteProject($id){
        $record=Project::find($id);
        $record->delete();
        $this->emit('categoryProjects:changed');
    }

     public function createScreenShotMode(){
        $this->linkNewScreenshot=null;
      $this->createScreenShotMode=true;
    }

    public function createScreenShot(){
        $project=Project::find($this->selectedProject);
        $project->screenshots()->create(
          [
              'link' => $this->linkNewScreenshot,

          ]
        );
        $this->selectedProjectScreenshots=$project->screenshots()->get();

        $this->linkNewScreenshot=null;
        $this->createScreenShotMode=false;

    }



    public function destroyScreenshot($id){
        $record=Screenshot::find($id);
        $record->delete();
        $this->emit('screenShots:changed');
    }
}
