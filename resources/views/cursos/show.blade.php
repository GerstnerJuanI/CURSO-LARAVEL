@extends('layouts.plantilla')

@section('title', 'Curso '.$curso)

@section('content')
<h1>Bienvenido al curso: {{$curso}} </h1> {{--es lo mismo que poner ?php echo $cursos ? --}}
@endsection
