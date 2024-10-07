<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articles;
use App\Models\CorouselModel;

class ArticlesController extends Controller
{
    //function for viewing articles

    public function view()
    {


        $data = CorouselModel::all();

        return view('add-articles', compact('data'));

    }
}
