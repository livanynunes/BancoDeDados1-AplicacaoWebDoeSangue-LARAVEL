@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'register', 'title' => __('Material Dashboard')])

@section('content')
<div class="container" style="height: auto;">
  <div class="row align-items-center">
    <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
      <form class="form" method="POST" action="{{ route('register') }}">
        @csrf

        <div class="card card-login card-hidden mb-3">
          <div class="card-header card-header-danger text-center">
            <h3 class="card-title"><strong>{{ __('Registrar') }}</strong></h3>
            <div class="social-line">
              <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                <i class="fa fa-facebook-square"></i>
              </a>
              <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                <i class="fa fa-twitter"></i>
              </a>
              <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                <i class="fa fa-google-plus"></i>
              </a>
            </div>
          </div>
          <div class="card-body ">
            {{-- <p class="card-description text-center">{{ __('Or Be Classical') }}</p> --}}
            <div class="bmd-form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="material-icons">face</i>
                  </span>
                </div>
                <input type="text" name="name" class="form-control" placeholder="{{ __('Nome...') }}" value="{{ old('name') }}" required>
              </div>
              @if ($errors->has('name'))
                <div id="name-error" class="error text-danger pl-3" for="name" style="display: block;">
                  <strong>{{ $errors->first('name') }}</strong>
                </div>
              @endif
            </div>
            <div class="bmd-form-group{{ $errors->has('email') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">email</i>
                  </span>
                </div>
                <input type="email" name="email" class="form-control" placeholder="{{ __('Email...') }}" value="{{ old('email') }}" required>
              </div>
              @if ($errors->has('email'))
                <div id="email-error" class="error text-danger pl-3" for="email" style="display: block;">
                  <strong>{{ $errors->first('email') }}</strong>
                </div>
              @endif
            </div>
            <div class="bmd-form-group{{ $errors->has('password') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">lock_outline</i>
                  </span>
                </div>
                <input type="password" name="password" id="password" class="form-control" placeholder="{{ __('Senha...') }}" required>
              </div>
              @if ($errors->has('password'))
                <div id="password-error" class="error text-danger pl-3" for="password" style="display: block;">
                  <strong>{{ $errors->first('password') }}</strong>
                </div>
              @endif
            </div>
            <div class="bmd-form-group{{ $errors->has('password_confirmation') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">lock_outline</i>
                  </span>
                </div>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="{{ __('Confirmar Senha...') }}" required>
              </div>
              @if ($errors->has('password_confirmation'))
                <div id="password_confirmation-error" class="error text-danger pl-3" for="password_confirmation" style="display: block;">
                  <strong>{{ $errors->first('password_confirmation') }}</strong>
                </div>
              @endif
            </div>

            {{-- cpf --}}
            <div class="bmd-form-group{{ $errors->has('user_cpf') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">assignment_ind</i>
                  </span>
                </div>
                <input type="text" name="user_cpf" id="user_cpf" class="form-control" placeholder="{{ __('CPF...') }}" required>
              </div>
              @if ($errors->has('user_cpf'))
                <div id="cpf-error" class="error text-danger pl-3" for="user_cpf" style="display: block;">
                  <strong>{{ $errors->first('user_cpf') }}</strong>
                </div>
              @endif
            </div>

            {{-- telefone --}}
            <div class="bmd-form-group{{ $errors->has('user_telefone') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">call</i>
                  </span>
                </div>
                <input type="text" name="user_telefone" id="user_telefone" class="form-control" placeholder="{{ __('Telefone...') }}" required>
              </div>
              @if ($errors->has('user_telefone'))
                <div id="cpf-error" class="error text-danger pl-3" for="user_telefone" style="display: block;">
                  <strong>{{ $errors->first('user_telefone') }}</strong>
                </div>
              @endif
            </div>

             {{-- tipo sanguíneo --}}
             <div class="bmd-form-group{{ $errors->has('user_blood') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">local_hospital</i>
                  </span>
                </div>
                {{-- <input type="text" name="user_blood" id="user_blood" class="form-control" placeholder="{{ __('Tipo Sanguíneo') }}" required> --}}
                <select type="text" name="user_blood" id="user_blood" class="form-control" placeholder="{{ __('Tipo Sanguíneo...') }}" required>
                  <option value="blood" selected>Selecionar Tipo Sanguíneo</option>
                  <option value="A+">A+</option> 
                  <option value="A-">A-</option>
                  <option value="B+">B+</option>
                  <option value="B-">B-</option>
                  <option value="AB+">AB+</option>
                  <option value="AB-">AB-</option>
                  <option value="O+">O+</option> 
                  <option value="O-">O-</option>
                </select>
              </div>
              @if ($errors->has('user_blood'))
                <div id="cpf-error" class="error text-danger pl-3" for="user_blood" style="display: block;">
                  <strong>{{ $errors->first('user_blood') }}</strong>
                </div>
              @endif
            </div>


            <div class="form-check mr-auto ml-3 mt-3">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" id="policy" name="policy" {{ old('policy', 1) ? 'checked' : '' }} >
                <span class="form-check-sign">
                  <span class="check"></span>
                </span>
                {{ __('I agree with the ') }} <a href="#">{{ __('Privacy Policy') }}</a>
              </label>
            </div>
          </div>
          <div class="card-footer justify-content-center">
            <button type="submit" class="btn btn-danger btn-link btn-lg">{{ __('Criar') }}</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
