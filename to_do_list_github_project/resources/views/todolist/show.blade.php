
@extends('todolist.layout')
 
@section('content')

<div>
    <h2 class="showh2">Een taak inlezen</h2>
    <p class="showp">Op deze pagina kan u de gegevens van deze taak inlezen.</p>
</div>

<main class="showmain">
    <div class="mainshowdiv">
        <div class="showmaindiv">
            <ul>
                <li class="headtextli">De nummer van de taak</li>
                <li>{{ $task->id}}</li>
                <li class="headtextli">De naam van de taak</li>
                <li>{{ $task->name}}</li>
                <li class="headtextli">De beschrijving van deze taak</li>
                <li>{{ $task->description}}</li>
            </ul>
        </div>
    </div>
</main>

@endsection
