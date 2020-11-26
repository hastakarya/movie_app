<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie App</title>

    <link rel="stylesheet" href="/css/main.css">
</head>
<body class="font-sans bg-gray-900 text-white">
    
    <nav class="border-b border-gray-800">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-4 py-6">
            <ul class="flex flex-col md:flex-row items-center">
                <li>
                    <a href="{{ route('movie.index') }}">
                        <svg class="w-32" viewBox="0 0 1000 412.10900000000004"><path d="M795.964 285.827c43.58 0 80.485-35.965 80.485-80.91 0-44.949-36.904-80.457-80.485-80.457-44.917 0-80.91 35.508-80.91 80.456 0 44.946 35.993 80.91 80.91 80.91m-102.489-80.91c0-56.63 45.857-102.458 102.489-102.458 56.661 0 102.458 45.827 102.458 102.458 0 57.057-45.797 102.944-102.458 102.944-56.632 0-102.489-45.887-102.489-102.944m-143.763 0c12.99-.922 34.142-15.72 42.215-24.704-3.156 10.773-3.156 44.917 0 55.721-8.983-13.02-29.226-28.77-42.215-31.017M475.994 96.631c16.176 0 29.196 15.721 29.196 33.717 0 17.937-13.02 33.719-29.196 33.719h-55.782V96.63zm0 151.41c16.176 0 29.196 15.753 29.196 33.72 0 18.905-13.02 34.597-29.196 34.597h-55.782v-68.317zm319.97 164.067c112.352 0 204.036-93.475 204.036-207.192C1000 89.408 908.316 0 795.964 0c-113.688 0-171.23 82.67-185.13 116.387 0-49.894-49.924-109.65-107.89-109.65H315.539V410.32h174.355c71.016 0 120.94-60.698 120.94-113.72 15.721 32.81 71.442 115.509 185.13 115.509m-502.853-1.797H183.429V253.892h-71.047v156.42H0V6.73h112.382v150.531h71.047V6.731h109.682z" fill="#fff"/></svg>
                    </a>
                </li>
                <li class="md:ml-16 mt-3 md:mt-0">
                    <a href="{{ route('movie.index') }}" class="hover:text-gray-300">Movies</a>
                </li>
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="" class="hover:text-gray-300">TV Shows</a>
                </li>
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="" class="hover:text-gray-300">Actors</a>
                </li>
            </ul>
            <div class="flex flex-col md:flex-row items-center">
                <div class="relative mt-3 md:mt-0">
                    <input type="text" class="bg-gray-800 rounded-full text-sm w-64 px-4 pl-8 py-1 focus:outline-none focus:shadow-outline" placeholder="Search">
                    <div class="absolute top-0">
                        <svg class="fill-current text-gray-500 w-4 mt-2 ml-2" viewBox="0 0 515.558 515.558"><path d="m378.344 332.78c25.37-34.645 40.545-77.2 40.545-123.333 0-115.484-93.961-209.445-209.445-209.445s-209.444 93.961-209.444 209.445 93.961 209.445 209.445 209.445c46.133 0 88.692-15.177 123.337-40.547l137.212 137.212 45.564-45.564c0-.001-137.214-137.213-137.214-137.213zm-168.899 21.667c-79.958 0-145-65.042-145-145s65.042-145 145-145 145 65.042 145 145-65.043 145-145 145z"/></svg>
                    </div>
                </div>
                <div class="md:ml-4 mt-3 md:mt-0">
                    <a href="">
                        <img src="{{asset('img/logo.jpg')}}" alt="avatar" class="rounded-full w-8 h-8">
                    </a>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')
    
</body>
</html>