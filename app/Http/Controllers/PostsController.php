<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\pro;
use App\like;
use App\dislike;
use App\comment;
use App\imgup;
use App\teamup;
use App\addpro;
use Session;

use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{
    
    public function create()
    {
        return view('posts.post');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|unique:pros',
            'body' => 'required|max:1000|min:500',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120'
        ]);

        $id = $request['id'];

        $title = $request['title'];
        $body = $request['body'];
       
        //$image =  $request->file('image')->store('images');
        if($request ->hasFile('image'))
        {
            //return $request->image->getClientOriginalName();
            $image =  $request->image->store('images','public');

        }
        
       // $image = $request->file('image')->store('images', 'public');
       // $new_image = rand() . '.' . $image->getClientOriginalExtension();
        //$image->move(public_path("images"), $new_image);



        $post = new pro();

        $post->id = $id;
        $post->title = $title;
        $post->body = $body;
        $post->image = $image;

        $post->save();

        $data = pro::all();

       // $details = DB::select(DB::raw("SELECT * FROM reports WHERE (title = '$title') AND (description = '$Description')"));

       
       return back()->with('success','Project was successfully published');
    }
    public function index()
    {
       // $posts = post::all()->toArray();
       
        $posts = pro::orderBy('updated_at','desc')->take(6)->get();
        $post = imgup::orderBy('updated_at','desc')->take(6)->get();
        $team = teamup::orderBy('updated_at','desc')->take(5)->get();
        
        return view('index',['posts'=>$posts,'post'=>$post,'team'=>$team]);
       // return view('posts.dis',compact('posts'));
    }
    public function view($id)
    {
        $posts = pro::where('id','=',$id)->get();

        $likePost =pro::find($id);
        $likeCtr = like::where(['post_id'=> $likePost->id])->count();
        
        $dislikePost =pro::find($id);
        $dislikeCtr = dislike::where(['post_id'=> $dislikePost->id])->count();
        
        $comment = DB::table('comments')
        ->join('pros','comments.post_id','=','pros.id')
        ->select('comments.commnt','comments.name')
        ->where(['pros.id'=>$id])
        ->get();
        
        
        return view('posts.view',['posts'=>$posts,'likeCtr'=>$likeCtr,'dislikeCtr'=>$dislikeCtr,'comment'=>$comment]);

    }
    public function like( $id)
    {
       $post_id = $id;
       $like = new like;
       $like->post_id = $post_id;
       $like->save();
        return redirect("/view/{$id}");
    }
    public function dislike( $id)
    {
       $post_id = $id;
       $dislike = new dislike;
       $dislike->post_id = $post_id;
       $dislike->save();
        return redirect("/view/{$id}");
    }
    public function comment(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'commnt' => 'required'
           
        ]);
        $post_id = $id;
       $commnt = new comment;
       $commnt->name = $request->input('name');
       $commnt->commnt = $request->input('commnt');

       $commnt->post_id = $post_id;
       $commnt->save();
        return redirect("/view/{$id}")->with('success','Comment Posted Successfully');
    }
    public function viewpro()
    {
        $pro = pro::all()->toArray();
        //dd($email);
        return view('posts.viewpro')->with('pro',$pro);
    }
    public function edit( $id)
    {
        $pro_id= pro::findOrFail($id);
       
        return view('posts.proedit',compact('pro_id'));
    }
    public function update( Request $request,$id)
    {
        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != '')
        {
            $request->validate([
                'title' => 'required',
                'body' => 'required|max:1000|min:100',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120'
            ]);
            //$image_name = rand().'.'.$image-> getClientOriginalExtension();
            //$image ->move(public_path('images'),$image_name);      
            $image_name =  $request->image->store('images','public');

        }
        else
        {
            $request->validate([
                'title' => 'required',
                'body' => 'required'
                
            ]);
        }
        $form_data = array(
            'title' => $request->title,
            'body' =>$request->body,
            'image' => $image_name

        );
        pro::whereId($id)->update($form_data);
        return back()->with('success','Project was successfully updated');
    }
    public function destroy($id)
    {
        $data = pro::findOrFail($id);
        $data->delete();
        return back()->with('success','Project was successfully deleted');
    }
    public function uploadimg()
    {
        return view('posts.uploadimg');
    }
    public function storeimg(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120|dimensions:width=400px,height=400px'
        ]);

        $id = $request['id'];
        if($request ->hasFile('image'))
        {
            
            $image =  $request->image->store('images','public');

        }
        $upload = new imgup();

        $upload->id = $id;
        $upload->image = $image;

        $upload->save();

        $data = imgup::all();
        return back()->with('success','Image successfully uploaded');
    }
    public function viewimg()
    {
        $img = imgup::all()->toArray();
        //dd($email);
        return view('posts.viewimg')->with('img',$img);
    }
    public function destroyimg($id)
    {
        $data = imgup::findOrFail($id);
        $data->delete();
        return back()->with('success','Image was successfully deleted');
    }
    public function uploadteam()
    {
        return view('posts.uploadteam');
    }
    public function storeteam(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'position' => 'required',
            'email' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120|dimensions:width=500px,height=500px'
        ]);

        $id = $request['id'];
        $name = $request['name'];
        $position = $request['position'];
        $email = $request['email'];
        if($request ->hasFile('image'))
        {
            
            $image =  $request->image->store('images','public');

        }
        $upload = new teamup();

        $upload->id = $id;
        $upload->name = $name;
        $upload->position = $position;
        $upload->email = $email;
        $upload->image = $image;

        $upload->save();

        $data = teamup::all();
        return back()->with('success','Details successfully uploaded');
    }
   public function viewteam()
    {
        $data = teamup::all()->toArray();
        //dd($email);
        return view('posts.viewteam')->with('data',$data);
    }
    public function destroyteam($id)
    {
        $data = teamup::findOrFail($id);
        $data->delete();
        return back()->with('success','Member details successfully deleted');
    }
    public function addpro()
    {
        return view('posts.addpro');
    }
    public function addpros()
    {
        return view('Adminaddproject');
    }
    public function savepro(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'position' => 'required',
            'title' => 'required',
            'body' => 'required'
        ]);

        $id = $request['id'];
        $name = $request['name'];
        $position = $request['position'];
        $title = $request['title'];
        $body =$request['body'];

        $upload = new addpro();

        $upload->id = $id;
        $upload->name = $name;
        $upload->position = $position;
        $upload->title = $title;
        $upload->body = $body;

        $upload->save();

        $data = addpro::all();
        return back()->with('success','New Project Suggestion sent successfully');
    }
    public function approval(Request $request)
    {
    
        $data = addpro::find($request->id);
        $approveVal = $request->approve;

        if($approveVal=='on')
        {
            $approveVal = 0;
        }
        else
        {
            $approveVal = 1;
        }
        $data ->approve= $approveVal;

        $data->save();
         
        return back()->with('success','Operation done Successfully');
    }
    
    public function destroynwpro($id)
    {
        $data = addpro::findOrFail($id);
        $data->delete();
          
        return back()->with('succss','New Project suggestion successfully deleted');
    }


     public function backto()
    {
        return view('posts.viewpro');
    }
}