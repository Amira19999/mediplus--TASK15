<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Frontpages extends Controller
{
    public function home(){
        $title="Mediplus website";
        return view('home',compact('title'));
    }
    

    public function Docter(){
        $title="Mediplus website";
        return view('Docter',compact('title'));
    }
    public function Services(){
        $title="Mediplus website";
        return view('Services',compact('title'));
    }
    public function Pages(){
        $title="Mediplus website";
        return view('Pages',compact('title'));
    }
    public function Blogs(){
        $title="Mediplus website";
        return view('Blogs',compact('title'));
    }
    public function ContactUs(){
        $title="Mediplus website";
        return view('ContactUs',compact('title'));
    }
    
}
