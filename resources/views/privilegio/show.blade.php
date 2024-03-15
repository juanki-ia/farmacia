@extends('adminlte::page')

@section('template_title')
    {{ $privilegio->name ?? 'Show Privilegio' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Detalle del privilegio</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('privilegios.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $privilegio->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Ver:</strong>
                            {{ $privilegio->ver }}
                        </div>
                        <div class="form-group">
                            <strong>Crear:</strong>
                            {{ $privilegio->crear }}
                        </div>
                        <div class="form-group">
                            <strong>Modificar:</strong>
                            {{ $privilegio->modificar }}
                        </div>
                        <div class="form-group">
                            <strong>Eliminar:</strong>
                            {{ $privilegio->eliminar }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
