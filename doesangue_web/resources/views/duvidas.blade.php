@extends('layouts.app', ['activePage' => 'doador-duvidas', 'titlePage' => __('Bem vindo, '.auth()->user()->name)])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Informações importantes</h4>
            </div>
            <div class="card-body">
              

                <div class="accordion" id="accordionExample">
                  <div class="card">
                    <div class="card-header" id="headingOne">
                      <h5 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Quanto tempo dura a doação de sangue?
                        </button>
                      </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                      <div class="card-body">
                        O procedimento todo (cadastro, aferição de sinais vitais, teste de anemia, triagem clínica, coleta do sangue e lanche) leva cerca de 40 minutos.
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingTwo">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Quanto tempo leva para o organismo repor o sangue doado?
                        </button>
                      </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                      <div class="card-body">
                       O organismo repõe o volume de sangue doado nas primeiras 24 horas após a doação.
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingThree">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          É necessário estar em jejum para doar sangue?
                        </button>
                      </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                      <div class="card-body">
                        O doador não deve estar em jejum de nenhuma forma, pelo contrário, deve estar alimentado e descansado, evitando alimentação gordurosa nas 3 horas que antecedem a doação.
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingFour">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                          Quem doa sangue tem atestado médico?
                        </button>
                      </h5>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                      <div class="card-body">
                        O inciso IV do artigo 473 da CLT (Consolidação das Leis do Trabalho) dispõe que o empregado poderá deixar de comparecer ao serviço, sem prejuízo do salário, por um dia, a cada 12 meses, em caso de doação voluntária de sangue devidamente comprovada.
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingFive">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                          É preciso documento de identidade para doar sangue?
                        </button>
                      </h5>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                      <div class="card-body">
                        Sim. O candidato deve apresentar documento original com foto expedido por órgão oficial. Exemplos: Carteira de Identidade (RG ou RNE), Passaporte, Carteira de Trabalho, Carteira de Identidade de Profissional, Carteira Nacional de Habilitação com foto e Certificado de Reservista.
                      </div>
                    </div>
                  </div>
                </div>


            </div>
            <div class="card-footer ml-auto mr-auto">
     
 <a class="btn btn-danger" href="{{ route('doador.dashboard') }}" role="button">{{ __('Voltar') }}</a>
            </div>
            
          </div>
        </div>
      </div>    
      
    
    </div>
  </div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();
    });
  </script>
@endpush