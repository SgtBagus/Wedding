
'use strict'
var newvisitor_chart = echarts.init(document.getElementById('newVisitor'));

var option = {
  baseOption:{
        title: {
          text: '73.6%',
          x: 'center',
          y: 'center',
          subtext: 'New Visitor',
          textStyle: {
            fontWeight: 'normal',
            color: '#98A0C4',
            fontSize: 60,
          },
          subtextStyle: {
            fontWeight: 'bold',
            color: '#98A0C4',
            fontSize: 20,
          },
        },
        color: [
          '#9c84f4', '#f6f6f6', '#313443',
        ],
        tooltip: {
          show: false,
          formatter: '{a} <br/>{b} : {c} ({d}%)',
        },
        legend: {
          show: false,
          itemGap: 12,
          data: ['01', '02'],
        },
        toolbox: {
          show: false,
          feature: {
            mark: {
              show: true,
            },
            dataView: {
              show: true,
              readOnly: false,
            },
            restore: {
              show: true,
            },
            saveAsImage: {
              show: true,
            },
          },
        },
        series: [
          {
            name: 'Line 1',
            type: 'pie',
            clockWise: true,
            radius: [
              125, 130,
            ],
            itemStyle: {
              normal: {
                label: {
                  show: false,
                },
                labelLine: {
                  show: false,
                },
                shadowBlur: 40,
                shadowColor: 'rgba(40, 40, 40, 0.5)',
              },
            },
            hoverAnimation: false,
  
            data: [
              {
                value: 75,
                name: '01',
              }, {
                value: 25,
                name: 'invisible',
                itemStyle: {
                  normal: {
                    color: 'rgba(0,0,0,0)',
                    label: {
                      show: false,
                    },
                    labelLine: {
                      show: false,
                    },
                  },
                  emphasis: {
                    color: 'rgba(0,0,0,0)',
                  },
                },
              },
  
            ],
          }, {
            name: 'Line 2',
            type: 'pie',
            animation: false,
            clockWise: true,
            radius: [
              115, 122,
            ],
            itemStyle: {
              normal: {
                label: {
                  show: false,
                },
                labelLine: {
                  show: false,
                },
                shadowBlur: 40,
                shadowColor: 'rgba(40, 40, 40, 0.5)',
              },
            },
            hoverAnimation: false,
            tooltip: {
              show: false,
            },
            data: [
              {
                value: 100,
                name: '02',
                itemStyle: {
                  emphasis: {
                    color: '#313443',
                  },
                },
              }, {
                value: 0,
                name: 'invisible',
                itemStyle: {
                  normal: {
                    color: 'rgba(0,0,0,0)',
                    label: {
                      show: false,
                    },
                    labelLine: {
                      show: false,
                    },
                  },
                  emphasis: {
                    color: 'rgba(0,0,0,0)',
                  },
                },
              },
  
            ],
          },
        ],
  
      },
      media: [ // each rule of media query is defined here
        {
            query: {
                maxWidth: 500
            },
            option: {   
              title: {
                text: '73.6%',
                x: 'center',
                y: 'center',
                subtext: 'New Visitor',
                textStyle: {
                  fontWeight: 'normal',
                  color: '#98A0C4',
                  fontSize: 50,
                },
                subtextStyle: {
                  fontWeight: 'bold',
                  color: '#98A0C4',
                  fontSize: 16,
                },
              },    // write options accordingly
              series: [
                {
                  name: 'Line 1',
                  type: 'pie',
                  clockWise: true,
                  radius: [
                    105, 110,
                  ],
                  itemStyle: {
                    normal: {
                      label: {
                        show: false,
                      },
                      labelLine: {
                        show: false,
                      },
                      shadowBlur: 40,
                      shadowColor: 'rgba(40, 40, 40, 0.5)',
                    },
                  },
                  hoverAnimation: false,
        
                  data: [
                    {
                      value: 75,
                      name: '01',
                    }, {
                      value: 25,
                      name: 'invisible',
                      itemStyle: {
                        normal: {
                          color: 'rgba(0,0,0,0)',
                          label: {
                            show: false,
                          },
                          labelLine: {
                            show: false,
                          },
                        },
                        emphasis: {
                          color: 'rgba(0,0,0,0)',
                        },
                      },
                    },
        
                  ],
                }, {
                  name: 'Line 2',
                  type: 'pie',
                  animation: false,
                  clockWise: true,
                  radius: [
                    95, 102,
                  ],
                  itemStyle: {
                    normal: {
                      label: {
                        show: false,
                      },
                      labelLine: {
                        show: false,
                      },
                      shadowBlur: 40,
                      shadowColor: 'rgba(40, 40, 40, 0.5)',
                    },
                  },
                  hoverAnimation: false,
                  tooltip: {
                    show: false,
                  },
                  data: [
                    {
                      value: 100,
                      name: '02',
                      itemStyle: {
                        emphasis: {
                          color: '#313443',
                        },
                      },
                    }, {
                      value: 0,
                      name: 'invisible',
                      itemStyle: {
                        normal: {
                          color: 'rgba(0,0,0,0)',
                          label: {
                            show: false,
                          },
                          labelLine: {
                            show: false,
                          },
                        },
                        emphasis: {
                          color: 'rgba(0,0,0,0)',
                        },
                      },
                    },
        
                  ],
                },
              ],
                
               
            }
        },
    
    ]
    };
      newvisitor_chart.setOption(option);