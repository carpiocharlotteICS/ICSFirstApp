<meta name="_token" content="{{ csrf_token() }}">

<div class="modal fade" id="account-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="AccountModal">Add New Account</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action id="accountForm" name="accountForm" class="form-horizontal" method="POST">
                    <input type="hidden" name="AccountID" id="AccountID">
                    <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">

                    <div class="form-group">
                        <label for="name" class="col-sm-6">Account Name</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="AccountName" name="_AccountName"
                                placeholder="Enter Account Name">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-6">Account Group</label>
                        <div class="col-sm-12">
                            <select class="form-control account-group" style="width: 100% height: 50px;" id="account-group" name="AccountGroup">
                                <option value="0">Select Account Group</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-6">Account Type</label>
                        <div class="col-sm-12">
                            <select class="form-control account-type" style="width: 100% height: 50px;" id="account-type" name="AccountType">
                                <option value="0">Select Account Type</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-6">Domain Account</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="domain-account" name="_DomainAccount"
                                placeholder="Enter Domain Account">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-6">Email</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="email" name="_Email"
                                placeholder="Enter Email Address">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-6">ValidTo</label>
                        <div class="col-sm-12">
                            <input type="datetime-local" class="form-control" id="valid" name="_Valid" 
                                placeholder="Valid To" value="2030-01-01T00:00"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-6">Nickname</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="nickname" name="_Nickname"
                                placeholder="Enter Nickname">
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

<script src="{{ asset('/scripts/modules/system.js')}}"></script>
