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

/* Display Data */
let orderTable = $(".data-table").DataTable({
    processing: true,
    serverSide: true,
    order: [],
    ajax: {
        url: "/orders",
        type: "GET",
        datatype: "json",
    },
    columns: [
        { data: "Currency" },
        { data: "ItemDesc"},
        { data: "IMMaterial" },
        { data: "Plant" },
        { data: "Qty" },
        { data: "OPU" },
        { data: "NetPrice" },
        { data: "DeliveryDates"},
        { data: "VendorNo"},
        { data: "action", name: "action", orderable: false, searchable: false },
    ],
});

/* Fetch data on text fields when edit button is clicked */
$("body").on("click", ".editOrder", function () {
    console.log("Edit Order");
});