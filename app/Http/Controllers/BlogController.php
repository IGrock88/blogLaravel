<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogModel = new Blog();
        $blogs = $blogModel->getBlogArticles(0, 8);
        $quantityBlogs = $blogModel->getBlogsQuantity();
        return view("pages.index");
    }


}



