<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;
use App\Models\SCategory;
use App\Models\SProduct;
use App\Models\SItem;
use Cart;

class GetController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function news()
    {
        $posts = Post::latest()->get();
        return view('news', compact('posts'));
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function shop()
    {
        $categories = SCategory::get();
        return view('project.sinotruk_first', compact('categories'));
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function category($id)
    {
        $products = SProduct::where('categories', $id)->get();
        $cart =  Cart::content();
        return view('project.sinotruk', compact('products','cart'));
    }
    

    
}
