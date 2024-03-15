@extends('adminlte::page')

@section('template_title')
    Reposicione
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Reposicione') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('reposiciones.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Descripcion</th>
										<th>Fecha Creacion</th>
										<th>Observacion</th>
										<th>Id Proveedor</th>
										<th>Id Usuario</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($reposiciones as $reposicione)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $reposicione->descripcion }}</td>
											<td>{{ $reposicione->fecha_creacion }}</td>
											<td>{{ $reposicione->observacion }}</td>
											<td>{{ $reposicione->id_proveedor }}</td>
											<td>{{ $reposicione->id_usuario }}</td>

                                            <td>
                                                <form action="{{ route('reposiciones.destroy',$reposicione->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('reposiciones.show',$reposicione->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('reposiciones.edit',$reposicione->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $reposiciones->links() !!}
            </div>
        </div>
    </div>
@endsection
