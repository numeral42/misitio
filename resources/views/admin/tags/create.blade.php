@extends('adminlte::page')

@section('title', 'Numeral42')

@section('content_header')
    <h1>Crear nueva etiqueta</h1>
@stop

@section('content')
    
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route'=>'admin.tags.store']) !!}
                
                @include('admin.tags.partials.form')

                {!! Form::submit('Crear etiqueta', ['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script> 

    <script src="{{asset('storage/jQuery-Plugin-stringToSlug-1.3.0/jquery.stringToSlug.min.js')}}"></script>
    <script>
        $(document).ready( function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-',
/*              prefix: '',
                suffix: '',
                replace: '',
                AND: 'and',
                options: {},
                callback: false */
            });
        });
    </script>
@stop