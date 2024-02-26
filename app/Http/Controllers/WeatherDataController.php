<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WeatherData;

class WeatherDataController extends Controller
{
    //
    public function index()
    {
        $weatherData = WeatherData::all();
        return response()->json($weatherData);
    }

    public function show($id)
    {
        $weatherData = WeatherData::findOrFail($id);
        return response()->json($weatherData);
    }

    public function store(Request $request)
    {
        $weatherData = WeatherData::create($request->all());
        return response()->json($weatherData, 201);
    }

    public function update(Request $request, $id)
    {
        $weatherData = WeatherData::findOrFail($id);
        $weatherData->update($request->all());
        return response()->json($weatherData, 200);
    }

    public function destroy($id)
    {
        $weatherData = WeatherData::findOrFail($id);
        $weatherData->delete();
        return response()->json(null, 204);
    }


}
