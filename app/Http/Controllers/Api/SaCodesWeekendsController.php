<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\SaCodesWeekends;
use App\Http\Resources\PostResource;


class SaCodesWeekendsController extends Controller
{
    public function index()
    {
        $data = SaCodesWeekends::select(
            "sacodesweekends.*", // select all from sacodesweekends table
            "contributors.*"
        )
        ->join('contributors', 'contributors.id', 'sacodesweekends.contributor_id')
        ->get();

        return new PostResource(true, 'List Data Sacodes Weekends', $data);
    }
    public function show($id)
    {
        $data = SaCodesWeekends::select(
            "sacodesweekends.*", // select all from sacodesweekends table
            "contributors.*"
        )
        ->join("contributors", "contributors.id", "=", "sacodesweekends.contributor_id")
        ->where("sacodesweekends.id", $id)
        ->first();
        return new PostResource(true, 'List Data Contributors', $data);
    }
}
