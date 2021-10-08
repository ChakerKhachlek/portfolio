@extends('layouts.admin')
@section('content')


    <div class="container justify-content-center">
        <div class="row justify-content-center p-3 text-center">
            <h4 class="text-light text-center bg-dark p-2">Technologies Management</h4>
        </div>

        @livewire('manage-technologies-component')


    </div>

@endsection
