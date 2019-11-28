<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top text-white">
  <div class="container">
    <div class="navbar-wrapper">
      <a class="navbar-brand" href="{{ route('index') }}">{{ $title }}</a>
      {{-- <p class="navbar-brand">{{ $title }}</p> --}}
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
      <span class="sr-only">Toggle navigation</span>
      <span class="navbar-toggler-icon icon-bar"></span>
      <span class="navbar-toggler-icon icon-bar"></span>
      <span class="navbar-toggler-icon icon-bar"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end">
      <ul class="navbar-nav">
        
        
        <li class="nav-item{{ $activePage == 'login' ? ' active' : '' }}">
          <a href="{{ route('login') }}" class="nav-link">
            <i class="material-icons">fingerprint</i> {{ __('Sou voluntário') }}
          </a>
        </li>

        <li class="nav-item{{ $activePage == 'doador-login' ? ' active' : '' }}">
          <a href="{{ route('doador.login') }}" class="nav-link">
            <i class="material-icons">fingerprint</i> {{ __('Sou doador') }}
          </a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar -->