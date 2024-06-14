<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctoresController extends Controller
{
    //
    public function index()
    {
        //Codigo que implementamos
        //codigo que solo muestra los primeros 10 registros de la BD
        $doctores = Doctor::paginate(10);
        return view('doctores.index', compact('doctores'))
            ->with('i', (request()->input('page', 1) - 1) * 10);

        /*codigo anterior
        $doctores = Doctor::all();
        //forma para referenciar la vista, cuando creamos un folder
        return view('doctores.index',['doctores'=>$doctores]);
        */
    }

    public function show($id)
    {
        $doctor = Doctor::find($id);
        return view('doctores.show', compact('doctor'));
    }

    public function create()
    {
        return view('doctores.create');
    }

    public function store(Request $request)
    {
        $doctor = new Doctor();
        $doctor->nombre = $request->nombre;
        $doctor->apellido = $request->apellido;
        $doctor->especialidad = $request->especialidad;
        $doctor->save();
        return redirect()->route('doctores.index');
    }

    public function destroy($id)
    {
        Doctor::find($id)->delete();
        return redirect()->route('doctores.index');
    }

    public function edit($id)
    {
        $doctor = Doctor::find($id);
        return view('doctores.edit', compact('doctor'));
    }

    public function update(Request $request, $id)
    {
        $doctor = Doctor::find($id);
        $doctor->nombre = $request->nombre;
        $doctor->apellido = $request->apellido;
        $doctor->especialidad = $request->especialidad;
        $doctor->save();
        return redirect()->route('doctores.index');
    }
}
