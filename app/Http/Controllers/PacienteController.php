<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;
Use Illuminate\Support\Facades\Session;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pacientes = Paciente::paginate(4);
        return view('paciente.index')
            ->with('pacientes',$pacientes);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('paciente.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
           
            'cedula' => 'required|numeric|max:9999999999',
            'nombre' => 'required',
            'edad' => 'required|numeric|max:99'
        ]);
    

        $paciente = Paciente::create($request->only('cedula','nombre','edad','direccion','correo'));

        Session::flash('mensaje', 'El paciente se ha creado con exito!');
        return redirect()->route('paciente.index');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Paciente $paciente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Paciente $paciente)
    {
        return view('paciente.form')
            ->with('paciente', $paciente);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Paciente $paciente)
    {
        $request->validate([
           
            'cedula' => 'required|numeric|max:9999999999',
            'nombre' => 'required',
            'edad' => 'required|numeric|max:99'
        ]);
    

        $paciente->cedula = $request['cedula'];
        $paciente->nombre = $request['nombre'];
        $paciente->edad = $request['edad'];
        $paciente->correo = $request['correo'];
        $paciente->direccion = $request['direccion'];
        $paciente->save();

        Session::flash('mensaje', 'El registro del paciente ha sido editado');
        return redirect()->route('paciente.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Paciente $paciente)
    {
        $paciente->delete();
        Session::flash('mensaje', 'El registro del paciente ha sido eliminado');
        return redirect()->route('paciente.index');
    }
}
