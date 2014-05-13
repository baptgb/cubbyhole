var CubbyHoleControllers = angular.module('cubbyholeControllers', ['cubbyholeFactories']);

CubbyHoleControllers.controller( 'FileExplorerCtrl',
    ['$scope', '$http', function ($scope, $http) {
        $http.get('js/files.json')
            .success(function (data) { // we retrieve a file list
                $scope.files = data;
            });
    }]
);

CubbyHoleControllers.controller( 'UserProfileCtrl',
    ['$scope', 'userFactory', '$routeParams', function ($scope, userFactory, $routeParams) {
        var user = userFactory.getUser($routeParams.userId);
        $scope.user = user;
    }]
);

// Monitor Controller
CubbyHoleControllers.controller('MonitorCtrl',
    ['$scope', '$http', '$routeParams', function ($scope, $http, $routeParams) {

        $http.get('http://localhost/cubbyhole/api/web/api/v1/users/')
        // Chart module
        $scope.plan = {
            "name"              : "Basic Plan",
            "price"             : "$99.99",
            "expiresAt"         : "08/27/14",
            "usedSpace"         : "30",
            "availableSpace"    : "70",
            "totalSpace"        : "100"
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
            {   "title": "My picture 2.png",
                "content": "has been shared with you",
                "type": "info"                              },
            {   "title": "My_document.pdf",
                "content": "has not been uploaded",
                "type": "error"                                   },
            {   "title": "Myfile.png",
                "content": "has been successfully uploaded",
                "type": "success"                                   }
        ];
    }]
);

// Top Bar Controller
CubbyHoleControllers.controller('TopBarCtrl', function ($scope) {
    $scope.menuItems = [
        {   "name": "Home",
            "img": "home",
            "nbFolders": "12",
            "nbFiles": "37",
            "url": "dashboard.html"},
        {   "name": "My project",
            "img": "folder",
            "nbFolders": "3",
            "nbFiles": "89",
            "url": "dashboard.html"       },
        {   "name": "My folder",
            "img": "folder",
            "nbFolders": "1",
            "nbFiles": "458",
            "url": "dashboard.html"       },
        {   "name": "Vacations",
            "img": "folder",
            "nbFolders": "9",
            "nbFiles": "24",
            "url": "dashboard.html"       }
    ];
});

CubbyHoleApp.controller('MonitorCtrl', function ($scope) {

    // Chart module
    $scope.chartData = [
        {   value: 30,
            color:"#F7464A" },
        {   value : 70,
            color : "#4D5360"   }
    ];
    $scope.chartOptions = {
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