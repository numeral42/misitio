@extends('adminlte::page')

@section('title', 'Numeral42')

@section('content_header')
    @can('admin.tags.create')
        <a href="{{route('admin.tags.create')}}" class="btn btn-success float-right">Agregar etiqueta</a>
    @endcan

    <h1>Lista de etiquetas</h1>
@stop

@section('content')
    @if (session('info'))
    <div class="alert alert-danger">
        <strong>
            {{session('info')}}
        </strong>
    </div>
    @endif
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Color</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tags as $tag)
                        <tr>
                            <td>{{$tag->id}}</td>
                            <td>{{$tag->name}}</td>
                            <td class="text-{{$tag->color}}-500 font-bold">{{$tag->color}}</td>
                            <td width="10px">
                                @can('admin.tags.edit')
                                    <a class="btn btn-primary btn-sm" href="{{route('admin.tags.edit', $tag)}}">Editar</a>
                                @endcan
                                
                            </td>
                            <td width="10px">
                                @can('admin.tags.destroy')
                                    {!! Form::open(['route'=> ['admin.tags.destroy', $tag], 'method'=>'delete']) !!}
                                        {!! Form::submit('Eliminar', ['class'=>'bg-red-600 text-white text-sm hover:bg-red-800 rounded px-1.5 py-1.5']) !!}
                                    {!! Form::close() !!}
                                @endcan
                                
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <script src="https://cdn.tailwindcss.com"></script>

@stop

@section('js')

<script src="{{ mix('js/app.js') }}" defer></script>
    <script> console.log('Hi!'); </script>
@stop