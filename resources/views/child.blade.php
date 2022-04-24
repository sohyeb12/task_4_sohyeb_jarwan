@extends('layouts.app')
@section('content')
    <div class="col-sm-offset-2 col-sm-8">
        <div class="panel panel-default">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Update Task
                </div>

                <div class="panel-body">
                    @if (@isset($task))
                        <form action="{{ url('update/' . $task->id) }}" method="POST" class="form-horizontal">
                            @csrf
                            <!-- Task Name -->
                            <div class="form-group">
                                <label for="task-name" class="col-sm-3 control-label">Task</label>

                                <div class="col-sm-6">
                                    <input type="text" name="name" id="task-name" class="form-control">

                                </div>
                            </div>

                            <!-- Add Task Button -->
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-6">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fa fa-btn fa-plus"></i>Edit Task
                                    </button>
                                </div>
                            </div>
                        </form>
                    @endif
                </div>
            </div>


            <!-- Current Tasks -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    Current Tasks
                </div>

                <div class="panel-body">
                    <table class="table table-striped task-table">
                        <thead>
                            <th>Task</th>
                            <th>delete</th>
                            <th>Edite</th>
                            <th>&nbsp;</th>
                        </thead>
                        <tbody>
                            @if (@isset($tasks))
                                @foreach ($tasks as $task)
                                    <tr>
                                        <td class="table-text">
                                            <div>{{ $task->name }}</div>
                                            <div>{{ $task->description }}</div>
                                        </td>

                                        <!-- Task Delete Button -->
                                        <td>
                                            <form action="{{ url('delete/' . $task->id) }}" method="POST">
                                                @csrf

                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fa fa-btn fa-trash"></i>Delete
                                                </button>
                                            </form>
                                        </td>

                                        <!-- Task Edite Button -->
                                        <td>
                                            <form action="{{ url('edit/' . $task->id) }}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-success">
                                                    <i class="fa fa-btn fa-info"></i>Edite
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    </form>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        @endsection
