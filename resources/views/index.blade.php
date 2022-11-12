<x-layout>

    <x-slot name='title'>Rápido</x-slot>

    <x-slot name='content'>
        <div class="container ">
            <div class="row">
                <div class="col-12 mt-5 pt-5">
                    <h1 class="text-center fw-bold mb-2 pb-2 display-2">{{__('Bienvenido a Rapido.es')}}</h1>
                    <h4 class="text-center mb-2">{{__('¡La página de compra-venta de moda!')}}</h4>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row m-5">
                <div class="my-5 py-5 iconos grid" >   {{-- col-2 col-md-6 col-lg-12 --}}
                    <figure class="text-center category-hover">
                        <a href="{{url ('/category/coches/ads')}}" class="text-decoration-none text-black fw-bold">
                            <img src="{{ "img/coches.png" }}" width="100px">
                            <figcaption> <small>{{__('Coches')}}</small>
                            </a>
                        </figure>
                        <figure class="text-center category-hover">
                            <a href="{{url ('/category/motos/ads')}}" class="text-decoration-none text-black fw-bold">
                                <img src="{{ "img/motos.png" }}" width="100px">
                                <figcaption><small>{{__('Motos')}}</small>
                                </a>
                            </figure>
                            <figure class="text-center category-hover">
                                <a href="{{url ('/category/ordenadores/ads')}}" class="text-decoration-none text-black fw-bold">
                                    <img src="{{ "img/ordenadores.png" }}" width="100px">
                                    <figcaption><small>{{__('Ordenadores')}}</small>
                                    </a>
                                </figure>
                                <figure class="text-center category-hover">
                                    <a href="{{url ('/category/moviles/ads')}}" class="text-decoration-none text-black fw-bold">
                                        <img src="{{ "img/moviles.png" }}" width="100px">
                                        <figcaption><small>{{__('Móviles')}}</small>
                                        </a>
                                    </figure>
                                    <figure class="text-center category-hover">
                                        <a href="{{url ('/category/electronica/ads')}}" class="text-decoration-none text-black fw-bold">
                                            <img src="{{ "img/electronica.png" }}" width="100px">
                                            <figcaption><small>{{__('Electrónica')}}</small>
                                            </a>
                                        </figure>
                                        <figure class="text-center category-hover">
                                            <a href="{{url ('/category/hogar/ads')}}" class="text-decoration-none text-black fw-bold">
                                                <img src="{{ "img/hogar.png" }}" width="100px">
                                                <figcaption class="fw-bold"><small>{{__('Hogar')}}</small>
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                </div>

                                <div class="container">
                                    <div class="row">
                                        <h3 class="text-center mb-5 pb-5">{{__('No te pierdas nuestros últimos anuncios publicados')}}</h3>
                                        @forelse($ads as $ad)
                                        <div class="col-12 col-md-4 d-flex justify-content-center">
                                                <div class="card mb-5 shadow ad-cards" style="width:18rem" >

                                                @if ($ad->images()->count() > 0)
                                                {{-- <img src="{{!$ad->images()->get()->isEmpty() ? Storage::url($ad->images()->first()->path) : "https://via.placeholder.com/150" }}" class="card-img-top card-img" alt="..."> --}}
                                                <img src="{{ $ad->images()->first()->getUrl (400,300) }}" class="card-img-top card-img" alt="...">
                                                @else
                                                <img src="https://picsum.photos/300" class="card-img-top" alt="...">
                                                @endif

                                                <div class="card-body text-center">
                                                <div class="card-subtitle mb-2">
                                                <i class="fw-bold">{{ $ad->created_at->format('d/m/Y') }}</i><br>
                                                </div>
                                                <h4 class="card-title fw-bold"> {{ $ad->title }}</h4>
                                                <h6 class="card-subtitle mb-2 text-muted fw-bold">{{__('Precio:')}} {{ $ad->price }} €</h6>
                                                <p class="card-text "> {{ $ad->body }}</p>
                                                </div>
                                                <div class="card-body cards-footer text-center d-flex justify-content-between">
                                                    <div class="col-md-4 category-hover">
                                                        <strong> <small><a class="text-decoration-none text-black text-capitalize" href="{{ route('category.ads', $ad->category) }}">{{ $ad->category->name }}</a></small></strong>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="card-subtitle mb-2">
                                                            <small>{{__('Vendedor')}}: {{ $ad->user->name }}</small>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <a class="text-decoration-none" href="{{route("ads.show", $ad)}}"><img src="{{"img/icono-arrow.png"}}" alt="" class="arrow-hover"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @empty
                                        <div class="col-12">
                                            <h2>{{__('Uyy.. parece que no hay nada')}}</h2>
                                            <a href="{{ route('ads.create') }}" class="btn boton">{{__('Vende tu primer objeto')}}</a> {{__('o')}} <a
                                            href="{{ route('index') }}" class="btn boton">{{__('vuelve a la home')}}</a>
                                        </div>
                                        @endforelse
                                    </div>
                                    <p class="text-center">{{__('¿Estás pensando en vender algo? ¡Ahora es el momento!')}}</p>
                                    <div class="d-flex justify-content-center py-3 my-2">
                                        <button class="btn boton"><a class="text-decoration-none text-black"
                                            href="{{ route('ads.create') }}"><i class="bi bi-file-arrow-up me-3"></i>{{__('Sube tu anuncio')}}<i
                                            class="bi bi-file-arrow-up ms-3"></i></a></button>
                                        </div>
                                    </div>
                                </x-layout>
