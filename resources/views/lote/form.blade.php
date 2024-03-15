<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('fabricante') }}
            {{ Form::text('fabricante', $lote->fabricante, ['class' => 'form-control' . ($errors->has('fabricante') ? ' is-invalid' : ''), 'placeholder' => 'Fabricante']) }}
            {!! $errors->first('fabricante', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_fabricacion') }}
            {{ Form::text('fecha_fabricacion', $lote->fecha_fabricacion, ['class' => 'form-control' . ($errors->has('fecha_fabricacion') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Fabricacion']) }}
            {!! $errors->first('fecha_fabricacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_vencimiento') }}
            {{ Form::text('fecha_vencimiento', $lote->fecha_vencimiento, ['class' => 'form-control' . ($errors->has('fecha_vencimiento') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Vencimiento']) }}
            {!! $errors->first('fecha_vencimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_producto') }}
            {{ Form::text('id_producto', $lote->id_producto, ['class' => 'form-control' . ($errors->has('id_producto') ? ' is-invalid' : ''), 'placeholder' => 'Id Producto']) }}
            {!! $errors->first('id_producto', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>