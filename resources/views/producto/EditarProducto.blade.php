<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Crear producto') }}
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
                                    <h1>Español</h1>
                                </div>
                                <hr>
                                <div>
                                    <label for="nombreEs">Nombre</label>
                                    <input
                                        style="color: black; width: 100%"
                                        type="text"
                                        id="nombreEs"
                                        name="nombreEs"
                                        value="{{old('nombreEs',$producto['nombreEs'])}}"
                                        placeholder="Nombre"/>
                                </div>
                                <div>
                                    <label for="descripcionCortaEs">Descripcion corta</label>
                                    <input
                                        style="color: black; width: 100%"
                                        type="text"
                                        id="descripcionCortaEs"
                                        name="descripcionCortaEs"
                                        value="{{old('descripcionCortaEs',$producto['descripcionCortaEs'])}}"
                                        placeholder="Descripción corta"/>
                                </div>
                                <div>
                                    <label for="descripcionLargaEs">Descripcion larga</label>
                                    <input
                                        style="color: black; width: 100%"
                                        type="text"
                                        id="descripcionLargaEs"
                                        name="descripcionLargaEs"
                                        value="{{old('descripcionLargaEs',$producto['descripcionLargaEs'])}}"
                                        placeholder="Descripción larga"/>
                                </div>
                                <div>
                                    <label for="urleEs">Url</label>
                                    <input
                                        style="color: black; width: 100%"
                                        type="text"
                                        id="urleEs"
                                        name="urleEs"
                                        value="{{old('urleEs',$producto['urleEs'])}}"
                                        placeholder="Url"/>
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
                                <label for="nombreEn">Nombre</label>
                                <input
                                    style="color: black; width: 100%"
                                    type="text"
                                    id="nombreEn"
                                    name="nombreEn"
                                    value="{{old('nombreEn',$producto['nombreEn'])}}"
                                    placeholder="Nombre"/>
                            </div>
                            <div>
                                <label for="descripcionCortaEn">Descripcion corta</label>
                                <input
                                    style="color: black; width: 100%"
                                    type="text"
                                    id="descripcionCortaEn"
                                    name="descripcionCortaEn"
                                    value="{{old('descripcionCortaEn',$producto['descripcionCortaEn'])}}"
                                    placeholder="Descripción corta"/>
                            </div>
                            <div>
                                <label for="descripcionLargaEn">Descripcion larga</label>
                                <input
                                    style="color: black; width: 100%"
                                    type="text"
                                    id="descripcionLargaEn"
                                    name="descripcionLargaEn"
                                    value="{{old('descripcionLargaEn',$producto['descripcionLargaEn'])}}"
                                    placeholder="Descripción larga"/>
                            </div>
                            <div>
                                <label for="urleEn">Url</label>
                                <input
                                    style="color: black; width: 100%"
                                    type="text"
                                    id="urleEn"
                                    name="urleEn"
                                    value="{{old('urleEn',$producto['urleEn'])}}"
                                    placeholder="Url"/>
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
                                        <label for="sku">SKU</label>
                                        <input
                                            style="color: black; width: 100%"
                                            type="text"
                                            id="sku"
                                            name="sku"
                                            value="{{old('sku',$producto['sku'])}}"
                                            placeholder="sku"/>
                                    </div>

                                </div>
                                <div class="col-auto mb-1.5">
                                    <div>
                                        <label for="precio_dolares">Precio en dolares</label>
                                        <input
                                            style="color: black; width: 100%"
                                            type="number"
                                            id="precio_dolares"
                                            name="precio_dolares"
                                            value="{{old('precio_dolares',$producto['precio_dolares'])}}"
                                            placeholder="Precio en dolares"/>
                                    </div>

                                </div>
                                <div class="col-auto mb-1.5">
                                    <div>
                                        <label for="precio_pesos">Precio en pesos</label>
                                        <input
                                            style="color: black; width: 100%"
                                            type="text"
                                            id="precio_pesos"
                                            name="precio_pesos"
                                            value="{{old('precio_pesos',$producto['precio_pesos'])}}"
                                            placeholder="Precio en pesos"/>
                                    </div>

                                </div>
                                <div class="col-auto mb-1.5">
                                    <div>
                                        <label for="puntos">Puntos</label>
                                        <input
                                            style="color: black; width: 100%"
                                            type="number"
                                            id="puntos"
                                            name="puntos"
                                            value="{{old('puntos',$producto['puntos'])}}"
                                            placeholder="Puntos"/>
                                    </div>

                                </div>

                            </div>
                            <br>
                            <br>
                            <div style="text-align: right">
                                <a href="{{route('producto.index')}}" class="btn btn-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-primary">Guardar</button>
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
