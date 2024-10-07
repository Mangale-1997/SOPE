<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CorouselModel;
use DB;


class CorouselController extends Controller
{
   // function for viewing all Corousel

                           public function view()

                            {

                                $data = CorouselModel::all();

                                return view('slideshow', compact('data'));


                           }


    //function for storing corousel/slideshow

    public function store_corousel(Request $request)
                         {
                          $requestData = $request->all();
                          $fileName = time().$request->file('photo')->getClientOriginalName();
                          $path = $request->file('photo')->storeAs('images', $fileName, 'public');
                          $requestData['photo'] = '/storage/'.$path;
                          CorouselModel::create($requestData);
                          return back()->with('message', 'Corousel/Slideshow  Has Been Added Successfully!');
                         }

        //function to delete corousel

        public function clear(request $id)
                      {
                        $isDeleted = CorouselModel::destroy($id);


                     return back()->with('status', "Data Deleted Successfully!");


                      }

}
