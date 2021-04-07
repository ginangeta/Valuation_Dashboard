//=======================================================================================================================================================
/*revenue streams version two*/
//=======================================================================================================================================================
$(function () {

    // Create the chart
    $('#loanBreakdown').highcharts({
        chart: {
            type: 'column',
            backgroundColor: 'transparent'
        },
        lang: {
            thousandsSep: ','
        },
        title: {
            text: 'Objections cost collected by the valuation period',
            style: {
                color: '#12263f'
            }
        },
        yAxis: {
            gridLineColor: '#95aac9',
            gridLineDashStyle: 'ShortDot',
            gridLineWidth: 0.3,
            min: 0,
            title: {
                text: 'Objections Cost In KES'
            },
            stackLabels: {
                enabled: false,
                style: {
                    fontWeight: 'bold',
                    color: '#12263f'
                }
            }
        },
        xAxis: {
            type: 'category'
        },



        legend: {
            enabled: true
        },

        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'bottom',
            borderWidth: 0,
            backgroundColor: 'transparent',
            borderColor: '#12263f',
            borderWidth: 1,
            itemStyle: {
                color: '#12263f',
                font: '600 10px "Muli", sans-serif'
            },
            itemHoverStyle: {
                color: '#333',
                font: '600 10px "Muli", sans-serif'
            },
        },

        plotOptions: {
            series: {
                borderWidth: 0,
                dataLabels: {
                    enabled: false,
                    style: {
                        color: 'white',
                        textShadow: '0 0 2px black, 0 0 2px black'
                    }
                },
                stacking: 'normal'
            }
        },

        plotOptions: {
            column: {
                stacking: 'normal',
                grouping: false,
                dataLabels: {
                    enabled: false
                },
                states: {
                    hover: {
                        enabled: false
                    }
                },
                //            point: {
                //                events: {
                //                    mouseOver: updateStackColor(0.2),
                //                    mouseOut: updateStackColor(0)
                //                }
                //            }

            },
            series: {
                //connectNulls: true

                pointWidth: 15,
                borderWidth: 0,
                borderColor: 'black',


            },
        },

        tooltip: {
            headerFormat: '<span style="font-size:16px; font-weight:800;">{series.name}</span><br>',
            //		useHTML: true,
            pointFormat: '<span  style="font-size:16px; font-weight:800; color:{point.color}">{point.name}</span>: <b style="color:{point.color}">KES {point.y}</b><br/>',
            formatter: function () {

                var point = this.point,
                    s = '<span style="font-size:14px; font-weight:600;  color:' + point.color + ';">' + this.series.name + '</span><br/><span style="color:' + point.color + '"><span  style="font-size:16px; font-weight:800; color:' + point.color + ';">' + point.name + '</span> :<b> KES ' + Highcharts.numberFormat(point.y, 0, '.', ',') + ' ' + '</span>';
                if (point.drilldown) {
                    s = '<span style="font-size:14px; font-weight:600;  color:' + point.color + ';">' + this.series.name + '</span><br/><p><span  style="font-size:16px; font-weight:800; color:' + point.color + ';">' + point.name + '</span> :<b> KES ' + Highcharts.numberFormat(point.y, 0, '.', ',') + ' (' + Highcharts.numberFormat(this.percentage, 0, '.', ',') + '%)</p><br/>';
                    s += '<p>Click to view <b>' + point.name + '</b> Collections </p>';
                }
                return s;
            },
            crosshairs: true


        },

        series: [{
            //national bank collections by the months
            name: 'Commercial',
            data: [{

                name: '1st',
                y: 2000000,
                drilldown: 'Commercial-1st',
                //color: '#e7c500' //yellow
            }, {
                name: '2nd',
                y: 2000000,
                drilldown: 'Commercial-2nd',
                //color: '#e7c500' //yellow
            }, {
                name: '3rd',
                y: 4000000,
                drilldown: 'Commercial-mar',
                //color: '#e7c500' //yellow
            }, {

                name: '4th',
                y: 500000,
                drilldown: 'Commercial-apr',
                //color: '#e7c500' //yellow
            }, {
                name: '5th',
                y: 2000000,
                drilldown: 'Commercial-may',
                //color: '#e7c500' //yellow
            }, {
                name: '6th',
                y: 4000000,
                drilldown: 'Commercial-jun',
                //color: '#e7c500' //yellow
            }, {

                name: '7th',
                y: 500000,
                drilldown: 'Commercial-jul',
                //color: '#e7c500' //yellow
            }, {
                name: '8th',
                y: 1200000,
                drilldown: 'Commercial-aug',
                //color: '#e7c500' //yellow
            }, {
                name: '9th',
                y: 4000000,
                drilldown: 'Commercial-sep',
                //color: '#e7c500' //yellow
            }, {

                name: '10th',
                y: 150000,
                drilldown: 'Commercial-oct',
                //color: '#e7c500' //yellow
            }, {
                name: '11th',
                y: 2000000,
                drilldown: 'Commercial-nov',
                //color: '#e7c500' //yellow
            }, {
                name: '12th',
                y: 4000000,
                drilldown: 'Commercial-dec',
                //color: '#e7c500' //yellow
            }, {
                name: '13th',
                y: 160000,
                drilldown: 'sbp-1st',
                //color: '#0aae8f' // blue
            }, {
                name: '14th',
                y: 1500000,
                drilldown: 'sbp-2nd',
                //color: '#0aae8f' // blue
            }, {
                name: '15th',
                y: 30000,
                drilldown: 'sbp-mar',
                //color: '#0aae8f' // blue
            }, {
                name: '16th',
                y: 100000,
                drilldown: 'sbp-apr',
                //color: '#0aae8f' // blue
            }, {
                name: '17th',
                y: 500000,
                drilldown: 'sbp-may',
                //color: '#0aae8f' // blue
            }, {
                name: '18th',
                y: 2000000,
                drilldown: 'sbp-jun',
                //color: '#0aae8f' // blue
            }, {
                name: '19th',
                y: 1100000,
                drilldown: 'sbp-jul',
                //color: '#0aae8f' // blue
            }, {
                name: '20th',
                y: 500000,
                drilldown: 'sbp-aug',
                //color: '#0aae8f' // blue
            }, {
                name: '21st',
                y: 2000000,
                drilldown: 'sbp-sep',
                //color: '#0aae8f' // blue
            }, {
                name: '22nd',
                y: 110000,
                drilldown: 'sbp-oct',
                //color: '#0aae8f' // blue
            }, {
                name: '23rd',
                y: 500000,
                drilldown: 'sbp-nov',
                //color: '#0aae8f' // blue
            }, {
                name: '24th',
                y: 2000000,
                drilldown: 'sbp-dec',
                //color: '#0aae8f' // blue
            }]
            //end of Commercial fee collections
        }, {
            //land rate collections
            name: 'Residential',
            data: [{
                name: '1st',
                y: 2000000,
                drilldown: 'lr-1st',
                //color: '#0aae8f' // blue
            }, {
                name: '2nd',
                y: 500000,
                drilldown: 'lr-2nd',
                //color: '#0aae8f' // blue
            }, {
                name: '3rd',
                y: 2000000,
                drilldown: 'lr-mar',
                //color: '#0aae8f' // blue
            }, {
                name: '4th',
                y: 125000,
                drilldown: 'lr-apr',
                //color: '#0aae8f' // blue
            }, {
                name: '5th',
                y: 500000,
                drilldown: 'lr-may',
                //color: '#0aae8f' // blue
            }, {
                name: '6th',
                y: 210000,
                drilldown: 'lr-jun',
                //color: '#0aae8f' // blue
            }, {
                name: '7th',
                y: 115000,
                drilldown: 'lr-jul',
                //color: '#0aae8f' // blue
            }, {
                name: '8th',
                y: 500000,
                drilldown: 'lr-aug',
                //color: '#0aae8f' // blue
            }, {
                name: '9th',
                y: 2000000,
                drilldown: 'lr-sep',
                //color: '#0aae8f' // blue
            }, {
                name: '10th',
                y: 150000,
                drilldown: 'lr-oct',
                //color: '#0aae8f' // blue
            }, {
                name: '11th',
                y: 500000,
                drilldown: 'lr-nov',
                //color: '#0aae8f' // blue
            }, {
                name: '12th',
                y: 2000000,
                drilldown: 'lr-dec',
                //color: '#0aae8f' // blue
            },{
                name: '13th',
                y: 162000,
                drilldown: 'sbp-1st',
                //color: '#0aae8f' // blue
            }, {
                name: '14th',
                y: 150000,
                drilldown: 'sbp-2nd',
                //color: '#0aae8f' // blue
            }, {
                name: '15th',
                y: 30000,
                drilldown: 'sbp-mar',
                //color: '#0aae8f' // blue
            }, {
                name: '16th',
                y: 100000,
                drilldown: 'sbp-apr',
                //color: '#0aae8f' // blue
            }, {
                name: '17th',
                y: 500000,
                drilldown: 'sbp-may',
                //color: '#0aae8f' // blue
            }, {
                name: '18th',
                y: 2000000,
                drilldown: 'sbp-jun',
                //color: '#0aae8f' // blue
            }, {
                name: '19th',
                y: 110000,
                drilldown: 'sbp-jul',
                //color: '#0aae8f' // blue
            }, {
                name: '20th',
                y: 500000,
                drilldown: 'sbp-aug',
                //color: '#0aae8f' // blue
            }, {
                name: '21st',
                y: 2000000,
                drilldown: 'sbp-sep',
                //color: '#0aae8f' // blue
            }, {
                name: '22nd',
                y: 100000,
                drilldown: 'sbp-oct',
                //color: '#0aae8f' // blue
            }, {
                name: '23rd',
                y: 500000,
                drilldown: 'sbp-nov',
                //color: '#0aae8f' // blue
            }, {
                name: '24th',
                y: 2000000,
                drilldown: 'sbp-dec',
                //color: '#0aae8f' // blue
            }]
            //end of landrate collections
        }, {
            //SBP collections
            name: 'Agricultural',
            data: [{
                name: '1st',
                y: 2000000,
                drilldown: 'sbp-1st',
                //color: '#0aae8f' // blue
            }, {
                name: '2nd',
                y: 150000,
                drilldown: 'sbp-2nd',
                //color: '#0aae8f' // blue
            }, {
                name: '3rd',
                y: 30000,
                drilldown: 'sbp-mar',
                //color: '#0aae8f' // blue
            }, {
                name: '4th',
                y: 100000,
                drilldown: 'sbp-apr',
                //color: '#0aae8f' // blue
            }, {
                name: '5th',
                y: 500000,
                drilldown: 'sbp-may',
                //color: '#0aae8f' // blue
            }, {
                name: '6th',
                y: 2000000,
                drilldown: 'sbp-jun',
                //color: '#0aae8f' // blue
            }, {
                name: '7th',
                y: 110000,
                drilldown: 'sbp-jul',
                //color: '#0aae8f' // blue
            }, {
                name: '8th',
                y: 500000,
                drilldown: 'sbp-aug',
                //color: '#0aae8f' // blue
            }, {
                name: '9th',
                y: 2000000,
                drilldown: 'sbp-sep',
                //color: '#0aae8f' // blue
            }, {
                name: '10th',
                y: 100000,
                drilldown: 'sbp-oct',
                //color: '#0aae8f' // blue
            }, {
                name: '11th',
                y: 500000,
                drilldown: 'sbp-nov',
                //color: '#0aae8f' // blue
            }, {
                name: '12th',
                y: 2000000,
                drilldown: 'sbp-dec',
                //color: '#0aae8f' // blue
            }, {
                name: '13th',
                y: 160000,
                drilldown: 'sbp-1st',
                //color: '#0aae8f' // blue
            }, {
                name: '14th',
                y: 150000,
                drilldown: 'sbp-2nd',
                //color: '#0aae8f' // blue
            }, {
                name: '15th',
                y: 30000,
                drilldown: 'sbp-mar',
                //color: '#0aae8f' // blue
            }, {
                name: '16th',
                y: 100000,
                drilldown: 'sbp-apr',
                //color: '#0aae8f' // blue
            }, {
                name: '17th',
                y: 500000,
                drilldown: 'sbp-may',
                //color: '#0aae8f' // blue
            }, {
                name: '18th',
                y: 2000000,
                drilldown: 'sbp-jun',
                //color: '#0aae8f' // blue
            }, {
                name: '19th',
                y: 110000,
                drilldown: 'sbp-jul',
                //color: '#0aae8f' // blue
            }, {
                name: '20th',
                y: 500000,
                drilldown: 'sbp-aug',
                //color: '#0aae8f' // blue
            }, {
                name: '21st',
                y: 2000000,
                drilldown: 'sbp-sep',
                //color: '#0aae8f' // blue
            }, {
                name: '22nd',
                y: 10000,
                drilldown: 'sbp-oct',
                //color: '#0aae8f' // blue
            }, {
                name: '23rd',
                y: 500000,
                drilldown: 'sbp-nov',
                //color: '#0aae8f' // blue
            }, {
                name: '24th',
                y: 2000000,
                drilldown: 'sbp-dec',
                //color: '#0aae8f' // blue
            }]
            //end of SBP collections
        }, ],
        drilldown: {
            activeDataLabelStyle: {
                color: 'white',
                textShadow: '0 0 2px black, 0 0 2px black'
            },
            series: [
                //Commercial collections by months and dates
                {
                    id: 'Commercial-1st',
                    name: 'Commercial collections in 1stuary 2020',
                    data: [
                        ['1st 1st', 4],
                        ['2nd 1st', 2],
                        ['3rd 1st', 1],
                        ['4th 1st', 2],
                        ['5th 1st', 1]
                    ]
                }, {
                    id: 'Commercial-2nd',
                    name: 'Commercial collections in 2ndruary 2020',
                    data: [
                        ['1st 2nd', 4],
                        ['2nd 2nd', 2]
                    ]
                }, {
                    id: 'Commercial-3rd',
                    name: 'Commercial collections in 3rdch 2020',
                    data: [
                        ['1st 3rd', 4],
                        ['2nd 3rd', 2],
                        ['3rd 3rd', 2]
                    ]
                }, {
                    id: 'Commercial-4th',
                    name: 'Commercial collections in 4thil 2020',
                    data: [
                        ['1st 4th', 4],
                        ['2nd 4th', 2],
                        ['3rd 4th', 1],
                        ['4th 4th', 2],
                        ['5th 4th', 1]
                    ]
                }, {
                    id: 'Commercial-5th',
                    name: 'Commercial collections in 5th 2020',
                    data: [
                        ['1st 5th', 4],
                        ['2nd 5th', 2]
                    ]
                }, {
                    id: 'Commercial-6th',
                    name: 'Commercial collections in 6the 2020',
                    data: [
                        ['1st 6th', 4],
                        ['2nd 6th', 2],
                        ['3rd 6th', 2]
                    ]
                }, {
                    id: 'Commercial-7th',
                    name: 'Commercial collections in 7thy 2020',
                    data: [
                        ['1st 7th', 4],
                        ['2nd 7th', 2],
                        ['3rd 7th', 1],
                        ['4th 7th', 2],
                        ['5th 7th', 1]
                    ]
                }, {
                    id: 'Commercial-8th',
                    name: 'Commercial collections in Auust 2020',
                    data: [
                        ['1st aug', 4],
                        ['2nd aug', 2]
                    ]
                }, {
                    id: 'Commercial-9th',
                    name: 'Commercial collections in 9thtember 2020',
                    data: [
                        ['1st sep', 4],
                        ['2nd sep', 2],
                        ['3rd sep', 2]
                    ]
                }, {
                    id: 'Commercial-9th',
                    name: 'Commercial collections in 10thober 2020',
                    data: [
                        ['1st 10th', 4],
                        ['2nd 10th', 2],
                        ['3rd 10th', 1],
                        ['4th 10th', 2],
                        ['5th 10th', 1]
                    ]
                }, {
                    id: 'Commercial-10th',
                    name: 'Commercial collections in 11thember 2020',
                    data: [
                        ['1st 11th', 4],
                        ['2nd 11th', 2]
                    ]
                }, {
                    id: 'Commercial-10th',
                    name: 'Commercial collections in 12thember  2020',
                    data: [
                        ['1st 12th', 4],
                        ['2nd 12th', 2],
                        ['3rd 12th', 2]
                    ]
                },

                //end of Commercial collections by months and dates  
            ]
        }
    })
});
//========================================================================================================================================================
/*revenue streams version two*/
//=======================================================================================================================================================


//		hover effect
function updateStackColor(alpha) {
    return function () {
        const x = this.x
        const color = Highcharts.color
        const colors = Highcharts.getOptions().colors

        this.series.chart.series.forEach((series, i) => {
            series.data.forEach(point => {
                const basePointColor = color(colors[i])

                point.update({
                    color: alpha === 0 ?
                        basePointColor.get() // set original color
                        :
                        point.x === x ?
                        basePointColor.brighten(-alpha).get() // brighten original color
                        :
                        basePointColor.brighten(alpha).get() // dim orignal color
                }, false)
            })
        })

        this.series.chart.redraw(false)
    }
}


//		hover effect