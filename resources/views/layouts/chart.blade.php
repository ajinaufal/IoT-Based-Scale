<script src="https://code.highcharts.com/highcharts.src.js"></script>
<script>
    Highcharts.chart('chartweight', {
        chart: {
            type: 'line'
        },
        title: {
            text: 'Weight Chart'
        },
        xAxis: {
            categories: {!!json_encode($date) !!}
        },
        yAxis: {
            title: {
                text: 'Weight (KG)'
            }
        },
        plotOptions: {
            line: {
                dataLabels: {
                    enabled: true
                },
                enableMouseTracking: false
            }
        },
        series: [{
            name: 'USER',
            data: {!!json_encode($weight) !!}
        }]
    });

</script>
<script>
    Highcharts.chart('chartheight', {
        chart: {
            type: 'line'
        },
        title: {
            text: 'Height Chart'
        },
        xAxis: {
            categories: {!!json_encode($date) !!}
        },
        yAxis: {
            title: {
                text: 'Height (CM)'
            }
        },
        plotOptions: {
            line: {
                dataLabels: {
                    enabled: true
                },
                enableMouseTracking: false
            }
        },
        series: [{
            name: 'USER',
            data: {!!json_encode($height) !!}
        }]
    });

</script>
