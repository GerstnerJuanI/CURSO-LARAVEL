<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){

        $cursos= Curso::orderBy('id','desc')->paginate();

        return view('cursos.index',['cursos' => $cursos]);
    }
    public function create(){
        return view('cursos.create');

    }
    public function show($id){

        $curso = Curso::find($id);
        return view('cursos.show',['curso' => $curso]);//compact('curso')
    }
    
    public function store(Request $request){
        $curso = new Curso();

        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;
        
        $curso->save();

        return redirect()->route('cursos.show',$curso->id);
    }

    public function edit(Curso $curso)
    {
        return view('cursos.edit',['curso' => $curso]);
    }

    public function update(Request $request, Curso $curso)
    {
        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;

        $curso->save();
        return redirect()->route('cursos.show',$curso->id);
    }

}


