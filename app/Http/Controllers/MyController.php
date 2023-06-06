<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Validator;
use Hash;
class MyController extends Controller
{

// public function __construct(){ 
//    $this->middleware('auth:api');
// } 






public function allusers(Request $request)
{
    try {
        $list = User::all();
         $datais = array(
        'message'=>'success',
        'error'=>"",
        'user_list'=>$list,
        'status'=>true, 
        );
        return response()->json($datais,200);
    
    } catch (Exception $e) {
        $erroris = array(
        'message'=>$error->getMessage(),
        'error'=>$error,
        'status'=>false,
      );
      return response()->json($erroris, 400); 
    }
   
}




}
