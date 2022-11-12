<nav class="navbar navbar-expand-lg nav-color sticky-top fw-bold">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route ('index') }}"><img
                src="{{ "img/logo.png" }}" alt="" width="50px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarSupportedContent">
            <div>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active links" aria-current="page" href="{{ route ('index') }}">{{ __('Inicio') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active links"
                            href="{{ route ('ads.index') }}">{{ __('Anuncios') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active links"
                            href="{{ route('ads.create') }}">{{ __('Nuevo Anuncio') }}</a>
                    </li>
                    <li class="nav-item  dropdown">
                        <a class="nav-link dropdown-toggle active  links" href="#" role="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false">{{ __('Categorías') }}</a>
                        <ul class="dropdown-menu categorias-nav" aria-labelledby="navbarDropdown">
                            @foreach($categories as $category)
                                <li><a class="dropdown-item text-capitalize"
                                        href="{{ route('category.ads',$category) }}">{{__("{$category->name}")}}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    <li>
                        <div class="container ms-5 ">
                            <button class="btn boton-nav mt-1"><a class="text-decoration-none text-black"
                                    href="{{ route('ads.create') }}">{{ __('Sube tu anuncio') }}<i
                                        class="bi bi-plus-square ms-1"></i></a></button>
                        </div>

                    </li>
                    </li>
                </ul>
            </div>
            <div class="ms-auto me-5">
                <ul class="navbar-nav  mb-2 mb-lg-0">
                    <li class="nav-item">
                        <x-locale lang="en" country="gb" />
                    </li>

                    <li class="nav-item">
                        <x-locale lang="it" country="it" />
                    </li>

                    <li class="nav-item">
                        <x-locale lang="es" country="es" />
                    </li>
                </ul>
            </div>
            <div class="navbar-nav">
                @guest
                    @if(Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('login') }}"><span class="fw-bold">Login</span></a>
                        </li>
                    @endif
                    @if(Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('register') }}"><span>Register</span></a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @if(Auth::user()->is_revisor)
                                <li>
                                    <a class="dropdown-item" href="{{ route('revisor.home') }}">
                                        {{ __('Revisor') }}
                                        <span class="badge rounded-pill bg-danger">
                                            {{ \App\Models\Ad::ToBeRevisionedCount() }}
                                        </span>
                                    </a>
                                </li>
                            @endif
                            <li>
                                <form id="logoutForm" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                </form>
                                <a id="logoutBtn" class="dropdown-item" href="#">{{ __('Salir') }}</a>
                            </li>
                        </ul>
                    </li>
                @endguest
            </div>
        </div>
    </div>
</nav>
