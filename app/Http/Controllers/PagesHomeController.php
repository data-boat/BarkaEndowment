<?php

namespace App\Http\Controllers;

use App\Models\PagesHome;
use Illuminate\Http\Request;

class PagesHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $home = PagesHome::all();
        return view('home/create', ["home" => $home]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $home = PagesHome::all();
        // return view('home/create', ["home" => $home]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pages_home = new PagesHome();
        $pages_home->hometital = $request->input('hometital');
        $pages_home->homedescription = $request->input('homedescription');
        $pages_home->hometitalar = $request->input('hometitalar');
        $pages_home->homedescriptionar = $request->input('homedescriptionar');
        $pages_home->save();
        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PagesHome  $pagesHome
     * @return \Illuminate\Http\Response
     */
    public function show(PagesHome $pagesHome)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PagesHome  $pagesHome
     * @return \Illuminate\Http\Response
     */
    public function edit(PagesHome $pagesHome, $id)
    {
        $pages_home = PagesHome::find($id);

        return view('home/edite', ["pages_home" => $pages_home]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PagesHome  $pagesHome
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PagesHome $pagesHome, $id)
    {
        $pages_home = PagesHome::find($id);
        $pages_home->hometital = $request->input('hometital');
        $pages_home->homedescription = $request->input('homedescription');
        $pages_home->hometitalar = $request->input('hometitalar');
        $pages_home->homedescriptionar = $request->input('homedescriptionar');
        $pages_home->save();
        return redirect('/home');
    }

    public function delete(Request $request, $id)
    {
        $pages_home = PagesHome::find($id);
        return view('home/delete', ["pages_home" => $pages_home]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PagesHome  $pagesHome
     * @return \Illuminate\Http\Response
     */
    public function destroy(PagesHome $pagesHome, $id)
    {
        $pages_home = pagesHome::find($id);
        $pages_home->delete();
        return redirect('/home');
    }
}
