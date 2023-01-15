    
@extends('todolist/layout')
 
@section('content')

<main class="maincenteredcreate">

    @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" class="mainformcreate" action="{{ route('todolist.store') }}" enctype="multipart/form-data">
    @csrf
        <div class="mainformcreatediv">
            <div>
                <legend class="createlegend">Een taak toevoegen</legend>
            </div>
            <div>
                <label for="name" class="labelcreate">Taaknaam</label>
            </div>
            <div>
                <input type="text" name="name" class="inputcreatename" placeholder="Taaknaam">
            </div>
            <div>
                @error('name')
                <div class="labelerror">{{ $message }}</div>
            </div>
            <div>
                @enderror
            </div>
            <div class="labeldescriptiondiv">
                <label for="description" class="labelcreate">Beschrijving</label>
            </div>
            <div>
                <textarea class="descriptiontextarea" name="description" rows="5" cols="55"></textarea>
            </div>
            <div class="errordescription">
                @error('description')
                <div class="labelerror">{{ $message }}</div>
            </div>
                @enderror
            </div>
            <div>
                <button type="submit" class="buttoncreate">Toevoegen</button>
            </div>   
        </div>
    </form>
</main>

@endsection
