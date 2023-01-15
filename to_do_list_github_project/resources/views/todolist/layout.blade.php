<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>To do lijst @yield('title')</title>

        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Meddon&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('/css/style.css')}}">

    </head>
    <body>

    <header> 
        <div class="menu">
            <img src="../../image/logotodolist.png" alt="todolist">
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

    @yield('content')

    <footer>
        <div>
            <h6>To do list Esma Yilmaz</h6>
        </div>
    </footer>

</body>
</html>