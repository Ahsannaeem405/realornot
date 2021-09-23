<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Express;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        public function product(Request $request)
        {

            $express = Express::get();


                    return response()->json($express);


            }

        public function image_save(Request $request)
        {



            $express = new Express();

            if ($request->hasFile('photos')) {

                $picture = $request->photos;

               $imageName = rand().$picture->getClientOriginalName();
               $imagePath = $picture->move(public_path('uploads'), $imageName);
                 $express->photos = $imageName;
           }



            }

            public function product_save(Request $request)
            {
                $id = Auth::user()->id;
                $express = new Express();
                $express->name =$request->Brand;
                $express->zip_No=$request->zip_No;
                $express->role=  $request->role;
                $express->userId=  $id ;



                $express = new Express();

                if ($request->hasFile('photos')) {

                    $picture = $request->photos;

                   $imageName = rand().$picture->getClientOriginalName();
                   $imagePath = $picture->move(public_path('uploads'), $imageName);
                     $express->photos = $imageName;
               }

                if ($request->hasFile('videos')) {
                    $file = $request->videos;
                    $videoName = rand().$file->getClientOriginalName();
                    $imagePath = $file->move(public_path('uploads'), $videoName);
                    $express->videos = $videoName;
                }



                }




}
