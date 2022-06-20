<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>Vote the Idea</title>
    
    <link rel="shortcut icon" href="{{ asset('img/AmagamiSS.ico') }}" type="image/x-icon">
    
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">
    
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
    <livewire:styles/>
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="bg-gray-background font-sans text-sm text-gray-900">
<header class="flex flex-col items-center justify-between px-8 py-4 md:flex-row">
    <a href="#"><img src="{{ asset('img/logo.svg') }}" alt=""></a>
    <div class="mt-2 flex items-center md:mt-0">
        @if (Route::has('login'))
            <div class="px-6 py-4">
                @auth
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </a>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline dark:text-gray-500">Log
                        in</a>
                    
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                           class="ml-4 text-sm text-gray-700 underline dark:text-gray-500">Register</a>
                    @endif
                @endauth
            </div>
        @endif
        <a href="#">
            <img src="https://www.gravatar.com/avatar/0000000?d=mp" alt="avatar" class="h-10 w-10 rounded-full">
        </a>
    </div>
</header>

<main class="max-w-custom container mx-auto flex flex-col md:flex-row">
    <div class="w-76 mx-auto md:mx-0 md:mr-5">
        <div class="border-blue mt-16 rounded-xl border-2 bg-white md:sticky md:top-8" style="
                          border-image-source: linear-gradient(to bottom, rgba(50, 138, 241, 0.22), rgba(99, 123, 255, 0));
                            border-image-slice: 1;
                            background-image: linear-gradient(to bottom, #ffffff, #ffffff), linear-gradient(to bottom, rgba(50, 138, 241, 0.22), rgba(99, 123, 255, 0));
                            background-origin: border-box;
                            background-clip: content-box, border-box;
                    ">
            
            
            <div class="px-6 py-2 pt-6 text-center">
                <h3 class="text-base font-semibold">Add an idea</h3>
                <p class="mt-4 text-xs">
                    @auth
                        Let us know what you would like and we'll take a look over!
                    @else
                        Please login to create an idea.
                    @endauth
                </p>
            </div>
            
            @auth
                <livewire:create-idea/>
            @else
                <div class="my-6 text-center">
                    <a href="{{ route('login') }}"
                       class="inline-block justify-center w-1/2 h-11 text-xs bg-blue text-white font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3">
                        <span class="ml-1">Login</span>
                    </a>
                    <a href="{{ route('register') }}"
                       class="inline-block justify-center w-1/2 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3 mt-4">
                        <span class="ml-1">Sign Up</span>
                    </a>
                </div>
            @endauth
        </div>
    </div>
    <div class="md:w-175 w-full px-2 md:px-0">
        <nav class="hidden items-center justify-between text-xs md:flex">
            <ul class="flex space-x-10 border-b-4 pb-3 font-semibold uppercase">
                <li>
                    <a href="#" class="border-blue border-b-4 pb-3">All Ideas (87)</a>
                </li>
                <li>
                    <a href="#" class="hover:border-blue border-b-4 pb-3 text-gray-400 transition duration-150 ease-in">Considering
                        (6)</a>
                </li>
                <li>
                    <a href="#" class="hover:border-blue border-b-4 pb-3 text-gray-400 transition duration-150 ease-in">In
                        Progress (1)</a>
                </li>
            </ul>
            
            <ul class="flex space-x-10 border-b-4 pb-3 font-semibold uppercase">
                <li>
                    <a href="#" class="hover:border-blue border-b-4 pb-3 text-gray-400 transition duration-150 ease-in">Implemented
                        (10)</a>
                </li>
                <li>
                    <a href="#" class="hover:border-blue border-b-4 pb-3 text-gray-400 transition duration-150 ease-in">
                        Closed
                        (55)
                    </a>
                </li>
            </ul>
        </nav>
        
        <div class="mt-8">
            {{ $slot }}
        </div>
    </div>
</main>

<livewire:scripts/>

</body>


</html>
