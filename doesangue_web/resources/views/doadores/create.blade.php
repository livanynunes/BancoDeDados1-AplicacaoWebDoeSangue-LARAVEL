@extends('layouts.app', ['activePage' => 'doador-management', 'titlePage' => __('Gerenciar Doador')])


 

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('doadores.store') }}" autocomplete="off" class="form-horizontal">
            @csrf
            @method('post')

            <div class="card ">
              <div class="card-header card-header-danger">
                <h4 class="card-title">{{ __('Adicionar Usuário') }}</h4>
                <p class="card-category"></p>
              </div>
              <div class="card-body ">
                <div class="row">
                  <div class="col-md-12 text-right">
                      <a href="{{ route('doadores.index') }}" class="btn btn-sm btn-danger">{{ __('Voltar') }}</a>
                  </div>
                </div>
                    <div class="row">
                      <label class="col-sm-2 col-form-label">{{ __('Nome') }}</label>
                      <div class="col-sm-8">
                        <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                          <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="input-name" type="text" placeholder="{{ __('Nome') }}" required="true" aria-required="true"/>
                          @if ($errors->has('name'))
                            <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                          @endif
                        </div>
                      </div>
                    </div>
                    <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Data de nascimento') }}</label>
                  <div class="col-sm-8">
                    <div class="form-group{{ $errors->has('data_nascimento') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('data_nascimento') ? ' is-invalid' : '' }}" name="data_nascimento" id="input-data_nascimento" type="text" placeholder="{{ __('ano-mês-dia') }}"  required="true" aria-required="true" />
                      @if ($errors->has('data_nascimento'))
                        <span id="data_nascimento-error" class="error text-danger" for="input-data_nascimento">{{ $errors->first('data_nascimento') }}</span>
                      @endif
                    </div>
                  </div>
                    </div>
                    <div class="row">
                      <label class="col-sm-2 col-form-label">{{ __('CPF') }}</label>
                      <div class="col-sm-8">
                      <div class="form-group{{ $errors->has('d_cpf') ? ' has-danger' : '' }}">
                          <input class="form-control{{ $errors->has('d_cpf') ? ' is-invalid' : '' }}" name="d_cpf" id="input-d_cpf" type="d_cpf" placeholder="{{ __('CPF') }}" required="true" aria-required="true"/>
                          @if ($errors->has('d_cpf'))
                            <span id="d_cpf-error" class="error text-danger" for="input-d_cpf">{{ $errors->first('d_cpf') }}</span>
                          @endif
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-sm-2 col-form-label">{{ __('Email') }}</label>
                      <div class="col-sm-3">
                        <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                          <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="input-email" type="email" placeholder="{{ __('Email') }}" required />
                          @if ($errors->has('email'))
                            <span id="email-error" class="error text-danger" for="input-email">{{ $errors->first('email') }}</span>
                          @endif
                        </div>
                      </div>
                      <label class="col-sm-2 col-form-label">{{ __('Telefone') }}</label>
                      <div class="col-sm-3">
                        <div class="form-group{{ $errors->has('d_telefone') ? ' has-danger' : '' }}">
                          <input class="form-control{{ $errors->has('d_telefone') ? ' is-invalid' : '' }}" name="d_telefone" id="input-d_telefone" type="text" placeholder="{{ __('Telefone') }}" value="{{ old('d_telefone', auth()->user()->d_telefone) }}" required="true" aria-required="true"/>
                          @if ($errors->has('d_telefone'))
                            <span id="d_telefone-error" class="error text-danger" for="input-d_telefone">{{ $errors->first('d_telefone') }}</span>
                          @endif
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-sm-2 col-form-label">{{ __('Tipo Sanguíneo') }}</label>
                      <div class="col-sm-3">
                        <select id="inputBlood" name="tipo_sangue" class="custom-select">
                          <option selected>Selecionar</option>
                          <option value="A+">Tipo A+</option>
                          <option value="A-">Tipo A-</option>
                          <option value="B+">Tipo B+</option>
                          <option value="B-">Tipo B-</option>
                          <option value="AB+">Tipo AB+</option>
                          <option value="AB-">Tipo AB-</option>
                          <option value="O+">Tipo O+</option>
                          <option value="O-">Tipo O-</option>
                      </select>
                    </div>
                      <label class="col-sm-2 col-form-label">{{ __('Peso') }}</label>
                      <div class="col-sm-3">
                      <div class="form-group{{ $errors->has('d_peso') ? ' has-danger' : '' }}">
                          <input class="form-control{{ $errors->has('d_peso') ? ' is-invalid' : '' }}" name="d_peso" id="input-d_peso" type="d_peso" placeholder="{{ __('Informe o peso') }}" required="true" aria-required="true"/>
                          @if ($errors->has('d_peso'))
                            <span id="d_peso-error" class="error text-danger" for="input-d_peso">{{ $errors->first('d_peso') }}</span>
                          @endif
                        </div>
                      </div>
                    </div>
                    <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Endereço') }}</label>
                  <div class="col-sm-8">
                    <div class="form-group{{ $errors->has('d_endereco') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('d_endereco') ? ' is-invalid' : '' }}" name="d_endereco" id="input-d_endereco" type="text" placeholder="{{ __('Endereço') }}"  required="true" aria-required="true" />
                      @if ($errors->has('d_endereco'))
                        <span id="d_endereco-error" class="error text-danger" for="input-d_endereco">{{ $errors->first('d_endereco') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                 
            <hr>
              <div class="row">
                <label class="col-sm-2 col-form-label" for="input-password">{{ __(' Senha') }}</label>
                <div class="col-sm-7">
                  <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                    <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" input type="password" name="password" id="input-password" placeholder="{{ __('Senha') }}" value="" required />
                    @if ($errors->has('password'))
                      <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('password') }}</span>
                    @endif
                  </div>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label" for="input-password-confirmation">{{ __('Confirmar Senha') }}</label>
                <div class="col-sm-7">
                  <div class="form-group">
                    <input class="form-control" name="password_confirmation" id="input-password-confirmation" type="password" placeholder="{{ __('Confirmar Senha') }}" value="" required />
                  </div>
                </div>
              </div>
            <div class="card-footer ml-auto mr-auto">
              <button type="submit" class="btn btn-danger">{{ __('Adicionar') }}</button>
            </div>
          </div>
        <div>
      </form>
    </div>
  </div>
</div>
</div>
@endsection  