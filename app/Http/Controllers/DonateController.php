<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\dynamic_field;
use App\adddetail;
use App\additem;
use App\donordetail;
use Validator;

use Illuminate\Http\Request;

class DonateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dynamic_field');
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
        $input = Input::all();
        $condition = $input['item'];
        foreach ($condition as $key => $condition) {
            $student = new dynamic_field;
            $student->item = $input['item'][$key];
            $student->quantity1 = $input['quantity1'][$key];
            $student->quantity2 = $input['quantity2'][$key];
            $student->itemcode = $input['itemcode'][$key];
            $student->pro_id = $input['pro_id'][$key];
            $student->save();
        }
        return view('dynamic_field');
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
    public function viewdonate()
    {
        return view('donate');
    }
    public function storedonate(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'pro_id' => 'required',
            'coor' => 'required',
            'phone' => 'required',
    
        ]);
    
        $id = $request['id'];
    
        $title = $request['title'];
        $body = $request['body'];
        $pro_id = $request['pro_id'];
        $coor = $request['coor'];
        $phone = $request['phone'];
       
        
        $post = new adddetail();
    
        $post->id = $id;
        $post->title = $title;
        $post->body = $body;
        $post->pro_id = $pro_id;
        $post->coor = $coor;
        $post->phone = $phone;
    
        $post->save();
      
         return back()->with('success','Project was was successfully published');
    }
    public function viewdonation()
    {
        
        $donate = adddetail::orderBy('updated_at','desc')->take(10)->get();
          
        return view('viewdonations',['donate'=>$donate]);
    }
    public function viewall($id)
    {
        $posts=adddetail::where('pro_id','=',$id)->get();;
        $donation = DB::table('dynamic_fields')
        ->join('adddetails','dynamic_fields.pro_id','=','adddetails.pro_id')
        ->select('dynamic_fields.item','dynamic_fields.itemcode','dynamic_fields.quantity1')
        ->where(['dynamic_fields.pro_id'=>$id])
        ->paginate(10);
        return view('viewdonate',['donation'=>$donation, 'posts'=>$posts ]);

    }
    public function storeitem(Request $request)
    {
        $input = Input::all();
        $condition = $input['pro_id'];
        foreach ($condition as $key => $condition) {
            $student = new additem;
            $student->pro_id = $input['pro_id'][$key];
            $student->itemcode = $input['itemcode'][$key];
            $student->quantity = $input['quantity'][$key];
            $student->save();

            $getProductStock = dynamic_field::where('itemcode', $student->itemcode)->first();
            $newStock = $getProductStock->quantity1 - $student->quantity;
            dynamic_field::where('itemcode',$student->itemcode)->update(['quantity1'=>$newStock]);
        }
         return back();
    }
    public function save_donate(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'pro_id' => 'required'
           
    
        ]);
    
        $id = $request['id'];
    
        $name = $request['name'];
        $phone = $request['phone'];
        $email = $request['email'];
        $pro_id = $request['pro_id'];
       
        
        $post = new donordetail();
    
        $post->id = $id;
        $post->name = $name;
        $post->phone = $phone;
        $post->email = $email;
        $post->pro_id = $pro_id;   
        $post->save();
         return back()->with('success','Details successfully submitted');
    }
    public function viewdonate_all()
    {
        //$posts = adddetail::where('pro_id','=',$id)->get();
       
        $donation = DB::table('dynamic_fields')
        ->join('adddetails','dynamic_fields.pro_id','=','adddetails.pro_id')
        ->select('dynamic_fields.item','dynamic_fields.itemcode','dynamic_fields.quantity1','dynamic_fields.quantity2','dynamic_fields.pro_id','adddetails.title','adddetails.body','adddetails.coor','adddetails.phone')
        //->where(['dynamic_fields.pro_id'=>$id])
        ->get();

        return view('view_all',['donation'=>$donation]);
     
    }
    public function editdonate($id)
    {
        
        
            $pro= adddetail::findOrFail($pro_id);
           
            return view('editdonate',compact('pro'));
        
    }
    public function updatedonate( Request $request,$id)
    {
        
            $request->validate([
                'title' => 'required',
                'body' => 'required',
                'coor' => 'required',
                'phone' => 'required',
                'pro_id' => 'required',
                'item' => 'required',
                'itemcode' => 'required',
                'quantity2' => 'required'
                
            ]);
        
            $project = adddetail::find($id);
            $project = adddetail::where('itemcode',$id)->first();
            $project->title = $request->input('title');
            $project->body = $request->input('body');
            $project->coor = $request->input('coor');
            $project->phone = $request->input('phone');
            $project->pro_id = $request->input('pro_id');
            if($user->save())
            {
            $profile = dynamic_field::find($id);
            $profile = dynamic_field::where('itemcode',$id)->first();
            $profile->item = $request->input('item');
            $profile->itemcode = $request->input('itemcode');
            $profile->quantity2 = $request->input('quantity2');
        
            $profile->save();
            return redirect()->route('profile', $project->itemcode)->with('success', 'Your info are updated');
        }
            return redirect()->back()->with('error','Something went wrong');
    }
    public function destroydonate($id)
    {
        
        
            adddetail::where('pro_id', $id)->delete();
            dynamic_field::where('pro_id', $id)->delete(); 
        return back()->with('success','Record was successfully deleted');
    }
    public function viewalldonate()
    {
        
        $donation = DB::table('additems')
        ->join('donordetails','additems.pro_id','=','donordetails.pro_id')
        ->select('additems.itemcode','additems.quantity','additems.pro_id','donordetails.name','donordetails.phone','donordetails.email')
        //->where(['dynamic_fields.pro_id'=>$id])
        ->get();

        return view('viewalldonate',['donation'=>$donation]);
     
    }
}
