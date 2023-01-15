
@extends('todolist/layout')
 
@section('content')

<main class="maincenteredcreate">

    @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" class="mainformcreate" action="{{ route('todolist.update',$task->id) }}"  enctype="multipart/form-data">
    @csrf
    @method('PUT')
        <div class="mainformcreatediv">
            <div>
                <legend class="createlegend">Een taak bewerken</legend>
            </div>
            <div>
                <label for="name" class="labelcreate">Taaknaam</label>
            </div>
            <div>
                <input type="text" name="name" class="inputcreatename" value="{{ $task->name }}">
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
                <textarea class="descriptiontextarea" id="description" name="description" rows="5" cols="55">{{old('description', $task->description)}}</textarea>
            </div>
            <div class="errordescription">
                @error('description')
                <div class="labelerror">{{ $message }}</div>
            </div>
                @enderror
            </div>
            <div>
                <button type="submit" class="buttoncreate">Bewerken</button>
            </div>   
        </div>
    </form>
</main>

@endsection
