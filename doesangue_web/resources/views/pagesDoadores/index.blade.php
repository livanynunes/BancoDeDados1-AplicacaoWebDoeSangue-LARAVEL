@extends('layouts.app', ['activePage' => 'doacoes', 'titlePage' => __('Hey, '.auth()->user()->name)])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title ">{{ __('Doações realizadas') }}</h4>
                <p class="card-category"> {{ __('Aqui você encontra todas suas doações') }}</p>
              </div>
              <div class="card-body">
                @if (session('status'))
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="material-icons">close</i>
                        </button>
                        <span>{{ session('status') }}</span>
                      </div>
                    </div>
                  </div>
                @endif
                <div class="table-responsive">
                  <table class="table">
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
  </div>
@endsection