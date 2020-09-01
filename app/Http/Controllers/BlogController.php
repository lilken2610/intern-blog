<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BlogController extends Controller
{
    public function blog_detail($blog_id){
        $blog_detail = DB::table('tbl_blogs')->where('blogs_id', $blog_id)->get();
        return view('client.blog_detail')->with('blog_detail', $blog_detail);
    }
}
