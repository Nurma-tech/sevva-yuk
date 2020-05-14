<?php

namespace App\Http\Controllers;

use App\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        return view('admin/login');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function loginPost(Request $request){

        $username = $request->username;
        $password = $request->password;

        $data = Admin::where('username',$username)->first();
        if($data){ //apakah email tersebut ada atau tidak
            //echo"hi";
            $data = Admin::where('password',$password)->first();
            if($data){
                Session::put('fname',$data->fname);
                Session::put('lname',$data->lname);
                Session::put('username',$data->username);
                Session::put('login',TRUE);
            return redirect('admin/home');
            }
            else{
                return redirect('admin/login')->with('alert','Check your username or password!');
            }
        }
        else{
            return redirect('admin/login')->with('alert','Sorry you are not Admin');
        }
    }

    public function logout(){
        Session::flush();
        return redirect('/admin')->with('alert','You have been loged out');
    }

    public function index()
    {
        return view('admin/home');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

}