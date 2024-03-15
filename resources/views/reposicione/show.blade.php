@extends('adminlte::page')

@section('template_title')
    {{ $reposicione->name ?? 'Show Reposicione' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Reposicione</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('reposiciones.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $reposicione->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Creacion:</strong>
                            {{ $reposicione->fecha_creacion }}
                        </div>
                        <div class="form-group">
                            <strong>Observacion:</strong>
                            {{ $reposicione->observacion }}
                        </div>
                        <div class="form-group">
                            <strong>Id Proveedor:</strong>
                            {{ $reposicione->id_proveedor }}
                        </div>
                        <div class="form-group">
                            <strong>Id Usuario:</strong>
                            {{ $reposicione->id_usuario }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
