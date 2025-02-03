@extends('layouts.app')

@section('content')
  <h1>Task List</h1>
  <a href="{{ route('tasks.create') }}" class="btn btn-primary">Create Task</a>

  <ul>
     @foreach($tasks as $task)
        <li class="mt-3">
            <a href="{{ route('tasks.show', $task->id) }}">{{ $task->title }}</a>
            ({{ $task->status }})

            <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary">Edit</a>
            <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </li>
      @endforeach
    </ul>
@endsection