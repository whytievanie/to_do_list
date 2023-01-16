<!--<main class="indexmain">
        <div class="indextask">
            <table class="tableindex">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Taaknaam</th> -->
                        <!-- <th>Beschrijving</th> -->
                        <!-- <th>Acties</th>
                    </tr>
                </thead>
                <tbody>

                    @if(count($tasks) > 0)

                    @foreach($tasks as $task)

                    <tr>
                        <td>{{ $task->id}}</td>
                        <td>{{ $task->name}}</td> -->
                        <!-- <td>{{ $task->description}}</td> -->
                        <!-- <td>                           
                            <form method="post" action="{{ route('todolist.destroy', $task->id) }}">
                                @csrf
                                @method('DELETE')
							    <a class="indexeditbutton" href="{{ route('todolist.show', $task->id) }}" class="btn btn-primary btn-sm">Taakgegevens</a>
							    <a class="indexeditbutton" href="{{ route('todolist.edit', $task->id) }}" class="btn btn-warning btn-sm">Bewerken</a>
							    <button type="submit" class="indexdeletebutton">Verwijderen</button>
						    </form>
                        </td>
                    </tr> 
                    @endforeach       
                </tbody>
            </table>
        </div>
    </main> -->

    // public function getTaskName(): String
    // {
    //     return "TestTaak";
    // }

    // public function index() 
    // {
    //     return view('todolist.index', ['name' => $this->getTaskName()]);
    // } 

    // public function create() 
    // {
    //     return view('todolist.create');
    // } 

    // public function edit() 
    // {
    //     return view('todolist.edit');
    // } 

    // public function show() 
    // {
    //     return view('todolist.show');
    // } 

     <!-- <form method="POST" action="{{ route('todolist.namesort') }}">
            <button type="submit" class="indexdeletebutton">Verwijderen</button>
        </form>  -->
