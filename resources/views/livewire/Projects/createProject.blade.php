<div >

    <div class="row justify-content-center">
    <div class="h3">Add Project</div>
    </div>

    <div class="col col-md-12">
            <div class="form-group">
                <label for="title">  Project title</label>

                {{-- title model Livewire--}}
                <input wire:model="title" type="text" class="form-control input-sm">
            </div>

            <div class="form-group">
                <label for="description">Project Description</label>

                {{-- description model Livewire--}}

                    <textarea rows="3" wire:model="description" type="text" class="form-control input-sm"></textarea>

            </div>

            <div class="form-group">
                <label for="stack"> Project Stack</label>

                {{-- stack model Livewire--}}
                <input wire:model="stack" type="text" class="form-control input-sm">
            </div>


            <div class="form-group">
                <label for="banner_url">   Project Banner Url</label>

                {{-- image model Livewire--}}
                <input wire:model="banner_url" type="text" class="form-control input-sm">
            </div>



            <div class="form-group">
                <button wire:click="addProject()" class="form-control btn btn-primary">Add</button>
                <div wire:loading wire:target="addProject" class="pl-2">Creating...</div>
            </div>


        </div>

    </div>


