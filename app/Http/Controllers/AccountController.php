<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Response;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $_accounts = Account::latest()->get();

        if ($request->ajax()) {
            $data = Account::latest()->get();
            return Datatables::of($data)
                ->addColumn('action', function ($row) {

                    $btn = '<a href="javascript:void(0)" data-toggle="tooltip" data-id="' . $row->AccountID . '" data-original-title="Edit" class="edit btn btn-primary btn-sm editAccount"><i class="fa fa-edit"></i></a>';
                    $btn = $btn . '<a href="javascript:void(0)"  class="btn btn-danger btn-sm deleteAccount"><i class="fa fa-trash"></i></a>';

                    return $btn;
                })
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }

        return view('system.accounts', compact('_accounts'));
    }

    public function addAccGroup(){
        return view("system.addAccGroup");
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
        $accounts = Account::updateOrCreate(['AccountID' => $request->AccountID], 
        [
            'AccountName' => $request->_AccountName,
            'AccountGroup' => $request->AccountGroup,
            'AccountType' => $request->AccountType,
            'DomainAccount' => $request->_DomainAccount,
            'Email' => $request->_Email,
            'ValidTo' => date('Y-m-d H:i:s', strtotime($request->_Valid)),
            'NickName' => $request->_Nickname
        ]);

        return response()->json([$accounts, 'success' => 'Account saved successfully.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($AccountID)
    {

        $where = array('AccountID' => $AccountID);
        $account = Account::where($where)->first();

        return Response::json($account);
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
