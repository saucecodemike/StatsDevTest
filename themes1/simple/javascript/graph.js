document.addEventListener('DOMContentLoaded', function () {

    var options = {

        title: {
            text: '$GraphTitle'
        },

        subtitle: {
            text: '$MemberID'
        },
        yAxis: {
            title: {
                text: 'Number of Employees'
            }
        },
        xAxis: {
            accessibility: {
                rangeDescription: 'Range: 2010 to 2017'
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
                pointStart: 2010
            }
        },

        series: [ { },],

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

    }

    options.series.push({
        name: 'Installation',
        data: $Installation
    });

    options.series.push({
        name: 'Manufacturing',
        data: $Manufacturing
    });

    options.series.push({
        name: 'SalesAndDistribution',
        data: $SalesAndDistribution
    });

    options.series.push({
        name: 'ProjectDevelopment',
        data: $ProjectDevelopment
    });

    options.series.push({
        name: 'Other',
        data: $Other
    });


    var myChart = Highcharts.chart('container', options );
});
