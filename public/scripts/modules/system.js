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
            $("#account-group").val(data.AccountGroup);
            $("#account-type").val(data.AccountType);
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

/* Select2 */ 
$("#account-group").select2({
    placeholder: 'Select Account Group',
    dropdownParent: $("#account-modal"),
    tags: true,
});
