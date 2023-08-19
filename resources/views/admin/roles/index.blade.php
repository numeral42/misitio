@extends('adminlte::page')

@section('title', 'Numeral42')

@section('content_header')
    @can('admin.roles.create')
        <a href="{{route('admin.roles.create')}}" class="btn btn-success float-right">Agregar rol</a>
    @endcan

    <h1>Lista de roles</h1>
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
                        <th>Rol</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $role)
                        <tr>
                            <td>{{$role->id}}</td>
                            <td>{{$role->name}}</td>
                            <td width="10px">
                                @can('admin.roles.edit')
                                    <a href="{{route('admin.roles.edit', $role)}}" 
                                        class="btn btn-primary btn-sm">
                                        Editar
                                    </a>
                                @endcan

                            </td>
                            <td width="10px">
                                @can('admin.roles.destroy')
                                    {!! Form::open(['route'=>['admin.roles.destroy', $role], 'method'=>'delete']) !!}
                                        {!! Form::submit('Eliminar', ['class'=>'btn btn-danger btn-sm']) !!}
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
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop