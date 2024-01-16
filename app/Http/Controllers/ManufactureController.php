<?php

namespace App\Http\Controllers;

use App\Models\Manufacture;
use Illuminate\Http\Request;

class ManufactureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $manufacture = Manufacture::all();
        return view("manufacture.index")->with("manufacture", $manufacture);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ("manufacture.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            "brand" => "required|unique:manufactures",
        ]);
        Manufacture::create($validate);

        return redirect("manufacture")->with("Success","New Brand has been added!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Manufacture $manufacture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $manufacture = Manufacture::find($id);
        return view('manufacture.edit')->with('manufacture',$manufacture);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            "brand" => "required"
        ]);
        Manufacture::find($id)->update($validate);
        return redirect("manufacture")->with("Manufacturer Data has been changed");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $manufacture = Manufacture::find($id);
        $manufacture->delete();
        return redirect("manufacture")->with("manufacturer deleted successfully");
    }
}
