var CubbyHoleControllers = angular.module('cubbyholeControllers', []);

// File Explorer Controller
CubbyHoleControllers.controller('FileExplorerCtrl', function ($scope) {
    $scope.files = [
        {   'name': 'My picture 1.png',
            'owner': 'Baptiste Gouby',
            'size': '150 Kb'            },
        {   'name': 'My picture 2.png',
            'owner': 'Brian',
            'size': '90 Kb'            },
        {   'name': 'My picture 3.png',
            'owner': 'Brian',
            'size': '637 Kb'            },
        {   'name': 'My picture 4.png',
            'owner': 'Brian',
            'size': '453 Kb'            },
        {   'name': 'My file.pdf',
            'owner': 'Peter Griffin',
            'size': '8 Mb'              },
        {   'name': 'Vacations.avi',
            'owner': 'Peter Griffin',
            'size': '874 Mb'            }
    ];
});

// Monitor Controller
CubbyHoleControllers.controller('MonitorCtrl', function ($scope) {

    // Chart module
    $scope.plan = {
        'name'              : 'Basic Plan',
        'price'             : '$99.99',
        'expiresAt'         : '08/27/14',
        'usedSpace'         : '30',
        'availableSpace'    : '70',
        'totalSpace'        : '100'
    };
    var chartUsedSpaceColor         = "#F7464A",
        chartAvailableSpaceColor    = "#4D5360";
    $scope.chartData = [
        {   value: parseInt($scope.plan.usedSpace),
            color: chartUsedSpaceColor      },
        {   value: parseInt($scope.plan.availableSpace),
            color: chartAvailableSpaceColor }
    ];
    $scope.chartOptions = {
        //Boolean - Whether we should show a stroke on each segment
        segmentShowStroke : true,
        //String - The colour of each segment stroke
        segmentStrokeColor : "#fff",
        //Number - The width of each segment stroke
        segmentStrokeWidth : 5,
        //The percentage of the chart that we cut out of the middle.
        percentageInnerCutout : 40,
        //Boolean - Whether we should animate the chart
        animation : true,
        //Number - Amount of animation steps
        animationSteps : 60,
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
    $scope.chart = new Chart(ctx).Doughnut( $scope.chartData, $scope.chartOptions);

    // Notification module
    $scope.notifications = [
        {   'title': 'First notification',
            'content': 'You\'ve got a notification' },
        {   'title': 'Second notification',
            'content': 'You\'ve got the second notification' },
        {   'title': 'Third notification',
            'content': 'You\'ve got the third notification' }
    ];
});