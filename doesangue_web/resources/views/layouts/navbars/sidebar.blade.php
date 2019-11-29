<div class="sidebar" data-color="danger" data-background-color="white" data-image="{{ asset('material') }}/img/login2.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="{{ route('home') }}" class="simple-text logo-normal">
      {{ __('Central do voluntário') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Página inicial') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('profileAdmin.edit') }}">
               <i class="material-icons">face</i>
                <span class="sidebar-normal">{{ __('Editar meu perfil') }} </span>
              </a>
      </li>
     <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
      <a class="nav-link" href="{{ route('user.index') }}">
        <i class="material-icons">assignment_ind</i>
        {{-- <i class="material-icons">person_pin</i> --}}

        <span class="sidebar-normal"> {{ __('Gerenciar voluntários') }} </span>
      </a>
    </li>
    <li class="nav-item{{ $activePage == 'doador-management' ? ' active' : '' }}">
      <a class="nav-link" href="{{ route('doadores.index') }}">
        {{-- <i class="material-icons">assignment_ind</i> --}}
        <i class="material-icons">person_pin</i>

        <span class="sidebar-normal"> {{ __('Gerenciar doadores') }} </span>
      </a>
    </li>
    <li class="nav-item{{ $activePage == 'Bancos-Sangue' ? ' active' : '' }}">
      <a class="nav-link" href="{{ route('bancos.index') }}">
        {{-- <i class="material-icons">assignment_ind</i> --}}
        <i class="material-icons">dns</i>

        <span class="sidebar-normal"> {{ __('Bancos de sangue') }} </span>
      </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}">
          <i class="material-icons">power_settings_new</i>
          <p> {{ __('Sair') }} </p>
        </a>
      </li>

      <li class="nav-item{{ $activePage == 'table' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('table') }}">
          <i class="material-icons">content_paste</i>
            <p>{{ __('Table List') }}</p>
        </a>
      </li>
      
      
     {{--  <li class="nav-item{{ $activePage == 'map' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('map') }}">
          <i class="material-icons">location_ons</i>
            <p>{{ __('Maps') }}</p>
        </a>
      </li> --}}
      
      
      
    </ul>
  </div>
</div>