$(document).foundation();

/* App Module */

var CubbyHoleApp = angular.module('cubbyholeApp', [
    'ngRoute',
    'phonecatControllers'
]);

CubbyHoleApp.config(['$routeProvider',
    function($routeProvider) {
        $routeProvider.
            when('/', {
                templateUrl: 'partials/phone-list.html',
                controller: 'PhoneListCtrl'
            }).
            when('/phones/:phoneId', {
                templateUrl: 'partials/phone-detail.html',
                controller: 'PhoneDetailCtrl'
            }).
            otherwise({
                redirectTo: '/phones'
            });
    }]);
