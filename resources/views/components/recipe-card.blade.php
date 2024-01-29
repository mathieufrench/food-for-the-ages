@if($recipe)
    <div class="bg-white rounded-md overflow-hidden relative shadow-md mt-6 w-1/2 min-w-96 mx-auto">
        <div>
            <img class="w-3/4 min-w-96 mx-auto my-6" src="{{$recipe['strMealThumb']}}" alt="{{$recipe['strMeal']}}">
        </div>
        <div class="p-8">
            <h1 class="text-5xl text-dark mb-8">Here's a recipe you might find useful</h1>
            <h2 class="text-2xl text-dark-400">{{$recipe['strMeal']}}</h2>
            <h3 class="text-1xl text-dark font-bold mt-2 mb-2">Instructions</h3>
            <p>{{$recipe['strInstructions']}}</p>
        </div>
    </div>
@endif