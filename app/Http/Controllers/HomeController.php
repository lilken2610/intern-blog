<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use \Illuminate\Support\Str;

class HomeController extends Controller
{
    public function home(){
        $get_all_blog = DB::table('tbl_blogs')->orderby('blogs_id', 'desc')->get();
        return view('client_layout')->with('get_all_blog', $get_all_blog);
    }
}
