<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Web;
use App\Models\PagesService;
use Illuminate\Support\Facades\DB;


class BlogController extends Controller
{
    public function index()
    {
        $home = DB::table('pages_homes')->latest()->first();
        $about = DB::table('pages_about_us')->latest()->first();
        $result = DB::table('pages_results')->latest()->first();
        $service = PagesService::all();
        // $web = Web::all();
        return view('/blog', compact('home', 'about', 'result', 'service'));
    }
}
