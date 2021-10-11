<div >
<div class="row">
    <div class="col-md-10">
        <div class="h3">Update Category</div>
    </div>
    <div class="col-md-2">
        <button wire:click="createMode()" class="btn btn-xs btn-primary">Create New</button>
    </div>

</div>
    <div class="row py-3">
        <div class="col-md-12">


    <div class="form-group">
        <label for="name">Name</label>
        {{-- Name Model Livewire--}}
        <input wire:model="name" type="text" id="name" class="form-control input-sm" >
    </div>

    {{-- Update function Livewire--}}
    <button wire:click="update()" class="btn btn-default">Update</button>
    {{-- category updating Livewire--}}



        </div>

    </div>



</div>
