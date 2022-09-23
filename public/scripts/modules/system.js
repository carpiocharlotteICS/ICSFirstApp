/* CSRF Token */
$(function () {
    console.log("account management scripts loaded!");
    $.ajaxSetup({
        headers: {
            "X-CSRF-Token": $('meta[name="_token"]').attr("content"),
        },
    });
});

/* Display Data */
let accountTable = $(".data-table").DataTable({
    responsive: true,
    processing: true,
    serverSide: true,
    order: [],
    ajax: {
        url: "/accounts",
        type: "GET",
        datatype: "json",
    },
    columns: [
        { data: "AccountID" },
        { data: "AONumber", visible: false },
        { data: "AccountName" },
        { data: "AccountGroup" },
        { data: "AccountType" },
        { data: "DomainAccount" },
        { data: "Email" },
        { data: "ValidTo", visible: false },
        { data: "NickName", visible: false },
        { data: "action", name: "action", orderable: false, searchable: false },
    ],
});

/* Create and Save Account */
$("#createAccount").click(function () {
    $("#saveBtn").val("create-account");
    $("#accountForm").trigger("reset");
    $("#AccountModal").html("Add Account");
    $("#account-modal").modal("show");
});

/* Fetch data on text fields when edit button is clicked */
$("body").on("click", ".editAccount", function () {
    var AccountID = $(this).data("id");
    $.ajax({
        url: "/accounts" + "/" + AccountID + "/edit",
        method: "GET",
        success: function (data) {
            console.log(AccountID);
            $("#AccountModal").html("Edit Account");
            $("#account-modal").modal("show");
            $("#AccountID").val(AccountID);
            $("#AccountName").val(data.AccountName);
            $("#account-group").html(
                '<option value = "' +
                    data.AccountGroup +
                    '" selected>' +
                    data.AccountGroup +
                    "</option>"
            );
            $("#account-type").html(
                '<option value = "' +
                    data.AccountType +
                    '" selected>' +
                    data.AccountType +
                    "</option>"
            );
            $("#domain-account").val(data.DomainAccount);
            $("#email").val(data.Email);
            $("#valid").val(data.ValidTo);
            $("#nickname").val(data.NickName);
            $("#saveBtn").val("editAccount");
        },
    });
});

/* Update and Save Account */
$("#saveBtn").click(function (e) {
    e.preventDefault();
    console.log("Account Saved!");
    $(this).html("Save");

    $.ajax({
        data: $("#accountForm").serialize(),
        url: "/ajax_accounts",
        type: "POST",
        processData: true,
        dataType: "json",
        success: function (data) {
            console.log(data);
            $("#accountForm").trigger("reset");
            $("#account-modal").modal("hide");
            accountTable.draw();
        },
        error: function (data) {
            console.log("Error:", data);
            $("#saveBtn").html("Save Changes");
        },
    });
});

/* Select2 - Account Group */
$("#account-group").select2({
    dropdownParent: $("#account-modal"),
    tags: true,
    ajax: {
        url: "/getGroup",
        headers: {
            "X-CSRF-Token": $('meta[name="_token"]').attr("content"),
        },
        type: "POST",
        dataType: "json",
        delay: 250,
        data: function (params) {
            return {
                search: params.AccountGroup,
            };
        },
        processResults: function (response) {
            return {
                results: response,
            };
        },
        cache: true,
    },
});

/* Select2 - Account Type */
$("#account-type").select2({
    dropdownParent: $("#account-modal"),
    tags: true,
    ajax: {
        url: "/getType",
        headers: {
            "X-CSRF-Token": $('meta[name="_token"]').attr("content"),
        },
        type: "POST",
        dataType: "json",
        delay: 250,
        data: function (params) {
            return {
                search: params.AccountType,
            };
        },
        processResults: function (response) {
            return {
                results: response,
            };
        },
        cache: true,
    },
});

/* Save New Account Group */
$("#saveAcctGrp").click(function (e) {
    e.preventDefault();
    let newAccGrp = $('#newAccGrp').val();

    $.ajax({
        url: "/storeNewGroup",
        type: "POST",
        headers: {
            "X-CSRF-Token": $('meta[name="_token"]').attr("content"),
        },
        data: {
            newAccGrp: newAccGrp,
        },
        dataType: 'json',
        success: function (data) {
            console.log("New Account Group Saved!")
            console.log(newAccGrp);
            swal({
                title: "New Account Group Saved!",
                text: "Redirecting to CDB Accounts page...",
                type: "success",
                timer: 2000,
                showConfirmButton: false
              }, function(){
                    window.location.href = "/accounts";
              });
        },
        error: function (data) {
            console.log('Error......');
        }
    })
})

/* Save New Account Type */
$("#saveAcctType").click(function (e) {
    e.preventDefault();
    let newAccType = $('#newAccType').val();

    $.ajax({
        url: "/storeNewType",
        type: "POST",
        headers: {
            "X-CSRF-Token": $('meta[name="_token"]').attr("content"),
        },
        data: {
            newAccType: newAccType,
        },
        dataType: 'json',
        success: function (data) {
            console.log("New Account Type Saved!")
            console.log(newAccType);
            swal({
                title: "New Account Type Saved!",
                text: "Redirecting to CDB Accounts page...",
                type: "success",
                timer: 2000,
                showConfirmButton: false
              }, function(){
                    window.location.href = "/accounts";
              });
        },
        error: function (data) {
            console.log('Error......');
        }
    })
});