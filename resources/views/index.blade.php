@extends('layouts.app')

@section('title', 'Task List')

@section('content')
    <div class="container">
        <h1>Welcome to Task Manager</h1>
        <p>This is the main content of the index page.</p>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
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
                            <th>Status</th> <!-- 增加 Status 列 -->
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
                                    <!-- 检查 is_completed 值并显示状态 -->
                                    @if($task->is_completed == 1)
                                        <span class="badge bg-success">Done</span>
                                    @else
                                        <span class="badge bg-warning">Pending</span>
                                    @endif
                                </td>
                                <td>
                                    @if($task->is_completed == 0)
                                        <a href="{{ route('doneTask', $task->id) }}" class="btn btn-success btn-sm">Mark as Completed</a>
                                    @endif
                                   <!-- Edit Task Button -->
                                    <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary btn-sm">Edit</a>

                                <!-- Delete Task Button -->
                                <form action="{{ route('tasks.delete', $task->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>

                                
                                
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection
