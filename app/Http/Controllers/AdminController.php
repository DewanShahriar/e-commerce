<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use App\Models\User;
use Image;
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
            return redirect()->route('admin.profile')->with('success','Successfully Updated');
        } else
        {
            session()->flash('warning','Please select required informations');
            return redirect()->route('admin.profile')->with('warning','Nothing to Update');
        }
        
    }

    public function passwordUpdate(Request $request)
    {
        $user_id = Auth::user()->id;

        $request->validate([
	        'password' => ['required', 'string', 'min:8', 'confirmed'],
       	]);
         
        
        if(Hash::check($request->oldpassword, Auth::user()->password) ){
            $data = [
                'password' => Hash::make($request->password),
            ];
            $response = DB::table('users')
                            ->where('id', $user_id)
                            ->update($data);
            if($response){
                session()->flash('success','Successfully Update');
                return redirect()->route('admin.profile')->with('success','New Password Successfully Updated');
            } else{
                session()->flash('error_msg','Please select required informations');
                return redirect()->route('admin.profile')->with('error_msg','Error');
            }
        } else{
            session()->flash('error_msg','Please select required informations');
            return redirect()->route('admin.profile')->with('error_msg','Old Password did not match');
        }
        
        
    }

    public function profilePhotoUpdate(Request $request)
    {
        $user_id = Auth::user()->id;
        
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        

        $image = $request->file('image');
        $imageName = time().'.'.$request->image->extension();
        $filePath = public_path('assets/images');
        $path = 'assets/images/'.$imageName;

        //resize image
        $img = Image::make($image->path());
        $img->resize(400, 400);
        $img->save($filePath.'/'.$imageName);

        // delete previous profile photo
        $user_info  = User::find($user_id);
        $image_path = $user_info->profile_photo;
        if (File::exists($image_path)) {
            //File::delete($image_path);
            unlink($image_path);
        }
  
        /* Store $imageName name in DATABASE from HERE */
        $data = [
            'profile_photo' => $path,
        ];

        $response = DB::table('users')
                        ->where('id', $user_id)
                        ->update($data);
        if($response){
            return back()
            ->with('success','You have successfully upload image.')
            ->with('image',$imageName);
        } else {
            return back()
            ->with('error_msg','Upload Failed!!!')
            ->with('image',$imageName);
        }
         
    }

    
}
