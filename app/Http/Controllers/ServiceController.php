<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServicesModel;
use DB;

class ServiceController extends Controller
{
    //
  // function for viewing all Services

  public function view()
  {

             $data = ServicesModel::all();

             return view('add-services', compact('data'));


   }


//function for storing Services

public function store(Request $request)
      {
       $requestData = $request->all();
       $fileName = time().$request->file('photo')->getClientOriginalName();
       $path = $request->file('photo')->storeAs('images', $fileName, 'public');
       $requestData['photo'] = '/storage/'.$path;
       ServicesModel::create($requestData);
       return back()->with('message', 'Service Has Beem Added Successfully');
      }





}
