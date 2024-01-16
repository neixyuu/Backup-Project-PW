<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Manufacture;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ManufactureController extends Controller
{
    public function index()
    {
        $manufacture = Manufacture::all();
        if ($manufacture->isEmpty()) {
            $response['message'] = 'No Manufacturer found.';
            $response['success'] = false;
            return response()->json($response, Response::HTTP_NOT_FOUND);
        }

        $response['success'] = true;
        $response['message'] = 'manufacturer found.';
        $response['data'] = $manufacture;
        return response()->json($response, Response::HTTP_OK);
        // atau
        // return response()->json($response, 200);
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'brand' => 'required|unique:manufacture',
        ]);

        $manufacture = Manufacture::create($validate);
        if ($manufacture) {
            $response['success'] = true;
            $response['message'] = 'manufacture added successfully.';
            return response()->json($response, Response::HTTP_CREATED);
        }
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'brand' => 'required|unique:manufacture',
        ]);

        Manufacture::where('id', $id)->update($validate);
        $response['success'] = true;
        $response['message'] = 'Manufacture has been updated.';
        return response()->json($response, Response::HTTP_OK);
    }

    public function destroy($id)
    {
        $manufacture = Manufacture::where('id', $id);
        if (count($manufacture->get())) {
            $manufacture->delete();
            $response['success'] = true;
            $response['message'] = 'manufacture deleted successfully.';
            return response()->json($response, Response::HTTP_OK);
        } else {
            $response['success'] = false;
            $response['message'] = 'manufacture not found.';
            return response()->json($response, Response::HTTP_NOT_FOUND);
        }
    }
}
