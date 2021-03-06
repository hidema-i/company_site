<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutPageController extends Controller
{
    public function show()
    {
        return view('about', [
            "current_time" => date("Y-m-d H:i:s")
        ]);
    }
}
