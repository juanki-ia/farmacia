@extends('adminlte::page')

@section('template_title')
    {{ $lote->name ?? 'Show Lote' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Lote</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('lotes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Fabricante:</strong>
                            {{ $lote->fabricante }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Fabricacion:</strong>
                            {{ $lote->fecha_fabricacion }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Vencimiento:</strong>
                            {{ $lote->fecha_vencimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Id Producto:</strong>
                            {{ $lote->id_producto }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
