<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\email;
use DB;
class SendEmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $email = email::all()->toArray();
      //  $email = email::all();
        //dd($email);
        // $email=DB::table('emails')->paginate(10);
        return view('mailr')->with('email',$email);

    }
    public function ViewSendMail()
    {
        //
        return view('send_email');
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
        //
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
    public function send(Request $request)
    {
        $this->validate($request,[
            'name' => 'required', 
            'email' => 'required|email',
            'message' => 'required'
        ]);

        $data = array(
            'name' => $request->name,
            'message' => $request->message
            
        );
        $email = $request->email;
        Mail::to($email)->send(new SendMail($data));
         
        $email = new email([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'message'=> $request->get('message')

        ]);
        $email->save();
        //Mail::to('rotaractbadulla19@gmail.com')->send(new SendMail($data));
       return back()->with('success','Email Sent Sucessfully');


}
}

    
       
       
