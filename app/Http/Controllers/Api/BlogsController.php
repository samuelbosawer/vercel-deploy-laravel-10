<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Blogs;
use App\Http\Resources\PostResource;

class BlogsController extends Controller
{
    public function index()
    {
        $blogs = DB::select('SELECT * FROM blogs');
        return new PostResource(true, 'List Data Blogs', $blogs);
    }
    public function show($id)
    {
        $blogs = DB::select("SELECT * FROM blogs WHERE id = '$id' ");
        return new PostResource(true, 'List Data Blogs', $blogs);
    }
}
