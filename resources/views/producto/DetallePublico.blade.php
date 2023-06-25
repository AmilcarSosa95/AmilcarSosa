<x-general>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {!! trans('producto.det_product') !!}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="relative mb-3" data-te-input-wrapper-init>
                        <div class="row-auto">
                            <div class="col-auto mb-1.5">
                                <h1>{!! trans('producto.inf_produc') !!}</h1>
                            </div>
                            <hr>
                            <div>
                                <label style="font-weight: bold;" for="nombreEs">{!! trans('producto.nombre') !!}</label>
                                <p style="font-size: small;">{{$producto['nombre']}}</p>
                            </div>
                            <div>
                                <label style="font-weight: bold;" for="descripcionCortaEs">{!! trans('producto.desc_corta') !!}</label>
                                <p style="font-size: small;">{{$producto['descripcionCorta']}}</p>
                            </div>
                            <div>
                                <label style="font-weight: bold;" for="descripcionLargaEs">{!! trans('producto.desc_larga') !!}</label>
                                <p style="font-size: small;">{{$producto['descripcionLarga']}}</p>
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
                        <div class="row-auto">
                            <div class="col-auto mb-1.5">
                                <div>
                                    <label style="font-weight: bold;" for="sku">{!! trans('producto.sku') !!}</label>
                                    <p style="font-size: small;">{{$producto['sku']}}</p>
                                </div>

                            </div>
                            <div class="col-auto mb-1.5">
                                <div>
                                    <label style="font-weight: bold;" for="precio_dolares">{!! trans('producto.precio_d') !!}</label>
                                    <p style="font-size: small;">{{$producto['precio_dolares']}}</p>
                                </div>

                            </div>
                            <div class="col-auto mb-1.5">
                                <div>
                                    <label style="font-weight: bold;" for="precio_pesos">{!! trans('producto.precio_p') !!}</label>
                                    <p style="font-size: small;">{{$producto['precio_pesos']}}</p>
                                </div>

                            </div>
                            <div class="col-auto mb-1.5">
                                <div>
                                    <label style="font-weight: bold;" for="puntos">{!! trans('producto.puntos') !!}</label>
                                    <p style="font-size: small;">{{$producto['puntos']}}</p>
                                </div>

                            </div>

                        </div>
                        <br>
                        <br>
                        <div style="text-align: right">
                            <a href="{{url()->previous() }}" class="btn btn-secondary">{!! trans('producto.regresar') !!}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</x-general>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script type="text/javascript">

    const DATA_COUNT = 6;
    const NUMBER_CFG = {count: DATA_COUNT, min:0};

    const labels = [];
    const dolares = [];
    const pesos = [];

    for (let i = 0; i <= DATA_COUNT; ++i) {
        multiplo = i * 2
        labels.push(i.toString());

        dolares.push(multiplo > 0 ? (({{$producto['precio_dolares']}}/100 )*multiplo)+{{$producto['precio_dolares']}}  : {{$producto['precio_dolares']}});

        pesos.push(multiplo > 0 ? (({{$producto['precio_pesos']}}/100 )*multiplo)+{{$producto['precio_pesos']}}  : {{$producto['precio_pesos']}});
    }

    const data = {
        labels: labels,
        datasets: [
            {
                label: "{{ trans('producto.precio_d') }}",
                backgroundColor: 'rgb(37,135,16)',
                borderColor: 'rgb(131,193,23)',
                data: dolares,
            },
            {
                label: "{{ trans('producto.precio_p') }}",
                backgroundColor: 'rgb(20,170,215)',
                borderColor: 'rgb(17,215,223)',
                data: pesos,
            }]
    };

    const config = {
        type: 'bar',
        data: data,
        options: {}
    };

    const myChart = new Chart(
        document.getElementById('myChart'),
        config
    );

</script>
