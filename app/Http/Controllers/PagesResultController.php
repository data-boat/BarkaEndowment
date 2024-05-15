<?php

namespace App\Http\Controllers;

use App\Models\PagesResult;
use Illuminate\Http\Request;

class PagesResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = PagesResult::all();
        return view('result/create', ["result" => $result]);
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
        $result = new PagesResult();
        $result->firstname = $request->input('firstname');
        $result->secountname = $request->input('secountname');
        $result->thairdname = $request->input('thairdname');
        $result->firstname = $request->input('firstnamear');
        $result->secountname = $request->input('secountnamear');
        $result->thairdname = $request->input('thairdnamear');
        $result->first = $request->input('first');
        $result->secound = $request->input('secound');
        $result->thaird = $request->input('thaird');
        $result->save();
        return redirect('/result');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PagesResult  $pagesResult
     * @return \Illuminate\Http\Response
     */
    public function show(PagesResult $pagesResult)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PagesResult  $pagesResult
     * @return \Illuminate\Http\Response
     */
    public function edit(PagesResult $pagesResult, $id)
    {
        $result = PagesResult::find($id);
        return view('result/edit', ["result" => $result]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PagesResult  $pagesResult
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, PagesResult $pagesResult)
    {
        $result = PagesResult::find($id);
        $result->firstname = $request->input('firstname');
        $result->secountname = $request->input('secountname');
        $result->thairdname = $request->input('thairdname');
        $result->firstnamear = $request->input('firstnamear');
        $result->secountnamear = $request->input('secountnamear');
        $result->thairdnamear = $request->input('thairdnamear');
        $result->first = $request->input('first');
        $result->secound = $request->input('secound');
        $result->thaird = $request->input('thaird');
        $result->save();
        return redirect('/result');
    }

    public function delete(Request $request, $id)
    {
        $result = PagesResult::find($id);
        return view('result/delete', ["result" => $result]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PagesResult  $pagesResult
     * @return \Illuminate\Http\Response
     */
    public function destroy(PagesResult $pagesResult, $id)
    {
        $result = PagesResult::find($id);
        $result->delete();
        return redirect('/result');
    }
}
