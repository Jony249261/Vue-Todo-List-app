@extends('layouts.app')

@section('content')
    <div class="w-100 h-100 d-flex flex-column justify-content-center align-items-center" style="margin-left:350px !important" >
        <h1 class="text-white">Laravel + Vue Todo App</h1>
        <todo-component></todo-component>
        
    </div>
@endsection