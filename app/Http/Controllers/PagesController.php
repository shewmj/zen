<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PagesController extends Controller
{
    public function home() {
    	return view('index');
    }

    public function about() {
        return view('about');
    }

    public function projects() {
    	return view('projects');
    }

    public function education() {
    	return view('education');
    }

    public function resume() {
    	return view('resume');
    }
}
