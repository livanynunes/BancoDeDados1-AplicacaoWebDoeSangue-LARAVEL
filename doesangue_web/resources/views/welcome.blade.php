@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'title' => __('DoeSangue.com')])

@section('content')
<div class="container" style="height: auto;">
  <div class="row justify-content-center">
      <div class="col-lg-7 col-md-8">
          <h1 class="text-white text-center">{{ __('Bem-vindo(a) ao sistema de doação de sangue!') }}</h1>
          <h5 class="text-white text-center">{{ __('Faça seu login acima.') }}</h5>
      </div>
  </div>
</div>
@endsection
