@extends('layout.main')

@section('content')

    {{-- HTML --}}

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/data.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>

    <figure class="highcharts-figure">
        <div id="container"></div>


        <table id="datatable">
            <thead>
                <tr>
                    <th></th>
                    <th>Toyota</th>
                    <th>Volkswagen Group</th>
                    <th>General Motors(GM)</th>
                    <th>Ford</th>
                    <th>Honda</th>
                    <th>Nissan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>2020</th>
                    <td>9500000</td>
                    <td>9300000</td>
                    <td>7300000</td>
                    <td>8300000</td>
                    <td>9000000</td>
                </tr>
            </tbody>
        </table>
    </figure>

    {{-- CSS --}}
    <style>
        #container {
            height: 400px;
        }

        .highcharts-figure,
        .highcharts-data-table table {
            min-width: 310px;
            max-width: 800px;
            margin: 1em auto;
        }

        #datatable {
            font-family: Verdana, sans-serif;
            border-collapse: collapse;
            border: 1px solid #000000;
            margin: 10px auto;
            text-align: center;
            width: 100%;
            max-width: 500px;
        }

        #datatable caption {
            padding: 1em 0;
            font-size: 1.2em;
            color: #555;
        }

        #datatable th {
            font-weight: 600;
            padding: 0.5em;
        }

        #datatable td,
        #datatable th,
        #datatable caption {
            padding: 0.5em;
        }

        #datatable thead tr,
        #datatable tr:nth-child(even) {
            background: #000000;
        }

        #datatable tr:hover {
            background: #000000;
        }
    </style>

    {{-- JS --}}
    <script>
        Highcharts.chart('container', {
            data: {
                table: 'datatable'
            },
            chart: {
                type: 'column'
            },
            title: {
                text: 'Total Car per Manufacturer'
            },
            subtitle: {
                text: 'Source: <a href="#" target="_blank">Nightrunners</a>'
            },
            xAxis: {
                type: 'category'
            },
            yAxis: {
                allowDecimals: false,
                title: {
                    text: 'Amount'
                }
            }
        });
    </script>

    </div>


    {{-- LineChart --}}
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/series-label.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>

    <figure class="highcharts-figure">
        <div id="container-lc"></div>


    </figure>


    {{-- CSS --}}
    <style>
        .highcharts-figure,
        .highcharts-data-table table {
            min-width: 360px;
            max-width: 800px;
            margin: 1em auto;
        }

        .highcharts-data-table table {
            font-family: Verdana, sans-serif;
            border-collapse: collapse;
            border: 1px solid #ebebeb;
            margin: 10px auto;
            text-align: center;
            width: 100%;
            max-width: 500px;
        }

        .highcharts-data-table caption {
            padding: 1em 0;
            font-size: 1.2em;
            color: #555;
        }

        .highcharts-data-table th {
            font-weight: 600;
            padding: 0.5em;
        }

        .highcharts-data-table td,
        .highcharts-data-table th,
        .highcharts-data-table caption {
            padding: 0.5em;
        }

        .highcharts-data-table thead tr,
        .highcharts-data-table tr:nth-child(even) {
            background: #f8f8f8;
        }

        .highcharts-data-table tr:hover {
            background: #f1f7ff;
        }
    </style>

    {{-- JS --}}
    <script>
        Highcharts.chart('container-lc', {

            title: {
                text: 'Cars Used Until Now',
                align: 'left'
            },

            subtitle: {
                text: 'data by Nightrunners.gg',
                align: 'left'
            },

            yAxis: {
                title: {
                    text: 'Number of Most used type'
                }
            },

            xAxis: {
                accessibility: {
                    rangeDescription: 'Range: 2020 to 2023'
                }
            },

            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },

            plotOptions: {
                series: {
                    label: {
                        connectorAllowed: false
                    },
                    pointStart: 2020
                }
            },

            series: [{
                name: 'MPV',
                data: [43934, 48656, 65165,68184]
            }, {
                name: 'SUV',
                data: [24916, 37941, 59742,63444]
            }, {
                name: 'Sedan',
                data: [11744, 30000, 42005,46923]
            }, {
                name: 'Supercar',
                data: [1834, 3292, 4812,5873]
            }, {
                name: 'Hypercar',
                data: [1246, 2845, 3045,3581]
            }],

            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 500
                    },
                    chartOptions: {
                        legend: {
                            layout: 'horizontal',
                            align: 'center',
                            verticalAlign: 'bottom'
                        }
                    }
                }]
            }

        });
    </script>
@endsection
