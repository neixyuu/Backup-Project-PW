<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\TypeModel;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CarController extends Controller
{
    public function index()
    {
        $car = Car::all();
        if ($car->isEmpty()) {
            $response['message'] = 'No Car found.';
            $response['success'] = false;
            return response()->json($response, Response::HTTP_NOT_FOUND);
        }

        $response['success'] = true;
        $response['message'] = ' Car found.';
        $response['data'] = $car;
        return response()->json($response, Response::HTTP_OK);
        // atau
        // return response()->json($response, 200);
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|unique:car',
            'horsepower' => 'required',
            'gasoline' => 'required',
            'year' => 'required',
            'odometer' => 'required',
            'cylinder' => 'required',
            'transmission' => 'required',
            'price' => 'required',
        ]);

        $car = Car::create($validate);
        if ($car) {
            $response['success'] = true;
            $response['message'] = 'Car added successfully.';
            return response()->json($response, Response::HTTP_CREATED);
        }
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'name' => 'required|unique:car',
            'horsepower' => 'required',
            'gasoline' => 'required',
            'year' => 'required',
            'odometer' => 'required',
            'cylinder' => 'required',
            'transmission' => 'required',
            'price' => 'required',
        ]);

        Car::where('id', $id)->update($validate);
        $response['success'] = true;
        $response['message'] = 'Car has been updated.';
        return response()->json($response, Response::HTTP_OK);
    }
    public function destroy($id)
    {
        $car = Car::where('id', $id);
        if (count($car->get())) {
            $car->delete();
            $response['success'] = true;
            $response['message'] = 'car deleted successfully.';
            return response()->json($response, Response::HTTP_OK);
        } else {
            $response['success'] = false;
            $response['message'] = 'car not found.';
            return response()->json($response, Response::HTTP_NOT_FOUND);
        }
    }
}
