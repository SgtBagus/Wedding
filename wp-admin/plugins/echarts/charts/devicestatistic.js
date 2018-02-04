
'use strict'
var devicestatistic_chart = echarts.init(document.getElementById('deviceStatistic'));

var option = {
    baseOption:{
          title: {
            text: '',
            subtext: '',
    
          },
          tooltip: {
            trigger: 'axis',
          },
          legend: {
    
            x: 'center',
            data: ['Android', 'Windows'],
            textStyle: {
              color: '#ccc',
    
            },
            itemGap: 20,
          },
          toolbox: {
            show: false,
            feature: {
              restore: {show: true, title: 'Refresh'},
              saveAsImage: {show: true, title: 'Save As Image'},
            },
          },
          color: ['#63dafc', '#c3c4fd'],
    
          calculable: true,
          polar: [
            {
              indicator: [
                            {text: 'New Sessions', max: 100},
                            {text: 'Bounce Rate', max: 100},
                            {text: 'New User', max: 100},
                            {text: 'Sessions', max: 100},
                            {text: 'Goal Value', max: 100},
                            {text: 'Avg Session', max: 100},
              ],
              radius: 100,
            },
          ],
          series: [
            {
              name: 'Players fully live data',
              type: 'radar',
              itemStyle: {
                symbolSize: 0,
                normal: {
                  areaStyle: {
                    opacity: 0.6,
                    type: 'default',
                    borderWidth: 0,
    
                  },
                },
              },
              data: [
                {
                  value: [80, 70, 60, 50, 60, 70],
                  name: 'Windows',
                },
                {
                  value: [40, 70, 100, 80, 70, 35],
                  name: 'Android',
                },
              ],
            },
          ]},
          media: [ // each rule of media query is defined here
            {
              query: {maxWidth: 320},
                option: {       // write options accordingly
                  polar: [
                    {
                      indicator: [
                                    {text: 'New Sessions', max: 100},
                                    {text: 'Bounce Rate', max: 100},
                                    {text: 'New User', max: 100},
                                    {text: 'Sessions', max: 100},
                                    {text: 'Goal Value', max: 100},
                                    {text: 'Avg Session', max: 100},
                      ],
                      radius: 35,
                    },
                  ],
                    
                   
                }
            },
        
        ]
        };

          devicestatistic_chart.setOption(option);