'use strict'
var completedtasks_chart = echarts.init(document.getElementById('completedtasks'));

var option = {
    title: {
        show: false,
        text: 'Website Views',
        subtext: '',
        textStyle: {
            color: '#ffd285'
        }
    },
    tooltip: {
        trigger: 'axis'
    },
    toolbox: {
        show: false,
        feature: {
            saveAsImage: {}
        }
    },

    xAxis: {
        show: false,
        type: 'category',
        boundaryGap: true,
        data: [
            '00:00',
            '00:30',
            '01:00',
            '01:30',
            '02:00',
            '02:30',
            '03:00'
        ]
    },
    yAxis: {
        show: false,
        type: 'value',
        axisLabel: {
            formatter: '{value} cal'
        }
    },
    grid: {
        show: false,
        containLabel: false,
        left: 0,
        right: '0',
        top: '20',
        bottom: '20'

    },
    series: [
        {
            name: 'Single',
            type: 'line',
            smooth: true,
            showSymbol: true,
            symbol: 'circle',
            symbolSize: 7,
            data: [
                4850,
                1600,
                3200,
                6800,
                4500,
                5821,
                2200
            ],

            itemStyle: {
                normal: {
                    color: '#64ea91'
                }
            },
            lineStyle: {
                normal: {
                    width: 2
                }
            }
        }, {
            name: 'Unique',
            type: 'line',
            smooth: true,
            showSymbol: true,
            symbol: 'circle',
            symbolSize: 7,
            data: [
                1400,
                6898,
                9800,
                3908,
                4800,
                3490,
                4300
            ],

            itemStyle: {
                normal: {
                    color: '#f69899'
                }
            },
            lineStyle: {
                normal: {
                    width: 2
                }
            }
        }, {
            name: 'Single',
            type: 'line',
            smooth: true,
            showSymbol: true,
            symbol: 'circle',
            symbolSize: 7,
            data: [
                8200,
                4600,
                3241,
                5874,
                1589,
                2584,
                6000
            ],

            itemStyle: {
                normal: {
                    color: '#d897eb '
                }
            },
            lineStyle: {
                normal: {
                    width: 2
                }
            }
        }
    ]
};

completedtasks_chart.setOption(option);
