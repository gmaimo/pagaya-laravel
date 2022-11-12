<x-layout>

    <x-slot name='title'>{{__('Rapido, subir anuncio')}}</x-slot>

        <div class="container">
            <div class="row">
                <div class="col-12 my-5 py-5">
                    <h1 class="text-capitalize text-center ">{{__('Anuncios por categoría ')}}<i class="bi bi-arrow-right text-warning me-2"></i>{{ $category->name}}</h1>
                </div>
            </div>
            <div class="row">
                @forelse($ads as $ad)
                <div class="col-12 col-md-4">
                    <div class="card mb-5"  style="width:18rem;" >
                        <img src="{{!$ad->images()->get()->isEmpty() ? $ad->images()->first()->getUrl(400,300) : 'https://via.placeholder.com/150' }}" class="card-img-top card-img" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"> {{$ad->title}}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{$ad->price}}</h6>
                            <p class="card-text"> {{$ad->body}}</p>
                            <div class="card-subtitle mb-2">
                                <strong><a
                                        href="{{route('category.ads',$ad->category)}}">#{{$category->name}}</a></strong>
                                <i>{{$ad->created_at->format('d/m/Y')}}</i>
                            </div>
                            <div class="card-subtitle mb-2">
                                <small>{{ $ad->user->name }}</small>
                            </div>
                            <a href="{{route("ads.show", $ad)}}" class="btn boton">{{__('Mostrar Más')}}</a>
                        </div>
                    </div>
                </div>


                @empty
                <div class="container ">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="text-center mb-3 ">{{__('Uyy.. parece que no hay nada de esta categoría')}}</h2>
                        </div>
                            <div class="text-center">
                                <a href="{{route('ads.create')}}" class="btn boton">{{__('Vende tu primer objeto')}}
                            </a>
                            {{__('o')}}
                            <a
                                href="{{route('index')}}" class="btn boton">{{__('Vuelve a la home')}}
                            </a>
                            </div>
                        </div>
                    </div>
                
                @endforelse
                <div class="d-flex justify-content-center">{{$ads->links()}}</div>
                <div class="d-flex justify-content-center">
                    <button class="btn boton m-2"><a class="text-decoration-none text-black" href="{{route('index')}}">{{__('Volver')}}</a></button>
                </div>

            </div>
        </div>
</x-layout>
