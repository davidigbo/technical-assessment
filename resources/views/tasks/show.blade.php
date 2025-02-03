@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Task Details</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $task->title }}</h5>
                <p class="card-text">{{ $task->description }}</p>
                <p class="card-text">
                    <strong>Status:</strong> 
                    @if($task->status == 0)
                        <span class="badge badge-warning">Pending</span>
                    @else
                        <span class="badge badge-success">Completed</span>
                    @endif
                </p>
                <p class="card-text">
                    <strong>Due Date:</strong> {{ $task->due_date }}
                </p>
                <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary">Edit Task</a>
                <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Back</a>
                <form action="{{ route('tasks.destroy', $task) }}" method="POST">
                    @csrf
                    @method('DELETE')
                   <button type="submit">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection
