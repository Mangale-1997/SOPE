<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{

      //
  // function for viewing all Services

  public function view()
  {

            $data = News::all();

             return view('add-news', compact('data'));


   }


//function for storing news

public function store(Request $request)
      {
       $requestData = $request->all();
       $fileName = time().$request->file('photo')->getClientOriginalName();
       $path = $request->file('photo')->storeAs('images', $fileName, 'public');
       $requestData['photo'] = '/storage/'.$path;
       News::create($requestData);
       return back()->with('message', 'The News has Been Added Successfully');
      }

//function for deleting news

    public function destroy($id)
          {

            $isDeleted = News::destroy($id);

            return back->with('danger', "News  has been deleted successfully!");
          }



}
