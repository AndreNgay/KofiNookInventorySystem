@extends('layouts.layout')
@include('modals.type.deleteTypeModal')
@include('modals.type.updateTypeModal')
@include('modals.type.addTypeModal')
@section('content')
<div class="container mt-4 ps-0 pe-0">
    <div class="row mb-3">
        <div class="col-md-2">
            <h3 class="">Type Table</h3>
        </div>
        <div class="col-md-8">
            <form action="{{ route('type.index') }}" method="GET" class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search by item name"
                id="query" name="query">
                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-search"></i>
                </button>
            </form>
        </div>
        <div class="col-md-2">

            <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#addTypeModal">
                <span class="bi bi-plus-square-fill"></span> New Type
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
                            <th scope="col">Type Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach ($types as $type)
                        <tr>
                            <th scope="row">{{ $type->id }}</th>
                            <td>{{ $type->type_name }}</td>
                            <td>{{ $type->description }}</td>

                            <td>
                                <div class="d-flex">
                                    <button type="button" class="btn btn-success ms-2" data-bs-toggle="modal"
                                        data-bs-target="#updateTypeModal{{ $type->id }}">
                                        <span class="bi bi-pencil-square"></span> Update
                                    </button>
                                    <button type="button" class="btn btn-danger ms-2" data-bs-toggle="modal"
                                        data-bs-target="#deleteTypeModal{{ $type->id }}"><span class="bi bi-trash3-fill"></span>
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