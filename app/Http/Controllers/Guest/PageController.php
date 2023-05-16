<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {

        $linksNav = config('nav');

        $data = [
            'links' => $linksNav,
        ];

        return view('home', $data);
    }
}
