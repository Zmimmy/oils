<!-- Stored in resources/views/oils-list.blade.php -->

@extends('layouts.oils-master')


@section('addoil')

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">

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