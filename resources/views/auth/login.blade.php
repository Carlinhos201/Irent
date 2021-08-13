@extends('app')

@section('content')

    <div class="login" id="app">
      {{-- @csrf --}}
        <login-component csrf="{{csrf_token()}}"></login-component>

    </div>
    <script src="{{ asset('js/app.js') }}"></script>
@endsection
