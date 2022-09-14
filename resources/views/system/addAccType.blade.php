@extends('layouts.master')

@section('title', 'Accounts')

@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Add New Account Type</h1>
            </div>
        </div>
    </div>
</div>

<form>
    <meta name="_token" content="{{ csrf_token() }}">
    <input type="hidden" name="id" id="id">
    <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
    <div class="card-body">
        <div class="form-group">
            <label for="accountType">Account Type</label>
            <input type="text" class="form-control" id="newAccType" name="newAccType" placeholder="Enter Account Type">
        </div>
    </div>

    <div class="card-footer">
        <button id="saveAcctType" class="btn btn-primary">Submit</button>
    </div>
</form>

<!-- admin_lte scripts -->
@include('partials.scripts')

<script src="{{ asset('/scripts/modules/system.js')}}"></script>

@endsection