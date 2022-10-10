/* CSRF Token */
$(function () {
    console.log("inventory PO scripts loaded!");
    $.ajaxSetup({
        headers: {
            "X-CSRF-Token": $('meta[name="_token"]').attr("content"),
        },
    });
});

/* Create and Save Order */
$("#createOrder").click(function () {
    $("#saveBtn").val("create-order");
    $("#orderForm").trigger("reset");
    $("#OrderModal").html("Create Purchase Order");
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

/* Update and Save Order */
$("#saveBtn").click(function (e) {
    e.preventDefault();
    console.log("Purchase Order Saved!");
    $(this).html("Save");

    $.ajax({
        data: $("#orderForm").serialize(),
        url: "/ajax_orders",
        type: "POST",
        processData: true,
        dataType: "json",
        success: function (data) {
            console.log(data);
            $("#orderForm").trigger("reset");
            $("#order-modal").modal("hide");
            orderTable.draw();
        },
        error: function (data) {
            console.log("Error:", data);
            $("#saveBtn").html("Save Changes");
        },
    });
});