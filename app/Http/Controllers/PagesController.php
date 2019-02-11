<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PagesController extends Controller
{
    public function home() {
    	return view('index');
    }

    public function stuff() {
    	return view('stuff');
    }

    public function contact() {
    	return view('contact');
    }

    public function resume() {
    	return view('resume');
    }
}
