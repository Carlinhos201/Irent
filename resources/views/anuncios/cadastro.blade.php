@extends('app')
<link rel="stylesheet" href="{{ URL::asset('css/anuncios.css') }}">

@section('content')

{{-- <body> --}}
    <div id="app">
    <cadastro-component></cadastro-component>
</div>

    <script src="{{asset('js/app.js')}}"></script>
{{-- </body> --}}

@endsection