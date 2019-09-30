<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title="Welcome to FoodZone";
        return view ('home.index')->with('title',$title);
    }
    
    public function about(){
        $title="About us";
        return view('home.about')->with('title',$title);
    }

    public function blog(){
        $title="Blog";
        return view('pages.blog')->with('title',$title);
    }
    
   public function services()
    { $data=array(
        'title'=>'Services',
        'services'=>['WiFi','Gift-Vouchers','Discount on first order']);
     
        return view('home.services')->with($data);
    }

    public function contact(){
        return view('home.contact');
    }
   
    

}
