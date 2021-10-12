<div class="container-fluid justify-content-center text-center">
    {{--  Technologies list   --}}
    <div class="row py-3">
        <div class="col-md-12">
            <div class="h3">Projects List </div>
        </div>

    </div>


    <div class="row justify-content-center" >
        <select name="category" wire:model="selectedCategory" class="border shadow p-2 bg-white">
            <option value=''>Choose a Category</option>
            {{-- selesting series Livewire--}}
            @foreach($categories as $category)
                <option value={{ $category->id }}>{{ $category->name }}</option>
            @endforeach
        </select>
        @if(!empty($selectedCategory))
            <button wire:click="createMode()" class="btn btn-xs btn-warning">New Project</button>
        @endif
    </div>

    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
            <table class="table table-responsive table-bordered table-condensed ">
                <tr>
                    <td >ID</td>
                    <td >TITLE</td>
                    <td >DESCRIPTION</td>
                    <td >STACK</td>
                    <td >BANNER IMAGE</td>
                    <td ></td>
                </tr>
                {{-- $data represents categories Livewire--}}
                @if(!empty($categoryProjects))
                @foreach($categoryProjects->sortBy('id') as $row)
                    <tr>
                        <td>{{$row->id}}</td>
                        <td>{{$row->title}}</td>
                        <td ><sup>{{$row->description}}</sup></td>
                        <td>{{$row->stack}}</td>
                        <td><img src="{{$row->banner_image_link}}" width="50" height="50" alt=""></td>
                        <td >
                            {{-- project edit and destroy methods Livewire--}}
                            <button wire:click="updateMode({{$row->id}})" class="btn btn-xs btn-warning">Edit</button>
                            <button wire:click="deleteProject({{$row->id}})" class="btn btn-xs btn-danger">Del</button>
                        </td>
                    </tr>
                @endforeach
                    @endif
            </table>
        </div>
    </div>

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

        @if($createMode)
            @include('livewire.Projects.createProject')
        @elseif($updateMode)
             @include('livewire.Projects.updateProject')
        @endif


</div>
