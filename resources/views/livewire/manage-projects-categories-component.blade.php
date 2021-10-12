<div class="container-fluid justify-content-center text-center">



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
    {{-- create and update displaying area Livewire--}}
    @if($updateMode)
        <div class="d-flex justify-content-center">

            @include('livewire.Categories.updateCategory')

        </div>
    @elseif($createMode)
        <div class="d-flex justify-content-center">
            @include('livewire.Categories.createCategory')
        </div>
    @endif

    {{--  Technologies list   --}}
    <div class="row py-3">
        <div class="col-md-12">
            <div class="h3">Categories List ({{$data->count()}})</div>
        </div>

    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
            <table class="table table-bordered table-condensed">
                <tr>
                    <td>ID</td>
                    <td>NAME</td>
                </tr>

                {{-- $data represents categories Livewire--}}
                @foreach($data->sortBy('id') as $row)
                    <tr>
                        <td>{{$row->id}}</td>
                        <td>{{$row->name}}</td>
                        <td width="100">
                            {{-- category edit and destroy methods Livewire--}}
                            <button wire:click="edit({{$row->id}})" class="btn btn-xs btn-warning">Edit</button>
                            <button wire:click="destroy({{$row->id}})" class="btn btn-xs btn-danger">Del</button>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

</div>
