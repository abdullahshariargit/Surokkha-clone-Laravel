<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\District;
use App\Models\Division;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('shahin');
    }


    public function status()
    {
        return view('status');
    }
}
