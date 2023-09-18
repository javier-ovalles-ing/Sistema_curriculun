<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;
use App\Models\Puesto;
use Carbon\Carbon;

class EmpleadoController extends Controller
{
    //
    public function __construct(){

        $this->middleware('auth',['except'=>['']]);                                       
    }

    public function show(){

        $empleados = Empleado::get();

        return view('empleado.index', ['empleados'=>$empleados]);
    }

    public function crear(){
            $puestos = Puesto::get();

        return view('empleado.crear',['empleado' => new Empleado(), 'puestos' => $puestos]);
    }
    public function guardar(Request $request){

       
        
        $empleado = $request->validate([
            'primernombre' => ['required','string','max:255'],
            'segundonombre' => ['required','string','max:255'],
            'primerapellido' => ['required','string','max:255'],
            'segundoapellido' => ['required','string','max:255'],
            'foto' => ['mimes:jpg,bmp,png'],
            'cv' => ['required','mimes:pdf'],
            'idpuesto' => ['required'],
            'fechadeingreso' => 'date_format:Y-m-d'
        ]); 

         
        if($request->hasFile('foto')){

            $empleado['foto'] = $request->file('foto')->store('public/fotos');
        }

         $empleado['cv'] = $request->file('cv')->store('public/curriculums');
        
          Empleado::create($empleado);

          return to_route('empleado.index')->with('mensaje','se creo el usuario: '.$empleado['primernombre']);

    }
    public function  editar(Empleado $empleado) {
        
            $puestos = Puesto::get();

            return view('empleado.editar',['empleado'=>$empleado,'puestos' => $puestos]);        
    }

    public function actualizar(Request $request, Empleado $empleado) {


        $actualizaciones = $request->validate([
            'primernombre' => ['required','string','max:255'],
            'segundonombre' => ['required','string','max:255'],
            'primerapellido' => ['required','string','max:255'],
            'segundoapellido' => ['required','string','max:255'],
            'foto' => ['mimes:jpg,bmp,png'],
            'cv' => ['mimes:pdf'],
            'idpuesto' => ['required'],
            'fechaingreso' => 'date_format:Y-m-d'
        ]);

        if($request->hasFile('foto')){

            $empleado['foto'] = $request->file('foto')->store('public/fotos');
        }


        $empleado->update($actualizaciones);

        return to_route('empleado.index')->with('mensaje','se actualizo el usuario: '.$empleado['primernombre']);

    }

    public function borrar(Empleado $empleado){

        $empleado->delete();

        return to_route('empleado.index')->with('mensaje','empleado'.$empleado->primernombre.' eliminado');
    }

    public function download(Empleado $empleado){

        $nombre = $empleado->primernombre.' '
                 .$empleado->segundonombre.' '
                 .$empleado->primerapellido.' '
                 .$empleado->segundoapellido;

        
        $fechaInicio = Carbon::parse($empleado->fechaingreso);
        $fechaFin = Carbon::now();
        $anos = $fechaInicio->diffInYears($fechaFin);
        
        
       
        $puesto = $empleado->puesto->nombredelpuesto;

        @dd($anos);

        $data = [
             'nombre' => $nombre,
             'anos' => $anos,
             'puesto' => $puesto
        ];

    

    $pdf = \PDF::loadView('empleado.vista-pdf', $data);

    return $pdf->download('archivo.pdf');
}
}
