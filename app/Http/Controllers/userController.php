<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\role;
use App\Models\permission;
use Illuminate\Support\Facades\DB;
use Auth;


class userController extends Controller
{
    

    //register A user From register Page
    function registerUser(Request $request)
    {

        //data insertion

        $insertData = new role;
        $insertData->name = $request->name;
        $insertData->email = $request->email;
        $insertData->password = $request->password;
        $insertData->save();

        //session

        $sessionData = $request->input();
        session()->put('name',$sessionData['name']);
        session()->put('email',$sessionData['email']);
        session()->put('password',$sessionData['password']);

        return redirect('');
    }


    //Logout user
    function logoutuser()
    {


        if(session('email'))
        {
            session()->flush();
            // session()->pull('name');
            // session()->pull('email');
            // session()->pull('password');

            // $request->session()->forget(['name', 'email','password']);1

            // session_destroy();
            // Auth::logout();
            // session_unset();


            return redirect('');
        }

        // return redirect('');

    }

    //Check User login
    function checkUserLogin(Request $request)
    {

        $updateData = DB::select("SELECT * FROM `role` WHERE email='".$request->email."'");
        $updateData2 = DB::select("SELECT * FROM `role` WHERE password='".$request->password."'");
        
        if($updateData && $updateData2)
        {
            //session login
            session()->put('email',$request->email);
            session()->put('password',$request->password);

            session()->put('useremail',$request->email);

            return redirect('dashboard');
        }
        else
        {
            session()->flash('error','Enter the Valid Login Detail!');
            return redirect('');
        }

    }

    //Show the data on user Page
    function showtheData()
    {
        $data = DB::select("SELECT * FROM `role`");
        $data2 = DB::select("SELECT * FROM `permission`");

            return view('user',['userData'=>$data,'userData2'=>$data2]);
    }

    //Update user Data from user Page
    function updateUserData(Request $request)
    {

        $updateData = role::find($request->id);
        $updateData->name = $updateData->name;
        $updateData->changedName = isset($request->name) ? $request->name : null;
        $updateData->userrole = isset($request->userrole) ? $request->userrole : "User";
        $updateData->about = isset($request->about) ? $request->about : 0;
        $updateData->contact = isset($request->contact) ? $request->contact : 0;
        $updateData->news = isset($request->news) ? $request->news : 0;
        $updateData->setting = isset($request->setting) ? $request->setting : 0;
        $updateData->support = isset($request->support) ? $request->support : 0;
        $updateData->user = isset($request->user) ? $request->user : 0;
        $updateData->sessionData1 = session('email');
        $updateData->save();
        

        return redirect('user');

    }

    //Update User's Status from user page
    function updateStatus(Request $request)
    {
       $changeStatus = role::find($request->id);
        if ($changeStatus->status == 1) 
        {
        $status = 0;
        }
        else
        {
         $status = 1;
        }
        $value = array('status' =>$status);
        DB::table('role')->where('id',$request->id)->update($value);
        return redirect('user');
    }

    //Delete User From user Page
    function deleteUserData(Request $request)
    {
        $deleteData = role::find($request->id);
        $deleteData->delete();

        return redirect('user');
    }

    //Add User From User Page
    function insertUD(request $request)
    {
        
        $insertData =  new role;
        $insertData->name = $request->name; 
        $insertData->email = $request->email; 
        $insertData->password = $request->password; 
        $insertData->userrole = $request->userrole; 
        $insertData->about =  isset($request->about) ? $request->about : 0;
        $insertData->contact = isset($request->contact) ? $request->contact : 0;
        $insertData->news = isset($request->news) ? $request->news : 0;
        $insertData->setting = isset($request->setting) ? $request->setting : 0;
        $insertData->support = isset($request->support) ? $request->support : 0;
        $insertData->user = isset($request->user) ? $request->user : 0;
        $insertData->save();

        return redirect('user');
    }

    function newsAct()
    {
        $nD = DB::select("SELECT * FROM `role`");

        return view('news',['newDT'=>$nD]);
    }

  
     
  

}


