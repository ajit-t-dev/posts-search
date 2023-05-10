@extends('layouts.app')

@section('title', 'Result')

@section('content')
    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        <div class="flex justify-center">
            <p class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Results</p>
        </div>
        <div class="mt-16">
            @if($posts->isNotEmpty())
                @foreach($posts as $post)
                    <div>
                        <div
                            class="card scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500"
                            style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title mt-6 text-l font-semibold text-gray-900 dark:text-white">{{ $post->title  }}</h5>
                                <p class="card-text mt-6 text-l font-semibold text-gray-900 dark:text-white">{{ $post->content }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
        </div>
        <div class="flex justify-center">
            <a href="{{ route('search.index') }}"
               class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Home</a>
        </div>
        @else()
            <div class="flex justify-center">
                <p class="mt-6 font-semibold text-gray-900 dark:text-white"> {{ $message ?? null }}</p>
            </div>
            <div class="flex justify-center">
                <a href="{{ route('search.index') }}"
                   class="mt-6  font-semibold text-gray-900 dark:text-white">Home</a>
            </div>
        @endif
    </div>
@endsection
