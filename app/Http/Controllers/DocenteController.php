<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $docentes['docentes'] = Docente::paginate(50);

         return view('docentes.index', $docentes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $docent = Docente::all();   
        return view('docentes.create', compact('docent'));
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'dni'=>'required',
            'grado'=>'required',
            'nombres' => 'required',
            'apellidos' => 'required',
            'tipo' => 'required',
            'categoria' => 'required',
            'cargo' => 'required',
            'celular' => 'required',
            'correo' => 'required'
        ]);

        $docente = new Docente();
        
        $docente->dniD = $request->dni;
        $docente->gradoD = $request->grado;
        $docente->nombresD = $request->nombres;
        $docente->apellidosD = $request->apellidos;
        $docente->tipoD = $request->tipo;
        $docente->categoriaD = $request->categoria;
        $docente->cargoD = $request->cargo;
        $docente->celularD = $request->celular;
        $docente->correoD = $request->correo;
    
        $docente->save();

        return redirect()->route('docentes.index');
    }

  
    public function show($docente)
    {
        return view('docentes.show', ['docente' => $docente]);
    }

   
    public function edit(Docente $docente)
    {
        return view('docentes.edit', compact('docente'));
    }

  
    public function update(Request $request, Curso $docente){
       
        $request->validate([
            'dni'=>'required',
            'grado'=>'required',
            'nombres' => 'required',
            'apellidos' => 'required',
            'tipo' => 'required',
            'categoria' => 'required',
            'cargo' => 'required',
            'celular' => 'required',
            'correo' => 'required'
        ]);

        
        $docente->dniD = $request->dni;
        $docente->gradoD = $request->grado;
        $docente->nombresD = $request->nombres;
        $docente->apellidosD = $request->apellidos;
        $docente->tipoD = $request->tipo;
        $docente->categoriaD = $request->categoria;
        $docente->cargoD = $request->cargo;
        $docente->celularD = $request->celular;
        $docente->correoD = $request->correo;
        
    
        $docente->save();

        return redirect()->route('docentes.index');  
    }

   
    public function destroy($id)
    {
        Curso::destroy($id);

       return redirect('docentes')->with('eliminar', 'delete');
    }
}
