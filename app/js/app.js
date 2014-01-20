
$(document).ready(function(){

    $(".close").click( function(e) {
        console.log(e);
        $(this).parent().parent().fadeOut();
    });
    var data = [
        {
            value: 30,
            color:"#F7464A"
        },
        {
            value : 50,
            color : "#E2EAE9"
        },
        {
            value : 100,
            color : "#D4CCC5"
        },
        {
            value : 40,
            color : "#949FB1"
        },
        {
            value : 120,
            color : "#4D5360"
        }

    ];
    var options = {
        //Boolean - Whether we should show a stroke on each segment
        segmentShowStroke : true,

        //String - The colour of each segment stroke
        segmentStrokeColor : "#fff",

        //Number - The width of each segment stroke
        segmentStrokeWidth : 4,

        //The percentage of the chart that we cut out of the middle.
        percentageInnerCutout : 40,

        //Boolean - Whether we should animate the chart
        animation : true,

        //Number - Amount of animation steps
        animationSteps : 100,

        //String - Animation easing effect
        animationEasing : "easeOutBounce",

        //Boolean - Whether we animate the rotation of the Doughnut
        animateRotate : true,

        //Boolean - Whether we animate scaling the Doughnut from the centre
        animateScale : false,

        //Function - Will fire on animation completion.
        onAnimationComplete : null
    };
    var ctx = document.getElementById('usage-chart').getContext("2d");
    new Chart(ctx).Doughnut(data,options);
});

/* App Module */

var CubbyHoleApp = angular.module('cubbyholeApp', [
    'ngRoute',
    'cubbyholerControllers'
]);

CubbyHoleApp.config(['$routeProvider',
    function($routeProvider) {
        $routeProvider.
            when('/', {
                templateUrl: 'partials/fileExplorer.html',
                controller: 'FileExplorerCtrl'
            }).
            when('/{username}', {
                templateUrl: 'partials/.html',
                controller: 'PhoneDetailCtrl'
            }).
            otherwise({
                redirectTo: '/'
            });
    }]);
