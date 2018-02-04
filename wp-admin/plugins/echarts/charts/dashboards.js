var allCharts = $('.dash-charts');
$(document).ready(function () {
    'use strict'
    setTimeout(function () {
        for (var i = 0; i < allCharts.length; i++) {
            var $item = $(allCharts[i]);
            echarts
                .getInstanceById($item.attr('_echarts_instance_'))
                .resize();
        }
    }, 100)
});
window.onresize = function () {
    'use strict'
    setTimeout(function () {
        for (var i = 0; i < allCharts.length; i++) {
            var $item = $(allCharts[i]);
            echarts
                .getInstanceById($item.attr('_echarts_instance_'))
                .resize();
        }
    }, 100)
};