<x-layout>

    <x-slot name='title'>{{__('Detalles')}}</x-slot>
    <div class="container d-flex justify-content-center ms-2 mt-4">
        <div class="row">
            <div class="col-12">
                <h3 class="my-3 py-3">{{__('Aquí puedes encontrar toda la información sobre tu artículo')}}</h3>
            </div>
        </div>

    </div>

    <div class="container d-flex justify-content-center ">
        <div class="row my-5">
            <div class="col-12 col-md-6">
                <div id="adImages" class="carousel slide" data-bs-ride="true">
                    <div class="carousel-indicators v-100">
                        @for ($i = 0; $i < $ad->images()->count(); $i++)
                        <button type="button" data-bs-target="#adImages" data-bs-slide-to="{{$i}}" class="@if($i == 0) active @endif" aria-current="true" aria-label="Slide {{$i + 1}}"></button>
                        @endfor
                    </div>
                    <div class="carousel-inner">
                        @foreach ($ad->images as $image)
                        <div class="carousel-item @if($loop->first) active @endif">
                            <img src="{{$image->getUrl(400,300)}}" class="d-block w-100" alt="...">
                        </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#adImages" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">{{__('Anterior')}}</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#adImages" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">{{__('Siguiente')}}</span>
                    </button>
                </div>
            </div>
            <div class="col-12 col-md-6 text-center">
                <div class="my-2"><b> {{__('Título:')}}</b> {{$ad->title}}</div>
                <div class="my-2"><b> {{__('Precio:')}}</b> {{$ad->price}}</div>
                <div class="my-2"><b> {{__('Descripción:')}}</b> {{$ad->body}}</div>
                <div class="my-2"><b> {{__('Publicado el:')}}</b> {{$ad->created_at->format('d/m/Y')}}</div>
                <div class="my-2"><b> {{__('Por:')}}</b> {{$ad->user->name}}</div>
                <div class="my-2"><a href="{{route('category.ads',$ad->category)}}" class="text-decoration-none text-black">#{{$ad->category->name}}</a></div>
                <p>{{__('¿Te interesa? ¡Cómpralo!')}}</p>
                <div class="my-2"><a href="#" class="btn boton">{{__('Comprar')}}</a></div>
            </div>
        </div>
    </div>
</x-layout>
