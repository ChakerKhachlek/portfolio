@extends('layouts.admin')
@section('content')


    <div class="container-fluid justify-content-center">
        <div class="row justify-content-center p-3 text-center">
            <h4 class="text-light text-center bg-dark p-2">Categories Management</h4>
        </div>


        @livewire('manage-projects-categories-component')

    </div>

@endsection
