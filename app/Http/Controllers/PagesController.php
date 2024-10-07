<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServicesModel;


class PagesController extends Controller
{



    // funtion to route contact us pages

    public function view(){

                return view('Contactus');
    }


    // funtion to route services

    public function view_services(){
        $data_services = ServicesModel::all();

        return view('servicepage', compact('data_services'));
}

  // funtion to route home page

  public function view_home(){

    return view('welcome');
}

// function for view articles

public function view_articles()
                       {

    return view('articles');


                         }
public function view_whoweare()

            {
                return view('whoweare');

             }

}
