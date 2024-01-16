<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Manufacture;
use App\Models\TypeModel;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::all();
        return view ("car.index")->with("car", $cars);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $manufactures = Manufacture::all();
        $typemodels = TypeModel::all();
        return view ("car.create")->with("typemodels",$typemodels)->with("manufactures",$manufactures);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            "name" => "required",
            "horsepower" => "required",
            "gasoline" => "required",
            "year" => "required",
            "odometer" => "required",
            "cylinder" => "required",
            "transmission" => "required",
            "price" => "required",
            "manufactures_id" => "required",
            "typemodels_id" => "required"
        ]);

        Car::create($validate);
        return redirect("car")->with("Success","New cars has been added !");
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        $manufactures = Manufacture::all();
        $typemodels = TypeModel::all();
        $cars = Car::all();
        return view ("car.edit")->with("typemodels",$typemodels)->with("manufactures",$manufactures)->with("car",$cars);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {
        $validate = $request->validate([
            "name"=>"required",
            "horsepower"=>"required",
            "gasoline"=>"required",
            "year"=>"required",
            "cylinder"=>"required",
            "transmission"=>"required",
            "price"=>"required",
        ]);
        $car->update($validate);
        return redirect("car")->with("success","Car data has been updated!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        $car->delete();
        return redirect("car")->with("car data successfully deleted!");
    }
}
