<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;
use App\Http\Requests\CarUpdate as CarUpdateRequest;

/**
 * @resource Car
 */
class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     * @hideFromAPIDocumentation
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     * @hideFromAPIDocumentation
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * @hideFromAPIDocumentation
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Get specific Car
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Car::with('user')->find($id);
    }

    /**
     * Show the form for editing the specified resource.
     * @hideFromAPIDocumentation
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update specific Car
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CarUpdateRequest $request, $id)
    {
        //
        $car = Car::find($id);
        if ($request->has('model')) $car->model = $request->get('model');
        if ($request->has('manufacturer')) $car->manufacturer = $request->get('manufacturer');
        if ($request->has('description')) $car->description = $request->get('description');
        $car->save();
        return $car;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @hideFromAPIDocumentation
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
