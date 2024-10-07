<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServicesModel;

class WelcomeController extends Controller
{
    //


    public function view_services()
    {


return view('welcome')->with('service', ServicesModel::all());


     }
}
