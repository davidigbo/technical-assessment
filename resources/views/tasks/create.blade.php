@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Task</h1>
        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Title</label>
                <input type="text" class="form-control" id="name" name="title" required placeholder="Enter task title">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter task description"></textarea>
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control" id="status" name="status">
                    <option value="0">Pending</option>
                    <option value="1">Completed</option>
                </select>
            </div>

            <div class="form-group">
                <label for="due_date">Due Date</label>
                <input type="date" class="form-control" id="due_date" name="due_date">
            </div>

            <button type="submit" class="btn btn-primary">Create Task</button>
        </form>
    </div>
@endsection 
