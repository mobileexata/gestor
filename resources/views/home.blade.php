@extends('layouts.app')

@if(count($empresas->all()))
    @section('content')
        <div class="container-fluid">
            <div class="btn-toolbar" role="toolbar" aria-label="Filtros">
                <div class="btn-group mr-2" role="group" aria-label="First group">
                    <button class="btn btn-primary btn-sm dropdown-toggle" type="button" id="dropdownPeriodo"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Período
                    </button>
         <div class="dropdown-menu" aria-labelledby="dropdownPeriodo">
                        @foreach ($totais['datasFiltros'] as $d)
                            <a class="dropdown-item @if($d == $totais['data']) active @endif" href="
                            @switch(Request::route()->getName())
                                @case('home')
                                {{ route('home.data', ['data' => $d]) }}
                                @break
                                @case('home.filtro')
                                {{ route('home.filtro.data', ['slug' => $totais['slug'], 'data' => $d]) }}
                                @break
                                @case('home.data')
                                {{ route('home.data', ['data' => $d]) }}
                                @break
                                @case('home.filtro.data')
                                {{ route('home.filtro.data', ['slug' => $totais['slug'], 'data' => $d]) }}
                                @break
                            @endswitch">{{ ucfirst(str_replace('-', ' ', $d)) }}</a>
                        @endforeach
                    </div>
                </div>
                <div class="btn-group mr-2 d-lg-inline d-md-inline d-none" role="group" aria-label="Filtros desktop">
                    <a class="btn btn-secondary @if(Request::route()->getName() == 'home') active @endif"
                       href="{{ route('home') }}">Todas empresas</a>
                    @foreach ($empresas->all() as $e)
                        <a class="btn btn-secondary @if($totais['slug'] == $e->slug) active @endif"
                           href="@switch(Request::route()->getName())
                                    @case('home')
                                        {{ route('home.filtro', ['slug' => $e['slug']]) }}
                                    @break
                                    @case('home.filtro')
                                        {{ route('home.filtro', ['slug' => $e['slug']]) }}
                                    @break
                                    @case('home.data')
                                        {{ route('home.filtro.data', ['slug' => $e['slug'], 'data' => $totais['data']]) }}
                                    @break
                                    @case('home.filtro.data')
                                        {{ route('home.filtro.data', ['slug' => $e['slug'], 'data' => $totais['data']]) }}
                                    @break
                                @endswitch">
                            {{ $e->fantasia }}
                        </a>
                    @endforeach
                </div>
                <div class="btn-group d-md-none d-lg-none d-sm-inline" role="group" aria-label="Filtros mobile">
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Selecionar empresa
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <a class="dropdown-item  @if(Request::route()->getName() == 'home') active @endif"
                               href="{{ route('home') }}">Todas empresas</a>
                            @foreach ($empresas->all() as $e)
                                <a class="dropdown-item @if($totais['slug'] == $e->slug) active @endif"
                                   href="{{ route('home.filtro', ['slug' => $e->slug]) }}">
                                    {{ $e->fantasia }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-1">
                <h5>Empresa:
                    @if(in_array(Request::route()->getName(), ['home', 'home.data']))
                        Todas
                    @else
                        @foreach ($empresas->all() as $e)
                            @if($totais['slug'] == $e->slug)
                                {{ $e->fantasia }}
                            @endif
                        @endforeach
                    @endif
                    - {{ ucfirst(str_replace('-', ' ', $totais['data'])) }}
                </h5>
            </div>
            <div class="row">
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div
                                        class="text-xs font-weight-bold text-primary text-uppercase mb-1">{{ __('Vendas') }}</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totais['qtd_vendas'] }}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-cart-plus fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div
                                        class="text-xs font-weight-bold text-success text-uppercase mb-1">{{ __('Total Vendido') }}</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        R$ {{ number_format($totais['vl_total_vendas'], 2, ',', '.') }}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-danger shadow">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div
                                        class="text-xs font-weight-bold text-danger text-uppercase mb-1">{{ __('Valor Total LY (') . $totais['dt_li'] . ')' }}</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        R$ {{ number_format($totais['ly'], 2, ',', '.') }}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-info shadow">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div
                                        class="text-xs font-weight-bold text-info text-uppercase mb-1">{{ __('Ticket Médio') }}</div>
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <div
                                                class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ number_format($totais['ticket_medio'], 0, ',', '.') }}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-columns fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-warning shadow">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div
                                        class="text-xs font-weight-bold text-warning text-uppercase mb-1">{{ __('Peças Vendidas') }}</div>
                                    <div
                                        class="h5 mb-0 font-weight-bold text-gray-800">{{ $totais['pecas_vendidas'] }}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-tshirt fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-dark shadow">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">{{ __('PA') }}</div>
                                    <div
                                        class="h5 mb-0 font-weight-bold text-gray-800">{{ number_format($totais['pecas_atendimento'], 2, ',', '.') }}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-swatchbook fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-secondary shadow">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div
                                        class="text-xs font-weight-bold text-secondary text-uppercase mb-1">{{ __('Mark up') }}</div>
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <div
                                                class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ number_format($totais['markup'], 2, ',', '.') }}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-marker fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">% identificados
                                    </div>
                                    <div
                                        class="h5 mb-0 font-weight-bold text-gray-800">{{ $totais['clientes_identificados'] }}
                                        <b class="font-weight-bold text-gray-600"
                                           style="font-size: 14px">({{ number_format($totais['p_clientes_identificados'], 2, ',', '.') }}
                                            %)</b></div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-primary" role="progressbar"
                                             style="width: {{ $totais['p_clientes_identificados'] }}%"
                                             aria-valuenow="{{ $totais['p_clientes_identificados'] }}" aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-user fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Melhores Lojas (Total Vendido R$)</h6>
                        </div>
                        <div class="card-body">
                            <div class="chart-pie pt-4 pb-2">
                                <canvas id="melhores-empresas"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-5 col-md-6 col-sm-12">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Melhores Lojas (Quantidade de Vendas)</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="chart-pie pt-4">
                                <canvas id="melhores-empresas-qtd"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
    @section('javascript')
        <script>
            Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
            Chart.defaults.global.defaultFontColor = '#858796';

            $.ajax({
                url: '@switch(Request::route()->getName())
                    @case('home'){{ route('movimento.dadosgraficobarras') }}@break
                    @case('home.filtro'){{ route('movimento.dadosgraficobarras') }}@break
                    @default{{ route('movimento.dadosgraficobarras.data', ['data' => $totais['data']]) }}@break
                    @endswitch',
                type: 'GET',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (data) {

                    function number_format(number, decimals, dec_point, thousands_sep) {
                        // *     example: number_format(1234.56, 2, ',', ' ');
                        // *     return: '1 234,56'
                        number = (number + '').replace(',', '').replace(' ', '');
                        var n = !isFinite(+number) ? 0 : +number,
                            prec = !isFinite(+decimals) ? 2 : Math.abs(decimals),
                            sep = (typeof thousands_sep === 'undefined') ? '.' : thousands_sep,
                            dec = (typeof dec_point === 'undefined') ? ',' : dec_point,
                            s = '',
                            toFixedFix = function (n, prec) {
                                var k = Math.pow(10, prec);
                                return '' + Math.round(n * k) / k;
                            };
                        // Fix for IE parseFloat(0.55).toFixed(0) = 0;
                        s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
                        if (s[0].length > 3) {
                            s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
                        }
                        if ((s[1] || '').length < prec) {
                            s[1] = s[1] || '';
                            s[1] += new Array(prec - s[1].length + 1).join('0');
                        }
                        return s.join(dec);
                    }

                    var ctx = document.getElementById("melhores-empresas");
                    var myBarChart = new Chart(ctx, {
                        type: 'bar',
                        data: data,
                        options: {
                            maintainAspectRatio: false,
                            layout: {
                                padding: {
                                    left: 10,
                                    right: 25,
                                    top: 25,
                                    bottom: 0
                                }
                            },
                            scales: {
                                xAxes: [{
                                    gridLines: {
                                        display: false,
                                        drawBorder: false
                                    },
                                    ticks: {
                                        maxTicksLimit: 6
                                    },
                                    maxBarThickness: 25,
                                }],
                                yAxes: [{
                                    ticks: {
                                        min: 0,
                                        maxTicksLimit: 5,
                                        padding: 10,
                                        // Include a dollar sign in the ticks
                                        callback: function (value, index, values) {
                                            return '$' + number_format(value);
                                        }
                                    },
                                    gridLines: {
                                        color: "rgb(234, 236, 244)",
                                        zeroLineColor: "rgb(234, 236, 244)",
                                        drawBorder: false,
                                        borderDash: [2],
                                        zeroLineBorderDash: [2]
                                    }
                                }],
                            },
                            legend: {
                                display: false
                            },
                            tooltips: {
                                titleMarginBottom: 10,
                                titleFontColor: '#6e707e',
                                titleFontSize: 14,
                                backgroundColor: "rgb(255,255,255)",
                                bodyFontColor: "#858796",
                                borderColor: '#dddfeb',
                                borderWidth: 1,
                                xPadding: 15,
                                yPadding: 15,
                                displayColors: false,
                                caretPadding: 10,
                                callbacks: {
                                    label: function (tooltipItem, chart) {
                                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                                        return datasetLabel + ': $' + number_format(tooltipItem.yLabel);
                                    }
                                }
                            },
                        }
                    });
                }
            });
            $.ajax({
                url: '@switch(Request::route()->getName())
                    @case('home'){{ route('movimento.dadosgraficopizza') }}@break
                    @case('home.filtro'){{ route('movimento.dadosgraficopizza') }}@break
                    @default{{ route('movimento.dadosgraficopizza.data', ['data' => $totais['data']]) }}@break
                    @endswitch',
                type: 'GET',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (data) {
                    var ctx = document.getElementById("melhores-empresas-qtd");
                    var myPieChart = new Chart(ctx, {
                        type: 'doughnut',
                        data: data,
                        options: {
                            maintainAspectRatio: false,
                            tooltips: {
                                backgroundColor: "rgb(255,255,255)",
                                bodyFontColor: "#858796",
                                borderColor: '#dddfeb',
                                borderWidth: 2,
                                xPadding: 15,
                                yPadding: 15,
                                displayColors: false,
                                caretPadding: 10,
                            },
                            legend: {
                                display: true,
                                position: 'bottom'
                            },
                            cutoutPercentage: 80,
                        },
                    });
                }
            });
        </script>
    @endsection
@else
    @section('content')
        <div class="container-fluid">
            <div class="text-center">
                <div class="mb-5"><i class="fas fa-sad-tear fa-7x"></i></div>
                <h1 class=" text-gray-800 mb-5">Sem empresas para exibir</h1>
                <p class="text-gray-500 mb-0">Você pode cadastrar empresas clicando no link abaixo</p>
                <a href="{{ route('admin.cadastrar.empresa') }}">&check; Cadastrar</a>
            </div>
        </div>
    @endsection
@endif
