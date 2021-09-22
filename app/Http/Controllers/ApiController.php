<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
   public function login(Request $request)
   {


       $user = User::where('email', '=', $request->email)->first();
       if (!$user) {
           return response()->json(['success' => false, 'message' => 'Login Fail, please check email and password']);
       }
       if (!Hash::check($request->password, $user->password)) {
           return response()->json(['success' => false, 'message' => 'Login Fail, please check email and password']);
       }
       else{
           return response()->json(['success' => true, 'message' => 'Login success','user'=>$user]);


       }

   }


}
