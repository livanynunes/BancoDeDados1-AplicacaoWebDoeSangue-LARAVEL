@extends('layouts.app', ['activePage' => 'Relatorio-tipo', 'titlePage' => __('DoeSangue.org')])

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
                          {{ __('Tipo') }}
                      </th>
                      <th>
                        {{ __('Quantidade') }}
                      </th>
                      

                    </thead>
                    <tbody>
                      @php
                        {{
                        
                            $doacoes = DB::table('doacao')->select('sangue_tipo', \DB::raw('COUNT(id) as amount'))
                              ->groupBy('sangue_tipo')
                              ->get();
                        }}

                      @endphp
                      @foreach($doacoes as $info)
                        <tr>
                          <td>
                            {{ $info->sangue_tipo }}
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