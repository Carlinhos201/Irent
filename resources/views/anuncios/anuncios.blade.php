@extends('app')
<link rel="stylesheet" href="{{ URL::asset('css/anuncios.css') }}">

@section('content')

{{-- <body> --}}
    <div id="app">
    <home-component></home-component>
</div>

    <script src="{{asset('js/app.js')}}"></script>
{{-- </body> --}}

@endsection
