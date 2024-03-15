@extends('adminlte::page')

@section('template_title')
    Privilegio
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Gestionar privilegios') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('privilegios.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear nuevo privilegio') }}
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
                                        <th>Nº</th>
                                        
                                        
										<th>Nombre</th>
										<th>Ver</th>
										<th>Crear</th>
										<th>Modificar</th>
										<th>Eliminar</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($privilegios as $privilegio)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $privilegio->nombre }}</td>
											<td>{{ $privilegio->ver }}</td>
											<td>{{ $privilegio->crear }}</td>
											<td>{{ $privilegio->modificar }}</td>
											<td>{{ $privilegio->eliminar }}</td>

                                            <td>
                                                <form action="{{ route('privilegios.destroy',$privilegio->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('privilegios.show',$privilegio->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('privilegios.edit',$privilegio->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $privilegios->links() !!}
            </div>
        </div>
    </div>
@endsection
