@extends('layouts.main')

@section('title')
    Your meal is ready!
@endsection

@section('content')
<div class="flex flex-col items-center justify-center min-h-screen bg-gradient-to-r from-indigo-500 to-purple-500">
    <div class="p-8 m-8">
        @include('components.result-card')
    </div>
    <div class="px-3 my-5">
        @include('components.recipe-card')
    </div>
</div>

@stop