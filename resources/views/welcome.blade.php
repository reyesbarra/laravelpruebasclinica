@extends('theme.base')

@section('content')
    <div class="container py-5 text-center">
        <h1>Pruebas de CRUD</h1>
        <a href="{{ route('paciente.index')}}" class="btn btn-primary">Pacientes</a>
    </div>
@endsection

