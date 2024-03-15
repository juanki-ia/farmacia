@extends('adminlte::page')

@section('template_title')
    Create Usuario
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">

            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Registrar nuevo usuario</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('usuarios.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('usuario.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
