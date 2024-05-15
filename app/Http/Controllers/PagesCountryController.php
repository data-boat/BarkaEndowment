<?php

namespace App\Http\Controllers;

use App\Models\PagesCountry;
use Illuminate\Http\Request;

class PagesCountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Country = PagesCountry::all();
        return view('Country/create', ["Country" => $Country]);
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

        // Validate the inputs
        $request->validate([
            'CountryName' => 'required',
        ]);

        // ensure the request has a file before we attempt anything else.
        if ($request->hasFile('file')) {

            $request->validate([
                'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
            ]);

            // Save the file locally in the storage/public/ folder under a new folder named /product
            $request->file->store('Country', 'public');

            // Store the record, using the new file hashname which will be it's new filename identity.
            $Country = new PagesCountry([
                "CountryName" => $request->get('CountryName'),
                "CountryFlag" => $request->file->hashName()

            ]);
            $Country->save(); // Finally, save the record.
        }

        return redirect('/Country');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PagesCountry  $pagesCountry
     * @return \Illuminate\Http\Response
     */
    public function show(PagesCountry $pagesCountry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PagesCountry  $pagesCountry
     * @return \Illuminate\Http\Response
     */
    public function edit(PagesCountry $pagesCountry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PagesCountry  $pagesCountry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PagesCountry $pagesCountry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PagesCountry  $pagesCountry
     * @return \Illuminate\Http\Response
     */
    public function destroy(PagesCountry $pagesCountry)
    {
        //
    }
}
