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
    
    <div>
        <h2 class="indexh2">Uw taken</h2>
        <p class="indexp">Op deze pagina ziet u uw takenlijst.</p>
    </div>

    <div class="succesmessage">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
    </div>

    <div class="indexmain">
        <div>

            @if(count($tasks) > 0)

            @foreach($tasks as $task)

                <ul>
                    <li>{{ $task->name}}</li>
                    <li> 
                        <form method="POST" action="{{ route('todolist.destroy', $task->id) }}">
                       
                            <a class="indexeditbutton" href="{{ route('todolist.show', $task->id) }}" class="btn btn-primary btn-sm">Taakgegevens</a>
                            <a class="indexeditbutton" href="{{ route('todolist.edit', $task->id) }}" class="btn btn-warning btn-sm">Bewerken</a>

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="indexdeletebutton">Verwijderen</button>
                        </form>
                    </li>
                </ul>

            @endforeach  

        </div>
    </div>

    <div>
        {{ $tasks->links('vendor.pagination.custom') }}
    </div>

    <footer>
        <div>
            <h6>To do list Esma Yilmaz</h6>
        </div>
    </footer>

    @endif

    @if(count($tasks) === 0)

            <div class="centeredindex">
                <div class="centeredindexdiv">
                    <h3 class="indexh3">U heeft geen taken!</h3>
                </div>
            </div>
        </div>
    </div>
    
    <footer>
        <div>
            <h6>To do list Esma Yilmaz</h6>
        </div>
    </footer>

    @endif
