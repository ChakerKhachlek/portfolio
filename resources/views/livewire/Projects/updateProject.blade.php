<div >
    @if (count($errors) > 0)
        <div class="alert alert-danger ">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Sorry!</strong> invalid input.<br><br>
            <ul style="list-style-type:none;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <div class="row justify-content-center">
            <div class="h3">Update Project</div>
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
            <button wire:click="updateProject()" class="form-control btn btn-primary">Update</button>
            <div wire:loading wire:target="updateProject" class="pl-2">Updating...</div>
        </div>


    </div>
        <div class="row d-flex justify-content-center">
            <div></div>
            <button wire:click="createScreenShotMode()" class="form-control btn btn-primary">New screenshot</button>
            @if($createScreenShotMode)
                <div class="row">
                    <div class="col col-md-12">

                        <div class="form-group">
                            <label for="linkNewScreenshot">Link</label>
                            {{-- Name Model Livewire--}}
                            <input wire:model="linkNewScreenshot" type="text" id="name" class="form-control input-sm" >
                        </div>

                        {{-- store method Livewire--}}
                        <button wire:click="createScreenShot()" class="btn btn-default">Save</button>
                        {{-- category storing Livewire--}}
                        <div wire:loading wire:target="createScreenShot" class="pl-2">Creating...</div>


                    </div>
            @endif
        @if(!empty($selectedProject))

                <div class="col-md-6">
                    <table class="table table-bordered table-condensed table-responsive">
                        <tr>
                            <td>image</td>
                            <td>link</td>

                        </tr>
                 @foreach($selectedProjectScreenshots as $row)
                            <tr>
                                <td><img src="{{$row->link}}" height="50px" width="50px" ></td>
                                <td><button wire:click="destroyScreenshot({{$row->id}})" class="btn btn-xs btn-danger">Del</button></td>
                                <td>{{$row->link}}</td>


                            </tr>
                 @endforeach

                    </table>
                </div>


        @endif
    </div>

</div>

</div>
