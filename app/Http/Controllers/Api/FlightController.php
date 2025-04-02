<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Flight;
use Illuminate\Http\Request;
use App\Http\Requests\FlightRequest;

class FlightController extends Controller
{
    public function index()
    {
        return Flight::all();
    }

  public function store(FlightRequest $request)
    {
    return Flight::create($request->validated());
    }

public function update(FlightRequest $request, Flight $flight)
{
    $flight->update($request->validated());
    return $flight;
}

    public function show(Flight $flight)
    {
        return $flight;
    }

    public function destroy(Flight $flight)
    {
        $flight->delete();
        return response(null, 204);
    }
}