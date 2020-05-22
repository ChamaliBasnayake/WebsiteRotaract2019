<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\register;

class RegformController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('registration');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
             'username' => 'required',
             'password' => 'required|min:8',
             

            ]);
    
            $register = new register([
                'firstname' => $request->get('firstname'),
               'lastname' => $request->get('lastname'),
                'email' => $request->get('email'),
                'username' => $request->get('username'),
                'password' => $request->get('password'),
         
     
            ]);
    
             $register->save();
            
         return redirect()->route('form')->with('success','Thanks for joining with us');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function loginUser(Request $request)
    {
       $data = $request->only('username','password');
         if(Auth::attempt($data))
         {
              return redirect()->route('sendemail');

         }
        return redirect()->back();

    }
    public function getPage(){

        return view('sendemail');  
    }
    public function UserLogin(){

        return view('userlogin');  
    }
}
