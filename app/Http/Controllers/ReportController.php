<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ReportController extends Controller
{

    public function create()
    {
        return view('report');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120'
        ]);

        $id = $request['id'];

        $title = $request['title'];
        $Description = $request['description'];
        $image = $request->file('image')->store('images', 'public');
        //$new_image = rand() . '.' . $image->getClientOriginalExtension();
        //$image->move(public_path("images"), $new_image);



        $report = new Report();

        $report->id = $id;
        $report->title = $title;
        $report->description = $Description;
        $report->image = $image;

        $report->save();

        $data = Report::all();

        $details = DB::select(DB::raw("SELECT * FROM reports WHERE (title = '$title') AND (description = '$Description')"));

        return view('view', compact('details'));
    }

    public function show()
    {

       $de = DB::table('reports')->select('id','title', 'description','image')->get();
           $de=DB::table('reports')->paginate(10);
        return view('show')->with('de', $de);
        
    }

    public function shows()
    {

        $de = DB::table('reports')->select('id','title', 'description','image')->get();
   $db=DB::table('reports')->paginate(10);
        return view('Userviewgeneratedreports')->with('de', $de);
        
    }
    public function deleteReport($id)
    {

       $report = Report::find($id);
       $report->delete();
       return redirect()->back();
        
    }
     public function backto()
    {

        return view('report');
        
    }
}