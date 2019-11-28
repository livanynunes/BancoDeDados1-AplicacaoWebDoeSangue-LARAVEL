<div class="sidebar" data-color="danger" data-background-color="white" data-image="{{ asset('material') }}/img/login2.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="{{ route('doador.dashboard') }}" class="simple-text logo-normal">
      {{ __('Central do doador') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'doador-dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('doador.dashboard') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Página inicial') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('profileDoador.edit') }}">
          <i class="material-icons">face</i>
          <p>{{ __('Editar perfil') }} </p>
        </a>
      </li>
       <li class="nav-item{{ $activePage == 'doacoes' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('pagesDoadores.index') }}">
          <i class="material-icons">bubble_chart</i>
          <p> {{ __('Doações Feitas') }} </p>
        </a>
      </li>
     
    </ul>
  </div>
</div>