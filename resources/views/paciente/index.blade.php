@extends('theme.base')

@section('content')
    <div class="container py-5 text-center">
        <h1>Listado de Pacientes!</h1>
        <a href="{{ route('paciente.create')}}" class="btn btn-primary">Crear Paciente</a>
        
        @if (Session::has('mensaje'))
            <div class="alert alert-info my-5">

                {{Session::get('mensaje')}}
            </div>
            
        @endif

        <table class="table">
            <thead>
                <th>Nombre</th>
                <th>Cédula</th>
                <th>Dirección</th>
                <th>Acciones</th>

            </thead>
            <tbody>
                @forelse ($pacientes as $detalle)
                <tr>
                    <td>{{ $detalle->nombre}}</td>
                    <td>{{ $detalle->cedula}}</td>
                    <td>{{ $detalle->direccion}}</td>
                    <td>
                        <a href="" class="btn btn-primary">Historia Clinica</a>
                        <a href="{{ route('paciente.edit', $detalle)}}" class="btn btn-warning">Editar</a>
                        
                        <form action="{{ route('paciente.destroy', $detalle) }}" method="post" class="d-inline">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Desea eliminar este paciente?')">Eliminar</button>

                        </form>

                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="3">No Hay Registros</td>
                </tr>
                    
                @endforelse
                
        
            </tbody>
        </table>
        <div >

            @if ($pacientes->count())
            {{ $pacientes->links() }}    
            @endif
            

        </div>
        
    </div>


@endsection

