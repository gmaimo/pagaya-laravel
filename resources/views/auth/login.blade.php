<x-layout>
    <x-slot name="title">Rapido - Login</x-slot>
    <div class="container-fluid bg-accent container-login">
        <form action="/login" method="POST" role="form" class="php-email-form form-login py-5 my-5">
            @csrf
            <div class="container d-flex justify-content-center text-center">
                <h3 class="fw-bold">
                    <img class="mb-4" src='/img/llave.png' alt="" width="55px">
                     <div class="mb-3 d-block h2-login"> 
                        {{ __('Iniciar Sesión') }}
                    </div> 
                    
                </h3>
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <!--Email -->
            <div class="space-around my-2 p-login">
                <input type="email" name="email" id="email" class="forms_field-input input-login"
                    placeholder="{{__('Tu correo')}}" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                <div class="validate"></div>
            </div>
            <!--Password -->
            <div class="space-around my-2 p-login">
                <input type="password" name="password" id="password" class="forms_field-input input-login"
                    placeholder="{{__('Tu contraseña')}}">
                <div class="validate"></div>
            </div>
            <div class="text-center">
                <!--Button-Login-->
                <button type="submit" class="btn boton">{{ __('Entrar') }}</button>
            </div>


            <p class="my-2">{{ __('¿Aún no eres de los nuestros?') }} <a
                    class="btn boton btn-sm ms-2"
                    href="{{ route('register') }}">{{ __('¡Regístrate!') }}</a>
            </p>
        </form>


    </div>
    </div>
    </div>


</x-layout>
