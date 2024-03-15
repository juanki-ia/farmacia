@extends('adminlte::page')

@section('template_title')
    Update Reposicione
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Reposicione</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('reposiciones.update', $reposicione->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('reposicione.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
