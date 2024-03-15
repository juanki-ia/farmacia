@extends('adminlte::page')

@section('template_title')
    Usuario
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Gestionar usuarios') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('usuarios.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear nuevo usuario') }}
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
                                
                            <div class="form-group">
                                <h4>Type by id, title and description!</h4>
                                    <input type="text" name="search" id="search" placeholder="Enter search name" class="form-control" onfocus="this.value=''">
                                </div>
                            <div id="search_list"></div>

                                <thead class="thead">
                                    
                                    <tr>
                                        <th>Nº</th>
                                        
										<th>Nombre</th>
										<th>Correo electrónico</th>
										<th>Estado</th>
                                        <th>Privilegios</th>
                                        <th>Contraseña</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($usuarios as $usuario)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $usuario->name }}</td>
											<td>{{ $usuario->email }}</td>
											<td>{{ $usuario->estado }}</td>
                                            <td>{{ $usuario->id_privilegio }}</td>
                                            <td>{{ $usuario->password }}</td>

                                            <td>
                                                <form action="{{ route('usuarios.destroy',$usuario->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('usuarios.show',$usuario->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('usuarios.edit',$usuario->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $usuarios->links() !!}
            </div>
        </div>
    </div>
@endsection