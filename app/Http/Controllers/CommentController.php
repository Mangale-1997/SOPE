<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    //function for inserting comment into database

    public function store_comment(Request $request)
                         {
                          $requestData = $request->all();
                          $fileName = time().$request->file('photo')->getClientOriginalName();
                          $path = $request->file('photo')->storeAs('images', $fileName, 'public');
                          $requestData['photo'] = '/storage/'.$path;
                          Comment::create($requestData);

                          return back()->with('message', 'The Comment has Added Successfully');
                         }

//function for viewing all comment.
        public function view_comment(){



                   $data = Comment::all();
                   return view('add-comment', compact('data'));
                }

                }
