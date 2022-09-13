<?php

namespace App\Http\Controllers;

use App\Models\Type;
use App\Models\Group;
use Illuminate\Http\Request;
use DB;

class SelectController extends Controller
{


    public function getGroup(Request $request){
        $search = $request->search;

        if($search == ''){
           $groups = Group::orderby('AccountGroup','asc')->select('id','AccountGroup')->get();
        }
        else{
           $groups = Group::orderby('AccountGroup','asc')->select('id','AccountGroup')->where('AccountGroup', 'like', '%' .$search . '%')->get();
        }
  
        $response = array();
        foreach($groups as $group){
           $response[] = array(
                "id"=>$group->AccountGroup,
                "text"=>$group->AccountGroup
           );
        }
        return response()->json($response); 

     } 

     public function getType(Request $request){
      $search = $request->search;

      if($search == ''){
         $types = Type::orderby('AccountType','asc')->select('id','AccountType')->get();
      }else{
         $types = Type::orderby('AccountType','asc')->select('id','AccountType')->where('AccountType', 'like', '%' .$search . '%')->get();
      }

      $response = array();
      foreach($types as $type){
         $response[] = array(
              "id"=>$type->AccountType,
              "text"=>$type->AccountType
         );
      }
      return response()->json($response); 

   } 
}