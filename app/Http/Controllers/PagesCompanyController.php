<?php

namespace App\Http\Controllers;

use App\Models\PagesCompany;
use App\Models\PagesCountry;
use Illuminate\Http\Request;

class PagesCompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Company = PagesCompany::all();
        $Country = PagesCountry::all();
        return view('Company/create', compact("Company", 'Country'));
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
            'CompanyName' => 'required',
            'CompanyDesHeader' => 'required',
            'CompanyDesBody' => 'required',
            'CompanyDesFooter' => 'required',

        ]);
        // $Country = PagesCountry::find($request->id);
        // ensure the request has a file before we attempt anything else.
        if ($request->hasFile('file', 'fileimage')) {

            $request->validate([
                'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
            ]);

            // Save the file locally in the storage/public/ folder under a new folder named /product
            $request->file->store('Company', 'public');

            // Store the record, using the new file hashname which will be it's new filename identity.
            $Company = new PagesCompany([
                "country_id" => $request->country_id,
                "CompanyName" => $request->get('CompanyName'),
                "CompanyLogo" => $request->file->hashName(),
                "CompanyDesHeader" => $request->get('CompanyDesHeader'),
                "CompanyDesBody" => $request->get('CompanyDesBody'),
                "CompanyDesFooter" => $request->get('CompanyDesFooter'),
                "CompanyImage" => $request->file->hashName(),
            ]);

            $Company->save(); // Finally, save the record.
        }

        return redirect('/Company');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PagesCompany  $pagesCompany
     * @return \Illuminate\Http\Response
     */
    public function show(PagesCompany $pagesCompany)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PagesCompany  $pagesCompany
     * @return \Illuminate\Http\Response
     */
    public function edit(PagesCompany $pagesCompany)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PagesCompany  $pagesCompany
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PagesCompany $pagesCompany)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PagesCompany  $pagesCompany
     * @return \Illuminate\Http\Response
     */
    public function destroy(PagesCompany $pagesCompany)
    {
        //
    }
}
