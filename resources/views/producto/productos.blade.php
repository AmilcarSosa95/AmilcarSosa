<x-general>
    <div class="text-gray-900 dark:text-white" style="width: 80%">
        <form method="post" action="{{url('/productos')}}"  enctype="multipart/form-data" >
            @csrf
            <div class="flex">
            <div class="cols-2">

                    <input
                        style="color: black; width: 100%"
                        type="text"
                        id="clave"
                        name="clave"
                        value="{{old('clave')}}"
                        placeholder="{!! trans('producto.nombre') !!}"/>
            </div>
            <div class="">
                    <select
                        style="color: black; width: 100%"
                        type="number"
                        id="orden"
                        name="orden"
                        value="{{old('orden')}}"
                        placeholder="{!! trans('producto.puntos') !!}">
                        <option value="desc">Mayor a menor</option>
                        <option value="asc">Menor a Mayor</option>
                    </select>
            </div>
            <div class="">
                <button class="btn btn-block btn-info" type="submit">Buscar</button>
            </div>


        </div>
        </form>

        @foreach($productos as  $producto)
            <div class="p-6">
                <div class="flex items-center">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                         stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                        <path
                            d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                    <div class="ml-4 text-lg leading-7 font-semibold">
                        <a href="{{url('').'/'.$producto->url}}" class="underline text-gray-900 dark:text-white"> {{$producto->nombre}}</a>
                        @if(\Illuminate\Support\Facades\App::getLocale() != 'es')
                            <span>   ${{$producto->precio_dolares}}</span>
                        @endif
                        @if(\Illuminate\Support\Facades\App::getLocale() != 'en')
                            <span>   ${{$producto->precio_pesos}}</span>
                        @endif
                    </div>
                    <div class="ml-4 text-xs leading-7 font-semibold">
                        {!! trans('producto.sku') !!}: {{$producto->sku}}
                    </div>
                </div>

                <div class="ml-12">
                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                        {{$producto->descripcion_corta}}
                    </div>
                </div>
            </div>
        @endforeach
    </div>


</x-general>
