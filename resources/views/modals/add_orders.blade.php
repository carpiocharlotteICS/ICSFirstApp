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
                    <input type="hidden" name="PONum" id="PONum">
                    <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">

                    <div class="row">

                        <div class="col-sm-6 col-md-4">
                            <label>PO Number</label>
                            <input type="text" class="form-control" id="POnum" name="_PONum"
                                placeholder="Enter PO Number">
                        </div>
            

                        <div class="col-sm-6 col-md-4">
                            <label>Currency</label>
                            <input type="text" class="form-control" id="currency" name="_Currency"
                                placeholder="Enter Currency">
                        </div>  
                        
                        <div class="col-sm-6 col-md-4">
                            <label>PO Date Created</label>
                            <input type="text" class="form-control" id="DateCreated" name="_DateCreated"
                                placeholder="Enter PO Date Created">    
                        </div>

                    </div>

                    <br/>

                    <div class="row">

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
                                            <th style="width:80px;">Item ID</th>
                                            <th class="col-md-6">Item Desc</th>
                                            <th style="width:100px;">Material</th>
                                            <th style="width:80px;">PO Quantity</th>
                                            <th style="width:80px;">Delivery Date</th>
                                            <th>Netprice</th>
                                            <th> </th>                                            
                                        </tr>
                                    </thead>
                                    <tbody class="item">
                                    <tr>
                                        <td><input type="text" class="form-control" style="width:80px" id="ItemID" name="item_id[]" placeholder="Item ID">  
                                        <td><input type="text" class="form-control"style="min-width:150px" id="itemdesc" name="itemdesc[]" placeholder="Item Description"></td>
                                        <td><input type="text" class="form-control unit_price" style="width:100px" id="material" name="material[]" placeholder="IM Material"></td>
                                        <td><input type="text" class="form-control qty" style="width:80px" id="qty" name="qty[]" placeholder="Qty"></td>
                                        <td><input type="text" class="form-control qty" style="width:80px" id="deldate" name="_DeliveryDate" placeholder="Delivery"></td>
                                        <td><input type="text" class="form-control total" style="width:120px" id="netprice" name="_NetPrice" placeholder="NetPrice"></td>
                                        <td><a href="javascript:void(0)" class="text-success font-18" title="Add" id="addRow"><i class="fa fa-plus"></i></a></td>
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
