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
       

        $campos = [
            'codigoC' => 'required|string|max:20'

        ];

        //$datosCurso = request()->all();
        $datosCurso = request()->except('_token');
        Curso::insert($datosCurso);

        return redirect('cursos')->with("message", "Curso agregado satisfactoriamente");
        //return response()->json($datosCurso);
       /* $curso = new Curso();

        $curso->codigoC = $request->codigo;
        $curso->areaC = $request->area;
        $curso->nombre = $request->nombre;
        $curso->cicloC = $request->ciclo;
        $curso->tipoC = $request->tipo;
        $curso->horasP = $request->hp;
        $curso->horasT = $request->ht;
        $curso->horasTotales = $request->horastotales;
    
        $curso->save();

        return redirect()->route('cursos.index'); */
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
