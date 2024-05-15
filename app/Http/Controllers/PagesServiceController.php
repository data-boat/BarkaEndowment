<?php

namespace App\Http\Controllers;

use App\Models\PagesService;
use Illuminate\Http\Request;

class PagesServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = PagesService::all();
        return view('services/create', ["services" => $services]);
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
            'tital' => 'required',
            'description' => 'required',
        ]);

        // ensure the request has a file before we attempt anything else.
        if ($request->hasFile('file')) {

            $request->validate([
                'file' => 'required|image|mimes:jpg,png,jpeg' // Only allow .jpg, .bmp and .png file types.
                // |max:100|dimensions:min_width=100,min_height=100,max_width=100,max_height=100
            ]);

            // Save the file locally in the storage/public/ folder under a new folder named /product
            $request->file->store('services', 'public');

            // Store the record, using the new file hashname which will be it's new filename identity.
            $services = new PagesService([
                "tital" => $request->get('tital'),
                "description" => $request->get('description'),
                "titalar" => $request->get('titalar'),
                "descriptionar" => $request->get('descriptionar'),
                "file_path" => $request->file_path->hashName(),
                "icon" => $request->icon->hashName(),
                "Date" => $request->get('Date'),
                "By" => $request->get('By'),
                "Byar" => $request->get('Byar'),
                "DesHeader" => $request->get('DesHeader'),
                "DesBody" => $request->get('DesBody'),
                "DesFooter" => $request->get('DesFooter'),
                "DesHeaderar" => $request->get('DesHeaderar'),
                "DesBodyar" => $request->get('DesBodyar'),
                "DesFooterar" => $request->get('DesFooterar'),
            ]);
            $services->save(); // Finally, save the record.
        }

        return redirect('/services');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PagesService  $pagesService
     * @return \Illuminate\Http\Response
     */
    public function show(PagesService $pagesService, $id)
    {
        $services = PagesService::find($id);
        return view('services/show', ["services" => $services]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PagesService  $pagesService
     * @return \Illuminate\Http\Response
     */
    public function details(PagesService $pagesService, $id)
    {
        $services = PagesService::find($id);
        return view('services/details', ["services" => $services]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PagesService  $pagesService
     * @return \Illuminate\Http\Response
     */
    public function edit(PagesService $pagesService, $id)
    {
        $services = PagesService::find($id);
        return view('services/edit', ["services" => $services]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PagesService  $pagesService
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PagesService $pagesService, $id)
    {
        $pagesService = PagesService::find($id);
        $pagesService->tital = $request->input('tital');
        $pagesService->description = $request->input('description');
        $pagesService->titalar = $request->input('titalar');
        $pagesService->descriptionar = $request->input('descriptionar');
        $pagesService->Date = $request->input('Date');
        $pagesService->DesHeader = $request->input('DesHeader');
        $pagesService->DesBody = $request->input('DesBody');
        $pagesService->DesFooter = $request->input('DesFooter');
        $pagesService->By = $request->input('By');
        $pagesService->DesHeaderar = $request->input('DesHeaderar');
        $pagesService->DesBodyar = $request->input('DesBodyar');
        $pagesService->DesFooterar = $request->input('DesFooterar');
        $pagesService->Byar = $request->input('Byar');
        $pagesService->save();


        //

        if ($request->hasFile('file_path')) {
            $request->validate([
                'file_path' => 'required|image|mimes:jpg,png,jpeg' // Only allow .jpg, .bmp and .png file types.
            ]);

            $request->file_path->store('services', 'public');
            $pagesService->file_path = $request->file_path->hashName();
            $pagesService->tital = $request->input('tital');
            $pagesService->description = $request->input('description');
            $pagesService->titalar = $request->input('titalar');
            $pagesService->descriptionar = $request->input('descriptionar');
            $pagesService->Date = $request->input('Date');
            $pagesService->DesHeader = $request->input('DesHeader');
            $pagesService->DesBody = $request->input('DesBody');
            $pagesService->DesFooter = $request->input('DesFooter');
            $pagesService->By = $request->input('By');
            $pagesService->DesHeaderar = $request->input('DesHeaderar');
            $pagesService->DesBodyar = $request->input('DesBodyar');
            $pagesService->DesFooterar = $request->input('DesFooterar');
            $pagesService->Byar = $request->input('Byar');
            $pagesService->save();
        }

        if ($request->hasFile('icon')) {
            $request->validate([
                'icon' => 'required|image|mimes:jpg,png,jpeg' // Only allow .jpg, .bmp and .png file types.
            ]);

            $request->icon->store('services', 'public');
            $pagesService->icon = $request->icon->hashName();
            $pagesService->tital = $request->input('tital');
            $pagesService->description = $request->input('description');
            $pagesService->titalar = $request->input('titalar');
            $pagesService->descriptionar = $request->input('descriptionar');
            $pagesService->Date = $request->input('Date');
            $pagesService->DesHeader = $request->input('DesHeader');
            $pagesService->DesBody = $request->input('DesBody');
            $pagesService->DesFooter = $request->input('DesFooter');
            $pagesService->By = $request->input('By');
            $pagesService->DesHeaderar = $request->input('DesHeaderar');
            $pagesService->DesBodyar = $request->input('DesBodyar');
            $pagesService->DesFooterar = $request->input('DesFooterar');
            $pagesService->Byar = $request->input('Byar');
            $pagesService->save();
        }


        return redirect('/services');
    }

    public function delete(Request $request, $id)
    {
        $services = PagesService::find($id);
        return view('services/delete', ["services" => $services]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PagesService  $pagesService
     * @return \Illuminate\Http\Response
     */
    public function destroy(PagesService $pagesService, $id)
    {
        $services = pagesService::find($id);
        $services->delete();
        return redirect('/services');
    }
}
