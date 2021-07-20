<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCurso;

class CursoController extends Controller
{
    public function index(){

        $cursos= Curso::orderBy('id','desc')->paginate();

        return view('cursos.index',compact('cursos'));//['cursos' => $cursos]
    }

    public function store(StoreCurso $request){

        // $curso = new Curso();

        // $curso->name = $request->name;
        // $curso->descripcion = $request->descripcion;
        // $curso->categoria = $request->categoria;
        
        // $curso->save();

        $curso = Curso::create($request->all());

    return redirect()->route('cursos.show',$curso->id);
    }


    public function create(){
        return view('cursos.create');

    }

    public function show(Curso $curso){

        $curso = Curso::find($curso->id);
        return view('cursos.show',compact('curso'));//['curso' => $curso]
    }
    

    public function update(Request $request, Curso $curso)
    {
        $request->validate([
            'name'=> 'required',
            'slug' => 'required',
            'descripcion' => 'required',
            'categoria' => 'required'
            ]);

        // $curso->name = $request->name;
        // $curso->descripcion = $request->descripcion;
        // $curso->categoria = $request->categoria;
        // $curso->save();

        $curso->update($request->all());// hace lo mismo que las lineas de arriba.

        return redirect()->route('cursos.show',$curso->id);
    }
    public function destroy(Curso $curso){
        $curso->delete();
        return redirect()->route('cursos.index');
    }

    public function edit(Curso $curso){
        return view('cursos.edit',compact('curso'));//['curso' => $curso]
    }
}


