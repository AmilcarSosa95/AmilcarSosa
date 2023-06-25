<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {!! trans('producto.edit_produc') !!}
        </h2>
    </x-slot>

    <div class="py-12">
        @if(count($errors) >0)
            <div class="alert alert-danger">
                {!! trans('validation.mesg_error_validate') !!}

                <ul>
                    @foreach($errors->all() as $error)
                        <li> {{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="post" action="{{url('/admin/producto/modificar')}}"  enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div class="relative mb-3" data-te-input-wrapper-init>
                            <input hidden id="id" name="id" value="{{old('id',$producto['id'])}}"/>
                            <input hidden id="idEs" name="idEs" value="{{old('idEs',$producto['idEs'])}}"/>
                            <input hidden id="idEn" name="idEn" value="{{old('idEn',$producto['idEn'])}}"/>
                            <div class="row-auto">
                                <div class="col-auto mb-1.5">
                                    <h1>{!! trans('producto.espaniol') !!}</h1>
                                </div>
                                <hr>
                                <div>
                                    <label for="nombreEs">{!! trans('producto.nombre') !!}</label>
                                    <input
                                        style="color: black; width: 100%"
                                        type="text"
                                        id="nombreEs"
                                        name="nombreEs"
                                        value="{{old('nombreEs',$producto['nombreEs'])}}"
                                        placeholder="{!! trans('producto.nombre') !!}"/>
                                </div>
                                <div>
                                    <label for="descripcionCortaEs">{!! trans('producto.desc_corta') !!}</label>
                                    <input
                                        style="color: black; width: 100%"
                                        type="text"
                                        id="descripcionCortaEs"
                                        name="descripcionCortaEs"
                                        value="{{old('descripcionCortaEs',$producto['descripcionCortaEs'])}}"
                                        placeholder="{!! trans('producto.desc_corta') !!}"/>
                                </div>
                                <div>
                                    <label for="descripcionLargaEs">{!! trans('producto.desc_larga') !!}</label>
                                    <input
                                        style="color: black; width: 100%"
                                        type="text"
                                        id="descripcionLargaEs"
                                        name="descripcionLargaEs"
                                        value="{{old('descripcionLargaEs',$producto['descripcionLargaEs'])}}"
                                        placeholder="{!! trans('producto.desc_larga') !!}"/>
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
                                <h1>{!! trans('producto.ingles') !!}</h1>
                            </div>
                            <hr>
                            <div>
                                <label for="nombreEn">{!! trans('producto.nombre') !!}</label>
                                <input
                                    style="color: black; width: 100%"
                                    type="text"
                                    id="nombreEn"
                                    name="nombreEn"
                                    value="{{old('nombreEn',$producto['nombreEn'])}}"
                                    placeholder="{!! trans('producto.nombre') !!}"/>
                            </div>
                            <div>
                                <label for="descripcionCortaEn">{!! trans('producto.desc_corta') !!}</label>
                                <input
                                    style="color: black; width: 100%"
                                    type="text"
                                    id="descripcionCortaEn"
                                    name="descripcionCortaEn"
                                    value="{{old('descripcionCortaEn',$producto['descripcionCortaEn'])}}"
                                    placeholder="{!! trans('producto.desc_corta') !!}"/>
                            </div>
                            <div>
                                <label for="descripcionLargaEn">{!! trans('producto.desc_larga') !!}</label>
                                <input
                                    style="color: black; width: 100%"
                                    type="text"
                                    id="descripcionLargaEn"
                                    name="descripcionLargaEn"
                                    value="{{old('descripcionLargaEn',$producto['descripcionLargaEn'])}}"
                                    placeholder="{!! trans('producto.desc_larga') !!}"/>
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
                                        <label for="sku">{!! trans('producto.sku') !!}</label>
                                        <input
                                            style="color: black; width: 100%"
                                            type="text"
                                            id="sku"
                                            name="sku"
                                            value="{{old('sku',$producto['sku'])}}"
                                            placeholder="{!! trans('producto.sku') !!}"/>
                                    </div>

                                </div>
                                <div class="col-auto mb-1.5">
                                    <div>
                                        <label for="precio_dolares">{!! trans('producto.precio_d') !!}</label>
                                        <input
                                            style="color: black; width: 100%"
                                            type="number"
                                            id="precio_dolares"
                                            name="precio_dolares"
                                            value="{{old('precio_dolares',$producto['precio_dolares'])}}"
                                            placeholder="{!! trans('producto.precio_d') !!}"/>
                                    </div>

                                </div>
                                <div class="col-auto mb-1.5">
                                    <div>
                                        <label for="precio_pesos">{!! trans('producto.precio_p') !!}</label>
                                        <input
                                            style="color: black; width: 100%"
                                            type="text"
                                            id="precio_pesos"
                                            name="precio_pesos"
                                            value="{{old('precio_pesos',$producto['precio_pesos'])}}"
                                            placeholder="{!! trans('producto.precio_p') !!}"/>
                                    </div>

                                </div>
                                <div class="col-auto mb-1.5">
                                    <div>
                                        <label for="puntos">{!! trans('producto.puntos') !!}</label>
                                        <input
                                            style="color: black; width: 100%"
                                            type="number"
                                            id="puntos"
                                            name="puntos"
                                            value="{{old('puntos',$producto['puntos'])}}"
                                            placeholder="{!! trans('producto.Puntos') !!}"/>
                                    </div>

                                </div>

                            </div>
                            <br>
                            <br>
                            <div style="text-align: right">
                                <a href="{{route('producto.index')}}" class="btn btn-secondary">{!! trans('producto.cancelar') !!}</a>
                                <button type="submit" class="btn btn-primary">{!! trans('producto.guardar') !!}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>
</x-app-layout>


<script>
    $(document).ready(() => {
        $(document).on("keyup",'#precio_dolares', function () {
            axios.post("{{route('producto.cambio')}}", {cantidad: $("#precio_dolares").val()}).then(res => {
                $("#precio_pesos").val(res.data)
            })
        });
    });
</script>
