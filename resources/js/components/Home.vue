<template>
<body>
     <div class="card">

        <img src="img/home-bg.jpg" alt="">

        <div class="formulario">
           
        
            <form action=""
                style="position: absolute;color: white;border: groove; background: grey; border-radius: 10px; background: white">

                <div class="form" style="background: white; padding: 50px 60px 30px 60px">
                    <h3 style="color: grey; text-align: center;margin-bottom: 40px;">Encontre o imóvel ideal para você!</h3>
                            
                    <div class="col-lg-12">
                        <div class="form-group" style="font: -webkit-small-control;">
                            
                            <form action="" id="">
                            <select  class="form-control"  >
                                   <option  v-for="uf in estados" :key="uf" @change="getCidades(uf)">
                                        {{estados}}   
                                    </option> 
                            </select>
                            {{estadoSelecionado}}
                            <select name="cidades" id="cidades" class="form-control" v-model="cidades">
                                    <option  v-for="cidades in cidades" :key="cidades.id" >
                                            {{cidades.nome}}
                                    </option>
                            </select>
                        </form>
                        </div>
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
                        <p style="text-align: center"> <a :href="register">Proprietário anuncie seu imóvel já</a></p>
                    </div>

                </div>
                </form>
        </div>
        
    </div>
    

    <div style="text-align: center; margin-top: 25px">
        <h2>Este é o lugar ideal para você alugar seu Imóvel</h2>
        
        <span>Com facilidade e rapidez</span>
    </div>
    <div style="text-align: center">
        <h3>Anúncios em destaques</h3>
    </div>
    <div>

      

        <div class="row" style="margin-left: 100px; margin-top: 30px">
            <div class="card border-primary" style="width: 18rem;">
                <img src="img/teste1.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p>Apartamento</p>
                    <h5 class="card-title">Avenida Mangará</h5>
                    <p class="card-text"><i class="bi bi-rulers"></i> 28 M <i class="bi bi-stopwatch"></i> 3 Quartos</p>
                    <p class="card-text">Aluguel R$ 500</p>
                    <p class="card-text" style="color: green">Total R$ 900</p>
                    <a href="#" class="btn" style=" background: orangered; color: white">Visitar</a>
                </div>
            </div>
            <div class="card border-primary" style="width: 18rem;">
                <img src="img/teste3.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p>Apartamento</p>
                    <h5 class="card-title">Avenida Mangará</h5>
                    <p class="card-text"><i class="bi bi-rulers"></i> 28 M <i class="bi bi-stopwatch"></i> 3 Quartos</p>
                    <p class="card-text">Aluguel R$ 500</p>
                    <p class="card-text" style="color: green">Total R$ 900</p>
                    <a href="#" class="btn" style=" background: orangered; color: white">Visitar</a>
                </div>
            </div>
            <div class="card border-primary" style="width: 18rem;">
                <img src="img/teste2.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p>Apartamento</p>
                    <h5 class="card-title">Avenida Mangará</h5>
                    <p class="card-text"><i class="bi bi-rulers"></i> 28 M <i class="bi bi-stopwatch"></i> 3 Quartos</p>
                    <p class="card-text">Aluguel R$ 500</p>
                    <p class="card-text" style="color: green">Total R$ 900</p>
                    <a href="#" class="btn" style=" background: orangered; color: white">Visitar</a>
                </div>
            </div>
            <div class="card border-primary" style="width: 18rem;">
                <img src="img/teste3.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p>Apartamento</p>
                    <h5 class="card-title">Avenida Mangará</h5>
                    <p class="card-text"><i class="bi bi-rulers"></i> 28 M <i class="bi bi-stopwatch"></i> 3 Quartos</p>
                    <p class="card-text">Aluguel R$ 500</p>
                    <p class="card-text" style="color: green">Total R$ 900</p>
                    <a href="#" class="btn" style=" background: orangered; color: white">Visitar</a>
                </div>
                
            </div>

        </div>
       
    </div>
    </body>
</template>

<script>
    export default {
        data () {
            return {
                estados: [],
                
                cidades: [],
                uf: null,
                register: 'http://localhost:8000/criar-conta'
            };
        },
        created () {
            this.getEstados();
            this.getCidades();
            
        },

        methods: {
            getCidades()
            {
               fetch(`http://localhost:8000/api/cidades/pegarCidadesPorUf/${this.uf}`).then(response => response.json()).then((data) => {
                    this.cidades = data.uf
                    
                })
                // console.log(cidades)
            },

            getEstados() {
                // fetch(`http://localhost:8000/cidades/`).then(response => response.json()).then((data) => {
                //     this.estados = data
                // })
               
                        this.estados = Array = [
    'AC',
    'AL',
    'AM',
    'AP',
    'BA',
    'CE',
    'DF',
    'ES',
    'GO',
    'MA',
    'MG',
    'MS',
    'MT',
    'PA',
    'PB',
    'PE',
    'PI',
    'PR',
    'RJ',
    'RN',
    'RO',
    'RR',
    'RS',
    'SC',
    'SE',
    'SP',
    'TO',
  ];
            },
     
            // selecionarEstado(estados)
            // {
            //     console.log(estados);
            //    estadoSelecionado = estados
            //   this.getCidades(estados);
                
            // }
        }
    }
</script>