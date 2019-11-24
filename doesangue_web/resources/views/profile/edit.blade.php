@extends('layouts.app', ['activePage' => 'profile', 'titlePage' => __('User Profile')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('profile.update') }}" autocomplete="off" class="form-horizontal">
            @csrf
            @method('put')

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Edit Profile') }}</h4>
                <p class="card-category">{{ __('User information') }}</p>
              </div>
              <div class="card-body ">
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
                  <label class="col-sm-2 col-form-label">{{ __('Nome') }}</label>
                  <div class="col-sm-8">
                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="input-name" type="text" placeholder="{{ __('Nome') }}" value="{{ old('name', auth()->user()->name) }}" required="true" aria-required="true"/>
                      @if ($errors->has('name'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Email') }}</label>
                  <div class="col-sm-8">
                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="input-email" type="email" placeholder="{{ __('Email') }}" value="{{ old('email', auth()->user()->email) }}" required />
                      @if ($errors->has('email'))
                        <span id="email-error" class="error text-danger" for="input-email">{{ $errors->first('email') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Telefone') }}</label>
                  <div class="col-sm-8">
                    <div class="form-group{{ $errors->has('telefone') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('telefone') ? ' is-invalid' : '' }}" name="telefone" id="input-telefone" type="text" placeholder="{{ __('Telefone') }}" value="{{ old('telefone', auth()->user()->telefone) }}" required="true" aria-required="true"/>
                      @if ($errors->has('telefone'))
                        <span id="telefone-error" class="error text-danger" for="input-telefone">{{ $errors->first('telefone') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Tipo Sanguíneo') }}</label>
                  <div class="col-sm-3">
                    <select id="inputBlood" class="form-control">
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
                  <label class="col-sm-2 col-form-label">{{ __('Gênero') }}</label>
                  <div class="col-sm-3">
                    <div class="form-check form-check-radio">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" >
                          Feminino
                          <span class="circle">
                              <span class="check"></span>
                          </span>
                      </label>
                  </div>
                  <div class="form-check form-check-radio">
                      <label class="form-check-label">
                          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2" checked>
                          Masculino
                          <span class="circle">
                              <span class="check"></span>
                          </span>
                      </label>
                  </div>
                  <div class="form-check form-check-radio">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" >
                          Outro
                          <span class="circle">
                              <span class="check"></span>
                          </span>
                      </label>
                      <input type="text" class="form-control" placeholder="Outro">
                  </div>                   
              </div>
            </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Endereço') }}</label>
                  <div class="col-sm-8">
                  <div class="form-group{{ $errors->has('address') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" id="input-address" type="address" placeholder="{{ __('Endereço') }}" value="{{ old('address', auth()->user()->address) }}" required />
                      @if ($errors->has('address'))
                        <span id="address-error" class="error text-danger" for="input-address">{{ $errors->first('address') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Cidade') }}</label>
                  <div class="col-sm-4">
                    <div class="form-group{{ $errors->has('city') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" id="input-city" type="city" placeholder="{{ __('Cidade') }}" value="{{ old('city', auth()->user()->city) }}" required />
                        @if ($errors->has('city'))
                          <span id="city-error" class="error text-danger" for="input-city">{{ $errors->first('city') }}</span>
                        @endif
                      </div>
                    </div>
                    <label class="col-sm-2 col-form-label">{{ __('Estado') }}</label>
                    <div class="col-sm-2">
                      <select id="inputState" class="form-control">
                        <option selected>Selecionar</option>
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>    
                    </select>  
                  </div>
                </div>
              </div>
            </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('profile.password') }}" class="form-horizontal">
            @csrf
            @method('put')

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Change password') }}</h4>
                <p class="card-category">{{ __('Password') }}</p>
              </div>
              <div class="card-body ">
                @if (session('status_password'))
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="material-icons">close</i>
                        </button>
                        <span>{{ session('status_password') }}</span>
                      </div>
                    </div>
                  </div>
                @endif
                <div class="row">
                  <label class="col-sm-2 col-form-label" for="input-current-password">{{ __('Current Password') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('old_password') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('old_password') ? ' is-invalid' : '' }}" input type="password" name="old_password" id="input-current-password" placeholder="{{ __('Current Password') }}" value="" required />
                      @if ($errors->has('old_password'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('old_password') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label" for="input-password">{{ __('New Password') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="input-password" type="password" placeholder="{{ __('New Password') }}" value="" required />
                      @if ($errors->has('password'))
                        <span id="password-error" class="error text-danger" for="input-password">{{ $errors->first('password') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label" for="input-password-confirmation">{{ __('Confirm New Password') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="password_confirmation" id="input-password-confirmation" type="password" placeholder="{{ __('Confirm New Password') }}" value="" required />
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('Change password') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection