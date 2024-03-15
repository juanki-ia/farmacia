@extends('adminlte::page')

@section('template_title')
    {{ $cliente->name ?? 'Show Cliente' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Detalles del cliente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('clientes.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Ci:</strong>
                            {{ $cliente->ci }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre/s:</strong>
                            {{ $cliente->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido/s:</strong>
                            {{ $cliente->apellidos }}
                        </div>
                        <div class="form-group">
                            <strong>Correo electrónico:</strong>
                            {{ $cliente->correoElectronico }}
                        </div>
                        <div class="form-group">
                            <strong>Nit:</strong>
                            {{ $cliente->nit }}
                        </div>
                        <div class="form-group">
                            <strong>Teléfono:</strong>
                            {{ $cliente->telefono }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
