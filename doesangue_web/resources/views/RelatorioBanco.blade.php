@extends('layouts.app', ['activePage' => 'Relatorio-banco', 'titlePage' => __('DoeSangue.org')])

@section('content')
<div class="content">
  <div class="container-fluid">
  
    
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">

            <h4 class="card-title ">Doações Realizadas</h4>
            <p class="card-category"> Aqui estão todas as doações realizadas pelos bancos de sangue cadastrados</p>

          </div>
          <div class="card-body">
            <div class="card-body table-responsive">
              <table class="table table-hover">
                <thead class=" text-primary">
                      <th>
                          {{ __('Local') }}
                      </th>

                      <th>
                        {{ __('Quantidade de doações') }}
                      </th>
                      

                    </thead>
                    <tbody>
                      @php
                        {{

                            $doacoes = DB::table('doacao')->select('Bsangue', \DB::raw('COUNT(id) as amount'))
                              ->groupBy('Bsangue')
                              ->get();
                        }}

                      @endphp
                      @foreach($doacoes as $info)
                        <tr>
                          <td>
                            {{ DB::table('bancodesangue')->select('nome')->where('id', $info->Bsangue)->get()[0]->nome }}
                          </td>
                          <td>
                            {{ $info->amount }}
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
</div>
@endsection