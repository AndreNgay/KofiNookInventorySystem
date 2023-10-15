@extends('layouts.layout')
@include('components.modals.account.deleteAccountModal')
@include('components.modals.account.updateAccountModal')
@include('components.modals.account.addAccountModal')
@section('content')
<div class="container mt-4 ps-0 pe-0">
    <div class="row mb-3">
        <div class="col-md-2">
            <h3 class="">Accounts Table</h3>
        </div>
        <div class="col-md-8">
            <form class="d-flex" role="search">
                <input action="{{ route('account.index') }}" method="GET" class="form-control me-2" type="search"
                    placeholder="Search by firstname or lastname" aria-label="Search" id="query" name="query">
                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-search"></i>
                </button>
            </form>
        </div>

        <div class="col-md-2">
            <button type="button" data-bs-toggle="modal" data-bs-target="#addAccountModal"
                class="btn btn-primary w-100">
                <span class="bi bi-plus-lg"></span> Generate Account
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
            @include('components.tables.accountsTable')

            <div class="d-flex justify-content-center">
                {{ $users->links("pagination::bootstrap-4") }}
            </div>
            <div class="d-flex justify-content-center mt-3">
                Showing {{ $users->firstItem() }} to {{ $users->lastItem() }} of {{ $users->total() }} results
            </div>
        </div>
    </div>
</div>
@endsection