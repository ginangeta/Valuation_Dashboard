			// Create the chart
			Highcharts.setOptions({
                //	colors: ['#007fff']
                });
                Highcharts.chart('transaction-data', {
                  chart: {
                      backgroundColor: 'transparent',
                    type: 'column'
                  },
                  title: {
                text: 'Cash collections by the months',
                style: {
                    color: '#a5a8ad'
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
                        borderColor: '#007fff'
                    }
                },
                    
                  xAxis: {
                    type: 'category',
                      lineColor: '#a5a8ad',
                      lineWidth: 1,
                      labels: {
                            style: {
                                color: '#a5a8ad'
                            }
                        }
                  },
                  yAxis: {
                    title: {
                      text: 'Total Cash collections',
                        gridLineColor: '#2e3134',
                        color: '#e7c500',
                        labels: {
                            style: {
                                color: '#a5a8ad'
                            }
                        }
                    }
    
                  },
                  legend: {
                    enabled: false
                  },
    
                  tooltip: {
                    headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                    pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>KES {point.y}</b><br/>'
                  },
                  lang: {
                    thousandsSep: ','
                  },
    
                  series: [{
                    name: "Monthly Cash Collections",
                    colorByPoint: false,			
                    color: '#03A9F4', // blue
                    data: [{
                        name: "Jan",
                        y: 2000000,
                        drilldown: "january"
                      },
                      {
                        name: "Feb",
                        y: 300000,
                        drilldown: "february"
                      },
                      {
                        name: "Mar",
                        y: 2536000,
                        drilldown: "march"
                      },
                      {
                        name: "Apr",
                        y: 3258023,
                        drilldown: "april"
                      },
                      {
                        name: "May",
                        y: 2225895,
                        drilldown: "may"
                      },
                      {
                        name: "Jun",
                        y: 1956895,
                        drilldown: "june"
                      },
                      {
                        name: "jul",
                        y: 2356987,
                        drilldown: "july"
                      },
                      {
                        name: "Aug",
                        y: 2758956,
                        drilldown: "august"
                      },
                      {
                        name: "Sep",
                        y: 3569263,
                        drilldown: "september"
                      },
                      {
                        name: "Oct",
                        y: 2658956,
                        drilldown: "october"
                      },
                      {
                        name: "Nov",
                        y: 3258596,
                        drilldown: "november"
                      },
                      {
                        name: "Dec",
                        y: 3256968,
                        drilldown: "december"
                      }
                    ]
                  }],
                  drilldown: {
                    series: [{
                        name: "January",
                        id: "january",
                        data: [
                          [
                            "1",
                            23589
                          ],
                          [
                            "2",
                            2589
                          ],
                          [
                            "3",
                            256689
                          ],
                          [
                            "4",
                            25896
                          ],
                          [
                            "5",
                            56895
                          ],
                          [
                            "6",
                            58956
                          ],
                          [
                            "7",
                            58974
                          ],
                          [
                            "8",
                            554896
                          ],
                          [
                            "9",
                            2123358
                          ],
                          [
                            "10",
                            45268
                          ],
                          [
                            "11",
                            45895
                          ],
                          [
                            "12",
                            25895
                          ],
                          [
                            "13",
                            12589
                          ],
                          [
                            "14",
                            548596
                          ],
                          [
                            "15",
                            215895
                          ],
                          [
                            "16",
                            12589
                          ],
                          [
                            "17",
                            12589
                          ],
                          [
                            "18",
                            158932
                          ]
                        ]
                      },
                      {
                        name: "february",
                        id: "february",
                        data: [
                          [
                            "1",
                            23589
                          ],
                          [
                            "2",
                            2589
                          ],
                          [
                            "3",
                            256689
                          ],
                          [
                            "4",
                            25896
                          ],
                          [
                            "5",
                            56895
                          ],
                          [
                            "6",
                            58956
                          ],
                          [
                            "7",
                            58974
                          ],
                          [
                            "8",
                            554896
                          ],
                          [
                            "9",
                            2123358
                          ],
                          [
                            "10",
                            45268
                          ],
                          [
                            "11",
                            45895
                          ],
                          [
                            "12",
                            25895
                          ],
                          [
                            "13",
                            12589
                          ],
                          [
                            "14",
                            548596
                          ],
                          [
                            "15",
                            215895
                          ],
                          [
                            "16",
                            12589
                          ],
                          [
                            "17",
                            12589
                          ],
                          [
                            "18",
                            158932
                          ]
                        ]
                      },
                      {
                        name: "March",
                        id: "march",
                        data: [
                          [
                            "1",
                            23589
                          ],
                          [
                            "2",
                            2589
                          ],
                          [
                            "3",
                            256689
                          ],
                          [
                            "4",
                            25896
                          ],
                          [
                            "5",
                            56895
                          ],
                          [
                            "6",
                            58956
                          ],
                          [
                            "7",
                            58974
                          ],
                          [
                            "8",
                            554896
                          ],
                          [
                            "9",
                            2123358
                          ],
                          [
                            "10",
                            45268
                          ],
                          [
                            "11",
                            45895
                          ],
                          [
                            "12",
                            25895
                          ],
                          [
                            "13",
                            12589
                          ],
                          [
                            "14",
                            548596
                          ],
                          [
                            "15",
                            215895
                          ],
                          [
                            "16",
                            12589
                          ],
                          [
                            "17",
                            12589
                          ],
                          [
                            "18",
                            158932
                          ]
                        ]
                      },
                      {
                        name: "April",
                        id: "april",
                        data: [
                          [
                            "1",
                            23589
                          ],
                          [
                            "2",
                            2589
                          ],
                          [
                            "3",
                            256689
                          ],
                          [
                            "4",
                            25896
                          ],
                          [
                            "5",
                            56895
                          ],
                          [
                            "6",
                            58956
                          ],
                          [
                            "7",
                            58974
                          ],
                          [
                            "8",
                            554896
                          ],
                          [
                            "9",
                            2123358
                          ],
                          [
                            "10",
                            45268
                          ],
                          [
                            "11",
                            45895
                          ],
                          [
                            "12",
                            25895
                          ],
                          [
                            "13",
                            12589
                          ],
                          [
                            "14",
                            548596
                          ],
                          [
                            "15",
                            215895
                          ],
                          [
                            "16",
                            12589
                          ],
                          [
                            "17",
                            12589
                          ],
                          [
                            "18",
                            158932
                          ]
                        ]
                      },
                      {
                        name: "may",
                        id: "may",
                        data: [
                          [
                            "1",
                            23589
                          ],
                          [
                            "2",
                            2589
                          ],
                          [
                            "3",
                            256689
                          ],
                          [
                            "4",
                            25896
                          ],
                          [
                            "5",
                            56895
                          ],
                          [
                            "6",
                            58956
                          ],
                          [
                            "7",
                            58974
                          ],
                          [
                            "8",
                            554896
                          ],
                          [
                            "9",
                            21233
                          ],
                          [
                            "10",
                            45268
                          ],
                          [
                            "11",
                            458954
                          ],
                          [
                            "12",
                            25895
                          ],
                          [
                            "13",
                            12589
                          ],
                          [
                            "14",
                            548596
                          ],
                          [
                            "15",
                            215895
                          ],
                          [
                            "16",
                            12589
                          ],
                          [
                            "17",
                            12589
                          ],
                          [
                            "18",
                            158932
                          ]
                        ]
                      },
                      {
                        name: "June",
                        id: "june",
                        data: [
                          [
                            "1",
                            23589
                          ],
                          [
                            "2",
                            2589
                          ],
                          [
                            "3",
                            256689
                          ],
                          [
                            "4",
                            25896
                          ],
                          [
                            "5",
                            56895
                          ],
                          [
                            "6",
                            58956
                          ],
                          [
                            "7",
                            58974
                          ],
                          [
                            "8",
                            554896
                          ],
                          [
                            "9",
                            2123358
                          ],
                          [
                            "10",
                            45268
                          ],
                          [
                            "11",
                            45895
                          ],
                          [
                            "12",
                            25895
                          ],
                          [
                            "13",
                            12589
                          ],
                          [
                            "14",
                            548596
                          ],
                          [
                            "15",
                            215895
                          ],
                          [
                            "16",
                            12589
                          ],
                          [
                            "17",
                            12589
                          ],
                          [
                            "18",
                            158932
                          ]
                        ]
                      },
                      {
                        name: "July",
                        id: "july",
                        data: [
                          [
                            "1",
                            23589
                          ],
                          [
                            "2",
                            2589
                          ],
                          [
                            "3",
                            256689
                          ],
                          [
                            "4",
                            25896
                          ],
                          [
                            "5",
                            56895
                          ],
                          [
                            "6",
                            58956
                          ],
                          [
                            "7",
                            58974
                          ],
                          [
                            "8",
                            554896
                          ],
                          [
                            "9",
                            2123358
                          ],
                          [
                            "10",
                            45268
                          ],
                          [
                            "11",
                            45895
                          ],
                          [
                            "12",
                            25895
                          ],
                          [
                            "13",
                            12589
                          ],
                          [
                            "14",
                            548596
                          ],
                          [
                            "15",
                            215895
                          ],
                          [
                            "16",
                            12589
                          ],
                          [
                            "17",
                            12589
                          ],
                          [
                            "18",
                            158932
                          ]
                        ]
                      },
                      {
                        name: "August",
                        id: "august",
                        data: [
                          [
                            "1",
                            23589
                          ],
                          [
                            "2",
                            2589
                          ],
                          [
                            "3",
                            256689
                          ],
                          [
                            "4",
                            25896
                          ],
                          [
                            "5",
                            56895
                          ],
                          [
                            "6",
                            58956
                          ],
                          [
                            "7",
                            58974
                          ],
                          [
                            "8",
                            554896
                          ],
                          [
                            "9",
                            2123358
                          ],
                          [
                            "10",
                            45268
                          ],
                          [
                            "11",
                            45895
                          ],
                          [
                            "12",
                            25895
                          ],
                          [
                            "13",
                            12589
                          ],
                          [
                            "14",
                            548596
                          ],
                          [
                            "15",
                            215895
                          ],
                          [
                            "16",
                            12589
                          ],
                          [
                            "17",
                            12589
                          ],
                          [
                            "18",
                            158932
                          ]
                        ]
                      },
                      {
                        name: "september",
                        id: "september",
                        data: [
                          [
                            "1",
                            23589
                          ],
                          [
                            "2",
                            2589
                          ],
                          [
                            "3",
                            256689
                          ],
                          [
                            "4",
                            25896
                          ],
                          [
                            "5",
                            56895
                          ],
                          [
                            "6",
                            58956
                          ],
                          [
                            "7",
                            58974
                          ],
                          [
                            "8",
                            554896
                          ],
                          [
                            "9",
                            2123358
                          ],
                          [
                            "10",
                            45268
                          ],
                          [
                            "11",
                            45895
                          ],
                          [
                            "12",
                            25895
                          ],
                          [
                            "13",
                            12589
                          ],
                          [
                            "14",
                            548596
                          ],
                          [
                            "15",
                            215895
                          ],
                          [
                            "16",
                            12589
                          ],
                          [
                            "17",
                            12589
                          ],
                          [
                            "18",
                            158932
                          ]
                        ]
                      },
                      {
                        name: "October",
                        id: "october",
                        data: [
                          [
                            "1",
                            23589
                          ],
                          [
                            "2",
                            2589
                          ],
                          [
                            "3",
                            256689
                          ],
                          [
                            "4",
                            25896
                          ],
                          [
                            "5",
                            56895
                          ],
                          [
                            "6",
                            58956
                          ],
                          [
                            "7",
                            58974
                          ],
                          [
                            "8",
                            554896
                          ],
                          [
                            "9",
                            2123358
                          ],
                          [
                            "10",
                            45268
                          ],
                          [
                            "11",
                            45895
                          ],
                          [
                            "12",
                            25895
                          ],
                          [
                            "13",
                            12589
                          ],
                          [
                            "14",
                            548596
                          ],
                          [
                            "15",
                            215895
                          ],
                          [
                            "16",
                            12589
                          ],
                          [
                            "17",
                            12589
                          ],
                          [
                            "18",
                            158932
                          ]
                        ]
                      },
                      {
                        name: "November",
                        id: "november",
                        data: [
                          [
                            "1",
                            23589
                          ],
                          [
                            "2",
                            2589
                          ],
                          [
                            "3",
                            256689
                          ],
                          [
                            "4",
                            25896
                          ],
                          [
                            "5",
                            56895
                          ],
                          [
                            "6",
                            58956
                          ],
                          [
                            "7",
                            58974
                          ],
                          [
                            "8",
                            554896
                          ],
                          [
                            "9",
                            2123358
                          ],
                          [
                            "10",
                            45268
                          ],
                          [
                            "11",
                            45895
                          ],
                          [
                            "12",
                            25895
                          ],
                          [
                            "13",
                            12589
                          ],
                          [
                            "14",
                            548596
                          ],
                          [
                            "15",
                            215895
                          ],
                          [
                            "16",
                            12589
                          ],
                          [
                            "17",
                            12589
                          ],
                          [
                            "18",
                            158932
                          ]
                        ]
                      },
                      {
                        name: "December",
                        id: "december",
                        data: [
                          [
                            "1",
                            23589
                          ],
                          [
                            "2",
                            2589
                          ],
                          [
                            "3",
                            256689
                          ],
                          [
                            "4",
                            25896
                          ],
                          [
                            "5",
                            56895
                          ],
                          [
                            "6",
                            58956
                          ],
                          [
                            "7",
                            58974
                          ],
                          [
                            "8",
                            554896
                          ],
                          [
                            "9",
                            2123358
                          ],
                          [
                            "10",
                            45268
                          ],
                          [
                            "11",
                            45895
                          ],
                          [
                            "12",
                            25895
                          ],
                          [
                            "13",
                            12589
                          ],
                          [
                            "14",
                            548596
                          ],
                          [
                            "15",
                            215895
                          ],
                          [
                            "16",
                            12589
                          ],
                          [
                            "17",
                            12589
                          ],
                          [
                            "18",
                            158932
                          ]
                        ]
                      },
    
                    ]
                  }
                });
    
    