<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Page;
use App\Models\Product;
use App\Models\Category;
use App\Models\Conctact;
use App\Models\Post;
use App\Models\Project;
use App\Models\ProjectBenefit;
use App\Models\Benefit;
use App\Models\Testimonial;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\User;

class FrontendController extends Controller
{
    public function index(){
        $page = Page::active()->bySlug('/')->firstOrFail();
        $baner = Banner::active()->orderBy('order', 'DESC')->get();
        $products = Product::active()->take(9)->orderBy('order', 'DESC')->get();
        $testimonials = Testimonial::active()->get();
        $benefits = Benefit::active()->get();
        $view = view('index', compact('baner', 'products', 'testimonials', 'benefits'))->render();

        return $view;
    }

    public function shop(){
        $page = Page::active()->bySlug('shop')->firstOrFail();
        $products = Product::active()->paginate(9);
        $popular_products = Product::active()->popular()->get();
        $categories = ProductCategory::active()->get();

        return view('shop.products', compact('products', 'popular_products','categories', 'page'));
    }

    public function productDetail($slug){
        $product_detail = Product::active()->bySlug($slug)->firstOrfail();
        $products = Product::active()->get();
        $related_products = Product::active()->where('product_category_id', $product_detail->product_category_id)->get();
        return view('shop.product_detail', compact('product_detail', 'products', 'related_products'));
    }

    public function about(){
        $page = Page::active()->bySlug('about')->firstOrFail();

        return view('about-me', compact('page'));
    }

    public function blog(){
        $page = Page::active()->bySlug('blog')->firstOrfail();
        $posts = Post::active()->paginate(10);
        setlocale (LC_TIME, 'ru_RU.UTF-8', 'Rus');

        return view('blog.index', compact('page', 'posts'));
    }

    public function blogDetail($slug){
        $blog_detail = Post::active()->bySlug($slug)->firstOrFail();
        $admin = User::firstOrFail();
        $related_posts = Post::active()->with('category')->take(3)->get();

        return view('blog.blog-detail', compact('blog_detail', 'admin', 'related_posts'));
    }

    public function contact(){
        $page = Page::active()->bySlug('contact')->firstOrFail();

        return view('contact', compact('page'));
    }

    public function sendOrder(Request $request){
        dd($request->all());
        return response($request->all());
    }

    public function sendContact(Request $request){
        $contacts = Conctact::create($request->all());

        if(!$contacts){
            return response('error with creating contact');
        } else {
             return response([
                 'status' => 1,
                 'message' => 'Благодарю за отправку сообщения']
                );
        }
    }

    public function project($slug){
        $project = Project::active()->bySlug($slug)->firstOrFail();
        $project_benefits = ProjectBenefit::active()->get();

        return view('project', compact('project', 'project_benefits'));
    }

}
