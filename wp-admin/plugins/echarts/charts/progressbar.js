


'use strict'
var progress1_chart = echarts.init(document.getElementById('progress1'));
var progress2_chart = echarts.init(document.getElementById('progress2'));
var progress3_chart = echarts.init(document.getElementById('progress3'));
var progress4_chart = echarts.init(document.getElementById('progress4'));


var option1 = {
    color: ["#21a5de", '#fb4058'],
    title: {
        text: '16%',
        x: 'center',
        y: 'center',
        textStyle: {
            fontWeight: 'normal',
            color: "#fff",
            fontSize: 16
        }
    },
    series: [{
        name: '',
        type: 'pie',
        clockWise: true,
        hoverAnimation: false,
        radius: [30, 30],
        startAngle: 60,
        itemStyle: {
            normal: {
                label: {
                    show: false,
                },
                labelLine: {
                    show: false
                },
                barBorderRadius: 10
            }
        },
        data: [{
            value: 16,
            itemStyle: {
                normal: {
                    borderWidth: 5,
                    borderColor: {
                        type: 'linear',
                        x: 0,
                        y: 0,
                        x2: 0,
                        y2: 1,
                        colorStops: [{
                            offset: 0,
                            color: '#fff'
                        }, {
                            offset: 1,
                            color: '#ccc'
                        }],
                        globalCoord: false
                    }
                }
            }
        }, {
            value:84,
            name: '',
            itemStyle: {
                normal: {
                    borderWidth: 5,
                    borderColor: {
                        type: 'linear',
                        x: 0,
                        y: 0,
                        x2: 0,
                        y2: 1,
                        colorStops: [{
                            offset: 0,
                            color: 'rgba(0,0,0,0.5)'
                        }, {
                            offset: 1,
                            color: 'rgba(0,0,0,0.2)'
                        }],
                        globalCoord: false
                    }
                }
            }
        }]
    }]
};
var option2 = {
    color: ["#21a5de", '#fb4058'],
    title: {
        text: '62%',
        x: 'center',
        y: 'center',
        textStyle: {
            fontWeight: 'normal',
            color: "#fff",
            fontSize: 16
        }
    },
    series: [{
        name: '',
        type: 'pie',
        clockWise: true,
        hoverAnimation: false,
        radius: [30, 30],
        startAngle: 60,
        itemStyle: {
            normal: {
                label: {
                    show: false,
                },
                labelLine: {
                    show: false
                },
                barBorderRadius: 10
            }
        },
        data: [{
            value: 64,
            itemStyle: {
                normal: {
                    borderWidth: 5,
                    borderColor: {
                        type: 'linear',
                        x: 0,
                        y: 0,
                        x2: 0,
                        y2: 1,
                        colorStops: [{
                            offset: 0,
                            color: '#fff'
                        }, {
                            offset: 1,
                            color: '#ccc'
                        }],
                        globalCoord: false
                    }
                }
            }
        }, {
            value:36,
            name: '',
            itemStyle: {
                normal: {
                    borderWidth: 5,
                    borderColor: {
                        type: 'linear',
                        x: 0,
                        y: 0,
                        x2: 0,
                        y2: 1,
                        colorStops: [{
                            offset: 0,
                            color: 'rgba(0,0,0,0.5)'
                        }, {
                            offset: 1,
                            color: 'rgba(0,0,0,0.2)'
                        }],
                        globalCoord: false
                    }
                }
            }
        }]
    }]
};
var option3 = {
    color: ["#21a5de", '#fb4058'],
    title: {
        text: '28%',
        x: 'center',
        y: 'center',
        textStyle: {
            fontWeight: 'normal',
            color: "#fff",
            fontSize: 16
        }
    },
    series: [{
        name: '',
        type: 'pie',
        clockWise: true,
        hoverAnimation: false,
        radius: [30, 30],
        startAngle: 60,
        itemStyle: {
            normal: {
                label: {
                    show: false,
                },
                labelLine: {
                    show: false
                },
                barBorderRadius: 10
            }
        },
        data: [{
            value: 28,
            itemStyle: {
                normal: {
                    borderWidth: 5,
                    borderColor: {
                        type: 'linear',
                        x: 0,
                        y: 0,
                        x2: 0,
                        y2: 1,
                        colorStops: [{
                            offset: 0,
                            color: '#fff'
                        }, {
                            offset: 1,
                            color: '#ccc'
                        }],
                        globalCoord: false
                    }
                }
            }
        }, {
            value:72,
            name: '',
            itemStyle: {
                normal: {
                    borderWidth: 5,
                    borderColor: {
                        type: 'linear',
                        x: 0,
                        y: 0,
                        x2: 0,
                        y2: 1,
                        colorStops: [{
                            offset: 0,
                            color: 'rgba(0,0,0,0.5)'
                        }, {
                            offset: 1,
                            color: 'rgba(0,0,0,0.2)'
                        }],
                        globalCoord: false
                    }
                }
            }
        }]
    }]
};
var option4 = {
    color: ["#21a5de", '#fb4058'],
    title: {
        text: '55%',
        x: 'center',
        y: 'center',
        textStyle: {
            fontWeight: 'normal',
            color: "#fff",
            fontSize: 16
        }
    },
    series: [{
        name: '',
        type: 'pie',
        clockWise: true,
        hoverAnimation: false,
        radius: [30, 30],
        startAngle: 60,
        itemStyle: {
            normal: {
                label: {
                    show: false,
                },
                labelLine: {
                    show: false
                },
                barBorderRadius: 10
            }
        },
        data: [{
            value: 55,
            itemStyle: {
                normal: {
                    borderWidth: 5,
                    borderColor: {
                        type: 'linear',
                        x: 0,
                        y: 0,
                        x2: 0,
                        y2: 1,
                        colorStops: [{
                            offset: 0,
                            color: '#fff'
                        }, {
                            offset: 1,
                            color: '#ccc'
                        }],
                        globalCoord: false
                    }
                }
            }
        }, {
            value:45,
            name: '',
            itemStyle: {
                normal: {
                    borderWidth: 5,
                    borderColor: {
                        type: 'linear',
                        x: 0,
                        y: 0,
                        x2: 0,
                        y2: 1,
                        colorStops: [{
                            offset: 0,
                            color: 'rgba(0,0,0,0.5)'
                        }, {
                            offset: 1,
                            color: 'rgba(0,0,0,0.2)'
                        }],
                        globalCoord: false
                    }
                }
            }
        }]
    }]
};
progress1_chart.setOption(option1);
progress2_chart.setOption(option2);
progress3_chart.setOption(option3);
progress4_chart.setOption(option4);



 

 