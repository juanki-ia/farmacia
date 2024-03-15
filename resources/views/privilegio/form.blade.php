<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $privilegio->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ver') }}
            {{ Form::text('ver', $privilegio->ver, ['class' => 'form-control' . ($errors->has('ver') ? ' is-invalid' : ''), 'placeholder' => 'Ver']) }}
            {!! $errors->first('ver', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('crear') }}
            {{ Form::text('crear', $privilegio->crear, ['class' => 'form-control' . ($errors->has('crear') ? ' is-invalid' : ''), 'placeholder' => 'Crear']) }}
            {!! $errors->first('crear', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('modificar') }}
            {{ Form::text('modificar', $privilegio->modificar, ['class' => 'form-control' . ($errors->has('modificar') ? ' is-invalid' : ''), 'placeholder' => 'Modificar']) }}
            {!! $errors->first('modificar', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('eliminar') }}
            {{ Form::text('eliminar', $privilegio->eliminar, ['class' => 'form-control' . ($errors->has('eliminar') ? ' is-invalid' : ''), 'placeholder' => 'Eliminar']) }}
            {!! $errors->first('eliminar', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar cambios</button>
    </div>
</div>