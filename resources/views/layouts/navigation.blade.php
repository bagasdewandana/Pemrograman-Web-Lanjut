<link rel="stylesheet" href="{{ asset('css/navbarpro.css')}}">
<nav>
    <div class="logo">
        <img src="{{ ('css\img\log.png') }}">
        <h4>GADGET RIVIEW</h4>
    </div>

    <ul>
        <li><a href="/Homepro">Home</a></li>
        <li><a href="/Contactpro">Contact</a></li>
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
                <a href="/Akun">{{ Auth::user()->name }}</a> <span class="caret"></span>


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
</nav>
