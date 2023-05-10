@extends('layouts.app')

@section('title', 'Search Posts')

@section('content')
    <div>
        <div href="https://laravel.com/docs"
             class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
            <div>
                <form action="" method="POST" action=" {{ route('search.query') }} ">
                    @csrf
                    <div>
                        <label for="content" class="mt-6 font-semibold text-gray-900 dark:text-white"> Enter
                            your
                            query</label>
                        <div>
                            <input id="content" type="text" name="content" required>
                        </div>
                        <div>
                            <button type="submit" class="mt-6 font-semibold text-gray-900 dark:text-white"
                                    name="search">
                                Search
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>

@endsection
