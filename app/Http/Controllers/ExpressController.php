<?php

namespace App\Http\Controllers;

use App\Models\Express;
use App\Models\User;
use Exception;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use PhpParser\Node\Expr;

class ExpressController extends Controller
{
    public function create(Request $request){
// dd($request);
        $id = Auth::user()->id;
        $express = new Express();
        $express->name =$request->Brand;
        $express->zip_No=$request->zip_No;
        $express->role=  $request->role;
        $express->userId=  $id ;


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

        $express->save();

        Session::put('data' , $express->id);
        if($request->Paymentype == 'Stripe'){
            return redirect('stripe');

        }
        else{

            return redirect('charge');

        }
        return back()->with('success', 'Uploaded sucessfully');
    }





    public function Store_Seller(Request $request){


        $id = Auth::user()->id;
        $express = new Express();
        $express->name =$request->Brand;
        $express->zip_No=$request->zip_No;
        $express->role=  $request->role;
        $express->userId=  $id;

        $express->store=  $request->Store;



        if ($request->hasFile('photos')) {
             $picture = $request->photos;
            $imageName = rand().$picture->getClientOriginalName();
            $imagePath = $picture->move(public_path('uploads'), $imageName);
              $express->photos = $imageName;
        }
        $express->save();

        // Session::put('data' , $express->id);
        // if($request->Paymentype == 'Stripe'){
        //     return redirect('stripe');

        // }
        // else{

        //     return redirect('charge');

        // }
        return back()->with('success', 'Uploaded sucessfully');
    }





    public function register(Request $request)
    {

            $user  = new User();
            $user->name =  $request->name;
            $user->email =  $request->email;
            $user->phone =  $request->Phone;
            $user->role =  $request->role;
            $user->store_name =  $request->store_name;
            $user->address =  $request->address;
            $user->expert_status =  $request->expert_status;

            if ($request->hasFile('Resume')) {

                $file = $request->Resume;

                $ResumeName = rand().$file->getClientOriginalName();

                $imagePath = $file->move(public_path('uploads'), $ResumeName);
                // dd($ResumeName);
                $user->resume = $ResumeName;
            }
            //  dd($user->resume);

            $user->Interview_time =  $request->Interview_time;
            $user->brand_expert =  $request->brand_expert;


            $user->password = Hash::make($request['password']);
            $user->save();
            if($request->role == 'buyer')
            {
                return redirect('/login');
                // return redirect('authentication_buyer');
            }

             if($request->role == 'expert')
            {
                return redirect('/login');
            }

            else{

                return redirect('/');
            }

    }


    public function redirectToGoogle()
    {

        return Socialite::driver('google')->redirect();


        // return Socialite::driver('google')->stateless()->redirect();
    }


    public function redirectToFacebook()
    {
        // dd('kk');

        return Socialite::driver('facebook')->redirect();
    }




    public function handleGoogleCallback()
    {

       $role = Session::get('role');
    //    dd($role);

        try {

            $user = Socialite::driver('google')->user();

            $finduser = User::where('google_id', $user->id)->first();

            if($finduser){

                // Auth::login($finduser);
                // session()->put([
                //     'role' => $finduser->Role->name,
                //     'id' => $finduser->id
                // ]);
                return redirect('/')->with('success','Successfully Logged in.');

            }else{



                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id,
                    'role'=> $role,
                    'password' => encrypt('Superman_test')
                ]);

                Session::forget('role');
                return redirect('/')->with('success','Successfully Logged in.');
            }

        } catch (Exception $e) {
          dd($e->getMessage());
        }
    }


    public function handleFacebookCallback()
    {

        try {

            $user = Socialite::driver('facebook')->user();

            $finduser = User::where('facebook_id', $user->id)->first();

            if($finduser){


                return redirect('/')->with('success','Successfully Logged in.');


            }else{

                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'facebook_id'=> $user->id,
                    'password' => encrypt('Superman_test')
                ]);


                return redirect('/')->with('success','Successfully Logged in.');
            }

        } catch (Exception $e) {
          dd($e->getMessage());
        }
    }


    public function edit_seller($id){

        $users = User::find($id);


        return view('admin.EditSeller', compact('users'));

    }


    public function edit_buyer($id){

        // dd($id);
        $users = User::find($id);


        return view('admin.EditBuyer', compact('users'));

    }

    public function edit_expert($id){

        // dd($id);
        $users = User::find($id);


        return view('admin.EditExpert', compact('users'));

    }








    public function update(Request $request)
    {

        $user = User::find($request->idd);
            $user->name =  $request->name;
            $user->email =  $request->email;
            $user->phone =  $request->Phone;
            $user->role =  $request->role;
            $user->store_name =  $request->store_name;
            $user->address =  $request->address;
            if ($request->hasFile('Resume')) {

                $file = $request->Resume;

                $ResumeName = rand().$file->getClientOriginalName();

                $imagePath = $file->move(public_path('uploads'), $ResumeName);
                // dd($ResumeName);
                $user->resume = $ResumeName;
            }
            //  dd($user->resume);

            $user->Interview_time =  $request->Interview_time;
            $user->brand_expert =  $request->brand_expert;


            $user->password = Hash::make($request['password']);
            $user->update();


                return back()->with('success', 'Updated Sucessfully');


    }


    public function status_approve($id){

             $user= User::find($id);
            $user->expert_status = 'Approved';

            $user->update();
            // dd($user->expert_status);
        return back();

    }


    public function disapprove($id){

        User::destroy(array('id',$id));


   return back();

}
public function Detail($id){

    $product =Express::where('id',$id )->first();
    // dd($product);
    return view('Detail', compact('product'));


}

public function product_status(Request $request, $id){
    // dd($request);

    $product =Express::find($id );
    $product->comment =   $request->Comment;
    $product->status_expert =   $request->statuss;
    $product->update();
    // dd($product);
    return back()->with('success', 'Status updated successfully');


}

public function admin_Approve( $id){


    $product =Express::find($id );

    if($product->status_expert == '0')
    {
        // dd( 'ppp');
        $product->status_expert = null;
        $product->comment = null;
    }
    else{
        $product->status_expert = 2;

    }
    // dd( $product->status_expert);


    $product->update();

    return back()->with('success', 'Status updated successfully');

}

public function admin_Turn_down( $id){

    $product =Express::find($id );

    // @dd( $product->status_expert);
    if( $product->status_expert == '0')
    {

        $product->status_expert = 2;
        $product->admin_expert = 'No Pass';
    }



    elseif( $product->status_expert == '1')
    {
        $product->status_expert = null;
        $product->comment = null;
    }



    elseif($product->status_expert == '2')
    {
        $product->status_expert = null;
        $product->comment = null;
    }
    else{

        $product->status_expert = null;
    }
    // dd($product->status_expert);

    $product->update();

    return back()->with('success', 'Status updated successfully');


}
















    public function delete($id){
        // dd($id);

        User::destroy(array('id',$id));
        return back();

    }






}
