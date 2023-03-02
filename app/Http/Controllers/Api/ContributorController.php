<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contributors;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Resources\PostResource;


class ContributorController extends Controller
{
    public function index()
    {
        $contributors = DB::select('SELECT * FROM contributors');
        return new PostResource(true, 'List Data Contributors', $contributors);
    }
    public function show($id)
    {
        $contributors = DB::select("SELECT * FROM contributors WHERE id = '$id' ");
        return new PostResource(true, 'List Data Contributors', $contributors);
    }
}
