<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'This is Test Title';
        // return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        $title = "This is about";
        return view('pages.about')->with('about', $title);
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'body' => ['Web Design', 'Programmer', 'Designer']
        );
        return view('pages.services')->with($data);
    }
}
