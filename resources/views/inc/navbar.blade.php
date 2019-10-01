<nav class="navbar navbar-expand-md fixed-top navbar-light bg-white shadow-sm">
    <div class="container">
    <a class="navbar-brand" href="{{ url('/') }}">
      <img style="height:50px;" src="http://pngimg.com/uploads/sunflower/sunflower_PNG13372.png" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
      <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Left Side Of Navbar -->
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/">Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about">About</a>
        </li>
        <li class="nav-item">
                <a class="nav-link" href="/services">Services</a>
        </li>
        <li class="nav-item">
                <a class="nav-link" href="/contact">Contact</a>
        </li>
        @if (Auth::check())
        <li class="nav-item">
                <a class="nav-link" href="/room/">Check bookings</a>
         </li>
        @endif
        <li class="nav-item">
                <a class="nav-link" href="/posts">Blogs</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="/room/create">Book Room</a>
        </li>
        </ul>
        

      <!-- Right Side Of Navbar -->
      <ul class="navbar-nav ml-auto">
         
          <!-- Authentication Links -->
          @guest
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
              @if (Route::has('register'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                  </li>
              @endif
          @else
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      Hello {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </div>
              </li>
          @endguest
      </ul>
  </div>
</div>
</nav>