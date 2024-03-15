@extends('adminlte::page')

@section('template_title')
    {{ $producto->name ?? 'Show Producto' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Producto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('productos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Generico:</strong>
                            {{ $producto->nombre_generico }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Comercial:</strong>
                            {{ $producto->nombre_comercial }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $producto->precio }}
                        </div>
                        <div class="form-group">
                            <strong>Restriccion:</strong>
                            {{ $producto->restriccion }}
                        </div>
                        <div class="form-group">
                            <strong>Id Estante:</strong>
                            {{ $producto->id_estante }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
