@extends('app')

@section('content')

    <div class="card">
        <img src="{{ url('img/casa.jpg') }}" alt="" style="height: 400px">
        <p style=" text-align: center;position: fixed;margin-top: 90px; margin-left: 200px; color: white;font-size: 32px;
                 font-weight: 500;font-style: oblique;">
            Irent, o melhor lugar para alugar e anunciar seu imóvel
        </p>


        <form action="" style="position: fixed;margin-top: 150px;margin-left: 250px;color: white;">
            <label for="">O que deseja?</label>
            <input class="input-group" type="text">
        </form>

    </div>

    <div style="background: black">

    </div>
@endsection
