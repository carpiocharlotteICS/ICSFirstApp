/* CSRF Token */
$(function () {
    console.log("inventory PO scripts loaded!");
    $.ajaxSetup({
        headers: {
            "X-CSRF-Token": $('meta[name="_token"]').attr("content"),
        },
    });
});

/* Create and Save Account */
$("#createOrder").click(function () {
    $("#OrderModal").html("Add Account");
    $("#order-modal").modal("show");
});