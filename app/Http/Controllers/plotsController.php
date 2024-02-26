<?php

namespace App\Http\Controllers;
use App\Models\Plot;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\AssignOp\Plus;

class plotsController extends Controller
{
    //
    public function index()
    {
        $plots = Plot::all();
        return response()->json($plots);
    }

    public function show($id)
    {
        $plot = Plot::findOrFail($id);
        return response()->json($plot);
    }

    public function store(Request $request)
    {
        $plot = Plot::create($request->all());
        return response()->json($plot, 201);
    }
    public function update(Request $request, $id)
    {
        $plot = Plot::findOrFail($id);
        $plot->update($request->all());
        return response()->json($plot, 200);
    }
    public function destroy($id)
    {
        $plot = Plot::findOrFail($id);
        $plot->delete();
        return response()->json(null, 204);
    }
     // Méthode personnalisée pour récupérer toutes les parcelles pour un utilisateur donné
     public function getUserPlots($idUser)
     {
         $plots = Plot::where('id_user', $idUser)->get();
         return response()->json($plots);
     }
}
