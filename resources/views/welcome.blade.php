<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>
      Tailwind Starter Template - Landing Page Template: Tailwind Toolbox
    </title>

    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
  
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    <!-- Define your gradient here - use online tools to find a gradient matching your branding-->
    <style>
      .gradient {
        background: linear-gradient(90deg, #d53369 0%, #daae51 100%);
      }
    </style>

    </head>
    <body class="leading-normal tracking-normal text-white gradient" style="font-family: 'Source Sans Pro', sans-serif;">
       <!--Nav-->
    <nav id="header" class="fixed w-full z-30 top-0 text-white">
    <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
    <div class="pl-14 flex items-center">
          <a class="toggleColour text-black no-underline hover:no-underline font-bold text-1xl lg:text-3xl" href="#">
          Tasks
          </a>
        </div>
        <div class="block lg:hidden pr-4">
          <button id="nav-toggle" class="flex items-center p-1 text-pink-800 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
            <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <title>Menu</title>
              <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
            </svg>
          </button>
        </div>
            @if (Route::has('login'))
            <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-white lg:bg-transparent text-black p-4 lg:p-0 z-20" id="nav-content">
                <ul class="list-reset lg:flex justify-end flex-1 items-center">
                    @auth
                    <li class="mr-3">
                        <a href="{{ url('/dashboard') }}" class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4">Dashboard</a>
                    @else
                    <li class="mr-3">
                        <a href="/" class="inline-block py-2 px-4 text-black font-bold no-underline">Home</a>
                    </li>

                    <li class="mr-3">
                        <a href="{{ route('login') }}" class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4">Log in</a>
                    </li>
                        @if (Route::has('register'))
                        <li class="mr-3">
                            <a href="{{ route('register') }}" class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4">Register</a>
                        </li>
                        @endif
                    @endauth
                </ul>
                <button
            id="navAction"
            class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out"
          >
            Services
          </button>
        </div>
      </div>
            @endif
        <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
            
    </nav>
            
        </div>
    </body>
</html>
