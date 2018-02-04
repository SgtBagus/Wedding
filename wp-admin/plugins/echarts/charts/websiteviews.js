
'use strict'
var websiteviews_chart = echarts.init(document.getElementById('websiteviews'));

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
            '03:00',
            '03:30',
            '04:00',
            '04:30',
            '05:00',
            '05:30',
            '06:00',
            '06:30',
            '07:00',
            '07:30',
            '08:00'
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
                0,
                2000,
                1500,
                2500,
                2000,
                3000,
                2500,
                3500,
                3000,
                4000,
                3500,
                4500,
                4000,
                5000,
                4500,
                5500,
                6000
            ],
            areaStyle: {
                normal: {
                    color: '#FFEB3B',
                    opacity: '0.1'
                }
            },
            itemStyle: {
                normal: {
                    color: '#FFEB3B'
                }
            },
            lineStyle: {
                normal: {
                    width: 1
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
                6000,
                5500,
                4500,
                5000,
                4000,
                4500,
                3500,
                4000,
                3000,
                3500,
                2500,
                3000,
                2000,
                2500,
                1500,
                2000,
                0
            ],
            areaStyle: {
                normal: {
                    color: '#FFEB3B',
                    opacity: '0.1'
                }
            },
            itemStyle: {
                normal: {
                    color: '#FFEB3B'
                }
            },
            lineStyle: {
                normal: {
                    width: 1
                }
            }
        }
    ]
};

websiteviews_chart.setOption(option);