<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\UserInfo;

class PageController extends Controller
{
    public function login(Request $request){

        if($request->ismethod('post')){
            $data = $request->all();
            $validated = $request->validate([
                'input1' => 'required|max:1|min:1',
                'input2' => 'required|max:1|min:1',
                'input3' => 'required|max:1|min:1',
                'input4' => 'required|max:1|min:1',
            ]);
            $user_code = $data['input1'].$data['input2'].$data['input3'].$data['input4'];
            $password = "11111111";
            if(Auth::attempt(['user_code'=>$user_code,'password'=>$password])){
                return redirect(route('profile'));

            }else{
                $request->session()->flash('message', 'Login Unsuccessful!');
            }
        }
        return view('login');
    }


    public function profile(){

        $name = Auth::user()->name;
        return view('profile', compact('name'));
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }


    public function profile_post(Request $request){
        if($request->ismethod('post')){
            $data = $request->all();


            $validated = $request->validate([
                'your_status' => 'required',
                'your_contact_number' => 'required|digits:11',
                'your_mail' => 'required|email',
                'wife_name' => 'required',
                'wife_status' => 'required',
                'son_name' => 'required',
                'son_status' => 'required',
            ]);

            $user_info = new UserInfo();

            $user_id = Auth::user()->id;

            $your_status = $data['your_status'];
            $your_contact_number = $data['your_contact_number'];
            $your_mail = $data['your_mail'];
            $wife_name = $data['wife_name'];
            $wife_status = $data['wife_status'];
            $son_name = $data['son_name'];
            $son_status = $data['son_status'];


            $user_info->user_id = $user_id;
            $user_info->status = $your_status;
            $user_info->contact_number = $your_contact_number;
            $user_info->email = $your_mail;
            $user_info->wife = $wife_name;
            $user_info->wife_status = $wife_status;
            $user_info->son_name = $son_name;
            $user_info->son_status = $son_status;
            $user_info->save();

            return redirect('/dashboard');

            
            
            
        }
    }

    public function dashboard(){
        $user_id = Auth::user()->id;
        $details = UserInfo::where(['user_id'=>$user_id])->first();
        $name = Auth::user()->name;
        return view('dashboard',compact('name','details'));
    }
}
