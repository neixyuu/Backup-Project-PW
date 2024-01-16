<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\TypeModel;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CarController extends Controller
{
    public function index()
    {
        $model = TypeModel::all();
        if ($model->isEmpty()) {
            $response['message'] = 'No typemodel found.';
            $response['success'] = false;
            return response()->json($response, Response::HTTP_NOT_FOUND);
        }

        $response['success'] = true;
        $response['message'] = 'typemodel found.';
        $response['data'] = $model;
        return response()->json($response, Response::HTTP_OK);
        // atau
        // return response()->json($response, 200);
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'model' => 'required|unique:typemodel',
        ]);

        $typemodel = TypeModel::create($validate);
        if ($typemodel) {
            $response['success'] = true;
            $response['message'] = 'Type model added successfully.';
            return response()->json($response, Response::HTTP_CREATED);
        }
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'model' => 'required|unique:typemodel',
        ]);

        TypeModel::where('id', $id)->update($validate);
        $response['success'] = true;
        $response['message'] = 'Type Model has been updated.';
        return response()->json($response, Response::HTTP_OK);
    }
    public function destroy($id)
    {
        $typemodel = TypeModel::where('id', $id);
        if (count($typemodel->get())) {
            $typemodel->delete();
            $response['success'] = true;
            $response['message'] = 'typemodel deleted successfully.';
            return response()->json($response, Response::HTTP_OK);
        } else {
            $response['success'] = false;
            $response['message'] = 'typemodel not found.';
            return response()->json($response, Response::HTTP_NOT_FOUND);
        }
    }
}
