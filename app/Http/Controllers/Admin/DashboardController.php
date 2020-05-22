<?php

namespace App\Http\Controllers\Admin;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class DashboardController extends Controller
{
    public function registered()
    {
        //$users=User::all();
        $users=DB::table('users')->paginate(10);
        return view('AdminRegistereduserView')->with('users',$users);
    }

    public function registerededit(Request $request,$id)
    {
          $users=User::findOrFail($id);
          return view('admin.registereduser-edit')->with('users',$users);
    }
    public function registeredupdate(Request $request,$id)
    {
         $users=User::find($id);
         $users->firstname = $request->input('firstname');
         $users->usertype = $request->input('usertype');
         $users->update();
         return redirect('/registered-users')->with('status','Record Updated Successfully');
    }
    public function registereddelete(Request $request,$id)
    {
       $users=User::findOrFail($id);
       $users->delete();
       return redirect('/registered-users')->with('danger','Your Record Deleted successfully');
    }

}
