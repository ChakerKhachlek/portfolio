
<div>
    <div class="row">
        <div class="col-md-12">
        <div class="h3">Create Technologie</div>
        </div>
    </div>
    <div class="row">
    <div class="col col-md-12">

        <div class="form-group">
            <label for="name">Name</label>
            {{-- Name Model Livewire--}}
            <input wire:model="name" type="text" id="name" class="form-control input-sm" >
        </div>
        <div class="form-group">
            <label for="pourcentage">Pourcentage</label>
            {{-- pourcentage Model Livewire--}}
            <input wire:model="pourcentage" type="number"  max="100" min="100" id="pourcentage" class="form-control input-sm" >
           </div>






                {{-- store method Livewire--}}
                <button wire:click="store()" class="btn btn-default">Save</button>
                {{-- category storing Livewire--}}
                <div wire:loading wire:target="store" class="pl-2">Creating...</div>


    </div>

    </div>

</div>
