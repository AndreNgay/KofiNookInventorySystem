@extends('layouts.layout')
@include('modals.unit.deleteUnitModal')
@include('modals.unit.updateUnitModal')
@section('content')
<div class="container mt-4 ps-0 pe-0">
    <div class="row mb-3">
        <div class="col-md-2">
            <h3 class="">Units Table</h3>
        </div>
        <div class="col-md-8">
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                    id="searchInventory">
                <button type="button" class="btn btn-primary" disabled>
                    <i class="bi bi-search"></i>
                </button>
            </form>
        </div>

        <div class="col-md-2">
            <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal"
                data-bs-target="#newProductModal">
                Add Unit
            </button>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Unit Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach ($units as $unit)
                    <tr>
                        <th scope="row">{{ $unit->id }}</th>
                        <td>{{ $unit->unit_name }}</td>
                        <td>{{ $unit->description }}</td>

                        <td>
                            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                data-bs-target="#updateUnitModal">
                                <span class="bi bi-pencil-square"></span> Update
                            </button>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#deleteUnitModal"><span class="bi bi-trash3-fill"></span>
                                Delete
                            </button>
                        </td>
                    <tr>
                        @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>
@endsection