<div class="container-fluid justify-content-center text-center">
    <div class="row justify-content-center" >
        <select name="type" wire:model="type" class="border shadow p-2 bg-white">
            <option value=''>Choose a type</option>
            <option value="My Experiences">My Experiences</option>
            <option value="My Education">My Education</option>
        </select>
        <div>
        </div>
    </div>


            <div class="row d-flex justify-content-center">
                <div class="col-md-6">
                    <table class="table table-responsive table-bordered table-condensed ">
                        <tr>
                            <td >ENTERPRISE</td>
                            <td >TITLE</td>
                            <td >DESCRIPTION</td>
                            <td >Address</td>
                            <td >START DATE</td>
                            <td >END DATE</td>
                            <td ></td>
                        </tr>
                        {{-- $data represents categories Livewire--}}
                        @if(!empty($experiences))
                            @foreach($experiences as $row)
                                <tr>
                                    <td>{{$row->enterprise}}</td>
                                    <td>{{$row->title}}</td>
                                    <td ><sup>{{$row->description}}</sup></td>
                                    <td>{{$row->address}}</td>
                                    <td>{{$row->start_date}}</td>
                                    <td>{{$row->end_date}}</td>
                                </tr>
                            @endforeach
                        @endif
                    </table>
                </div>
            </div>


    </div>

