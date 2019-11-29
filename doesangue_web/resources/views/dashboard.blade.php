@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('DoeSangue.org ')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        
        <div class="jumbotron jumbotron-fluid">
          <div class="container">
            <h1 class="display-4">Bem vindo(a), {{auth()->user()->name}}</h1>
            <p class="lead">Essa é a central de voluntários, aqui você pode cadastrar novos doadores e voluntários, além de e ter relatórios sobre os bancos de sangue cadastrados. </p>
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