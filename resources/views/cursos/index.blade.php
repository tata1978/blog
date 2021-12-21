@extends('layouts.plantilla')

@section('title','Cursos')

@section('content')
    <h1>Bienvenidos a la pagina princial de cursos</h1>
    <a href="{{route('cursos.create')}}">Crear Curso</a>
    <ul>
        @foreach ($cursos as $curso)
            <li>
                <a href="{{route('cursos.show',$curso->id)}}">{{$curso->name}} {{$curso->categoria}}</a>                              
            </li>

        @endforeach
    </ul>
    
    {{$cursos->links()}}
@endsection