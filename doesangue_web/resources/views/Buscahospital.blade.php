@extends('layouts.app', ['activePage' => 'Bancos-Sangue', 'titlePage' => __('DoeSangue.org')])

@section('content')
<div class="content">
  <div class="container-fluid">
   {{--  <div class="row">
      <div class="col-md-4">
        <form action="/search" method="get">
          <div class="input-group">
            <input type="search" name="search" class="form-control">
            <span class="input-group-prepend">
              <button type="submit" class="btn btn-danger">Buscar</button>
            </span>
          </div>
        </form>
      </div>
    </div> --}}
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">

            <h4 class="card-title ">Bancos de sangue</h4>
            <p class="card-category"> Aqui estão todos os bancos cadastrados</p>

          </div>
          <div class="card-body">
            <div class="card-body table-responsive">
              <table class="table table-hover">
                <thead class=" text-primary">
                      <th>
                          {{ __('Nome') }}
                      </th>
                      <th>
                        {{ __('Local') }}
                      </th>
                      <th>
                        {{ __('Gerente') }}
                      </th>

                    </thead>
                    <tbody>
                      @php
                        {{$bancodesangue= DB::table('bancodesangue')
                        ->join('localbanco', 'bancodesangue.id', '=', 'localbanco.Bnumero')
                        ->join('users','bancodesangue.gerente_cpf','=','users.user_cpf')
                        ->select('bancodesangue.nome','localbanco.Blocal','users.name')
                        ->get();
                        }}
                      @endphp
                      @foreach($bancodesangue as $banco)
                        <tr>
                          <td>
                            {{ $banco->nome }}
                          </td>
                          <td>
                            {{ $banco->Blocal }}
                          </td>
                          <td>
                            {{ $banco->name }}
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