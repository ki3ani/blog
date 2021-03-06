<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to Laravel';
       return view('pages.index')->with('title',$title);
    }
    public function about(){
        $title = 'About';
        return view('pages.about')->with('title',$title);
     }

     public function services(){
         $data = array(
             'title' => 'Services',
             'services' => ['Writing','Research','Drawing','Photography']
         );
         return view('pages.services') ->with($data);
     }
     
     public function course(){
         $data = array(
             'title' => 'Course',
             'courses' => ['Photography','Movies','Art']
                 );
                 return view('pages.course') ->with($data);
                 }

}
 