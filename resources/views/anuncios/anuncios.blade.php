@extends('app')

@section('content')

    <div class="card">
        <img src="{{ url('img/ap.jpg') }}" alt="" style="height: 400px">



        <form action=""
            style="position: fixed;margin-top: 150px;margin-left: 250px;color: white;border: groove; background: grey; border-radius: 10px;">
            <h3>Encontre o imóvel ideal para você!</h3>
            <div class="form">
            <div class="col-lg-12">
                {{-- <label for=""><span>Busque sua Cidade</span></label> --}}
                <input class="form-control" type="text" role="combobox" aria-haspopup="listbox"
                    placeholder="Busque sua Cidade">
            </div>
            <div class="row">
                <div class="">

                    <input class="form-control" type="text" role="combobox" aria-haspopup="listbox"
                        placeholder="Busque por Bairro">
                </div>
                <div class="">

                    <input class="form-control" type="text" role="combobox" aria-haspopup="listbox"
                        placeholder="Nº de Quartos">
                </div>
                
            </div>
            <button class="btn" style="color: white; background: orangered">Buscar</button>
        </div>
        </form>

    </div>

    <div style="background: black">

    </div>

@endsection
