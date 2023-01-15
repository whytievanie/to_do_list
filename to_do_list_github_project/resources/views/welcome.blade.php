<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>To do lijst</title>

        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Meddon&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('/css/style.css')}}">

    </head>
    <body>

    <header> 
        <div class="menu">
            <img src="../image/logotodolist.png" alt="todolist">
            <div>
                <h1>To do list</h1>
            </div>
            <div>
                <nav>
                    <a href="/">Homepagina</a>
                    <a href="{{ route('todolist.index') }}">Uw Taken</a>
                    <a href="{{ route('todolist.create') }}">Taken toevoegen</a>
                </nav>
            </div>
        </div>
    </header>
    
    <div class="centered">
        <div class="welcomeinfo">
            <div class="welcomeinfodiv">
                <h2 class="welcomeh2">Welkom op mijn website.</h2>
                <p>Op deze website kan uw to do lijst bijhouden, zoals</p>
                <p>U kan uw takenlijst zien.</p>
                <p>U kan uw taken kan toevoegen.</p>
                <p>U kan uw taken kan bewerken.</p>
                <p>U kan uw gegevens van uw taken inlezen.</p>
                <p>U kan uw taken verwijderen.</p>
            </div>
        </div>
    </div>

    <footer>
        <div>
            <h6>To do list Esma Yilmaz</h6>
        </div>
    </footer>

    </body>
</html>

 <!-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif -->

             <!-- <main class="mainwelcome">
        <div class="mainwelcomediv">
            <img src="../image/todolist.png" alt="todolist">
        </div>
    </main> -->
