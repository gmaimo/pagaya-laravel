<div>
    @if (session()->has('message'))
    <div class="alert alert-success" role="alert">
        {{session('message')}}
    </div>

    @endif
    <div>


        <form wire:submit.prevent="store">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">{{__('Título:')}}</label>
                <input wire:model="title" type="text" class="form-control rounded-0 border-0 border-bottom border-dark
                @error('title') is-invalid @enderror" placeholder="{{__('Titulo del articulo')}}">
                @error('title')
                {{$message}}
                @enderror
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">{{__('Precio:')}}</label>
                <input wire:model="price" type="number" class="form-control rounded-0 border-0 border-bottom border-dark
                @error('price') is-invalid @enderror" placeholder="{{__('Precio del articulo')}}">
                @error('price')
                {{$message}}
                @enderror
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">{{__('Categoría:')}}</label>
                <select wire:model.defer="category" class="form-control text-capitalize rounded-0 border-0 border-bottom border-dark" >
                    <option value="">{{__('Seleccionar categoría')}}</option>
                    @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="body" class="form-label">{{__('Descripción:')}}</label>
                <textarea wire:model="body" cols="30" rows="15" class="form-control rounded-0 border-0 border-bottom border-dark
                @error('body') is-invalid @enderror" placeholder="{{__('Descríbenos tu artículo')}}"></textarea>
                @error('body')
                {{$message}}
                @enderror
            </div>

            <div class="mb-3">
                <input wire:model="temporary_images" type="file" name="images" multiple class="form-control shadow @error('temporary_images.*') is-invalid @enderror">
                @error('temporary_images.*')
                <p class="text-danger mt-2">{{$message}}</p>
                @enderror
            </div>

            @if(!empty($images))
            <div class="row">
                <div class="col-12">
                    <p>{{__('Vista previa')}}:</p>
                    <div class="row">
                        @foreach ($images as $key=>$image)
                        <div class="col-12 col-md-4">
                            <img src="{{$image->temporaryUrl()}}" alt="" class="img-fluid">
                            <button type="button" class="btn btn-danger" wire:click="removeImage({{$key}})">Eliminar</button>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endif
            
            <div class="my-3 d-flex justify-content-center">
                <button type="submit" class="btn boton fw-bold">{{__('Crear anuncio')}}</button>
            </div>
        </form>

    </div>
