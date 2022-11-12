
<x-layout>

    <x-slot name='title'>{{__('Rapido, subir anuncio')}}</x-slot>

        <div class="container-fluid form-ads">
            <h2 class="m-4 p-2 text-center">{{__('¡Sube tu anuncio!')}}</h2>
            <div class="row justify-content-center ">
                <div class="col-md-8">
                    <div class="">
                        <div class="pt-3 fw-bold text-center h5 d-flex justify-content-center">
                            <p class="text-center pb-2">{{__('Nuevo anuncio')}}</p>
                        </div>
                        <div class="">
                            <livewire:create-ad />
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-layout>
