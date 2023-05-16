<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {

        $linksNav = config('nav');
        $footerData = config('footer');

        $data = [
            'links' => $linksNav,
            'columns' => $footerData,
        ];

        return view('home', $data);
    }
}
