@extends('layouts.master')

@section('title', 'Inventory - PO')

@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Purchase Orders</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <a href="javascript:void(0)" class="btn btn-primary mb-3" id="createOrder">Add Purchase Order</a>
                </ol>
            </div>
        </div>
    </div>
</div>  
<div class="card-body">
    <table class="table table-bordered table-hover dt-responsive display nowrap data-table" width="100%">
        <thead>
            <tr>
                <th>PO Number</th>
                <th>Currency</th>
                <th>ItemDesc</th>
                <th>IM Material</th>
                <th>Plant</th>
                <th>Qty</th>
                <th>OPU</th>
                <th>NetPrice</th>
                <th>DeliveryDates</th>
                <th>VendorNo</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>

{{-- Add Order Modal --}}
@include('modals.add_orders')

@endsection