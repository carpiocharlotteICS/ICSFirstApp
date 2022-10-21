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
        { data: "PONum" },
        { data: "Currency" },
        { data: "ItemDesc"},
        { data: "IMMaterial", visible: false},
        { data: "Plant", visible: false},
        { data: "Qty" },
        { data: "OPU", visible: false  },
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

/* Fetch data on text fields when edit button is clicked */
$("body").on("click", ".editOrder", function () {
    var PONum = $(this).data("id");
    $.ajax({
        url: "/orders" + "/" + PONum + "/edit",
        method: "GET",
        success: function (data) {
            console.log(PONum)
            $("#OrderModal").html("Edit Order");
            $("#order-modal").modal("show");
            $("#POnum").val(PONum);
            $("#currency").val(data.Currency);
            $("#ItemID").val(data.RequsitionItemID);
            $("#DateCreated").val(data.PODateCreated);
            $("#plant").val(data.Plant);
            $("#opu").val(data.OPU);
            $("#VendorNo").val(data.VendorNo);
            $("#itemdesc").val(data.ItemDesc);
            $("#material").val(data.IMMaterial);
            $("#qty").val(data.Qty);
            $("#deldate").val(data.DeliveryDates);
            $("#netprice").val(data.NetPrice);
            $("#saveBtn").val("editOrder");
        },
    });
});

/* Add row */ 
$('#addRow').on('click', function(){
    addRow();
})

function addRow(){
    var tr = '<tr>' +
        '<td><input type="text" class="form-control" style="width:80px" id="ItemID" name="_ItemID" placeholder="Item ID"></td>' +
        '<td><input type="text" class="form-control"style="min-width:150px" id="itemdesc" name="_ItemDesc" placeholder="Item Description"></td>' +
        '<td><input type="text" class="form-control unit_price" style="width:100px" id="material" name="_IMMaterial" placeholder="IM Material"></td>' +
        '<td><input type="text" class="form-control qty" style="width:80px" id="qty" name="_Qty" placeholder="Qty"></td>' +
        '<td><input type="text" class="form-control qty" style="width:80px" id="deldate" name="_DeliveryDate" placeholder="Delivery"></td>' +
        '<td><input type="text" class="form-control total" style="width:120px" id="netprice" name="_NetPrice" placeholder="NetPrice"></td>' +
        '<td><a href="javascript:void(0)" class="text-failed remove font-18" title="Remove" id="remove"><i class="fa fa-minus"></i></a></td>' +
    '</tr>';
    $('.item').append(tr);
};

$('tbody').on('click', '.remove', function(){
    $(this).parent().parent().remove();
});