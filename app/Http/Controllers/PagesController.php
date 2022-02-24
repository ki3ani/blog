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
             'services' => ['Coding','Design','Science']
         );
         return view('pages.services') ->with($data);
     }
     
     public function course(){
         $data = array(
             'title' => 'Course',
             'courses' => ['Data Science','Machine Learning','Art Design']
                 );
                 return view('pages.course') ->with($data);
                 }

}
 