@extends('layouts.master')
@section('title')
Estadisticas
@endsection

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col">
            <div id="container1"></div>
        </div>

    </div>
    <br>
    <div class="row">
        <div class="col">
            <div id="container2"></div>
        </div>

    </div>
    <br>
    <div class="row">
        <div class="col">
            <div id="container3"></div>
        </div>

    </div>
</div>
 <script>







     //grafico de Tortas

Highcharts.chart('container1', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Estadisticas, Por estado de las Licencias'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %'
            }
        }
    },
    series: [{
        name: 'Estadistica',
        colorByPoint: true,
         data: <?= $data2 ?>
    }]
});
//----------------------------------------
// grafico de columnas
Highcharts.chart('container2', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Estadisticas, Licencias por sectores'
    },
    subtitle: {
        // text: 'Click the columns to view versions. Source: <a href="http://statcounter.com" target="_blank">statcounter.com</a>'
    },
    accessibility: {
        announceNewData: {
            enabled: true
        }
    },
    xAxis: {
        type: 'category'
    },
    yAxis: {
        title: {
            text: 'Cuota porcentual total'
        }

    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y:.1f}%'
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
    },

    series: [
        {
            name: "Estados",
            colorByPoint: true,
            data:<?= $data ?>
        }
    ],

});


//----------------------------------------
Highcharts.chart('container3', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Estadisticas, Por Solicitudes de Licencias'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %'
            }
        }
    },
    series: [{
        name: 'Solicitudes',
        colorByPoint: true,
         data: <?= $data3 ?>
    }]
});



/* Highcharts.chart('container4', {
    chart: {
        type: 'bar'
    },

    title: {
        text: 'Desktop screen readers'
    },

    caption: {
        text: 'Basic bar chart demo'
    },

    xAxis: {
        type: 'category'
    },

    series: [{
        name: 'Percentage usage',
        data: [{
            name: 'JAWS',
            y: 30.2,
            accessibility: {
                description: 'This is the most used desktop screen reader'
            }
        }, {
            name: 'ZoomText',
            y: 22.2
        }, {
            name: 'Window-Eyes',
            y: 20.7
        }, {
            name: 'NVDA',
            y: 14.6
        }, {
            name: 'VoiceOver',
            y: 7.6
        }, {
            name: 'System Access To Go',
            y: 1.5
        }, {
            name: 'ChromeVox',
            y: 0.3
        }, {
            name: 'Other',
            y: 2.9
        }]
    }, {
        name: 'Test values',
        data: [3, 6, 8, 10, 4, 1, 1, 0]
    }]
});
 */


 </script>
@endsection
