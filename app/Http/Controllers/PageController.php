<?php

namespace App\Http\Controllers;

use App\Models\BlogCategory;
use App\Models\Gallery;
use App\Models\News;

class PageController extends Controller
{
    public function newsView($slug){

        $news = News::where('slug', $slug)->where('status', 1)->firstOrFail();
        $news->read_count = $news->read_count + 1;
        $news->save();

        $relatedNews = News::where('category_id', $news->category_id)
            ->where('status', 1)
            ->where('slug', '!=', $slug)
            ->get(['id', 'title', 'thumnail_image', 'slug', 'short_description']);
        
        return view('frontend.news-detail' , compact(['news' ,'relatedNews']));
        
    }
    public function gallery(){

        $galleryImages = Gallery::all();

        return view('frontend.gallery' , compact('galleryImages'));
    }
    public function allCategories(){

        $articleCategories = BlogCategory::where('status', 1)
            ->latest()
            ->get(['id', 'name', 'slug', 'image', 'status']);

        return view('frontend.layouts.all-category' , compact('articleCategories'));
    }

    public function category($slug){

        $category = BlogCategory::where('slug', $slug)
        ->where('status', 1)
        ->first();

        if ($category) {
            $categoryNews = News::where('category_id' , $category->id)
                ->select('id', 'title', 'slug', 'short_description', 'thumnail_image', 'author', 'created_at' , 'date')
                ->paginate(12);
        }

        return view('frontend.layouts.category' , compact(['categoryNews' , 'category']));
    }
    

}
