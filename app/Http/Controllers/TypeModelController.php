<?php

namespace App\Http\Controllers;

use App\Models\TypeModel;
use Illuminate\Http\Request;

class TypeModelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $typemodel = TypeModel::all();
        return view ("typemodel.index")->with("typemodel", $typemodel);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ("typemodel.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            "model" => "required|unique:typemodel",
        ]);
        TypeModel::create($validate);

        return redirect("typemodel")->with("success","New Model has been added!");
    }

    /**
     * Display the specified resource.
     */
    public function show(TypeModel $typeModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $typemodel = TypeModel::find($id);
        return view('typemodel.edit')->with('typemodel',$typemodel);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            "model" => "required"
        ]);
        TypeModel::find($id)->update($validate);
        return redirect("typemodel")->with("Type Model data has been changed");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $typeModel = TypeModel::find($id);
        $typeModel->delete();
        return redirect("typemodel")->with("Type Model deleted Successfully");
    }
}
