<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;

class CitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities = City::all();
       
        return view('general.cities.view')->with("cities",$cities);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('general.cities.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$Category = App\Category::create(['name' => $request->input('name')]);
        //another create method 
        $city = new City();
        $city->name = $request->input('name');
        $city->slug = str_slug($request->input('name'));
        $city->save();
        $message = "City Created";
        return redirect('/cities')->with('global', $message);;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $city = City::where('slug', $slug)->first();
    
        return view('general.cities.edit',compact('city'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $city = City::find($id);
        $city->name = $request->input('name');
        $city->slug = str_slug($request->input('name'));
        $city->save();
        $message = "City Updated";
        return redirect('/cities')->with('global', $message);;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
        $city = City::find($id);

        $city->delete();

        $message = "City Deleted";

        return redirect('/cities')->with('global', $message);
    }
}
