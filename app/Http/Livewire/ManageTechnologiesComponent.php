<?php

namespace App\Http\Livewire;

use App\Models\Technology;
use Livewire\Component;

class ManageTechnologiesComponent extends Component
{

    public $data, $name, $selected_id,$pourcentage;

    //Update create mode variables switchers
    public $createMode = true;
    public $updateMode = false;

    //rendering component method
    public function render()
    {
        $this->data = Technology::all();
        return view('livewire.manage-technologies-component');
    }

    //reseting inputs
    private function resetInput()
    {
        $this->name = null;
        $this->pourcentage=null;
    }

    //creation mode on
    public function createMode()
    {
        $this->updateMode = false;
        $this->createMode = true;
    }

    //storing method
    public function store()
    {
        $this->validate([
            'name' => 'required',
            'pourcentage'=>'required|integer|between:0,100'
        ]);

        Technology::create([
            'name' => $this->name,
            'pourcentage'=> $this->pourcentage
        ]);

        $this->resetInput();
    }

    //edit method
    public function edit($id)
    {
        $record = Technology::findOrFail($id);
        $this->selected_id = $id;
        $this->name = $record->name;
        $this->pourcentage = $record->pourcentage;
        $this->updateMode = true;
    }

    //update method
    public function update()
    {
        $this->validate([
            'name' => 'required',
            'pourcentage'=>'required|integer|between:0,100'
        ]);

        if ($this->selected_id) {
            $record = Technology::find($this->selected_id);
            $record->update([
                'name' => $this->name,
                'pourcentage' => $this->pourcentage
            ]);

            $this->resetInput();
            $this->updateMode = false;
        }

    }

    //destroy method
    public function destroy($id)
    {
        if ($id) {
            $record = Technology::where('id', $id);
            $record->delete();
        }
    }
}

