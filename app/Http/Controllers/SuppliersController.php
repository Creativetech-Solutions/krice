<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;
use App\Area;


class SuppliersController extends Controller
{
    //
    public function index()
    {
        $suppliers = Supplier::all();
       
        return view('suppliers.view')->with("suppliers",$suppliers);
    }

    public function create(){

    	$areas = Area::all();

    	return view('suppliers.create',compact('areas'));
    }

    public function store(Request $request)
    {
        
        $supplier = new Supplier();
        $supplier->name = $request->input('name');
        $supplier->address = $request->input('address');
        $supplier->contact = $request->input('contact');
        $supplier->description = $request->input('description');
        $supplier->manager_name = $request->input('manager_name');
        $supplier->manager_contact = $request->input('manager_contact');
        $supplier->area_id = $request->input('area');

        $supplier->save();
        $message = "Supplier Created";
        return redirect('/suppliers/view')->with('global', $message);;
    }


    public function edit($id)
    {
        $supplier = Supplier::where('id', $id)->first();
    	// dd($supplier);

        $areas = Area::all();
    
        return view('suppliers.edit',compact('supplier','areas'));
    }


    public function update(Request $request, $id)
    {
        $supplier = Supplier::find($id);
        $supplier->name = $request->input('name');
        $supplier->address = $request->input('address');
        $supplier->contact = $request->input('contact');
        $supplier->description = $request->input('description');
        $supplier->manager_name = $request->input('manager_name');
        $supplier->manager_contact = $request->input('manager_contact');
        $supplier->area_id = $request->input('area');

        $supplier->save();
        $message = "Supplier Updated";
        return redirect('/suppliers/view')->with('global', $message);;
    }

    public function destroy($id)
    {
       
        $supplier = Supplier::find($id);

        $supplier->delete();

        $message = "Supplier Deleted";

        return redirect('/suppliers/view')->with('global', $message);
    }

}
