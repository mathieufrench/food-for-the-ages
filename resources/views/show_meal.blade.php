@extends('layouts.main')

@section('title')
    Your meal is ready!
@endsection

@section('content')
<div class="flex flex-col items-center justify-center min-h-screen bg-gradient-to-r from-indigo-500 to-purple-500">
    <div class="w-full max-w-lg space-y-8 rounded-lg shadow-md p-8 bg-white">
        <h1 class="text-6xl font-bold text-dark mb-8">You got.....</h1>
        <h2 class="text-9xl font-bold text-dark mb-8">{{ $meal->name }}</h2>
        <h3 class="text-5xl text-dark mb-8">{{$meal_notification}} </h3>
    </div>
</div>

@stop