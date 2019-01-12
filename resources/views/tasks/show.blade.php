@extends('layouts.main')
@section('title', 'Home')
@section('content')
    <form action="/create/task">
        @csrf
        <div class="form-row align-items-center">
          <div class="col-10">
            <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="ToDo" name="todo">
          </div>
          <div class="col-2">
            <button type="submit" class="btn btn-primary mb-2">Create</button>
          </div>
        </div>
    </form>
    <ol>
        @foreach ($tasks as $task)
            <li>{{$task->todo}}, 
                {{$task->progress}}% 
                <a href="{{route('task.delete', ['id' => $task->id])}}" class="btn btn-danger">Delete</a>
                <a href="{{route('task.update', ['id' => $task->id])}}" class="btn btn-primary btn-sm">Update</a>
                @if (!($task->completed))
                    <a href="{{route('task.complete', ['id' => $task->id])}}" class="btn btn-primary btn-sm">Complete!</a>                    
                @else
                    <span class="badge badge-success">Completed</span>
                @endif
            </li>
        @endforeach
    </ol>
@endsection