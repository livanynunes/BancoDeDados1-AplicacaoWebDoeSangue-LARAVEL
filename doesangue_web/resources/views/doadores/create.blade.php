@extends('layouts.app', ['activePage' => 'doador-management', 'titlePage' => __('Gerenciar Doador')])

<script type="text/javascript" >
    
  function limpa_formulário_cep() {
          //Limpa valores do formulário de cep.
          document.getElementById('rua').value=("");
          document.getElementById('bairro').value=("");
          document.getElementById('cidade').value=("");
          document.getElementById('uf').value=("");
          document.getElementById('ibge').value=("");
  }

  function meu_callback(conteudo) {
      if (!("erro" in conteudo)) {
          //Atualiza os campos com os valores.
          document.getElementById('rua').value=(conteudo.logradouro);
          document.getElementById('bairro').value=(conteudo.bairro);
          document.getElementById('cidade').value=(conteudo.localidade);
          document.getElementById('uf').value=(conteudo.uf);
          document.getElementById('ibge').value=(conteudo.ibge);
      } //end if.
      else {
          //CEP não Encontrado.
          limpa_formulário_cep();
          alert("CEP não encontrado.");
      }
  }
      
  function pesquisacep(valor) {

      //Nova variável "cep" somente com dígitos.
      var cep = valor.replace(/\D/g, '');

      //Verifica se campo cep possui valor informado.
      if (cep != "") {

          //Expressão regular para validar o CEP.
          var validacep = /^[0-9]{8}$/;

          //Valida o formato do CEP.
          if(validacep.test(cep)) {

              //Preenche os campos com "..." enquanto consulta webservice.
              document.getElementById('rua').value="...";
              document.getElementById('bairro').value="...";
              document.getElementById('cidade').value="...";
              document.getElementById('uf').value="...";
              

              //Cria um elemento javascript.
              var script = document.createElement('script');

              //Sincroniza com o callback.
              script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

              //Insere script no documento e carrega o conteúdo.
              document.body.appendChild(script);

          } //end if.
          else {
              //cep é inválido.
              limpa_formulário_cep();
              alert("Formato de CEP inválido.");
          }
      } //end if.
      else {
          //cep sem valor, limpa formulário.
          limpa_formulário_cep();
      }
  };

  </script>
 

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
                          <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="input-name" type="text" placeholder="{{ __('Nome') }}" value="" required="true" aria-required="true"/>
                          @if ($errors->has('name'))
                            <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                          @endif
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-sm-2 col-form-label">{{ __('CPF') }}</label>
                      <div class="col-sm-3">
                        <div class="form-group{{ $errors->has('user_cpf') ? ' has-danger' : '' }}">
                            <input class="form-control{{ $errors->has('user_cpf') ? ' is-invalid' : '' }}" name="user_cpf" id="input-user_cpf" type="user_cpf" placeholder="{{ __('CPF') }}" value="" required="true" aria-required="true"/>
                            @if ($errors->has('user_cpf'))
                              <span id="user_cpf-error" class="error text-danger" for="input-user_cpf">{{ $errors->first('user_cpf') }}</span>
                            @endif
                          </div>
                        </div>
                        <label class="col-sm-2 col-form-label">{{ __('Data de Nascimento') }}</label>
                      <div class="col-sm-3">
                      <div class="form-group{{ $errors->has('data_nascimento') ? ' has-danger' : '' }}">
                          <input class="form-control{{ $errors->has('data_nascimento') ? ' is-invalid' : '' }}" name="data_nascimento" id="input-data_nascimento" type="data_nascimento" placeholder="{{ __('Data de Nascimento') }}" value="" required="true" aria-required="true"/>
                          @if ($errors->has('data_nascimento'))
                            <span id="data_nascimento-error" class="error text-danger" for="input-data_nascimento">{{ $errors->first('data_nascimento') }}</span>
                          @endif
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-sm-2 col-form-label">{{ __('Email') }}</label>
                      <div class="col-sm-3">
                        <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                          <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="input-email" type="email" placeholder="{{ __('Email') }}" value="" required />
                          @if ($errors->has('email'))
                            <span id="email-error" class="error text-danger" for="input-email">{{ $errors->first('email') }}</span>
                          @endif
                        </div>
                      </div>
                      <label class="col-sm-2 col-form-label">{{ __('Telefone') }}</label>
                      <div class="col-sm-3">
                        <div class="form-group{{ $errors->has('user_telefone') ? ' has-danger' : '' }}">
                          <input class="form-control{{ $errors->has('user_telefone') ? ' is-invalid' : '' }}" name="user_telefone" id="input-user_telefone" type="text" placeholder="{{ __('Telefone') }}" value="" required="true" aria-required="true"/>
                          @if ($errors->has('user_telefone'))
                            <span id="user_telefone-error" class="error text-danger" for="input-user_telefone">{{ $errors->first('user_telefone') }}</span>
                          @endif
                        </div>
                      </div>
                    </div><hr>
                    <div class="row">
                      <label class="col-sm-2 col-form-label">{{ __('Tipo Sanguíneo') }}</label>
                      <div class="col-sm-4">
                          <div class="form-check form-check-radio">
                              <label class="form-check-label">
                                  <input class="form-check-input" type="radio" name="exampleRadios" id="input-user_blood" value="option1" >
                                  A+
                                  <span class="circle">
                                      <span class="check"></span>
                                  </span>
                              </label>
                          </div>
                          <div class="form-check form-check-radio">
                              <label class="form-check-label">
                                  <input class="form-check-input" type="radio" name="exampleRadios" id="input-user_blood" value="option2" checked>
                                  B+
                                  <span class="circle">
                                      <span class="check"></span>
                                  </span>
                              </label>
                          </div>
                          <div class="form-check form-check-radio">
                              <label class="form-check-label">
                                  <input class="form-check-input" type="radio" name="exampleRadios" id="input-user_blood" value="option3" checked>
                                  AB+
                                  <span class="circle">
                                      <span class="check"></span>
                                  </span>
                              </label>
                          </div>
                          <div class="form-check form-check-radio">
                              <label class="form-check-label">
                                  <input class="form-check-input" type="radio" name="exampleRadios" id="input-user_blood" value="option4" checked>
                                  O+
                                  <span class="circle">
                                      <span class="check"></span>
                                  </span>
                              </label>
                          </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-check form-check-radio">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="input-user_blood" value="option1" >
                                A-
                                <span class="circle">
                                    <span class="check"></span>
                                </span>
                            </label>
                        </div>
                        <div class="form-check form-check-radio">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="input-user_blood" value="option2" checked>
                                B-
                                <span class="circle">
                                    <span class="check"></span>
                                </span>
                            </label>
                        </div>
                        <div class="form-check form-check-radio">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="input-user_blood" value="option3" checked>
                                AB-
                                <span class="circle">
                                    <span class="check"></span>
                                </span>
                            </label>
                        </div>
                        <div class="form-check form-check-radio">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="input-user_blood" value="option4" checked>
                                O-
                                <span class="circle">
                                    <span class="check"></span>
                                </span>
                            </label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Sexo') }}</label>
                  <div class="col-sm-3">
                    <select id="d_sexo" class="form-control">
                      <option selected>Selecionar</option>
                      <option value="F">Feminino</option>
                      <option value="M">Masculino</option>
                  </select>
                </div>
                  <label class="col-sm-2 col-form-label">{{ __('Peso') }}</label>
                  <div class="col-sm-3">
                  <div class="form-group{{ $errors->has('d_peso') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('d_peso') ? ' is-invalid' : '' }}" name="d_peso" id="input-d_peso" type="d_peso" placeholder="{{ __('Informe o peso') }}" value="" required="true" aria-required="true"/>
                      @if ($errors->has('d_peso'))
                        <span id="d_peso" class="error text-danger" for="input-d_peso">{{ $errors->first('d_peso') }}</span>
                      @endif
                    </div>
                  </div>
                </div><hr>
                    <div class="row">
                      <label class="col-sm-2 col-form-label">{{ __('CEP') }}</label>
                        <div class="col-sm-3">
                        <div class="form-group{{ $errors->has('cep') ? ' has-danger' : '' }}">
                            <input class="form-control{{ $errors->has('cep') ? ' is-invalid' : '' }}" name="cep" id="input-cep" 
                                   type="cep" placeholder="{{ __('Informe o CEP') }}" value="{{ old('cep', auth()->user()->cep) }}" 
                                   required="true" aria-required="true" onblur="pesquisacep(this.value);"/>
                            @if ($errors->has('cep'))
                              <span id="cep-error" class="error text-danger" for="input-cep">{{ $errors->first('cep') }}</span>
                            @endif
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <label class="col-sm-2 col-form-label">{{ __('Endereço') }}</label>
                          <div class="col-sm-3">
                            <input name="rua" id="rua"type="text" class="form-control" placeholder="Rua">
                        </div>                 
                          <div class="col-sm-2">
                            <input name="number" id="number" type="text" class="form-control" placeholder="Número">
                      </div>
                      <div class="col-sm-3">
                            <input name="complemento" id="complemento" type="text" class="form-control" placeholder="Complemento">
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-sm-2 col-form-label">{{ __('') }}</label>
                        <div class="col-sm-3">
                          <input name="bairro" id="bairro"type="text" class="form-control" placeholder="Bairro">
                    </div>
                    <div class="col-sm-4">
                      <input name="cidade" id="cidade" type="text" class="form-control" placeholder="Cidade">
                  </div>
                  <div class="col-sm-1">
                    <input name="uf" id="uf" type="text" class="form-control" placeholder="Estado">
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