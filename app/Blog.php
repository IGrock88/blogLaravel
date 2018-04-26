<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Blog extends Model
{
    public function getBlogArticles($startIndex, $quantityOnPage)
    {
        return DB::table('blogs')
            ->offset($startIndex)
            ->limit($quantityOnPage)
            ->get();

    }

    public function getBlogsQuantity()
    {
        return DB::table('blogs')->count();
    }
}
