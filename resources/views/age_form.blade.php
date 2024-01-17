@extends('layouts.main')

@section('title')
    Tell me your age
@endsection

@section('content')

<div class="flex flex-col items-center justify-center min-h-screen bg-gradient-to-r from-indigo-500 to-purple-500 py-5">
    <form method="POST" action="{{ route('home.store') }}" class="mt-4 w-full max-w-lg space-y-8 rounded-lg shadow-md p-8 bg-white">
        @csrf
        <h1 class="text-9xl font-bold text-dark mb-8">I am</h1>
        <div class="flex flex-col items-center space-y-4">
            <input type="number" name="age" id="age" class="w-full px-4 py-2 text-center text-3xl font-bold text-gray-700 rounded-lg border-b-2 border-indigo-500 focus:outline-none focus:ring focus:ring-opacity-50 focus:ring-indigo-500">
            <h1 class="text-6xl font-bold text-dark mb-8 pb-8">years old</h1>
            <button type="submit" class="text-4xl mt-8 px-4 py-2 text-white font-bold rounded-lg bg-indigo-500 hover:bg-indigo-600">Get me some food</button>
        </div>
    </form>

    <h1 class="text-6xl font-bold text-dark mt-8 mb-8">Your recent meals</h1>
    @foreach($last_three_meals as $meal)
        <h2 class="text-3xl font-bold text-dark mb-8">{{ $meal->name }} ({{ $meal->meal_age_bracket}})</h2>
    @endforeach

</div>
@stop
