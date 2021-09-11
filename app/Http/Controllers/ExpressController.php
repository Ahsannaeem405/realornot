<?php

namespace App\Http\Controllers;

use App\Models\Express;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class ExpressController extends Controller
{
    public function create(Request $request){

        $express = new Express();
        $express->name =$request->Brand;
        $express->zip_No=$request->zip_No;


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
        return back()->with('success', 'Uploaded sucessfully');
    }
    public function register(Request $request)
    {
        // dd($request);

            $user  = new User();
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
            $user->save();
            if($request->role == 'buyer')
            {
                return redirect('authentication_buyer');
            }

            elseif($request->role == 'expert')
            {
                return redirect('Jobs_detail');
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
                    // 'role_id'=> 2,
                    'password' => encrypt('Superman_test')
                ]);


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



}
