<?php

namespace App\Http\Controllers;

use App\Models\Plans;
use Illuminate\Http\Request;

class PlansController extends Controller
{
    //
    public function index(){
        $plans = Plans::All();
        return response()->json($plans);
    }

    public function show($id){
        $plans = Plans::findOderFail($id);
        return response()->json($plans);

    }
    public function store(Request $request){
        $plan = Plans::create($request->all());
        return response()->json($plan, 201);
    }
    public function update(Request $request, $id)
    {
        $plan = Plans::findOrFail($id);
        $plan->update($request->all());
        return response()->json($plan, 200);
    }

    public function destroy($id)
    {
        $plan = Plans::findOrFail($id);
        $plan->delete();
        return response()->json(null, 204);
    }

}
