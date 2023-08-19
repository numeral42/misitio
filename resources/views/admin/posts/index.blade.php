@extends('adminlte::page')

@section('title', 'Numeral42')

@section('content_header')

    @if (session('info'))
        <div class="alert alert-danger">
            <strong>
                {{session('info')}}
            </strong>
        </div>
    @endif

    <a href="{{route('admin.posts.create')}}" class="btn btn-success float-right">Nuevo post</a>
    <h1>Listado de posts</h1>
@stop

@section('content')
    
    @livewire('admin.post-index')

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop