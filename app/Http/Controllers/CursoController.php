<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCurso;

class CursoController extends Controller
{
    public function index()
    {

        $cursos = Curso::orderBy('id', 'desc')->paginate();

        return view('cursos.index', compact('cursos'));

    }
    public function create()
    {
        return view('cursos.create');
    }

    public function store(StoreCurso $request)
    {


        $curso = new Curso();

        $curso->name = $request->name;
        $curso-> slug = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;

        $curso->save();

        return redirect()->route('cursos.show', /*$curso->id es lo mismo*/ $curso);

    }

    public function show(Curso $curso)//show($id)
    {
        //return view('cursos.show',['curso' => $curso]); Se puede hacer asi o

        /*$curso = Curso::find($id);*///No se escribe nada por sus parametros

        return view('cursos.show',compact('curso'));// asi para el parametro curso
    }

    public function edit(Curso $curso)//edit($id)
    {
        /*
        $curso = Curso::find($id);
        return $curso; ==> es lo mismo que declarar en los parametros Curso $curso, 
                            retornarlo con curso y cambiarlo en web.php
        */
        //return $curso;//Para ver su id o sus datos, pero necesitamos en ver un vista

        return view('cursos.edit',compact('curso'));//dentro de compact va el nombre de la variable que almacena el registro, es decir, curso


    }

    public function update(Request $request, Curso $curso)
    {
        /*return $request->all();*///Muestra el token y sus datos solamente, como json

        $request -> validate([
            'name'          => 'required|max:10',
            'descripcion'   => 'required|min:10',
            'categoria'     => 'required'
        ]);


        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;

        $curso->save();

        return redirect()->route('cursos.show',$curso);

    }


    public function destroy(Curso $curso)
    {
        $curso->delete();

        return redirect()->route('cursos.index');
    }


}//Fin clase CursoController
