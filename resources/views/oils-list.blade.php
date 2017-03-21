<!-- Stored in resources/views/oils-list.blade.php -->

@extends('layouts.oils-master')


@section('addoil')

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')

        <!-- New Task Form -->
        <form action="/oils/add" method="POST" class="form-control">
            {{ csrf_field() }}

            <!-- Task Name -->
            <div class="form-group">
                <label for="oil-name">Name</label>
                <input type="text" name="name" id="oil-name" class="form-control">
            </div>
            <div class="form-group">
                <label for="oil-description">Description</label>
                <textarea name="description" id="oil-description" class="form-control"></textarea>
            </div>

            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add Oil
                    </button>
                </div>
            </div>
        </form>
    </div>


@endsection

@section('oillist')

    @if (count($oils) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Oil List
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">

                    <!-- Table Headings -->
                    <thead>
                    <th>Oil</th>
                    <th>Description</th>
                    <th>Options</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                    @foreach ($oils as $oil)
                        <tr>
                            <!-- Task Name -->
                            <td class="table-text">
                                <div>{{ $oil->name }}</div>
                            </td>

                            <td class="table-text">
                                <div>{{ $oil->description }}</div>
                            </td>
                            <td>
                                <!-- TODO: Delete Button -->
                                <form action="/oils/{{ $oil->id }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <button><i class="fa fa-trash" aria-hidden="true"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection