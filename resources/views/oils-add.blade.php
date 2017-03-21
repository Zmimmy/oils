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
                <label for="oil-name">Oil Name</label>
                <input type="text" name="name" id="oil-name" class="form-control">
            </div>
            <div class="form-group">
                <label for="oil-description">Description</label>
                <textarea name="description" id="oil-description" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="oil-cautions">Cautions</label>
                <textarea name="cautions" id="oil-cautions" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="oil-use_diffusion">Use Diffusion</label>
                <textarea name="use_diffusion" id="oil-use_diffusion" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="oil-use_topical">Use Topical</label>
                <textarea name="use_topical" id="oil-use_topical" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="oil-use_internal">Use Internal</label>
                <textarea name="use_internal" id="oil-use_internal" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="oil-aromatic_description">Aromatic Description</label>
                <input type="text" name="aromatic_description" id="oil-aromatic_description" class="form-control">
            </div>
            <div class="form-group">
                <label for="oil-collection_method">Collection Method</label>
                <input type="text" name="collection_method" id="oil-collection_method" class="form-control">
            </div>
            <div class="form-group">
                <label for="oil-plant_part">Plant Part</label>
                <input type="text" name="plant_part" id="oil-plant_part" class="form-control">
            </div>
            <div class="form-group">
                <label for="oil-constituents">Constituents</label>
                <input type="text" name="constituents" id="oil-constituents" class="form-control">
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