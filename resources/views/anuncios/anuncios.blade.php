@extends('app')

@section('content')

    <div class="card">
        <img src="{{ url('img/ap.jpg') }}" alt="" style="height: 400px">



        <form action=""
            style="position: fixed;margin-top: 150px;margin-left: 250px;color: white;border: groove; background: grey; border-radius: 10px;">
            <div class="form" style="background: white; padding: 30px 30px 30px 30px">
                <h3 style="color: grey">Encontre o imóvel ideal para você!</h3>

                <div class="col-lg-12">
                    <div class="form-group" style="    font: -webkit-small-control;">
                        <label for="" style="color: grey"><i class="bi bi-geo-alt"></i>Cidade</label>
                        {{-- <label for=""><span>Busque sua Cidade</span></label> --}}
                        <input class="form-control" type="text" role="combobox" aria-haspopup="listbox"
                            placeholder="Busque sua Cidade">
                    </div>
               
                <div class="row" style="font: -webkit-small-control;">
                    <div class="">

                        <input class="form-control" type="text"
                            placeholder="Busque por Bairro">
                    </div>
                    <div class="">

                        <input class="form-control" type="text"
                            placeholder="Nº de Quartos">
                    </div>

                </div>
            </div>
                <button class="btn" style="color: white; background: orangered">Buscar</button>
            </div>
        </form>

    </div>

    <div style="background: black">

    </div>

@endsection
