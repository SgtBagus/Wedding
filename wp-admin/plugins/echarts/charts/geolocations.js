'use strict'
function randomData() {
    return Math.round(Math.random() * 1000);
}
var geolocations_chart = echarts.init(document.getElementById('geoLocations'));


$.get('plugins/echarts/charts/map/json/world.json', function (geoJson) {

    
    geolocations_chart.hideLoading();
    
                echarts.registerMap('world', geoJson);
    
                geolocations_chart.setOption(option = {
                    title: {
                      text: 'Geo Locations',
                      subtext: '',
                      bottom: '20%',
                    },
                    color: ['#70d811', '#70deff', '#f99681'],
                    tooltip: {
                      trigger: 'item',
                    },
                    legend: {
                      orient: 'vertical',
                      left: 'left',
                      data: ['High Traffic', 'Medium Traffic', 'Low Traffic'],
                    },
                    visualMap: {
                      show: false,
                      min: 0,
                      max: 2500,
                      left: 'left',
                      top: 'bottom',
                      text: ['Min', 'Max'],
                      calculable: true,
                    },
                    toolbox: {
                      show: false,
                      orient: 'vertical',
                      left: 'right',
                      top: 'center',
                      feature: {
                        dataView: {readOnly: false},
                        restore: {},
                        saveAsImage: {},
                      },
                    },
                    series: [
                      {
                        name: 'High Traffic',
                        type: 'map',
                        mapType: 'world',
                        roam: false,
                        label: {
                          normal: {
                            show: false,
                          },
                          emphasis: {
                            show: true,
                          },
                        },
                        data: [
                                      {name: 'Alaska', value: randomData()},
                                      {name: 'Canada', value: randomData()},
                                      {name: 'Russia', value: randomData()},
                                      {name: 'China', value: randomData()},
                                      {name: 'United States', value: randomData()},
                                      {name: 'Australia', value: randomData()},
                                      {name: 'Greenland', value: randomData()},
                                      {name: 'Turkey', value: randomData()},
                                      {name: 'Brazil', value: randomData()},
                                      {name: 'France', value: randomData()},
                                      {name: 'Germany', value: randomData()},
                                      {name: 'Argentina', value: randomData()},
                                      {name: 'India', value: randomData()},
                                      {name: 'Algeria', value: randomData()},
                                      {name: 'Iran', value: randomData()},
                                      {name: 'Angola', value: randomData()},
                                      {name: 'Egypt', value: randomData()},
                                      {name: 'Indonesia', value: randomData()},
                                      {name: 'Thailand', value: randomData()},
                                      {name: 'Mexico', value: randomData()},
                                      {name: 'Mali', value: randomData()},
                                      {name: 'Romania', value: randomData()},
                                      {name: 'Finland', value: randomData()},
                                      {name: 'Poland', value: randomData()},
                                      {name: 'Norway', value: randomData()},
                                      {name: 'Sweden', value: randomData()},
                                      {name: 'Switzerland', value: randomData()},
                                      {name: 'Iceland', value: randomData()},
                                      {name: 'Peru', value: randomData()},
                                      {name: 'United Kingdom', value: randomData()},
                                      {name: 'Spain', value: randomData()},
                                      {name: 'Pakistan', value: randomData()},
                                      {name: 'Japan', value: randomData()},
                                      {name: 'Korea', value: randomData()},
                        ],
                      },
                      {
                        name: 'Medium Traffic',
                        type: 'map',
                        mapType: 'world',
                        label: {
                          normal: {
                            show: false,
                          },
                          emphasis: {
                            show: true,
                          },
                        },
                        data: [
                                      {name: 'Alaska', value: randomData()},
                                      {name: 'Canada', value: randomData()},
                                      {name: 'Russia', value: randomData()},
                                      {name: 'China', value: randomData()},
                                      {name: 'United States', value: randomData()},
                                      {name: 'Germany', value: randomData()},
                                      {name: 'India', value: randomData()},
                                      {name: 'Iran', value: randomData()},
                                      {name: 'Angola', value: randomData()},
                                      {name: 'Mexico', value: randomData()},
                                      {name: 'Mali', value: randomData()},
                                      {name: 'Finland', value: randomData()},
                                      {name: 'Poland', value: randomData()},
                                      {name: 'Sweden', value: randomData()},
                                      {name: 'Iceland', value: randomData()},
                                      {name: 'Peru', value: randomData()},
                                      {name: 'United Kingdom', value: randomData()},
                                      {name: 'Japan', value: randomData()},
                                      {name: 'Korea', value: randomData()},
                        ],
                      },
                      {
                        name: 'Low Traffic',
                        type: 'map',
                        mapType: 'world',
                        label: {
                          normal: {
                            show: false,
                          },
                          emphasis: {
                            show: true,
                          },
                        },
                        data: [
                                      {name: 'Alaska', value: randomData()},
                                      {name: 'Canada', value: randomData()},
                                      {name: 'Russia', value: randomData()},
                                      {name: 'Sweden', value: randomData()},
                                      {name: 'Pakistan', value: randomData()},
                                      {name: 'Japan', value: randomData()},
                                      {name: 'Korea', value: randomData()},
                        ],
                      },
                    ],
                  });



            });




