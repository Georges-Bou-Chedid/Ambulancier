<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#000000">
    <link rel="shortcut icon" href="./assets/img/favicon.ico">
    
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/compiled-tailwind.min.css">
     <!-- Styles -->
     <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <title>Tasks</title>
  </head>

  <body class="text-gray-800 antialiased">
    <nav class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 ">
      <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
        <div class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start">
          <a class="text-2xl font-bold leading-relaxed inline-block mr-10 ml-10 py-2 whitespace-nowrap uppercase text-white" href="/">Tasks</a><button class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none" type="button" onclick="toggleNavbar('example-collapse-navbar')">
            <i class="text-white fas fa-bars"></i>
          </button>
        </div>
        @if (Route::has('login'))
        <div class="lg:flex flex-grow items-center bg-white lg:bg-transparent lg:shadow-none hidden" id="example-collapse-navbar">
        @auth
          <ul class="flex flex-col lg:flex-row list-none mr-auto">
            <li class="flex items-center">
              <a class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-sm uppercase font-bold" href=""><i class="lg:text-gray-300 text-gray-500 far fa-file-alt text-lg leading-lg mr-2"></i>
                Statistics</a>
            </li>
          </ul>

               <!-- Settings Dropdown -->
               <div class="hidden sm:flex items-center">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center text-lg font-medium text-white hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();" class="hover:text-green-600">
                                {{ __('Log out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

          <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">
       
          <li class="flex items-center">
              <a class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-5 py-4 lg:py-2 flex items-center text-sm uppercase font-bold" href="/">Home<span class="lg:hidden inline-block ml-2"></span></a>
            </li>
           
          </ul>
          @else
          <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">
            <li class="flex items-center">
              <a class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-5 py-4 lg:py-2 flex items-center text-sm uppercase font-bold" href="/">Home<span class="lg:hidden inline-block ml-2"></span></a>
            </li>
            <li class="flex items-center">
              <a class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-5 py-4 lg:py-2 flex items-center text-sm uppercase font-bold" href="{{ route('login') }}">Login<span class="lg:hidden inline-block ml-2"></span></a>
            </li>
            @if (Route::has('register'))
            <li class="flex items-center">
              <a class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-5 py-4 lg:py-2 flex items-center text-sm uppercase font-bold" href="{{ route('register') }}">Sign Up<span class="lg:hidden inline-block ml-2"></span></a>
            </li>
            @endif
          </ul>
          @endauth
      <div class="relative group">
          <button
               id="navAction"
               class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out"
              >
               Services
          </button>
              <div class="absolute z-20 hidden bg-grey-200 right-0 w-full mt-1 origin-top-right rounded-md shadow-lg md:w-48 group-hover:block">
          
              <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-green-400">
            <a class="block px-4 py-2 mt-2 text-sm text-green-600 font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-white-200 md:mt-0 hover:text-white-900 focus:text-white-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/service/all">All Services</a>
            <a class="block px-4 py-2 mt-2 text-sm text-green-600 font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-white-200 md:mt-0 hover:text-white-900 focus:text-white-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">By Filters</a>
            </div>
         </div>
      </div>  
    </div>
  </div>
      @endif
    </nav>
   
   <main>
   @yield('content')
   </main>
