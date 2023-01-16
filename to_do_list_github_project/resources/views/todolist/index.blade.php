    
@extends('todolist/layout')
 
@section('content')
 
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

    @else
    
            <div class="centeredindex">
                <div class="centeredindexdiv">
                    <h3 class="indexh3">U heeft geen taken!</h3>
                </div>
            </div>
        </div>
    </div>

    @endif

@endsection
