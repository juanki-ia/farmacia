@extends('adminlte::page')

@section('template_title')
    Create Estante
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Estante</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('estantes.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('estante.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
