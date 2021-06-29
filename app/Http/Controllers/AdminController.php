<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use DB;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data['title']      = 'Dashboard';
        $data['activeMenu'] = 'dashboard';

        return view('backend.admin.dashboard', $data);
    }

    public function profile()
    {
        $user_id = Auth::user()->id;
        $data['user_info'] = User::find($user_id);
        // echo "<pre>";
        // print_r($data['user_info']->name);
        // exit;
        $data['title']      = 'Profile';
        $data['activeMenu'] = 'profile';

        return view('backend.admin.profile', $data);
    }

    public function profileUpdate(Request $request)
    {
        $user_id = Auth::user()->id;

        $request->validate([
	        'name'          => 'required',
       	]);

        $data = [
            'name'         => $request->name,
            'phone'        => $request->phone,
        ];
        $response = DB::table('users')
                        ->where('id', $user_id)
                        ->update($data);
        if($response)
        {
            session()->flash('success','Successfully Update');
            return redirect()->route('admin.profile')->with('success','Successfully Update');
        } else
        {
            session()->flash('error_msg','Please select required informations');
            return redirect()->route('admin.profile')->with('error_msg','Error');
        }
        
    }

    public function passwordUpdate(Request $request)
    {
        $user_id = Auth::user()->id;

        $request->validate([
	        'password' => ['required', 'string', 'min:8', 'confirmed'],
       	]);
         
        
        if(Hash::check($request->oldpassword, Auth::user()->password) ){
            // echo "<pre>";
            // print_r(Auth::user()->password);
            // exit;
            $data = [
                'password' => Hash::make($request->password),
            ];
            $response = DB::table('users')
                            ->where('id', $user_id)
                            ->update($data);
            if($response)
            {
                session()->flash('success','Successfully Update');
                return redirect()->route('admin.home')->with('success','Successfully Update');
            } else
            {
                session()->flash('error_msg','Please select required informations');
                return redirect()->route('admin.profile')->with('error_msg','Error');
            }
        } else{
            session()->flash('error_msg','Please select required informations');
            return redirect()->route('admin.profile')->with('error_msg','Old Password did not match');
        }
        
        
    }
}
