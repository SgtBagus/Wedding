
'use strict'
var montlySales_chart = echarts.init(document.getElementById('montlySales'));

var option = {
  backgroundColor: '#fff',
  title: {
    text: '',
    subtext: '',
    textStyle: {
      color: '#fff',
    },
    left: 'center',
  },
  tooltip: {
    trigger: 'axis',
  },
  toolbox: {
    show: false,
    feature: {
      saveAsImage: {
        title: 'Save',
      },
    },
  },
  xAxis: {
    type: 'category',
    boundaryGap: true,
    data: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
    axisLine: {
      lineStyle: {
        color: '#1e88e5',
      },
    },
    axisLabel: {
      textStyle: {
        color: '#1e88e5',
      },
    },
    splitLine: {
      show: true,
      lineStyle: {
        color: '#1e88e5',
      },
    },
  },
  yAxis: {
    type: 'value',
    min: 400,
    max: 900,
    axisLine: {
      lineStyle: {
        color: '#1e88e5',
      },
    },
    axisLabel: {
      textStyle: {
        color: '#1e88e5',
      },
      formatter: '{value}',
    },
    splitLine: {
      show: true,
      lineStyle: {
        color: '#1e88e5',
      },
    },
  },
  grid: {
    show: false,
    containLabel: true,
    left: '20',
    right: '20',
    top: '20',
    bottom: '10',

  },
  series: [
    {
      name: 'Burned Calories',
      type: 'line',
      smooth: true,
      showSymbol: false,
      symbol: 'circle',
      symbolSize: 7,
      lineStyle: {
        normal: {
          color: new echarts.graphic.LinearGradient(0, 1, 1, 1, [{
            offset: 0.3, color: '#1e88e5',
          }, {
            offset: 1, color: '#00897b',
          }], false),
          width: 5,
          borderWidth: 0,
          shadowBlur: 30,
          shadowOffsetX: 0,
          shadowOffsetY: 10,
          shadowColor: 'rgba(0, 0, 0, 0.5)',
        },

      },

      data: [650, 550, 800, 500, 750, 850, 750, 450, 650, 480, 520, 450],
    },
  ],
};
montlySales_chart.setOption(option);