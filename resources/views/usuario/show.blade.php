@extends('adminlte::page')

@section('template_title')
    {{ $usuario->name ?? 'Show Usuario' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Detalles de usuario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('usuarios.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $usuario->name }}
                        </div>
                        <div class="form-group">
                            <strong>Correo electrónico:</strong>
                            {{ $usuario->email }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $usuario->estado }}
                        </div>
                        <div class="form-group">
                            <strong>Privilegios:</strong>
                            {{ $usuario->id_privilegio }}
                        </div>
                        <div class="form-group">
                            <strong>Contraseña:</strong>
                            {{ $usuario->password }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
