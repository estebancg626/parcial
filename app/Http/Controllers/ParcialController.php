<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\parcial;

class ParcialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parcials=parcial::orderBy('id','DESC')->paginate(5);
        return view('parcial.index',compact('parcials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('parcial.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request,[ 'nombre_empleado'=>'required', 'apellido_empleado'=>'required', 'identificacion'=>'required', 'nombre_usuario'=>'required', 'contraseña_usuario'=>'required', 'identificacion'=>'required', 'correo_empleado'=>'required']);
        parcial::create($request->all());
        return redirect()->route('parcial.index')->with('success','Registro creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $parcials=parcial::find($id);
        return view('parcial.show',compact('parcials'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $parcial=parcial::find($id);
        return view('parcial.edit',compact('parcial'));
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
         $this->validate($request,[ 'nombre_empleado'=>'required', 'apellido_empleado'=>'required', 'identificacion'=>'required', 'nombre_usuario'=>'required', 'contraseña_usuario'=>'required', 'identificacion'=>'required', 'correo_empleado'=>'required']);
           parcial::find($id)->update($request->all());
        return redirect()->route('parcial.index')->with('success','Registro actualizado');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         parcial::find($id)->delete();
        return redirect()->route('parcial.index')->with('success','Registro Eliminado');
    }
     public function getParcial(){

        $parcials=parcial::all();
        return response()->json($parcial);
        
    }
}





