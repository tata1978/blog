<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::paginate();    // paginate () en vez de all() q nos muestra todos los registros de una vez    

        return view('cursos.index', compact('cursos'));
    }

    public function create()
    {
        return view('cursos.create');
    }

    public function show($id)
    {
        $curso=Curso::find($id);

        compact('curso');//=['curso'=>$curso]
        
        return view('cursos.show', compact('curso'));
    }
}
