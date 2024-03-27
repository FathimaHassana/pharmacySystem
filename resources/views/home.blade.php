@extends('layouts.app')

@section('content')
    <main class="sm:container sm:mx-auto sm:mt-10">
        <div class="w-full sm:px-6">

            @if (session('status'))
                <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">



                <main>
                    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <a href="/inventories"
                                              class="bg-black-900 text-black-50 px-3 py-2 rounded-md text-sm font-medium">Inventories
                                </a>
                                <a href="/users"
                                              class="bg-black-900 text-black-50 px-3 py-2 rounded-md text-sm font-medium">Users
                                </a>
                            </div>
                        </div>
                    </nav>
        </div>
    </main>
@endsection
