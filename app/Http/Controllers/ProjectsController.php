<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projects;
class ProjectsController extends Controller
{
    //
    public function index()
    {
        $projects = Projects::all();
        return response()->json($projects);
    }
    public function show($id)
    {
        $project = Projects::findOrFail($id);
        return response()->json($project);
    }
    public function store(Request $request)
    {
        $project = Projects::create($request->all());
        return response()->json($project, 201);
    }

    public function update(Request $request, $id)
    {
        $project = Projects::findOrFail($id);
        $project->update($request->all());
        return response()->json($project, 200);
    }
    public function destroy($id)
    {
        $project = Projects::findOrFail($id);
        $project->delete();
        return response()->json(null, 204);
    }

}
