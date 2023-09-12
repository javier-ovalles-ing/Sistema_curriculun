<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Puesto;

class PuestoController extends Controller
{
    
    public function show(){
        $puestos = Puesto::get();
        return view('puesto.index',['puestos'=>$puestos]);
    }

    public function crear(){
        return view('puesto.crear',['puesto'=>new Puesto()]);
    }

    public function guardar(Request $request){

        $puesto = $request->validate([
            'nombredelpuesto' => ['required','string','max:255']
        ]);

        Puesto::create($puesto);

        return to_route('puesto.index')->with('mensaje','puesto '. $request->nombredelpuesto.' creado');
    }

    public function editar(Puesto $puesto){

        return view('puesto.editar',['puesto'=>$puesto]);
    }

    public function actualizar(Request $request,Puesto $puesto){

        $Puesto_actualizado = $request->validate([
            'nombredelpuesto' => ['required','string','max:255']
        ]);

        $puesto->update($Puesto_actualizado);

        return to_route('puesto.index')->with('mensaje','puesto '.$puesto->nombredelpuesto.' actualizado');
    }

    public function borrar(Puesto $puesto){

        $puesto->delete();

        return to_route('puesto.index')->with('mensaje','pusto eliminado');

    }

}
