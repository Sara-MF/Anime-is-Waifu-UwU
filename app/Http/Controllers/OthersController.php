<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OthersController extends Controller {
    
    public function thankful() {

        return view('others.thankful');
    }

    public function notFound() {

        return view('others.not-found');
    } 

}
