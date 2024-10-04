<?php

namespace App\Http\Controllers;

use App\Models\table_empleados;
use Illuminate\Http\Request;

class EmpleadosController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        return view('empleados.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //print_r($_POST);
        $datosEmpleados = request()->all();
        print_r($datosEmpleados);
        table_empleados::create($datosEmpleados);
       return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(empleados $empleados)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(empleados $empleados)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, empleados $empleados)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(empleados $empleados)
    {
        //
    }
}
