<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProtController extends Controller
{
    public function HomeShow(){
    	return view('index');
    }

    public function AboutUsShow(){
    	return view('about-us');
    }

    public function ServicesShow(){
    	return view('services');
    }

    public function PortfolioShow(){
    	return view('portfolio');
    }

    public function ElementsShow(){
    	return view('elements');
    }

    public function BlogShow(){
    	return view('blog');
    }

    public function SingleBlogShow(){
    	return view('single-blog');
    }

    public function BlogDetailsShow(){
    	return view('single-blog');
    }
}
