<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre_generico') }}
            {{ Form::text('nombre_generico', $producto->nombre_generico, ['class' => 'form-control' . ($errors->has('nombre_generico') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Generico']) }}
            {!! $errors->first('nombre_generico', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_comercial') }}
            {{ Form::text('nombre_comercial', $producto->nombre_comercial, ['class' => 'form-control' . ($errors->has('nombre_comercial') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Comercial']) }}
            {!! $errors->first('nombre_comercial', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precio') }}
            {{ Form::text('precio', $producto->precio, ['class' => 'form-control' . ($errors->has('precio') ? ' is-invalid' : ''), 'placeholder' => 'Precio']) }}
            {!! $errors->first('precio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('restriccion') }}
            {{ Form::text('restriccion', $producto->restriccion, ['class' => 'form-control' . ($errors->has('restriccion') ? ' is-invalid' : ''), 'placeholder' => 'Restriccion']) }}
            {!! $errors->first('restriccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_estante') }}
            {{ Form::text('id_estante', $producto->id_estante, ['class' => 'form-control' . ($errors->has('id_estante') ? ' is-invalid' : ''), 'placeholder' => 'Id Estante']) }}
            {!! $errors->first('id_estante', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>