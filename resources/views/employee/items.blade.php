@extends('layouts.layout')

@section('content')
@include('modals.item.updateStockModal')
<div class="container mt-4 ps-0 pe-0">
    <div class="row mb-3">
        <div class="col-md-6">
            <h3 class="">Inventory Table</h3>
        </div>
        <div class="col-md-6">
        <form action="{{ route('item.index') }}" method="GET" class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search by item name" aria-label="Search"
                id="query" name="query">
                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-search"></i>
                </button>
            </form>
        </div>
    </div>

    <div class="row">
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
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Item Name</th>
                        <th scope="col">Image</th>
                        <th scope="col">Description</th>
                        <th scope="col">Cost</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Unit</th>
                        <th scope="col">Category</th>
                        <th scope="col">Type</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach ($items as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->item_name }}</td>
                        <td><img src="{{ $item->image }}" alt=""></td>
                        <td>{{ $item->description }}</td>
                        <td>{{ $item->cost }}</td>
                        <td>{{ $item->stock }}</td>
                        <td>{{ $item->unit->unit_name }}</td>
                        <td>{{ $item->category->category_name }}</td>
                        <td>{{ $item->type->type_name }}</td>
                        <td>
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                data-bs-target="#updateStockModal{{ $item->id }}">
                                                <span class="bi bi-plus-slash-minus"></span> Stock
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