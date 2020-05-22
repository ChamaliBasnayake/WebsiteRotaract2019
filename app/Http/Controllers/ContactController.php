<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contact;
use App\pro;
use App\imgup;
use App\teamup;
class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
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
         $posts = pro::orderBy('updated_at','desc')->take(6)->get();
        $post = imgup::orderBy('updated_at','desc')->take(6)->get();
        $team = teamup::orderBy('updated_at','desc')->take(5)->get();

         $this->validate($request,[
            'fullname' => 'required',
             'email' => 'required|email',
             'contact' => 'required',
             'message' => 'required'
            ]);
    
            $contact = new contact([
                'fullname' => $request->get('fullname'),
                'email' => $request->get('email'),
                'contact' => $request->get('contact'),
                'message' => $request->get('message')
     
            ]);
    
             $contact->save();
           return view('index',['posts'=>$posts,'post'=>$post,'team'=>$team])->with('success','Thanks for contacting us'); 
        // return redirect()->route('contact')->with('success','Thanks for contacting us');
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
}
