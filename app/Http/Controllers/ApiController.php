<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Express;
use App\Models\User;
use Illuminate\Http\Request;

class ApiController extends Controller
{
   public function login(Request $request)
   {


       $user = User::where('email', '=', $request->email)->first();
       if (!$user) {
           return response()->json(['success' => false, 'message' => 'Login Fail, please check email and password']);
       }
       if (!\Hash::check($request->password, $user->password)) {
           return response()->json(['success' => false, 'message' => 'Login Fail, please check email and password']);
       }
       else{
           return response()->json(['success' => true, 'message' => 'Login success','user'=>$user]);


       }

   }



    public function register(Request $request)
    {
        $data = User::where('email', '=', $request->email)->count();
if($data==0)
{


        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=\Hash::make($request->password);
        $user->role=$request->role;
        $user->save();

        if ($user->save()) {
            return response()->json(['success' => true, 'message' => 'Register success.','user'=>$user]);
        }

        else{
            return response()->json(['success' => false, 'message' => 'registrartion faild.']);



        }

    }
else
{
    return response()->json(['success' => false, 'message' => 'Email already exist.']);

}
    }









    public function brand(Request $request)
    {

        $brand = Brand::get();


                return response()->json($brand);


        }

        public function image_save(Request $request)
        {



            $express = new Express();

            if ($request->hasFile('photos')) {

                $picture = $request->photos;
                return response()->json( $picture );
               $imageName = rand().$picture->getClientOriginalName();
               $imagePath = $picture->move(public_path('uploads'), $imageName);
                 $express->photos = $imageName;
           }



            }






}
