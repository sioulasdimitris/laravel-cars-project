@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1 class="text-5xl uppercase bold">
            {{$car->name}}
        </h1>
    </div>

    <div class="py-10 text-center">
        <div class="m-auto">
            <div class="float-right">
            </div>
            <span class="uppercase text-blue-500 font-bold text-xs italic">
                        founded: {{$car->founded}}
                     </span>
            <p class="text-lg text-gray700 py-6">
                {{$car->description}}</p>

            <ul>
                <p class="text-lg text-gray-700 py-3">
                    Models:
                </p>

                @forelse($car->carModels as $model)
                    <li class="inline italic text-gray-600 px-1 py-6">
                        {{$model['model_name']}}
                    </li>
                @empty
                    <p>
                        No models found
                    </p>
                @endforelse
            </ul>

            <hr class="mt-4 mb-8">
        </div>
    </div>

@endsection
