@extends('layouts.app')

@section('title', 'Task List')

@section('content')
    <div class="container">
        <h1>Welcome to Task Manager</h1>
        <p>This is the main content of the index page.</p>

            @if(session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
            @endif
            
        <div class="container">
            <h2>Task List</h2>
            @if($tasks->isEmpty())
                <p>No tasks available.</p>
            @else
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Due Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tasks as $task)
                            <tr>
                                <td>{{ $task->id }}</td>
                                <td>{{ $task->title }}</td>
                                <td>{{ $task->description }}</td>
                                <td>{{ $task->due_date }}</td>
                                <td>
                                    <!-- Example action buttons (edit, delete) -->
                                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection
