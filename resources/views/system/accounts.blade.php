@extends('layouts.master')

@section('title', 'Accounts')

@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">CDB Accounts</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <a href="javascript:void(0)" class="btn btn-primary mb-3" id="createAccount">Add CDB
                        Account</a>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="card-body">
    <table class="table table-bordered data-table">
        <thead>
            <tr>
                <th>AccountID</th>
                <th>AO Number</th>
                <th>Account Name</th>
                <th>Account Group</th>
                <th>Account Type</th>
                <th>Domain Account</th>
                <th>Email</th>
                <th>Valid To</th>
                <th>Nickname</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>

@include('modals.add_accounts')

{{-- Add Account Modal --}}
@endsection