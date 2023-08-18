<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("crud.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Crud $crud)
    {
        //
        $crud = Crud::create([
            "name" => $request->input("name"),
            "age" => $request->input("age")
        ]);
        return redirect("crud/show");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function show(Crud $crud)
    {
        //
        $crud = Crud::all();
        return view("crud.show", ["list" => $crud]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Crud $crud)
    {
        //
        $record = Crud::find($id);
        return view('crud.edit', ["record" => $record]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request, Crud $crud)
    {
        //
        $record = Crud::find($id);
        // print_r($request->all());
        if ($record) {
            $record->name = $request->input('name');
            $record->age = $request->input('age');
            $record->save();
            return redirect("crud/show");
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Crud $crud)
    {
        //
        $record = Crud::find($id);
        $record->delete();
        return redirect("crud/show");
    }
}
