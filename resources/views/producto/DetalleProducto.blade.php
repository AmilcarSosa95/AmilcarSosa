<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Detalle del producto') }}
        </h2>
    </x-slot>

    <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div class="relative mb-3" data-te-input-wrapper-init>
                            <div class="row-auto">
                                <div class="col-auto mb-1.5">
                                    <h1>Español</h1>
                                </div>
                                <hr>
                                <div>
                                    <label style="font-weight: bold;" for="nombreEs">Nombre</label>
                                    <p style="font-size: small;">{{$producto['nombreEs']}}</p>
                                </div>
                                <div>
                                    <label style="font-weight: bold;" for="descripcionCortaEs">Descripcion corta</label>
                                    <p style="font-size: small;">{{$producto['descripcionCortaEs']}}</p>
                                </div>
                                <div>
                                    <label style="font-weight: bold;" for="descripcionLargaEs">Descripcion larga</label>
                                    <p style="font-size: small;">{{$producto['descripcionLargaEs']}}</p>
                                </div>
                                <div>
                                    <label style="font-weight: bold;" for="urleEs">Url</label>
                                    <p style="font-size: small;">{{$producto['urleEs']}}</p>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            </div>
            <br>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div class="relative mb-3" data-te-input-wrapper-init>



                            <div class="col-auto mb-1.5">
                                <h1>Ingles</h1>
                            </div>
                            <hr>
                            <div>
                                <label style="font-weight: bold;" for="nombreEn">Nombre</label>
                                <p style="font-size: small;">{{$producto['nombreEn']}}</p>
                            </div>
                            <div>
                                <label style="font-weight: bold;" for="descripcionCortaEn">Descripcion corta</label>
                                <p style="font-size: small;">{{$producto['descripcionCortaEn']}}</p>
                            </div>
                            <div>
                                <label style="font-weight: bold;" for="descripcionLargaEn">Descripcion larga</label>
                                <p style="font-size: small;">{{$producto['descripcionLargaEn']}}</p>
                            </div>
                            <div>
                                <label style="font-weight: bold;" for="urleEn">Url</label>
                                <p style="font-size: small;">{{$producto['urleEn']}}</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div class="relative mb-3" data-te-input-wrapper-init>
                            <div class="row-auto">
                                <div class="col-auto mb-1.5">
                                    <div>
                                        <label style="font-weight: bold;" for="sku">SKU</label>
                                        <p style="font-size: small;">{{$producto['sku']}}</p>
                                    </div>

                                </div>
                                <div class="col-auto mb-1.5">
                                    <div>
                                        <label style="font-weight: bold;" for="precio_dolares">Precio en dolares</label>
                                        <p style="font-size: small;">{{$producto['precio_dolares']}}</p>
                                    </div>

                                </div>
                                <div class="col-auto mb-1.5">
                                    <div>
                                        <label style="font-weight: bold;" for="precio_pesos">Precio en pesos</label>
                                        <p style="font-size: small;">{{$producto['precio_pesos']}}</p>
                                    </div>

                                </div>
                                <div class="col-auto mb-1.5">
                                    <div>
                                        <label style="font-weight: bold;" for="puntos">Puntos</label>
                                        <p style="font-size: small;">{{$producto['puntos']}}</p>
                                    </div>

                                </div>

                            </div>
                            <br>
                            <br>
                            <div style="text-align: right">
                                <a href="{{route('producto.index')}}" class="btn btn-secondary">Regresar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</x-app-layout>

<script>
    import {
        Input,
        initTE,
    } from "tw-elements";

    initTE({Input});
</script>
