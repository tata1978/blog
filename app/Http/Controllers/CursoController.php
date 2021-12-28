<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Curso;
use Illuminate\Http\Request;

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

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|max:15',
            'descripcion' => 'required|min:15',
            'categoria' => 'required|max:100'
        ]);

        /* $curso = new Curso();

        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;

        $curso->save(); */

        $curso = Curso::create($request->all()); // se manda todos los campos del formulario, y hace lo mismo que arriba con una sola linea de codigo

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

    public function update(Request $request, Curso $curso)
    {

        $request->validate([
            'name' => 'required',
            'descripcion' => 'required',
            'categoria' => 'required'
        ]);

        /*      $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;

        $curso->save(); */

        $curso->update($request->all()); // con esta sola linea de codigo hacemos lo mismo que arriba

        return redirect()->route('cursos.show', $curso);
    }

    public function destroy(Curso $curso)
    { //variable curso que va ser un objeto de la clase Curso

        $curso->delete();

        return redirect()->route('cursos.index');
    }
}
