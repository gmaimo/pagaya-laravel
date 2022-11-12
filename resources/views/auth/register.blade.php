<x-layout>
    <x-slot name="title">Rapido - Register</x-slot>
    <!-- ======= REGISTER ======= -->
    <div class="container-fluid bg-accent  ">
        <div class="row ">
            <div class="col-12 col-md-6 offset-md-3">
                <!--FORM TITLE -->
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="/register" method="POST" role="form" class="php-email-form form-register py-5 my-5 ">
                        @csrf
                        <div class="container d-flex justify-content-center text-center">
                            <h3 class="fw-bold">
                                <img class="mb-4" src='/img/envio.png' alt="" width="65px" >
                                <div class="mb-3 d-block h2-login">
                                    {{__('¡Regístrate!')}}
                                </div>
                            </h3>
                            
                        </div>
                        
                       
                        <!--Name -->
                        <div class="space-around my-2 p-login">
                            <input type="text" name="name" id="name" class=" forms_field-input input-login"
                                placeholder="{{__('Tu nombre')}}" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                            <div class="validate"></div>
                        </div>

                        <!--Email -->
                        <div class="space-around my-2 p-login">
                            <input type="email" name="email" id="email"
                                class="forms_field-input input-login" placeholder="{{__('Tu correo')}}"
                                data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                            <div class="validate"></div>
                        </div>
                        <!--Password -->
                        <div class="space-around my-2 p-login">
                            <input type="password" name="password" id="password"
                                class="forms_field-input input-login" placeholder="{{__('Tu contraseña')}}">
                            <div class="validate"></div>
                        </div>
                        <!--Password Confirmation -->
                        <div class="space-around my-2 p-login">
                            <input type="password" name="password_confirmation" id="password"
                                class="forms_field-input input-login"
                                placeholder="{{__('Tu contraseña, una vez más')}}">
                            <div class="validate"></div>
                        </div>
                        <div class="text-center">
                              <button type="submit" class="btn boton my-2">
                            {{__('Crear cuenta')}}
                        </button>
                        </div>
                      

                        <h6 class="my-2 text-center">{{__('¿Ya eres de los nuestros?')}} <a class="btn boton btn-sm ms-2"
                            href="{{route('login')}}">{{__('¡Entra ya!')}}</a> </h6>
                    </form>

                    
            </div>
        </div>
    </div>
</x-layout>
