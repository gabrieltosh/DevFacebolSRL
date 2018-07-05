<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use Auth;
use Alert;
class controllerPanel extends Controller
{
    public function __construct()
    {
        $this->middleware('panel');
    }
    public function startAdmin()
    {   
       //Alert::success('Warning Title', 'Warning Message');
       return view('panel.template');
    }
    public function panel_user()
    {
        return view('panel-user.index');
    }
}
