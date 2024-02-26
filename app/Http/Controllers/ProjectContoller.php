<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projects;

class ProjectContoller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $projects = $user->projects;
        return response()->json($projects, 403);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique|string|max:255',
            'description' => 'required',
            'plant_id' => 'required|exists:plants,id',
        ]);

        $project = Projects::create($request->all());

        return response()->json($project, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Projects $project)
    {
        if (auth()->id() != $annonce->user_id && !auth()->user()->is_admin) {
            return back();
        }
        return view('my-view', compact(['project']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Projects $project)
    {
        if (auth()->id() != $project->user_id) {
            return back();
        }
        return response()->json(['yes', 200]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Projects $project)
    {
        $request->validate([
            'name' => 'required|unique|string|max:255',
            'description' => 'required',
            'plant_id' => 'required|exists:plants,id',
        ]);

        $project->update($request->all());

        return response()->json($project);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Projects $project)
    {
        $project->delete();

        return response()->noContent();
    }
}
