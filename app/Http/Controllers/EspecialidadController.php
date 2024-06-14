<?php

namespace App\Http\Controllers;

use App\Models\Especialidad;
use Illuminate\Http\Request;

class EspecialidadController extends Controller
{
    //
    
    public function index(){
         //Codigo que implementamos
        //codigo que solo muestra los primeros 10 registros de la BD
        $especialidades = Especialidad::paginate(10);
        return view('especialidades.index', compact('especialidades'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
        /*
        codigo anterior
        $especialidades = Especialidad::all();
        //forma para referenciar la vista, cuando creamos un folder
        return view('especialidades.index',['especialidades'=>$especialidades]);*/
    }

    public function show($id){
        $especialidad = Especialidad::find($id);
        return view('especialidades.show',compact('especialidad'));

    }

    public function create(){
        return view('especialidades.create');

    }

    public function store(Request $request){
        $especialidad = new Especialidad();
        $especialidad->nombre = $request->nombre;
        $especialidad->descripcion = $request->descripcion;
        $especialidad->save();
        return redirect()->route('especialidades.index');

    }

    public function destroy($id){
        Especialidad::find($id)->delete();
        return redirect()->route('especialidades.index');
    }

    public function edit($id){
        $especialidad = Especialidad::find($id);
        return view('especialidades.edit', compact('especialidad'));
    }
    
    public function update(Request $request, $id){
        $especialidad = Especialidad::find($id);
        $especialidad->nombre = $request->nombre;
        $especialidad->descripcion = $request->descripcion;
        $especialidad->save();
        return redirect()->route('especialidades.index');
    }

}
