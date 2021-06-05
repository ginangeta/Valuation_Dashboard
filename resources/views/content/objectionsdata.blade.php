<script>
    var array = {!! json_encode($ChartData) !!};
    console.log(array);
    Highcharts.chart('all-objections', {
        chart: {
            backgroundColor: 'transparent',
            type: 'column'
        },
        title: {
            text: 'Objections cost collected by the valuation period',
            style: {
                color: '#12263f'
            }
        },

        accessibility: {
            announceNewData: {
                enabled: true
            }
        },

        plotOptions: {
            series: {
                borderWidth: 0,
                borderColor: '#f26b2cf2',
                animation: {
                    duration: 2000
                }
            }
        },

        xAxis: {
            crosshair: true,
            type: 'category',
            lineColor: '#12263f',
            lineWidth: 1,
            labels: {
                style: {
                    color: '#12263f'
                }
            }
        },
        yAxis: {

            gridLineColor: '#95aac9',
            gridLineDashStyle: 'ShortDot',
            gridLineWidth: 0.3,
            min: 0,

            title: {
                text: 'Objections Cost In KES',
                labels: {
                    style: {
                        color: '#12263f'
                    }
                }
            },
            stackLabels: {
                enabled: false,
                style: {
                    fontWeight: 'bold',
                    color: '#12263f'
                }
            }

        },
        legend: {
            enabled: true,
            backgroundColor: 'transparent',
            color: '#12263f',
            itemStyle: {
                //                 fontSize:'35px',
                //                 font: '35pt Trebuchet MS, Verdana, sans-serif',
                color: '#12263f'
            },
            itemHoverStyle: {
                color: 'white'
            },
            itemHiddenStyle: {
                color: '#444'
            },
            style: {
                color: '#12263f',

            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:16px; font-weight:800;">{series.name}</span><br>',
            //		useHTML: true,
            pointFormat: '<span  style="font-size:16px; font-weight:800; color:{point.color}">{point.name}</span>: <b style="color:{point.color}">KES {point.y}</b><br/>',
            formatter: function() {

                var point = this.point,
                    s = '<span style="font-size:14px; font-weight:600;color:' + point.color + '; margin-bottom: 10px;">' + this
                    .series.name +
                    '</span><br/><span style="color: white;"><span style="font-size:16px; font-weight:800; color: white;">' +
                    point
                    .name + '</span> :<b> KES ' + Highcharts.numberFormat(point.y, 0, '.', ',') + ' ' +
                    '</span>';
                if (point.drilldown) {
                    s = '<span style="font-size:14px; font-weight:600;  color:' + point.color + ';">' + this
                        .series.name +
                        '</span><br/><p><span  style="font-size:16px; font-weight:800; color:' + point
                        .color + ';">' + point.name + '</span> :<b> KES ' + Highcharts.numberFormat(point.y,
                            0, '.', ',') + ' (' + Highcharts.numberFormat(this.percentage, 0, '.', ',') +
                        '%)</p><br/>';
                    s += '<p>Click to view <b>' + point.name + '</b> Collections </p>';
                }
                return s;
            },
            crosshairs: true
        },
        lang: {
            thousandsSep: ','
        },
        series: [{
            animation: {
                duration: 5000,
                // Uses Math.easeOutBounce
                easing: 'easeOutBounce'
            },
            name: "Daily Transactions",
            colorByPoint: false,
            color: '#346f45', // green
            data: array
        }],
        drilldown: {
            series: [{
                name: 'December 2020',
                id: 'dec',
                data: [{
                        name: '1st',
                        y: 22,
                        drilldown: 'dec1'
                    },
                    {
                        name: '2nd',
                        y: 22,
                        drilldown: 'dec2'
                    },
                    {
                        name: '3rd',
                        y: 224,
                        drilldown: 'dec3'
                    },
                    {
                        name: '4th',
                        y: 202,
                        drilldown: 'dec3'
                    },
                    {
                        name: '5th',
                        y: 272,
                        drilldown: 'dec5'
                    },
                    {
                        name: '6th',
                        y: 172,
                        drilldown: 'dec6'
                    }, {
                        name: '7th',
                        y: 122,
                        drilldown: 'dec6'
                    }, {
                        name: '8th',
                        y: 172,
                        drilldown: 'dec8'
                    }, {
                        name: '9th',
                        y: 105,
                        drilldown: 'dec9'
                    }, {
                        name: '10th',
                        y: 272,
                        drilldown: 'dec10'
                    }, {
                        name: '11th',
                        y: 272,
                        drilldown: 'dec11'
                    }, {
                        name: '12th',
                        y: 572,
                        drilldown: 'dec12'
                    }, {
                        name: '13th',
                        y: 72,
                        drilldown: 'dec13'
                    }, {
                        name: '13th',
                        y: 292,
                        drilldown: 'dec13'
                    }, {
                        name: '14th',
                        y: 472,
                        drilldown: 'dec14'
                    }, {
                        name: '15th',
                        y: 272,
                        drilldown: 'dec15'
                    }, {
                        name: '16th',
                        y: 394,
                        drilldown: 'dec16'
                    }, {
                        name: '17th',
                        y: 27,
                        drilldown: 'dec17'
                    }, {
                        name: '18th',
                        y: 372,
                        drilldown: 'dec18'
                    }, {
                        name: '19th',
                        y: 524,
                        drilldown: 'dec19'
                    }, {
                        name: '20th',
                        y: 564,
                        drilldown: 'dec20'
                    }, {
                        name: '21st',
                        y: 272,
                        drilldown: 'dec21'
                    }, {
                        name: '22nd',
                        y: 22,
                        drilldown: 'dec22'
                    }, {
                        name: '23rd',
                        y: 272,
                        drilldown: 'dec23'
                    }, {
                        name: '24th',
                        y: 272,
                        drilldown: 'dec24'
                    }, {
                        name: '25th',
                        y: 172,
                        drilldown: 'dec25'
                    }, {
                        name: '26th',
                        y: 272,
                        drilldown: 'dec26'
                    }, {
                        name: '27th',
                        y: 272,
                        drilldown: 'dec27'
                    }, {
                        name: '28th',
                        y: 452,
                        drilldown: 'dec28'
                    }, {
                        name: '29th',
                        y: 458,
                        drilldown: 'dec29'
                    }, {
                        name: '30th',
                        y: 226,
                        drilldown: 'dec30'
                    }, {
                        name: '31st',
                        y: 152,
                        drilldown: 'dec31'
                    }
                ]
            }]
        }
    });

</script>
