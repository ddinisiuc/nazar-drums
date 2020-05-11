<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Page;
use App\Models\Product;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $page = Page::active()->where('slug', '/')->firstOrFail();
        $baner = Banner::active()->orderBy('order', 'DESC')->get();
        $products = Product::active()->take(9)->get();
        $testimonials = Testimonial::active()->get();

        return view('index', compact('baner', 'products', 'testimonials'));
    }
}
