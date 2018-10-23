<nav class="navbar has-shadow" >
  <div class="container">
    <div class="navbar-brand m-r-25">
      <a class="navbar-item brand-item" href="{{route('home')}}">
        <img src="{{asset('images/fix-logo.png')}}" alt="Situs Logo">
      </a>

      @if (Request::segment(1) == "manage")
        <a class="navbar-item is-hidden-desktop" id="admin-slideout-button">
          <span class="icon">
            <i class="fa fa-arrow-circle-right"></i>
          </span>
        </a>
      @endif

      <button class="button navbar-burger">
       <span></span>
       <span></span>
       <span></span>
     </button>
    </div>
    <div class="navbar-menu">
      <div class="navbar-start">
        <a class="navbar-item is-tab m-l-10">Learn</a>
        <a class="navbar-item is-tab m-l-10">Discuss</a>
        <a class="navbar-item is-tab m-l-10">Share</a>
      </div> <!-- end of .navbar-start -->


      <div class="navbar-end nav-menu" style="overflow: visible">
        @if (Auth::guest())
          <a href="{{route('login')}}" class="navbar-item is-tab m-l-10">Login</a>
          <a href="{{route('register')}}" class="navbar-item is-tab m-l-10">Join the Community</a>
        @else
          <div class="navbar-item has-dropdown is-hoverable">
            <a class="navbar-link">{{Auth::user()->name}}</a>
            <div class="navbar-dropdown is-right" >
              <a href="#" class="navbar-item">
                <span class="icon">
                  <i class="fa fa-fw fa-user-circle-o m-r-15"></i>
                </span>Profile
              </a>

              <a href="#" class="navbar-item">
                <span class="icon">
                  <i class="fa fa-fw fa-bell m-r-15"></i>
                </span>Notifications
              </a>
              <a href="{{route('manage.dashboard')}}" class="navbar-item">
                <span class="icon">
                  <i class="fa fa-fw fa-cog m-r-15"></i>
                </span>Manage
              </a>
              <hr class="navbar-divider">              
              <a href="{{ route('logout') }}" class="navbar-item" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                <span class="icon">
                  <i class="fa fa-fw fa-sign-out m-r-15"></i>
                </span>
                Logout
                <form id="frm-logout" action="{{ route('logout') }}"  method="POST" style="display: none;">
              {{ csrf_field() }}
              </form>
              </a>
            </div>
          </div>
        @endif
      </div>
    </div>

  </div>
</nav>