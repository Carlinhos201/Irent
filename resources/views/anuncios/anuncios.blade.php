@extends('app')
<link rel="stylesheet" href="{{ URL::asset('css/anuncios.css') }}">
@section('content')

    <div class="card">
        <img src="{{ url('img/ap.jpg') }}" alt="" style="height: 470px">


        <div class="formulario">
            <form action="" style="position: absolute;color: white;border: groove; background: grey; border-radius: 10px;">
                
                <div class="form" style="background: white; padding: 50px 60px 30px 60px">
                    <h3 style="color: grey; text-align: center;margin-bottom: 40px;">Encontre o imóvel ideal para você!</h3>

                    <div class="col-lg-12">
                        <div class="form-group" style="    font: -webkit-small-control;">
                            <label for="" style="color: grey"><i class="bi bi-geo-alt"></i> Cidade</label>
                            
                            {{-- <input class="form-control" type="text" role="combobox" aria-haspopup="listbox"
                                placeholder="Busque sua Cidade"> --}}
                               
                                    
                                
                                <select name="cidades" id="" class="form-control">
                                    @foreach ( $cidades as $cidade )
                                        <option value="{{$cidade->id}}">{{$cidade->name}}</option>
                                    @endforeach
                                </select>
                                
                        </div>

                        <div class="row" style="font: -webkit-small-control;">
                            <div class="col-lg-6">
                                <label for="" style="color: grey"><i class="bi bi-map"></i> Bairro</label>
                                <input class="form-control" type="text" placeholder="Busque por Bairro">
                            </div>
                            <div class="">
                                <label for="" style="color: grey"><i class="bi bi-door-open"></i> Nº de Quartos</label>
                                <input class="form-control" type="text" placeholder="Nº de Quartos">
                            </div>

                        </div>
                    </div>
                    <div style="margin-top: 12px; text-align: center">
                        <button class="btn" style="color: white; background: orangered; padding:5px 60px 5px 60px">
                            Buscar
                        </button>
                        <div style="margin: inherit;">
                            <p style="text-align: center"> <a href="">Proprietário anuncie seu imóvel já</a></p>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>

    {{-- <div style="text-align: center; margin-top: 25px">
        <h2>Este é o lugar ideal para você alugar seu Imóvel</h2>
        <p>Facilidade </p>
    </div> --}}
    {{-- <div>
    <div style="text-align: center">
        <h3>Anúncios em destaques</h3>
    </div>
    <div class="row">
        <div class="card">
                <img src="{{url('img/casa.jpg')}}" class="card-img-top" width="100%" height="100%">
                <div class="card-body">
                    <p class="card-text">Casa por temporada em Lagoa Santa - Goiás</p>
                </div>
        </div>
    </div> --}}
</div>

@endsection
