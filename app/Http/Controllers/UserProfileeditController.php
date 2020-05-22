<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class UserProfileeditController extends Controller
{

use RegistersUsers;

 

     
     
 protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255',],
            'contactno' => ['required', 'string', 'max:15','min:10'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

 
    protected function create(array $data)
    {
        return User::create([
            'firstname' => $data['firstname'],
             'lastname' => $data['lastname'],
              'contactno' => $data['contactno'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }




    public function useredit(Request $request,$id)
    {
   $users=User::findOrFail($id);
  return view('userprofile-edit')->with('users',$users); 
    }

    public function usereditupdate(Request $request,$id)
    {
        $users=User::find($id);
        $users->firstname = $request->input('firstname');
        $users->lastname = $request->input('lastname');
        $users->contactno = $request->input('contactno');
        $users->email = $request->input('email');
        $users->password = $request->input('password');
        
        
        if(!empty($request->password)){
           $request->merge(['password' => Hash::make($request['password'])]);
        }

       $users->update($request->all()); 
         return redirect('home')->with('status','Record Updated Successfully');
        }
    

    
}
