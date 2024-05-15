<?php

namespace App\Http\Controllers;

use App\Models\PagesAboutUs;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class PagesAboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = PagesAboutUs::all();
        return view('about/create', ["about" => $about]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'aboutdescription' => 'required',
        ]);
        $about = new PagesAboutUs();
        $about->aboutdescription = $request->input('aboutdescription');
        $about->aboutdescriptionar = $request->input('aboutdescriptionar');
        $about->save();
        return redirect('/about')->with('success', 'Item created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PagesAboutUs  $pagesAboutUs
     * @return \Illuminate\Http\Response
     */
    public function show(PagesAboutUs $pagesAboutUs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PagesAboutUs  $pagesAboutUs
     * @return \Illuminate\Http\Response
     */
    public function edit(PagesAboutUs $pagesAboutUs, $id)
    {
        $about = PagesAboutUs::find($id);

        return view('about/edit', ["about" => $about]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PagesAboutUs  $pagesAboutUs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PagesAboutUs $pagesAboutUs, $id)
    {
        $about = PagesAboutUs::find($id);
        $about->aboutdescription = $request->input('aboutdescription');
        $about->aboutdescriptionar = $request->input('aboutdescriptionar');
        $about->save();
        return redirect('/about');
    }

    public function delete(Request $request, $id)
    {
        $about = PagesAboutUs::find($id);
        return view('about/delete', ["about" => $about]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PagesAboutUs  $pagesAboutUs
     * @return \Illuminate\Http\Response
     */
    public function destroy(PagesAboutUs $pagesAboutUs, $id)
    {
        $about = PagesAboutUs::find($id);
        $about->delete();
        return redirect('/about');
    }
}
