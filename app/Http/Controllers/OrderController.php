<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Yajra\Datatables\Datatables;
use Illuminate\Http\Request;
use Response;
use DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $_orders = Order::latest()->get();

        if ($request->ajax()) {
            $data = Order::latest()->get();
            return Datatables::of($data)
                ->addColumn('action', function ($row) {

                    $btn = '<a href="javascript:void(0)" data-toggle="tooltip" data-id="' . $row->AccountID . '" data-original-title="Edit" class="edit btn btn-primary btn-sm editOrder"><i class="fa fa-edit"></i></a>';
                    $btn = $btn . '<a href="javascript:void(0)"  class="btn btn-danger btn-sm deleteAccount"><i class="fa fa-trash"></i></a>';

                    return $btn;
                })
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }

        return view('inventory.orders', compact('_orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Eloquent Method
        // $orders = Order::updateOrCreate(
        //     [
        //         'PONum' => $request->_PONum,
        //         'Currency' => $request->_Currency,
        //         'RequsitionItemID' => $request->_ItemID,
        //         'PODateCreated' => $request->_DateCreated,
        //         'Plant' => $request->_Plant,
        //         'opu' => $request->_OPU,
        //
        //         'ItemDesc' => $request->_ItemDesc,
        //         'IMMaterial' => $request->_IMMaterial, 
        //         'Qty' => $request->_Qty,
        //         'DeliveryDates' => $request->_DeliveryDate,
        //         'VendorNo' => $request->_VendorNo,
        //         'NetPrice' => $request->_NetPrice
        //     ]
        // );

        // Query Builder (Single insert)
        // \DB::table('BackupSAP_LM2')->insert([
        //     'PONum' => $request->input('_PONum'),
        //     'Currency' => $request->input('_Currency'),
        //     'RequsitionItemID' => $request->input('_ItemID'),
        //     'PODateCreated' => $request->input('_DateCreated'),
        //     'opu' => $request->input('_OPU'), 
        //     'VendorNo' => $request->input('_VendorNo'),
        //     'ItemDesc' => $request->input('_ItemDesc'), 
        //     'IMMaterial' => $request->input('_IMMaterial'),
        //     'Qty' => $request->input('_Qty'),
        //     'DeliveryDates' => $request->input('_DeliveryDate'),
        //     'VendorNo' => $request->input('_VendorNo'),
        //     'NetPrice' => $request->input('_NetPrice')
        // ]);
        // return response()->json(
        //     [
        //         'success' => true,
        //         'message' => 'Purchase Order inserted successfully'
        //     ]
        // );
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($PONum)
    {
        // $where = array('PONum' => $PONum);
        // $order = Order::where($where)->first();

        // return Response::json($order);


        // \DB::table('BackupSAP_LM2')
        //     ->where('PONum', $PONum)
        //     ->update([
        //         'PONum' => $request->input('_PONum'),
        //         'Currency' => $request->input('_Currency'),
        //         'RequsitionItemID' => $requst->input('_ItemID'),
        //         'PODateCreated' => $request->input('_DateCreated'),
        //         'opu' => $request->input('_Opu'),
        //         'VendorNo' => $request->('_VendorNo')
        //         'ItemDesc' => $request->
        //         'IMMaterial' => $re
        //         'Qty' => 
        //         'DeliveryDates' => 
        //         'VendorNo' =>
        //         'NetPrice' => 
        //     ]);

        //     return response()->json(
        //         [

        //             'success' => true,
        //             'message' => 'Purchase Order updated successfully'
        //         ]
        //     );





        }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
