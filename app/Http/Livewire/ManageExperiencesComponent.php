<?php

namespace App\Http\Livewire;

use App\Models\Experiences;
use Livewire\Component;

class ManageExperiencesComponent extends Component
{
    public $experiences;
    public $type,$enterprise,$title,$description,$address,$start_date,$end_date;


    public function render()
    {
        if(!empty($this->type)){

            $this->experiences=Experiences::where('type',$this->type)->get();
        }
        return view('livewire.manage-experiences-component');
    }



}
