<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="text-right row-auto">
                        <div class="col-auto">
                            <a
                                href="{{route('producto.crear')}}"
                                type="button"
                                class="btn btn-success"
                                >
                                Agregar
                            </a>
                        </div>
                    </div>

                    <table style="width: 100%" class="text-left w-10/12 text-sm font-light">
                        <thead class="border-b font-medium dark:border-neutral-500">
                        <tr>
                            <th scope="col" class="px-6 py-4">SKU</th>
                            <th scope="col" class="px-6 py-4">Precio en dolares</th>
                            <th scope="col" class="px-6 py-4">Precio en pesos</th>
                            <th scope="col" class="px-6 py-4">Puntos</th>
                            <th scope="col" class="px-6 py-4">Activo</th>
                            <th scope="col" class="px-6 py-4"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr @foreach($productos as  $producto) class="border-b dark:border-neutral-500">
                            <td class="whitespace-nowrap px-6 py-4 font-medium">{{$producto->sku}}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{$producto->precio_dolares}}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{$producto->precio_pesos}}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{$producto->puntos}}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{$producto->activo}}</td>
                            <td class="whitespace-nowrap px-6 py-4">
                                <a href="{{url('admin/editar').'/'.$producto->id}}" class="btn btn-sm btn-warning">Editar</a>
                                <button class="btn btn-sm btn-danger eliminar" data-id="{{$producto->id}}">Eliminar</button>
                                <a href="{{url('admin/detalle').'/'.$producto->id}}" class="btn btn-sm btn-info">Detalle</a>
                            </td>
                        </tr  @endforeach>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.7.0.min.js" ></script>
<script>

    $(document).ready(() => {
        $(document).on('click','.eliminar',function(e) {
            console.log( e.data);
            let id = $(this).data('id');
            Swal.fire({
                title: '¿Desea eliminar el registro?',
                icon: 'question',
                iconHtml: '?',
                confirmButtonText: 'Si',
                cancelButtonText: 'No',
                showCancelButton: true,
                showCloseButton: true
            }).then((result) => {
                if (result.isConfirmed) {

                    axios.patch("{{route('producto.eliminar')}}", {
                        id
                    })
                        .then(function(res) {

                            window.location = "{{route('producto.index')}}"

                        })
                        .catch(function(err) {
                            console.log(err);
                        })

                }
            })

        })
    })
</script>



