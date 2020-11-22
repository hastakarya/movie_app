@extends('layouts.main')

@section('content')
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <img src="{{asset('img/movie1.jpg')}}" alt="" class="w-70 md:w-96">
            
            <div class="md:ml-24">
                <h2 class="text-4xl font-semibold">John Wick (2020)</h2>
                <div class="mt-2">
                    <a href="" class="text-lg mt-2 hover:text-gray:300">John Wick</a>
                    <div class="flex flex-wrap items-center text-gray-400 text-sm">
                        <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><path d="m23.363 8.584-7.378-1.127-3.307-7.044c-.247-.526-1.11-.526-1.357 0l-3.306 7.044-7.378 1.127c-.606.093-.848.83-.423 1.265l5.36 5.494-1.267 7.767c-.101.617.558 1.08 1.103.777l6.59-3.642 6.59 3.643c.54.3 1.205-.154 1.103-.777l-1.267-7.767 5.36-5.494c.425-.436.182-1.173-.423-1.266z" fill="#ffc107"/></svg>
                        <span class="ml-1">85%</span>
                        <span class="mx-2">|</span>
                        <span>Feb 20, 2020</span>
                        <span class="mx-2">|</span>
                        <span>Action, Thriller, Comedy</span>
                    </div>
                    
                    <p class="text-gray-300 mt-8">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error optio fugiat inventore ab quisquam dolores animi similique, neque tenetur! Reprehenderit id maxime iusto architecto ea, rem temporibus quas placeat adipisci earum nesciunt animi blanditiis fuga sed laudantium corrupti, eum quis sapiente ad facere nam! Reiciendis nihil unde quae voluptatibus natus!
                    </p>

                    <div class="mt-12">
                        <h4 class="text-white font-semibold">Featured Cast</h4>
                        <div class="flex mt-4">
                            <div>
                                <div>Keanu Reeves</div>
                                <div class="text-sm text-gray-400">Screenplay, Directors, Story</div>
                            </div>
                            <div class="ml-8">
                                <div>Keanu Reeves</div>
                                <div class="text-sm text-gray-400">Screenplay, Directors, Story</div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-12">
                        <button class="flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-orange-600 transition ease-in-out duration-150">
                            <svg class="w-6 fil-current" viewBox="0 0 499.999 499.999" ><path d="m171.875 372.237c-2.701 0-5.402-.702-7.812-2.09-4.837-2.792-7.812-7.95-7.812-13.535v-215.987c0-5.585 2.975-10.727 7.797-13.519 4.837-2.792 10.788-2.838 15.625-.015l187.5 107.94c4.837 2.777 7.828 7.95 7.828 13.535s-2.975 10.742-7.828 13.535l-187.5 108.047c-2.412 1.388-5.113 2.089-7.798 2.089zm15.625-204.589v161.926l140.564-81.009c-.001 0-140.564-80.917-140.564-80.917z"/><path d="m250 499.999c-137.848 0-250-112.152-250-250s112.152-249.999 250-249.999 250 112.152 250 250-112.153 249.999-250 249.999zm0-468.749c-120.62 0-218.75 98.129-218.75 218.75s98.129 218.75 218.75 218.75 218.749-98.13 218.749-218.75-98.129-218.75-218.749-218.75z"/></svg>
                            <span class="ml-2">Play Trailer</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Cast</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                <div class="mt-8">
                    <a href="">
                        <img src="{{asset('img/actor1.jpg')}}" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="" class="text-lg mt-2 hover:text-gray:300">Keanu Reeves</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <span>John Wick</span>
                        </div>
                    </div>
                </div>
                
                <div class="mt-8">
                    <a href="">
                        <img src="{{asset('img/actor1.jpg')}}" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="" class="text-lg mt-2 hover:text-gray:300">Keanu Reeves</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <span>John Wick</span>
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="">
                        <img src="{{asset('img/actor1.jpg')}}" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="" class="text-lg mt-2 hover:text-gray:300">Keanu Reeves</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <span>John Wick</span>
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="">
                        <img src="{{asset('img/actor1.jpg')}}" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="" class="text-lg mt-2 hover:text-gray:300">Keanu Reeves</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <span>John Wick</span>
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="">
                        <img src="{{asset('img/actor1.jpg')}}" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="" class="text-lg mt-2 hover:text-gray:300">Keanu Reeves</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <span>John Wick</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Image</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="mt-8">
                    <a href="">
                        <img src="{{asset('img/images1.jpg')}}" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>

                <div class="mt-8">
                    <a href="">
                        <img src="{{asset('img/images1.jpg')}}" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>

                <div class="mt-8">
                    <a href="">
                        <img src="{{asset('img/images1.jpg')}}" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>

                <div class="mt-8">
                    <a href="">
                        <img src="{{asset('img/images1.jpg')}}" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>

            </div>
        </div>
    </div>
@endsection