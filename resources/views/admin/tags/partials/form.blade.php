    <div class="form-group">
        {!! Form::label('name', 'Nombre', [null]) !!}
        {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Ingrese el nombre de la etiqueta']) !!}
            @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror
    </div>
    <div class="form-group">
        {!! Form::label('slug', 'Slug', [null]) !!}
        {!! Form::text('slug', null, ['class'=>'form-control', 'placeholder'=>'Ingrese el slug de la etiqueta', 'readonly']) !!}
            @error('slug')
                <span class="text-danger">{{$message}}</span>
            @enderror
    </div>
{{--     <div class="form-group">
        <label for="">Color</label>
        <select name="color" id="" class="form-control">
            <option value="red">Color rojo</option>
            <option value="green">Color verde</option>
            <option value="blue" selected>Color azul</option>                 
        </select>
    </div> --}}
    <div class="form-group">
        {!! Form::label('color', 'Color ', [null]) !!}
        {!! Form::select('color', $colores, null, ['class'=>'form-ontrol']) !!}
        @error('color')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>