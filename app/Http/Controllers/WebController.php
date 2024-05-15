<?php

namespace App\Http\Controllers;

use App\Models\Web;
use App\Models\PagesService;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class WebController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $home = DB::table('pages_homes')->latest()->first();
        $about = DB::table('pages_about_us')->latest()->first();
        $result = DB::table('pages_results')->latest()->first();
        $service = PagesService::all();
        // $web = Web::all();
        return view('/web', compact('home', 'about', 'result', 'service'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Web = Web::all();
        return view('Web', ["Web" => $Web]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Web = new Web();
        $Web->name = $request->input('name');
        $Web->mail = $request->input('mail');
        $Web->subject = $request->input('subject');
        $Web->comment = $request->input('comment');
        $Web->save();
        // alert()->success('Sent!');
        
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Web  $web
     * @return \Illuminate\Http\Response
     */
    public function show(Web $web, $id)
    {
        $web = Web::find($id);
        return view('/blog', ["pages_home" => $web]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Web  $web
     * @return \Illuminate\Http\Response
     */
    public function edit(Web $web)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Web  $web
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Web $web)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Web  $web
     * @return \Illuminate\Http\Response
     */
    public function destroy(Web $web)
    {
        //
    }
}
