<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\withdraw;
class admincontroller extends Controller
{
    function withdraw()
    {  
        $widt=withdraw::where('Status','pending')->get();
        return view('admin/withdraw' ,compact('widt'));
        
    }
    function success($id)
    {  
        $wid=withdraw::find($id);
        $wid->Status="Complete";
        $wid->update();
        return redirect('admin/withdraw');
        
    }
    
}
