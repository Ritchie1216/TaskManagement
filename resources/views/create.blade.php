@extends('layouts.app')

@section('title', 'Create Task')

@section('content')
    <div class="container">
        <form action="{{route('addTask')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Enter task title">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="Enter task description"></textarea>
            </div>

            <div class="form-group">
                <label for="due_date">Due Date</label>
                <input type="date" name="due_date" id="due_date" min="{{date('Y-m-d')}}" class="form-control" placeholder="Enter task title">
            </div>

            <br>
            <button type="submit" class="btn btn-primary">Create Task</button>
        </form>
    </div>
@endsection
