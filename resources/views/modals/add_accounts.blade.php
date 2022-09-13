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
                <form id="accountForm" name="accountForm" class="form-horizontal" method="POST">
                    <input type="hidden" name="AccountID" id="AccountID">
                    <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">

                    <div class="form-group">
                        <label for="name" class="col-sm-6">Account Name</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="AccountName" name="_AccountName"
                                placeholder="Enter Account Name" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-6">Account Group</label>
                        <div class="col-sm-12">
                            <select class="form-control account-group" style="width: 100% height: 50px;" id="account-group" name="AccountGroup">
                                <option value="0">Select Account Group</option>
                                {{-- <option disabled="" selected="">Select Account Group</option> --}}
                                {{-- <option value="AO">AO</option>
                                <option value="BU1">BU1</option>
                                <option value="BU2">BU2</option>
                                <option value="BU5">BU5</option>
                                <option value="BU6">BU6</option>
                                <option value="BU7">BU7</option>
                                <option value="BU8">BU8</option>
                                <option value="BU9">BU9</option>
                                <option value="BU10">BU10</option>
                                <option value="BU11">BU11</option>
                                <option value="BU12">BU12</option>
                                <option value="BU15">BU15</option>
                                <option value="BU16">BU16</option>
                                <option value="BU18">BU18</option>
                                <option value="CAC">CAC</option>
                                <option value="CAC-ENDUSER1">CAC-ENDUSER1</option>
                                <option value="CAC-ENDUSER2">CAC-ENDUSER2</option>
                                <option value="CB01">CB01</option>
                                <option value="CB10">CB10</option>
                                <option value="CB12">CB12</option>
                                <option value="CE01">CE01</option>
                                <option value="CSD">CSD</option>
                                <option value="CSD-CEBU">CSD-CEBU</option>
                                <option value="CSD-ESS">CSD-ESS</option>
                                <option value="CSD-HO">CSD-HO</option>
                                <option value="CSD-MAKATI">CSD-MAKATI</option>
                                <option value="CSD-PASIG">CSD-PASIG</option>
                                <option value="ESD">ESD</option>
                                <option value="ESG">ESG</option>
                                <option value="GENERIC">GENERIC</option>
                                <option value="GSD">GSD</option>
                                <option value="HR">HR</option>
                                <option value="ICT">ICT</option>
                                <option value="IT">IT</option>
                                <option value="JV">JV</option>
                                <option value="LQ">LQ</option>
                                <option value="MARCOMM">MARCOMM</option>
                                <option value="PM">PM</option>
                                <option value="PMD">PMD</option>
                                <option value="SALES">SALES</option>
                                <option value="TCD">TCD</option>
                                <option value="WAREHOUSE">WAREHOUSE</option> --}}
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-6">Account Type</label>
                        <div class="col-sm-12">
                            <select class="form-control account-type" style="width: 100% height: 50px;" id="account-type" name="AccountType">
                                <option value="0">Select Account Type</option>
                                {{-- <option disabled="" selected="">Select Account Type</option>
                                <option value="AO">AO</option>
                                <option value="GROUP">GROUP</option>
                                <option value="GUEST">GUEST</option>
                                <option value="LQ">LQ</option>
                                <option value="MARCOMM">MARCOMM</option>
                                <option value="PM">PM</option>
                                <option value="SUPPORT">SUPPORT</option>
                                <option value="TEST">TEST</option>
                                <option value="USER">USER</option> --}}
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

                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Save</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- admin_lte scripts -->
@include('partials.scripts')

<script src="{{ asset('/scripts/modules/system.js')}}"></script>
