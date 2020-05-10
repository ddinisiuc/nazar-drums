<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Page;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $page = Page::active()->where('slug', '/')->firstOrFail();
        $baner = Banner::active()->orderBy('order', 'DESC')->get();
        
        return view('index', compact('baner'));
    }
}
