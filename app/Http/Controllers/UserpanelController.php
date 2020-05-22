<?php

namespace App\Http\Controllers;
use App\Userpnel;
use Illuminate\Http\Request;

class UserpanelController extends Controller
{
    public function index()
    {
        return view('userpanel');
    }
}
