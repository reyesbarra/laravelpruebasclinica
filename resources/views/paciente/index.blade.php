@extends('dashboard.dashboard')

@section('titulo', 'Listado de Pacientes')

@section('contenido')

<div class="col-xl-12 col-lg-12">
    <div class="card shadow ">
        <!-- Card Header - Dropdown -->
        <div class=" card-header d-flex flex-row align-items-center justify-content-end">
            <div class="card-header d-flex flex-row align-items-center justify-content-end">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Buscar paciente...">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">Buscar</button>
                    </div>
                </div>
                
            </div>
            {{-- <div class="dropdown no-arrow">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                    aria-labelledby="dropdownMenuLink">
                    <div class="dropdown-header">Dropdown Header:</div>
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div> --}}
        </div>
        <!-- Card Body -->
        <div class="card-body">
            

            <div class="container text-center">
                <div class="col-auto text-left">
            <a href="{{ route('paciente.create') }}" class="btn btn-primary mb-4">Crear Paciente</a>
        </div>

                @if (Session::has('mensaje'))
                    <div class="alert alert-info my-5">
                        {{ Session::get('mensaje') }}
                    </div>
                @endif

                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Cédula</th>
                            <th>Dirección</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($pacientes as $detalle)
                            <tr>
                                <td>{{ $detalle->nombre }}</td>
                                <td>{{ $detalle->cedula }}</td>
                                <td>{{ $detalle->direccion }}</td>
                                <td>
                                    <a href="#" class="btn btn-primary">Historia Clínica</a>
                                    <a href="{{ route('paciente.edit', $detalle) }}" class="btn btn-warning">Editar</a>
                                    <form action="{{ route('paciente.destroy', $detalle) }}" method="post" class="d-inline">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Desea eliminar este paciente?')">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4">No Hay Registros</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

                @if ($pacientes->count() > 0)
                    <div>
                        {{ $pacientes->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection
