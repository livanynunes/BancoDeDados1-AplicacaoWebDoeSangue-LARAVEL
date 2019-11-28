@extends('layouts.app', ['activePage' => 'doador-dashboard', 'titlePage' => __('Bem vindo, '.auth()->user()->name)])

@section('content')
  <div class="content">
    <div class="container-fluid">
      
      <div class="row">
        
        <div class="col-lg-6 col-md-12">
          <div class="card card-chart">
            <div class="card-header card-header-danger">
              <div class="ct-chart" id="completedTasksChart"></div>
            </div>
            <div class="card-body">
              <h4 class="card-title">Doações nos últimos meses</h4>
              {{-- <p class="card-category">Last Campaign Performance</p> --}}
            </div>
            
          </div>
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Últimas doações</h4>
              {{-- <p class="card-category">New employees on 15th September, 2016</p> --}}
            </div>
            <div class="card-body table-responsive">
              <table class="table table-hover">
                <thead class=" text-primary">
                      <th>
                          {{ __('Código') }}
                      </th>
                      <th>
                        {{ __('CPF doador') }}
                      </th>
                      <th>
                        {{ __('Local') }}
                      </th>
                      
                    </thead>
                    <tbody>
                      @php
                        {{$doacao= DB::table('doacao')
                        ->join('bancodesangue', 'doacao.Bsangue', '=', 'bancodesangue.id')
                        ->select('doacao.*', 'bancodesangue.nome')
                        ->get();
                        }}
                      @endphp
                      @foreach($doacao as $doei)
                        <tr>
                          <td>
                            {{ $doei->id }}
                          </td>
                          <td>
                            {{ $doei->Dcpf }}
                          </td>
                          <td>
                            {{ $doei->nome }}
                          </td>
                          
                        </tr>
                      @endforeach
                    </tbody>
              </table>
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