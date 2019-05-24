<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TvShowController extends Controller
{
    function index(Request $request){
    	$id = $request->id;
    	return view('frontend.tv-show');
    }
}
