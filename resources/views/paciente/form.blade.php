
{{-- VISTA PARA CREAR Y PARA ACTUALIZAR PACIENTES  --}}

@extends('theme.base')

@section('content')
    <div class="container py-5 text-center">
        @if (isset($paciente))
        <h1>Editar Paciente</h1>
        @else
        <h1>Crear Paciente</h1>
        @endif
        
        
        @if (isset($paciente))
            <form action="{{ route('paciente.update', $paciente) }}" method="post">
            @method('PUT')
        @else
            <form action="{{ route('paciente.store') }}" method="post">
        @endif
        
        @csrf

        

        <div class="mb-3">
            <label for="cedula" class="form-label">Cédula</label>
            <input type="number" name='cedula' class="form-control" placeholder="Cedula" value="{{old('cedula') ?? @$paciente->cedula}}">
            @error('cedula')
                <p class="form-text- text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name='nombre' class="form-control" placeholder="Nombre del Paciente" value="{{old('nombre') ?? @$paciente->nombre}}">
            @error('nombre')
            <p class="form-text- text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="edad" class="form-label">Edad</label>
            <input type="number" name='edad' class="form-control" placeholder="Edad" value="{{old('edad') ?? @$paciente->edad}}">
            @error('edad')
            <p class="form-text- text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="direccion" class="form-label">Dirección</label>
            <input type="text" name='direccion' class="form-control" placeholder="Direccion" value="{{old('direccion') ?? @$paciente->direccion}}">
        </div>

        <div class="mb-3">
            <label for="correo" class="form-label">Correo</label>
            <input type="text" name='correo' class="form-control" placeholder="Correo electronico" value="{{old('correo') ?? @$paciente->correo}}">
        </div>

        @if (isset($paciente))
        <button type="submit" class="btn btn-primary">Editar Paciente</button>
        @else
        <button type="submit" class="btn btn-primary">Crear Paciente</button>
        @endif




        
    </form>
    </div>



            
        
        
        

@endsection

