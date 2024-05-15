<?php

namespace App\Http\Controllers;

use App\Models\PagesWork;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;

class PagesWorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $works = PagesWork::all();
        return view('work/create', ["works" => $works]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        // $works = PagesWork::all();
        // return view('work/create', ["works" => $works]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('file')) {

            $request->validate([
                'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
            ]);

            // Save the file locally in the storage/public/ folder under a new folder named /product
            $request->file->store('work', 'public');

            // Store the record, using the new file hashname which will be it's new filename identity.
            $work = new PagesWork([
                "name" => $request->get('name'),
                "file_path" => $request->file->hashName()
            ]);
            $work->save(); // Finally, save the record.
        }

        return redirect('/work');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PagesWork  $pagesWork
     * @return \Illuminate\Http\Response
     */
    public function show(PagesWork $pagesWork)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PagesWork  $pagesWork
     * @return \Illuminate\Http\Response
     */
    public function edit(PagesWork $pagesWork, $id)
    {
        $work_page = PagesWork::find($id);
        return view('work/edit', ["work_page" => $work_page]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PagesWork  $pagesWork
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PagesWork $pagesWork, $id)
    {

        $work_page = PagesWork::find($id);
        if ($request->hasFile('file')) {
            $request->validate([
                'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
            ]);
            $request->file->store('work', 'public');
            $work_page->file_path = $request->file->hashName();
            $work_page->name = $request->input('name');
            $work_page->save();
        }

        return redirect('/work');
    }


    public function delete(Request $request, $id)
    {
        $works = PagesWork::find($id);
        return view('work/delete', ["works" => $works]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PagesWork  $pagesWork
     * @return \Illuminate\Http\Response
     */
    public function destroy(PagesWork $pagesWork, $id)
    {
        $works = PagesWork::find($id);
        $works->delete();
        return redirect('/work');
    }
}
