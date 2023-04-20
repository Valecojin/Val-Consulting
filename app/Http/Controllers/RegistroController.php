<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registro;


class RegistroController extends Controller
{
 function index()
    {
        $registros = Registro::all();

        return view('registros', ['registros' => $registros]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Nombre' => 'required|max:255',
            'Correo' => 'required|email|unique:registros,Correo|max:255',
            'Telefono' => 'required|max:20',
            'Mensaje' => 'required',
        ]);

        $registro = new Registro;
        $registro->Nombre = $request->Nombre;
        $registro->Correo = $request->Correo;
        $registro->Telefono = $request->Telefono;
        $registro->Mensaje = $request->Mensaje;
        $registro->save();

        return redirect()->route('registros.index')->with('success', 'El registro ha sido agregado satisfactoriamente.');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
{
    $registro = Registro::find($id);

    return view('registros', [
        'registros' => Registro::all(),
        'registro' => $registro
    ]);
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
        $request->validate([
            'Nombre' => 'required|string|max:255',
            'Correo' => 'required|email|max:255',
            'Telefono' => 'required|string|max:255',
            'Mensaje' => 'required|string',
        ]);
    
        $registro = Registro::find($id);
    
        $registro->Nombre = $request->input('Nombre');
        $registro->Correo = $request->input('Correo');
        $registro->Telefono = $request->input('Telefono');
        $registro->Mensaje = $request->input('Mensaje');
    
        $registro->save();
        return redirect()->route('registros.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $registro = Registro::find($id);
        if (!$registro) {
        return redirect()->back()->with('error', 'El registro no existe.');
        }
        $registro->delete();
        return redirect()->route('registros.index')->with('success', 'El registro ha sido eliminado exitosamente.');
}


}
