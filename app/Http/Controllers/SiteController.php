<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        $fullname = "Chayanon Boonsong";
        $website = "www.google.com";
        return view('about', [
            'fullname' => $fullname,
            'website' => $website
        ]);
    }
}
