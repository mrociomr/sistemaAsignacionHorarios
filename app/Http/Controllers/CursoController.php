<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        
        //$cursos = Curso::orderBy('id')->paginate();

        $cursos['cursos'] = Curso::paginate(100);

        //return view('cursos.index', compact('cursos'));
        return view('cursos.index', $cursos);
    }

    public function create(){
        $areaC = Curso::all();   
        return view('cursos.create', compact('areaC'));
        
    }


    public function store(Request $request){

        $request->validate([
            'codigo'=>'required',
            'area' => 'required',
            'asignatura' => 'required',
            'ciclo' => 'required',
            'tipo' => 'required',
            'horasT' => 'required|numeric',
            'horasP' => 'required|numeric',
            'horasTotales' => 'required|numeric'
        ]);

        $curso = new Curso();
        
        $curso->codigo = $request->codigoC;
        $curso->area = $request->areaC;
        $curso->asignatura = $request->nombre;
        $curso->ciclo = $request->cicloC;
        $curso->tipo = $request->tipoC;
        $curso->horasT = $request->horasT;
        $curso->horasP = $request->horasP;
        $curso->horasTotales = $request->horasTotales;
        
    
        $curso->save();

        return redirect()->back();

    }

    public function show($curso){
        return view('cursos.show', ['curso' => $curso]);
    }


    public function edit($id){
        $curso = Curso::findOrFail($id);
        return view('cursos.edit', compact('curso'));        
    }

    public function update(Request $request, $id){
        $datosCurso = request()->except(['_token', '_method']);
        Curso::where('id','=',$id)->update($datosCurso);

        $curso = Curso::findOrFail($id);
        return view('cursos.edit', compact('curso'));   
    }


    public function destroy($id){

       Curso::destroy($id);

       return redirect('cursos')->with('eliminar', 'delete');

        
    }
}
