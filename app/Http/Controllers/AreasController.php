<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Area;
use App\City;

class AreasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $areas = Area::all();
       
        return view('general.areas.view')->with("areas",$areas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::all();

        return view('general.areas.create',compact('cities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $area = new Area();
        $area->name = $request->input('name');
        $area->slug = str_slug($request->input('name'));
        $area->city_id = $request->input('city');
        $area->save();
        $message = "Area Created";
        return redirect('/areas')->with('global', $message);;
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
        $area = Area::where('slug', $slug)->first();

        $cities = City::all();
    
        return view('general.areas.edit',compact('area','cities'));
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
        $area = Area::find($id);
        $area->city_id = $request->input('city');
        $area->save();
        $message = "Area Updated";
        return redirect('/areas')->with('global', $message);;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
        $area = Area::find($id);

        $area->delete();

        $message = "Area Deleted";

        return redirect('/areas')->with('global', $message);
    }
}
