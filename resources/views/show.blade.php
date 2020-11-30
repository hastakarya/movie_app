@extends('layouts.main')

@section('content')
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <div class="flex-none">
                <img src="{{ 'https://image.tmdb.org/t/p/w500'.$movie['poster_path'] }}" alt="" class="w-64 lg:w-96">
            </div>
            
            <div class="md:ml-24">
                <h2 class="text-4xl font-semibold">{{ $movie['title'] }} ({{ \Carbon\Carbon::parse($movie['release_date'])->format('Y') }})</h2>
                <div class="mt-2">
                    <div class="flex flex-wrap items-center text-gray-400 text-sm">
                        <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><path d="m23.363 8.584-7.378-1.127-3.307-7.044c-.247-.526-1.11-.526-1.357 0l-3.306 7.044-7.378 1.127c-.606.093-.848.83-.423 1.265l5.36 5.494-1.267 7.767c-.101.617.558 1.08 1.103.777l6.59-3.642 6.59 3.643c.54.3 1.205-.154 1.103-.777l-1.267-7.767 5.36-5.494c.425-.436.182-1.173-.423-1.266z" fill="#ffc107"/></svg>
                        <span class="ml-1">{{ $movie['vote_average'] * 10 . '%' }}</span>
                        <span class="mx-2">|</span>
                        <span>{{ \Carbon\Carbon::parse($movie['release_date'])->format('M d, Y') }}</span>
                        <span class="mx-2">|</span>
                        <span>
                            @foreach ($movie['genres'] as $genre)
                                {{ $genre['name'] }}@if (!$loop->last), @endif
                            @endforeach
                        </span>
                    </div>
                    
                    <p class="text-gray-300 mt-8">
                        {{ $movie['overview'] }}
                    </p>

                    <div class="mt-12">
                        <h4 class="text-white font-semibold">Featured Cast</h4>
                        <div class="flex mt-4">
                            @foreach ($movie['credits']['cast'] as $cast)
                                @if ($loop->index < 2)
                                    <div class="mr-8">
                                        <div>{{ $cast['name'] }}</div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    
                    <div class="mt-12">
                        <h4 class="text-white font-semibold">Featured Crew</h4>
                        <div class="flex mt-4">
                            @foreach ($movie['credits']['crew'] as $crew)
                                @if ($loop->index < 2)
                                    <div class="mr-8">
                                        <div>{{ $crew['name'] }}</div>
                                        <div class="text-sm text-gray-400">{{ $crew['job'] }}</div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>

                    <div x-data="{ isOpen: false }">
                        @if ($movie['videos']['results'] > 0)
                            <div class="mt-12">
                                {{-- href="https://www.youtube.com/watch?v={{ $movie['videos']['results'][0]['key'] }}" target="_blank"  --}}
                                <button @click="isOpen = true" class="flex inline-flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-orange-600 transition ease-in-out duration-150">
                                    <svg class="w-6 fil-current" viewBox="0 0 499.999 499.999" ><path d="m171.875 372.237c-2.701 0-5.402-.702-7.812-2.09-4.837-2.792-7.812-7.95-7.812-13.535v-215.987c0-5.585 2.975-10.727 7.797-13.519 4.837-2.792 10.788-2.838 15.625-.015l187.5 107.94c4.837 2.777 7.828 7.95 7.828 13.535s-2.975 10.742-7.828 13.535l-187.5 108.047c-2.412 1.388-5.113 2.089-7.798 2.089zm15.625-204.589v161.926l140.564-81.009c-.001 0-140.564-80.917-140.564-80.917z"/><path d="m250 499.999c-137.848 0-250-112.152-250-250s112.152-249.999 250-249.999 250 112.152 250 250-112.153 249.999-250 249.999zm0-468.749c-120.62 0-218.75 98.129-218.75 218.75s98.129 218.75 218.75 218.75 218.749-98.13 218.749-218.75-98.129-218.75-218.749-218.75z"/></svg>
                                    <span class="ml-2">Play Trailer</span>
                                </button>
                            </div>
                        @endif

                        <div style="background-color: rgba(0, 0, 0, 0.5);" class="fixed top-0 left-0 w-full h-full flex items-center shadow-lg overflow-y-auto" x-show="isOpen">
                            <div class="container mx-auto lg:px-32 rounded-lg overflow-y-auto">
                                <div class="bg-gray-900 rounded">
                                    <div class="flex justify-end pr-4 pt-2">
                                        <button @click="isOpen = false" class="text-3xl leading-none hover:text-gray-300">&times;</button>
                                    </div>
                                    <div class="modal-body px-8 py-8">
                                        <div class="responsive-container overflow-hidden relative" style="padding-top: 56.25%">
                                            <iframe width="560" height="315" class="responsive-iframe absolute top-0 left-0 w-full h-full" src="https://www.youtube.com/embed/{{ $movie['videos']['results'][0]['key'] }}" style="border:0;" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Cast</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8"> 
                @foreach ($movie['credits']['cast'] as $cast)
                    @if ($cast['profile_path'] != null)
                        <div class="mt-8">
                            <a href="">
                                <img src="{{ 'https://image.tmdb.org/t/p/w500'.$cast['profile_path'] }}" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                            <div class="mt-2">
                                <a href="" class="text-lg mt-2 hover:text-gray:300">{{$cast['name']}}</a>
                                <div class="flex items-center text-gray-400 text-sm mt-1">
                                    <span>{{ $cast['character'] }}</span>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>

    <div class="movie-cast border-b border-gray-800" x-data="{ isOpen: false, image:'' }">
    {{-- <div class="movie-images" x-data="{ isOpen: false, image:''}"> --}}
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Image</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($movie['images']['backdrops'] as $image)
                    <div class="mt-8">
                        <a @click.prevent="isOpen = true, image='{{ 'https://image.tmdb.org/t/p/original'.$image['file_path'] }}'" href="#">
                            <img src="{{ 'https://image.tmdb.org/t/p/w500'.$image['file_path'] }}" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                    </div>
                @endforeach
            </div>

            <div style="background-color: rgba(0, 0, 0, 0.5);" class="fixed top-0 left-0 w-full h-full flex items-center shadow-lg overflow-y-auto" x-show="isOpen">
                <div class="container mx-auto lg:px-32 rounded-lg overflow-y-auto">
                    <div class="bg-gray-900 rounded">
                        <div class="flex justify-end pr-4 pt-2">
                            <button @click="isOpen = false" @keydown.escape.window="isOpen = false" class="text-3xl leading-none hover:text-gray-300">&times;</button>
                        </div>
                        <div class="modal-body px-8 py-8">
                            <img :src="image" alt="poster">
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
@endsection