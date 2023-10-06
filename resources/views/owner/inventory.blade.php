@extends('layouts.layout')

@section('content')
@include('modals.item.deleteItemModal')
@include('modals.item.updateItemModal')
@include('modals.item.updateStockModal')
@include('modals.item.viewItemHistoryModal')
@include('modals.item.addItemModal')
@include('modals.item.deleteItemModal')

<div class="container mt-4 ps-0 pe-0">
    <div class="row mb-3">
        <div class="col-md-2">
            <h3 class="">Inventory Table</h3>
        </div>
        <div class="col-md-6 mb-2">
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                    id="searchInventory">
                <button type="button" class="btn btn-primary" disabled>
                    <i class="bi bi-search"></i>
                </button>
            </form>
        </div>

        <div class="col-md-2 mb-2">
            <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#addItemModal">
                <span class="bi bi-plus-square-fill"></span> New Item
            </button>
        </div>

        <div class="col-md-2">
            <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#restockModal">
                <span class="bi bi-printer-fill"></span> Print Reminders
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
                            <th scope="col">Item Name</th>
                            <th scope="col">Image</th>
                            <th scope="col">Description</th>
                            <th scope="col">Stock</th>
                            <th scope="col">Required Stock</th>
                            <th scope="col">Unit</th>
                            <th scope="col">Cost</th>
                            <th scope="col">Category</th>
                            <th scope="col">Type</th>
                            <th scope="col">Reminder</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach ($items as $item)
                        <tr>
                            <th scope="row">{{ $item->id }}</th>
                            <td>{{ $item->item_name }}</td>
                            <td><img class="img-fluid w-100" src="{{ asset('storage/' . $item->image) }}" alt="Image">
                            </td>
                            <td>{{ $item->description }}</td>
                            <td>{{ $item->stock}}</td>
                            <td>{{ $item->required_stock }}</td>
                            <td>{{ $item->unit->unit_name }}</td>
                            <td>{{ $item->cost }}</td>
                            <td>{{ $item->category->category_name }}</td>
                            <td>{{ $item->type }}</td>
                            @if($item->stock <= 5 && $item->stock >= 0)
                                <td class="text-danger fw-bold">Restock Today</td>
                                @elseif($item->stock <= 15 && $item->stock >=6)
                                    <td class="text-danger fw-bold">Restock in 2 days</td>
                                    @else
                                    <td class="text-danger fw-bold">Wag na mag Restock</td>
                                    @endif

                                    <td>
                                        <div class="d-flex">
                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                data-bs-target="#updateStockModal{{ $item->id }}">
                                                <span class="bi bi-plus-slash-minus"></span> Stock
                                            </button>
                                            <button type="button" class="btn btn-success ms-2" data-bs-toggle="modal"
                                                data-bs-target="#updateItemModal{{ $item->id }}">
                                                <span class="bi bi-pencil-square"></span> Update
                                            </button>
                                            <button type="button" class="btn btn-info ms-2" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                <span class="bi bi-clock-history"></span> History
                                            </button>
                                            <button type="button" class="btn btn-danger ms-2" data-bs-toggle="modal"
                                                data-bs-target="#deleteItemModal{{ $item->id }}">
                                                <span class="bi bi-trash3-fill"></span> Delete
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