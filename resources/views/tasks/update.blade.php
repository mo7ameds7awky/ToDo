@extends('layouts.main')
@section('title', 'Update')
@section('content')
    <form action="{{route('task.save', ['id' => $task->id])}}" method="POST">
        @csrf
        <div class="form-group">
          <label for="ToDo">ToDo</label>
          <input type="text" class="form-control" id="ToDo" value="{{$task->todo}}" name="todo">
        </div>
        <div class="form-group">
          <label for="Progress">Progress</label>
          <input type="number" class="form-control" id="Progress" value="{{$task->progress}}" name="progress">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection