<?php
/**
 * User: IGrock
 * Date: 22.04.2018
 * Time: 14:07
 */

namespace App\Http\Controllers;


use App\Blog;
use Illuminate\Http\Request;

class AjaxController extends Controller
{

    public function getblogs(Request $request){
        $blog = new Blog();

        $result = $blog->getBlogArticles($request->input('startIndex'), $request->input('limit'));
        return response()->json($result);
    }

    public function get(){
        return response()->view("pages.hello", ["name" => "vasya"]);
    }

}