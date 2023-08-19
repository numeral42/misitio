@extends('adminlte::page')

@section('title', 'Numeral42')

@section('content_header')
    <h1>Crear nuevo post</h1>
@stop

@section('content')
    
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route'=>['admin.posts.store'], 'autocomplete'=>'off', 'files'=>true]) !!}
                     
                @include('admin.posts.partials.form')
                
                {!! Form::submit('Crear nuevo post',['class'=>'bg-green-600 text-white hover:bg-green-800 font-medium rounded-lg py-2 px-3']) !!}

            {!! Form::close() !!}
        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
            <!-- Styles -->
            <link rel="stylesheet" href="{{ mix('css/app.css') }}">
            <script src="https://cdn.tailwindcss.com"></script>

<script src="https://cdn.ckeditor.com/ckeditor5/33.0.0/classic/ckeditor.js"></script>

<style>
    .image-wrapper{
        position: relative;
        padding-bottom: 56.25%;
    }
    .image-wrapper img {
        position:absolute;
        object-fit: cover;
        width: 100%;
        height: 100%;
    }
</style>
@stop

@section('js')

<!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
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
<script>
        ClassicEditor
    .create( document.querySelector( '#extract' ), {
        toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],
        heading: {
            options: [
                { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' }
            ]
        }
    } )
    .catch( error => {
        console.log( error );
    } );
</script>
<script>
    /*     ClassicEditor
            .create( document.querySelector( '#extract' ) )
            .catch( error => {
                console.error( error );
            } ); */
            ClassicEditor
        .create( document.querySelector( '#body' ), {
            toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],
            heading: {
                options: [
                    { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                    { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                    { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' }
                ]
            }
        } )
        .catch( error => {
            console.log( error );
        } );
    </script>
    <script>
        //Cambiar imagen
        document.getElementById("file").addEventListener('change', cambiarImagen);
        function cambiarImagen(event){
            var file=event.target.files[0];
            var reader=new FileReader();
            reader.onload=(event)=>{
                document.getElementById("picture").setAttribute('src', event.target.result);
            };
            reader.readAsDataURL(file);

        }
    </script>
@stop