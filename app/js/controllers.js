var CubbyHoleControllers = angular.module('cubbyholeControllers', []);

// File Explorer Controller
CubbyHoleControllers.controller('FileExplorerCtrl', function ($scope) {
    $scope.files = [
        {   'name': 'My shared folder',
            'owner': 'Baptiste Gouby',
            'size': '150 Kb',
            'type': 'folder'            },
        {   'name': 'My picture 2.png',
            'owner': 'Brian',
            'size': '90 Kb',
            'type': 'file'            },
        {   'name': 'My picture 3.png',
            'owner': 'Brian',
            'size': '637 Kb',
            'type': 'file'            },
        {   'name': 'My picture 4.png',
            'owner': 'Brian',
            'size': '453 Kb',
            'type': 'file'            },
        {   'name': 'My file.pdf',
            'owner': 'Peter Griffin',
            'size': '8 Mb',
            'type': 'file'              },
        {   'name': 'Vacations.avi',
            'owner': 'Peter Griffin',
            'size': '874 Mb',
            'type': 'file'            }
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
    var chartData = [
        {   value: parseInt($scope.plan.usedSpace),
            color: chartUsedSpaceColor      },
        {   value: parseInt($scope.plan.availableSpace),
            color: chartAvailableSpaceColor }
    ];
    var chartOptions = {
        //Boolean - Whether we should show a stroke on each segment
        segmentShowStroke : true,
        //String - The colour of each segment stroke
        segmentStrokeColor : "#fff",
        //Number - The width of each segment stroke
        segmentStrokeWidth : 5,
        //The percentage of the chart that we cut out of the middle.
        percentageInnerCutout : 60,
        //Boolean - Whether we should animate the chart
        animation : true,
        //Number - Amount of animation steps
        animationSteps : 60,
        //String - Animation easing effect
        animationEasing : "easeOutQuart",
        //Boolean - Whether we animate the rotation of the Doughnut
        animateRotate : true,
        //Boolean - Whether we animate scaling the Doughnut from the centre
        animateScale : false,
        //Function - Will fire on animation completion.
        onAnimationComplete : null
    };
    var ctx = document.getElementById('usage-chart').getContext("2d");
    $scope.chart = new Chart(ctx).Doughnut( chartData, chartOptions);

    // Notification module
    $scope.notifications = [
        {   'title': 'My picture 2.png',
            'content': 'has been shared with you',
            'type': 'info'                              },
        {   'title': 'My_document.pdf',
            'content': 'has not been uploaded',
            'type': 'error'                                   },
        {   'title': 'Myfile.png',
            'content': 'has been successfully uploaded',
            'type': 'success'                                   }
    ];
});

// Top Bar Controller
CubbyHoleControllers.controller('TopBarCtrl', function ($scope) {
    $scope.menuItems = [
        {   'name': 'Home',
            'img': 'home',
            'nbFolders': '12',
            'nbFiles': '37',
            'url': 'dashboard.html'},
        {   'name': 'My project',
            'img': 'folder',
            'nbFolders': '3',
            'nbFiles': '89',
            'url': 'dashboard.html'       },
        {   'name': 'My folder',
            'img': 'folder',
            'nbFolders': '1',
            'nbFiles': '458',
            'url': 'dashboard.html'       },
        {   'name': 'Vacations',
            'img': 'folder',
            'nbFolders': '9',
            'nbFiles': '24',
            'url': 'dashboard.html'       }
    ];
});