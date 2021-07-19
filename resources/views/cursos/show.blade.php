@extends('layouts.plantilla')

@section('title', 'Curso '.$curso->name)

@section('content')
<h1>Bienvenido al curso: {{$curso->name}} </h1> {{--es lo mismo que poner ?php echo $cursos ? --}}
<a href="{{route('cursos.index')}}">Volver a cursos.</a>
<br>
<a href="{{route('cursos.edit', $curso)}}">editar curso.</a>
<p><strong>categoria: </strong>{{$curso->categoria}}</p>
<p>{{$curso->descripcion}}</p>
@endsection
