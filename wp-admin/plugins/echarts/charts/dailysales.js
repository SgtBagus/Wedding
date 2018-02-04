


'use strict'
var dailysales_chart = echarts.init(document.getElementById('dailysales'));


var option = {
    color: ['#FFEB3B'],
    tooltip: {
        trigger: 'axis',
        axisPointer: { // 坐标轴指示器，坐标轴触发有效
            type: 'shadow' // 默认为直线，可选为：'line' | 'shadow'
        }
    },
    grid: {
        show: false,
        left: '2%',
        right: '0',
        bottom: '15%',
        containLabel: false
    },
    xAxis: [
        {
            type: 'category',
            data: [
                'Jan',
                'Feb',
                'Mar',
                'Apr',
                'May',
                'Jun',
                'Jul',
                'Aug',
                'Sep',
                'Oct',
                'Nov',
                'Dec'
            ],
            axisTick: {
                show:false,
            },
            axisLine:{
                show:false
            },
            axisLabel:{
                show:true,
                textStyle:{
                    color:'#fff',
                    fontSize:12
                }
            }
            
        }
    ],
    yAxis: [
        {
            show: false,
            type: 'value'
        }
    ],
    series: [
        {
            name: 'Sales',
            type: 'bar',
            barWidth: '60%',
            data: [
                3700,
                3000,
                2000,
                2780,
                2000,
                1800,
                1600,
                2900,
                3500,
                3000,
                2400,
                2780
            ]
        }
    ]
};

dailysales_chart.setOption(option);


 

 