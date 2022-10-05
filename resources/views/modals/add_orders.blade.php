<meta name="_token" content="{{ csrf_token() }}">

<div class="modal fade" id="order-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="OrderModal">Add New Order</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="orderForm" name="orderForm" class="form-horizontal" method="POST">
                    <input type="hidden" name="OrderID" id="OrderID">
                    <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">

                    <div class="form-group">
                        <label class="col-sm-6">Currency</label>
                        <div class="col-sm-12">
                            <select class="form-control currency" style="width: 100% height: 50px;" id="currency" name="_currency">
                                <option value="0">Select Currency</option>
                                <option value="PHP">PHP</option>
                                <option value="USD">USD</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-6">Requisition Item ID</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="ItemID" name="_ItemID"
                                placeholder="Enter Requisition Item ID">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-6">PO Date Created</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="DateCreated" name="_DateCreated"
                                placeholder="Enter PO Date Created">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-6">Item Description</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="ItemDesc" name="_ItemDesc"
                                placeholder="Enter Item Description">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-6">IM Material</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="IMMaterial" name="_IMMaterial"
                                placeholder="Enter Email Address">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-6">Plant</label>
                        <div class="col-sm-12">
                            <select class="form-control plant" style="width: 100% height: 50px;" id="plant" name="_plant">
                                <option value="0">Select Plant</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-6">Quantity</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="quantity" name="_quantity"
                                placeholder="Enter Quantity">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-6">OPU</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="opu" name="_opu"
                                placeholder="Enter OPU">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-6">Net Price</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="netprice" name="_netprice"
                                placeholder="Enter Net Price">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-6">Delivery Dates</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="deldate" name="_deldate"
                                placeholder="Enter Delivery Date">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-6">Vendor No</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="VendorNo" name="_VendorNo"
                                placeholder="Enter Vendor Number">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Save</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- admin_lte scripts -->
@include('partials.scripts')

<script src="{{ asset('/scripts/modules/inventory.js')}}"></script>
