<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{

    public function index(){
        //Codigo que implementamos
        //codigo que solo muestra los primeros 10 registros de la BD
        $pacientes = Paciente::paginate(10);
        return view('pacientes.index', compact('pacientes'))
            ->with('i', (request()->input('page', 1) - 1) * 10);

        /*codigo anterior
        $pacientes = Paciente::all();
        //forma para referenciar la vista, cuando creamos un folder
        return view('pacientes.index',['pacientes'=>$pacientes]);*/
    }

    public function show($id){
        $paciente = Paciente::find($id);
        return view('pacientes.show',compact('paciente'));

    }

    public function create(){
        return view('pacientes.create');

    }

    public function store(Request $request){
        $paciente = new Paciente();
        $paciente->nombre = $request->nombre;
        $paciente->apellido = $request->apellido;
        $paciente->edad = $request->edad;
        $paciente->sexo = $request->sexo;
        $paciente->save();
        return redirect()->route('pacientes.index');

    }

    public function destroy($id){
        Paciente::find($id)->delete();
        return redirect()->route('pacientes.index');
    }

    public function edit($id){
        $paciente = Paciente::find($id);
        return view('pacientes.edit', compact('paciente'));
    }
    
    public function update(Request $request, $id){
        $paciente = Paciente::find($id);
        $paciente->nombre = $request->nombre;
        $paciente->apellido = $request->apellido;
        $paciente->edad = $request->edad;
        $paciente->sexo = $request->sexo;
        $paciente->save();
        return redirect()->route('pacientes.index');
    }

}
