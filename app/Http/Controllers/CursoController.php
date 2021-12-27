<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Curso;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCurso;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::orderBy('id', 'desc')->paginate();    // paginate () para que sea paginado, en vez de all() q nos muestra todos los registros de una vez    

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
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;

        $curso->save();

        return redirect()->route('cursos.show', $curso);
    }

    public function show(Curso $curso)
    {
        //$curso = Curso::find($id); //busco con find() el registro con ese id, traemos todos los datos del curso con ese id

        compact('curso'); //=['curso'=>$curso]

        return view('cursos.show', compact('curso'));
    }

    public function edit(Curso $curso)
    {
        //$curso = Curso::find($id);

        return view('cursos.edit', compact('curso'));;

    }

    public function update(Curso $curso, Request $request){

        $request->validate([
            'name'=>'required',
            'descripcion'=>'required',
            'categoria'=>'required'
        ]);        
        
        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;

        $curso->save();

        return redirect()->route('cursos.show', $curso);
    }
}
