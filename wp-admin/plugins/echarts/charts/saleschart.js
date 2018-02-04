'use strict'
var salesChart_chart = echarts.init(document.getElementById('salesChart'));
$.get('plugins/echarts/charts/map/json/world.json', function (geoJson) {

  salesChart_chart.hideLoading();

  echarts.registerMap('world', geoJson);
  salesChart_chart.setOption(option = {
    
    tooltip: {
      trigger: 'item',
      formatter: function (params) {
        var value = (params.value + '').split('.');
        value = value[0].replace(/(\d{1,3})(?=(?:\d{3})+(?!\d))/g, '$1,') + '.' + value[1];
        return params.seriesName + '<br/>' + params.name + ' : ' + value;
      }
    },
   
    grid: {
      right: 0,
      top: 110,
      bottom: 40,
      width: '50%'
  },
    xAxis: [
      {
        type: 'category',
        boundaryGap: false,
        data: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
      },
    ],
    yAxis: [
      {
        type: 'value',
      },
    ],
    legend: {
      data: ['Mercedes', 'Audi', 'Bmw'],
      right:'50'
    },
    color:['#1e88e5','#00897b','#e57373'],
    geo: {
      map: 'world',
      left: '10',
      right: '35%',
      center: [117.98561551896913, 31.205000490896193],
      zoom: 2,
      label: {
          emphasis: {
              show: false
          }
      },
      regions: [{
        name: 'China',
        itemStyle: {
            normal: {
                areaColor: '#00897b',
                color: '#00897b'
            }
        }
    }],
      roam: true,
      itemStyle: {
          normal: {
              areaColor: '#1e88e5',
              borderColor: '#ddd'
          },
          emphasis: {
              areaColor: '#00897b'
          }
      }
  },
    series: [
     
      {
        name: 'Mercedes',
        type: 'line',
        stack: 'Total',
        areaStyle: {normal: {}},
        data: [120, 132, 101, 134, 90, 230, 210],
        
      },
      {
        name: 'Audi',
        type: 'line',
        stack: 'Total',
        areaStyle: {normal: {}},
        data: [220, 182, 191, 234, 290, 330, 310],
      },
      {
        name: 'Bmw',
        type: 'line',
        stack: 'Total',
        areaStyle: {normal: {}},
        data: [150, 232, 201, 154, 190, 330, 410],
      },
    ]
  });

});
