@extends('layouts.layout')
@include('modals.unit.deleteUnitModal')
@include('modals.unit.updateUnitModal')
@include('modals.unit.addUnitModal')
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
            <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#addUnitModal">
                <span class="bi bi-plus-square-fill"></span> New Unit
            </button>
        </div>
    </div>

    <div class="row">
        <div class="container">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
    </div>

    <div class="row">
        <div class="container">
            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
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
                                <div class="d-flex">
                                    <button type="button" class="btn btn-success ms-2" data-bs-toggle="modal"
                                        data-bs-target="#updateUnitModal{{ $unit->id }}">
                                        <span class="bi bi-pencil-square"></span> Update
                                    </button>
                                    <button type="button" class="btn btn-danger ms-2" data-bs-toggle="modal"
                                        data-bs-target="#deleteUnitModal{{ $unit->id }}"><span class="bi bi-trash3-fill"></span>
                                        Delete
                                    </button>
                                </div>

                            </td>
                        <tr>
                            @endforeach
                    </tbody>
                </table>
            </div>

        </div>

    </div>
</div>
@endsection