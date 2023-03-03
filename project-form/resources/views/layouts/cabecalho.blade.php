<div hidden class="d-flex justify-content-between  organiza" style="background-color: rgb(207, 207, 207);border: 1px solid black;">
    @if (Route::has('login'))
        @auth
            <a href="{{ url('/resultado') }}" class="nav-link">Cadastrados</a>
                <li class=" dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
            
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a href="{{ route('logout') }}" class="dropdown-item" href="#"
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                Logout
                            </a>
            
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
        @endauth
    @else
        <div class="row me-5">
            <a href="{{ route('register') }}" class="nav-link">Cadastre-se</a>
        </div>      
    @endif
</div>