<div class="wrapper ">
  @include('layouts.navbars.doadorsidebar')
  <div class="main-panel">
    @include('layouts.navbars.navs.doador')
    @yield('content')
    @include('layouts.footers.auth')
  </div>
</div>