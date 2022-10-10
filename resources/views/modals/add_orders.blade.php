<meta name="_token" content="{{ csrf_token() }}">

<div class="modal fade bd-example-modal-lg" id="order-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
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

                    <div class="row">

                        <div class="col-sm-6 col-md-4">
                            <label>PO Number</label>
                            <input type="text" class="form-control" id="currency" name="_PONum"
                                placeholder="Enter Currency">
                        </div>
            

                        <div class="col-sm-6 col-md-4">
                            <label>Currency</label>
                            <input type="text" class="form-control" id="currency" name="_Currency"
                                placeholder="Enter Currency">
                        </div>
                    

                        <div class="col-sm-6 col-md-4">
                            <label>Requisition Item ID</label>                
                            <input type="text" class="form-control" id="ItemID" name="_ItemID"
                                placeholder="Enter Requisition Item ID">                    
                        </div>                        

                    </div>

                    <br/>

                    <div class="row">

                        <div class="col-sm-6 col-md-4">
                            <label>PO Date Created</label>
                            <input type="text" class="form-control" id="DateCreated" name="_DateCreated"
                                placeholder="Enter PO Date Created">    
                        </div>
    
                        <div class="col-sm-6 col-md-4">
                            <label>Plant</label>                          
                            <input type="text" class="form-control" id="plant" name="_Plant"
                                placeholder="Enter Plant">
                        </div>
    
                        <div class="col-sm-6 col-md-4">
                            <label>OPU</label>
                            <input type="text" class="form-control" id="opu" name="_OPU"
                                placeholder="Enter OPU">
                            
                        </div>
                        
                    </div>

                    <br/>

                    <div class="row">                      
                        <div class="col-sm-6 col-md-4">
                            <label>Vendor No</label>
                                <input type="text" class="form-control" id="VendorNo" name="_VendorNo"
                                    placeholder="Enter Vendor Number">
                        </div>
    
                    </div>

                    <br/>

                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="table-responsive">
                                <table class="table table-hover table-white" id="tableEstimate">
                                    <thead>
                                        <tr>
                                            <th class="col-md-6">Item Desc</th>
                                            <th style="width:100px;">Material</th>
                                            <th style="width:80px;">PO Quantity</th>
                                            <th style="width:80px;">Delivery Date</th>
                                            <th>Netprice</th>
                                            <th> </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><input class="form-control"style="min-width:150px" type="text" id="description" name="_ItemDesc"></td>
                                        <td><input class="form-control unit_price" style="width:100px" type="text" id="unit_cost" name="_IMMaterial"></td>
                                        <td><input class="form-control qty" style="width:80px" type="text" id="qty" name="_Qty"></td>
                                        <td><input class="form-control qty" style="width:80px" type="text" id="qty" name="_DeliveryDate"></td>
                                        <td><input class="form-control total" style="width:120px" type="text" id="amount" name="_NetPrice"></td>
                                        <td><a href="javascript:void(0)" class="text-success font-18" title="Add" id="addBtn"><i class="fa fa-plus"></i></a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
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
