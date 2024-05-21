<?php

namespace App\Http\Controllers;

use App\Models\Objective;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ObjectiveController extends Controller
{
       public function index()
    {
        $objectives = Objective::all();
        return view('objectives.index', compact('objectives'));
    }

    public function create()
    {
        return view('objectives.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title_en' => 'required|string|max:255',
            'title_ar' => 'required|string|max:255',
        ]);

        Objective::create($request->all());

        return redirect()->route('objectives.index');
    }

    public function edit(Objective $objective)
    {
        return view('objectives.edit', compact('objective'));
    }

    public function update(Request $request, Objective $objective)
    {
        $request->validate([
            'title_en' => 'required|string|max:255',
            'title_ar' => 'required|string|max:255',
        ]);

        $objective->update($request->all());

        return redirect()->route('objectives.index');
    }

    public function destroy(Objective $objective)
    {
        $objective->delete();

        return redirect()->route('objectives.index');
    }
}
