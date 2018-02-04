'use strict'
var revenue_chart = echarts.init(document.getElementById('revenueOfYear'));

var option = {
  title: {

    textStyle: {
      color: '#666'
    }
  },
  tooltip: {
    trigger: 'axis',
    axisPointer: {
      type: 'shadow'
    }
  },

  legend: {
    data: [
      '2015', '2016', '2017'
    ],
    itemGap: 20,
    textStyle: {
      color: '#666'
    },
    top:0,
    right:40
  },
  grid: {
    left: '3%',
    right: '4%',
    bottom: '3%',
    containLabel: true
  },
  xAxis: [
    {
      type: 'category',
      name: '',
      data: [
        'Jan',
        'Feb',
        'Mar',
        'Apr',
        'May',
        'Jun',
        'Jul',
        'Aug',
        'Sep'
      ],
      axisLine: {
        show: false
      },
      axisLabel: {
        textStyle: {
          color: '#ccc',
          fontWeight:'bold'
        }
      },
      axisTick: {
        show: false
      }
    }
  ],
  yAxis: [
    {
      type: 'value',
      name: '',
      
      axisLine: {
        show: false
      },
      axisLabel: {
        textStyle: {
          color: '#ccc',
          fontWeight:'bold'
        },
        formatter: '{value} K'
        
      },
      axisTick: {
        show: false
      },
      splitLine: {
       lineStyle:{
        type: 'dashed'
       }
      }
    }
  ],
  series: [
    {
      name: '2015',
      type: 'bar',
      data: [
        60,
        60,
        45,
        50,
        60,
        35,
        60,
        60,
        30

      ],
      barWidth: 15,
      itemStyle: {
          normal: {
              barBorderRadius: 10,
              color: new echarts.graphic.LinearGradient(
                  0, 0, 0, 1,
                  [
                      {offset: 0, color: '#03cbfc'},
                      {offset: 1, color: '#01eccb'}
                  ]
              )
          }
      },
    }, {
      name: '2016',
      type: 'bar',
      data: [
        75,
        45,
        60,
        75,
        80,
        50,
        78,
        75,
        45
      ],
      barWidth: 15,
      itemStyle: {
          normal: {
              barBorderRadius: 10,
              color: new echarts.graphic.LinearGradient(
                  0, 0, 0, 1,
                  [
                      {offset: 0, color: '#f798d0'},
                      {offset: 1, color: '#fec49f'}
                  ]
              )
          }
      },
    }, {
      name: '2017',
      type: 'bar',
      data: [
        80,
        50,
        65,
        40,
        40,
        65,
        80,
        30,30
      ],
      barWidth: 15,
      itemStyle: {
          normal: {
              barBorderRadius: 10,
              color: new echarts.graphic.LinearGradient(
                  0, 0, 0, 1,
                  [
                      {offset: 0, color: '#8355fd'},
                      {offset: 1, color: '#c0adef'}
                  ]
              )
          }
      },
    }
  ]
};

revenue_chart.setOption(option);