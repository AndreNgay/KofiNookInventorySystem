@extends('layouts.layout')
@include('modals.account.deleteAccountModal')
@include('modals.account.updateAccountModal')
@include('modals.account.addAccountModal')
@section('content')
<div class="container mt-4 ps-0 pe-0">
    <div class="row mb-3">
        <div class="col-md-2">
            <h3 class="">Accounts Table</h3>
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
            <form action="{{ route('account.store') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-primary w-100">
                    <span class="bi bi-plus-square-fill"></span> Generate Account
                </button>
            </form>
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
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Username</th>
                            <th scope="col">Role</th>
                            <th scope="col">Address</th>
                            <th scope="col">Contact Number</th>
                            <th scope="col">Emergency Number</th>
                            <th scope="col">Email Address</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{ $user->id }}</th>
                            <td>{{ $user->first_name }}</td>
                            <td>{{ $user->last_name }}</td>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->role }}</td>
                            <td>{{ $user->address }}</td>
                            <td>{{ $user->contact_number }}</td>
                            <td>{{ $user->emergency_number }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <div class="d-flex">
                                    <button type="button" class="btn btn-success ms-2" data-bs-toggle="modal"
                                        data-bs-target="#updateAccountModal">
                                        <span class="bi bi-pencil-square"></span> Update
                                    </button>
                                    <button type="button" class="btn btn-danger ms-2" data-bs-toggle="modal"
                                        data-bs-target="#deleteAccountModal"><span class="bi bi-trash3-fill"></span>
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