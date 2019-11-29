@extends('layouts.app', ['activePage' => 'doador-management', 'titlePage' => __('DoeSangue.org')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-danger">
                <h4 class="card-title ">{{ __('Lista de doadores') }}</h4>
                <p class="card-category"> {{ __('Aqui você pode gerenciá-los') }}</p>
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
                <div class="row">
                  <div class="col-12 text-right">
                    <a href="{{ route('doadores.create') }}" class="btn btn-sm btn-danger">{{ __('Adicionar') }}</a>
                  </div>
                </div>
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-danger">
                      <th>
                          {{ __('Nome') }}
                      </th>
                      {{-- <th>
                         {{ __('Nascimento') }}
                      </th> --}}
                      <th>
                        {{ __('CPF') }}
                      </th>
                      <th>
                         {{ __('Endereço') }}
                      </th>
                      <th>
                         {{ __('Telefone') }}
                      </th>
                      <th>
                        {{ __('E-mail') }}
                      </th>
                      <th>
                        {{ __('Peso') }}
                      </th>
                      <th>
                        {{ __('Sexo') }}
                      </th>
                      <th>
                        {{ __('Tipo Sanguíneo') }}
                      </th>
                      {{-- <th>
                        {{ __('cidade') }}
                      </th>
                      <th>
                        {{ __('estado') }}
                      </th> --}}
                      <th class="text-right">
                        {{ __('Ações') }}
                      </th>
                    </thead>
                    <tbody>
                      @foreach($doadores as $user)
                        <tr>
                          <td>
                            {{ $user->name }}
                          </td>
                          {{-- <td>
                            {{ $user->data_nascimento->format('Y-m-d') }}
                          </td> --}}
                          <td>
                            {{ $user->d_cpf }}
                          </td>
                          <td>
                            {{ $user->d_endereco }}
                          </td>
                          <td>
                            {{ $user->d_telefone }}
                          </td>
                          <td>
                            {{ $user->email }}
                          </td>
                          <td>
                            {{ $user->d_peso }}
                          </td>
                          <td>
                            {{ $user->d_sexo }}
                          </td>
                          <td>
                            {{ $user->tipo_sangue }}
                          </td>
                          
                          <td class="td-actions text-right">
                            @if ($user->email != Auth::user()->email)
                              <form action="{{ route('doadores.destroy', $user->id) }}" method="post">
                                  @csrf
                                  @method('delete')
                              
                                  <a rel="tooltip" class="btn btn-success btn-link" href="{{ route('doadores.edit', $user) }}" data-original-title="" title="">
                                    <i class="material-icons">edit</i>
                                    <div class="ripple-container"></div>
                                  </a>
                                  <button type="button" class="btn btn-danger btn-link" data-original-title="" title="" onclick="confirm('{{ __("Certeza de qque deseja excluir este doador?") }}') ? this.parentElement.submit() : ''">
                                      <i class="material-icons">close</i>
                                      <div class="ripple-container"></div>
                                  </button>
                              </form>
                            @else
                              <a rel="tooltip" class="btn btn-success btn-link" href="{{ route('profile.edit') }}" data-original-title="" title="">
                                <i class="material-icons">edit</i>
                                <div class="ripple-container"></div>
                              </a>
                            @endif
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                  {{ $doadores->links() }}
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection