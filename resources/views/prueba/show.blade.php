<!-- resources/views/pruebas/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>{{ $prueba->nombre }}</h1>
    <p>{{ $prueba->descripcion }}</p>

    <a href="{{ route('prueba.index') }}">Volver</a>
@endsection
