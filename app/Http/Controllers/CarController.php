<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use Car model class
use App\Car;

// use User model class
use App\User;

// use Tag model class
use App\Tag;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::all();

        // Return to view
        return view("cars.index", compact("cars"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cars = Car::all();
        $users = User::all();
        $tags = Tag::all();

        // Return to view
        return view("cars.create", compact("cars", "users", "tags"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validation
        $request->validate([
          "user_id" => "required|integer",
          "manufacturer" => "required|max:255",
          "model" => "required|max:255",
          "engine" => "required|max:255",
          "plate" => "required|max:255",
          "year" => "required|integer|min:1900|max:2020",
          "price" => "required|numeric",
        ]);

        // All data from request
        $data = $request->all();

        // Create new istance
        $new_car = new Car();
        $new_car->fill($data);

        // Save data
        $new_car->save();

        if (isset($data["tags"])) {
          // Sync Foreign key
          $new_car->tags()->sync($data["tags"]);
        }

        // Redirect to view
        return redirect()->route("cars.show", $new_car);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
      // Return to view
      return view("cars.show", compact("car"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
      $users = User::all();
      $tags = Tag::all();

      // Return to view
      return view("cars.edit", compact("car", "users", "tags"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
      // All data from request
      $data = $request->all();

      // Create new istance
      $new_car = new Car();

      // Save data
      $new_car->update();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
